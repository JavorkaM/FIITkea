<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'description',
        'amount',
        'image',
        'featured',
        'color',
        'material',
        'category',
    ];

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
