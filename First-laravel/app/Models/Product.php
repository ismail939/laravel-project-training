<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $primaryKey = "product_id";
    // protected $fillable='product_name';
    protected $guarded = [];
    public $timestamps = false;

    function category(){
        return $this->belongsTo(Category::class);
    }
}
