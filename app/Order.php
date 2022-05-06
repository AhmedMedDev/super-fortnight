<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function payments(){

        return $this->hasMany(Payment::class);
    }
    public function orderItems(){

        return $this->hasMany(OrderItem::class);
    }
}
