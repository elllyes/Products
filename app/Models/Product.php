<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereExists(fn($query)=>
            $query->from('categories')->whereColumn('categories.id','products.category_id'))
        );

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
