<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Customer extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;
    public $timestamps = true;
    
    protected $table = 'customer';

    protected $fillable = [
        'CustomerID',
        'FirstName',
        'LastName',
        'Email',
        'ContactNo',
        'UserName',
        'Address',
        'Gender',
        'Password',
    ];
}



