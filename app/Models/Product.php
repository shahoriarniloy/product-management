<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Define the table name if it's not "products"
    protected $table = 'products';

    // Specify fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'created_at',
        'updated_at',
    ];
}
