<?php

namespace Phuclh\Vnd;

use Illuminate\Support\Facades\Config;
use Laravel\Nova\Fields\Field;

class Vnd extends Field {

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'vnd';

    /**
     * Determine enable live update the field on index view or not.
     *
     * @return Vnd
     */
    public function liveUpdate()
    {
        return $this->withMeta(['liveUpdate' => true]);
    }

    /**
     * https://github.com/wehaa/inline-field-update
     *
     * @param mixed $resource
     * @param string $attribute
     * @return mixed
     */
    protected function resolveAttribute($resource, $attribute)
    {
        $this->setResourceId(data_get($resource, 'id'));

        return parent::resolveAttribute($resource, $attribute);
    }

    /**
     * https://github.com/wehaa/inline-field-update
     *
     * @param $id
     * @return Vnd
     */
    protected function setResourceId($id)
    {
        return $this->withMeta(['id' => $id, 'nova_path' => Config::get('nova.path')]);
    }
}
