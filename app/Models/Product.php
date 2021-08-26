<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarnteed = ['id', 'created_at', 'updated_at'];
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
