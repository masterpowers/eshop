<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Amsgames\LaravelShop\Traits\ShopItemTrait;

class Product extends Model
{
    use ShopItemTrait;
    protected $itemName = 'name';
    protected $itemRouteName = 'product';
    protected $itemRouteParams = ['slug'];
}
