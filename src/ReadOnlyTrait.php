<?php

namespace Novocast\ReadOnly;

use Novocast\ReadOnly\ReadOnlyException;

trait ReadOnlyTrait
{

    /**
     * Throws Exception on create
     * @param array $attributes declared as this will extend existing
     * @throws ReadOnlyException
     */
    public static function create(array $attributes = [])
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }

    /**
     * Throws Exception on delete
     * @throws ReadOnlyException
     */
    public function delete()
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }

    /**
     * Throws Exception on destroy
     * @param mixed $ids  declared as this will extend existing
     * @throws ReadOnlyException
     */
    public static function destroy($ids)
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }

    /**
     * Throws Exception on insert
     * @throws ReadOnlyException
     */
    public function insert()
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }

    /**
     * Throws Exception on restore
     * @throws ReadOnlyException
     */
    public function restore()
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }

    /**
     * Throws Exception on save
     * @param array $options declared as this will extend existing
     * @throws ReadOnlyException
     */
    public function save(array $options = [])
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }

    /**
     * Throws Exception on touch
     * @param  string|null  $attribute
     * @throws ReadOnlyException
     */
    public function touch($attribute = null)
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }

    /**
     * Throws Exception on truncate
     * @throws ReadOnlyException
     */
    public function truncate()
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }

    /**
     * Throws Exception on update
     * @param array $attributes declared as this will extend existing
     * @param array $options declared as this will extend existing
     * @throws ReadOnlyException
     */
    public function update(array $attributes = [], array $options = [])
    {
        throw new ReadOnlyException(get_called_class(), __METHOD__);
    }
}
