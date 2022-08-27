<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $fillable =['address','postal_code','date','customer_Fname','customer_Sname','customer_address','customer_phone','customer_Email'];
}
