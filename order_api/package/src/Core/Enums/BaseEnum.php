<?php

namespace Mangopie\Core\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Exceptions\InvalidEnumMemberException;
use Illuminate\Support\Arr;
use Mangopie\Core\Contracts\EnumContract;

class BaseEnum extends Enum implements EnumContract
{
  /**
   * Construct an Enum instance.
   *
   * @param  TValue  $enumValue
   *
   * @catch \BenSampo\Enum\Exceptions\InvalidEnumMemberException
   */
  public function __construct(mixed $enumValue)
  {
    try {
      parent::__construct($enumValue);
    } catch (InvalidEnumMemberException $e) {
      $this->value = $enumValue;
      $this->key = $enumValue;
      $this->description = '';
    }
  }

  public static function toOptions($keys = [])
  {
    $selects = parent::asSelectArray();

    if ($keys) {
      $selects = Arr::only($selects, $keys);
    }

    $options = [];
    foreach ($selects as $key => $value) {
      array_push($options, [
        'value' => $key,
        'label' => $value,
      ]);
    }

    return $options;
  }
}
