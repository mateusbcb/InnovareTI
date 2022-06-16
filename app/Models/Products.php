<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Requests;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'price',
        'promotion',
        'description',
        'images',
    ];

    public function request()
    {
        // hasOne = tem um
        // hasMany = tem muitos
        return $this->hasOne(Requests::class);
    }
}
