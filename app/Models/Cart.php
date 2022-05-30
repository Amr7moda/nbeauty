<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public $items = [];
    public $totalqty;
    public $totalprice;

    public function __construct($cart = null)
    {
        if ($cart) {
            $this->items = $cart->items;
            $this->totalqty = $cart->totalqty;
            $this->totalprice = $cart->totalprice;
        } else {
            $this->items = [];
            $this->totalqty = 0;
            $this->totalprice = 0;
        }
    }

    public function add($product)
    {
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'aftersale' => $product->aftersale,
            'image' => $product->image,
            'qty' => 0
        ];
        if (!array_key_exists($product->id, $this->items)) {
            $this->items[$product->id] = $item;
            $this->totalqty += 1;
            if ($product->aftersale == 0) {
                $this->totalprice += $product->price;
            } else {
                $this->totalprice += $product->aftersale;
            }
        } else {
            $this->totalqty += 1;
            if ($product->aftersale == 0) {
                $this->totalprice += $product->price;
            } else {
                $this->totalprice += $product->aftersale;
            }
        }

        $this->items[$product->id]['qty'] += 1;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
