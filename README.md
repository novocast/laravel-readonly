# Laravel Read-only Model Trait

Simple Trait

## Install

`composer require novocast/laravel-readonly`

## Using the Trait:

It's really easy. You add the trait. If you attempt to use a _non_ read-only method, it will throw an exception.

```php
<?php
use Illuminate\Database\Eloquent\Model;
use Novocast\ReadOnly\ReadOnlyTrait;

class ReadOnlyModel extends Model {
  use ReadOnlyTrait;
}

$readme = new ReadOnlyModel();

/**
 * When calling this save method, the ReadOnlyExceptoin Exception
 * is thrown
 */
$readme->save();
```

You may choose to handle the exception if you have a mix of objects that can and can't be saved in a collection.
Consider the following:

```php
<?php
use Illuminate\Database\Eloquent\Model;
use Novocast\ReadOnly\ReadOnlyTrait;
use Novocast\ReadOnly\ReadOnlyException;

class ReadOnlyModel extends Model {
    use ReadOnlyTrait;
}

class RegularModel extends Model {
    // not using the read only trait
}

$models = [];

for($count = 0; $count < 5; $count++) {

    if (mt_rand(0,100) > 50) {
        $models[] = new RegularModel();
    }

    if (mt_rand(0,100) > 40) {
        $models[] = new ReadOnlyModel();
    }
}

$collection = collect($models);

foreach($models as $model) {
    try {
        $model->save();
    } catch(ReadOnlyException $exception) {
        // This is a read only model.
    }
}
 ?>

```
