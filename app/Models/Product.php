<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     protected $fillable = ['id_user', 'str_ten','type_group','type_customer','type_code', 'type_amount','status','created_at','updated_at'];
}
