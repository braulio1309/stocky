<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'code', 'name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
