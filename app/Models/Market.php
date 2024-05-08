<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $table = "marketplace_items";

    protected $fillable = [
        'name',
        'category',
        'description',
        'location',
        'price',
        'user_id'
    ];


}
