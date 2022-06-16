<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\User;

class Requests extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'price',
        'status',
    ];

    // belongsTo = pertence a
    // belongsToMany = pertence a muitos
    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
