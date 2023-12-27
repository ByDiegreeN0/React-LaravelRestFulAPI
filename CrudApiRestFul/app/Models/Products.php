<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $primaryKey = 'prod_id';
    protected $fillable = ['prod_name', 'prod_description', 'prod_precio', 'prod_stock'];
}
