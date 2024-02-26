<?php

namespace Shaka\DynamicUpdateTrait\Traits;

use Illuminate\Support\Str;

trait DynamicUpdateTrait
{
  public function __call($method, $parameters)
  {
    if (
      $method != 'update'
      && str_starts_with($method, 'update')
      && count($parameters) === 1
    ) {
      $field = Str::snake(substr($method, 6));
      return $this->update([$field => $parameters[0]]);
    }

    return parent::__call($method, $parameters);
  }
}
