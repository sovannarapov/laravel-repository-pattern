<?php

namespace App\Enums\Order;

enum OrderFulFilledCode: int
{
  case Unfulfilled = 0;

  case Fulfilled = 1;
}
