<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomizedOrder extends Model
{
    protected $table = 'customized_orders';

    // Define the fillable attributes for mass assignment
    protected $fillable = ['UserName', 'Email', 'Password'];

}
