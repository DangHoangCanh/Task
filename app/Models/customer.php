<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
   public $timestamps = false;
   protected $fillable = [
        'name_customer' ,  'phone_customer',  'address_customer',  'mail_customer',  'city_customer'
    ];
    protected $primarykey = 'id';
    protected $table = 'customer';
}
