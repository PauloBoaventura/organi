<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature_products extends Model
{
    use HasFactory;

    protected $table = 'feature_products';

    protected $fillable = [
        'name', 'class', 'price', 'heading', 'slug'
    ];

    // search method
    public static function search($searchTerm)
    {
        $searchTerm = '%' . $searchTerm . '%';

        return self::where('name', 'like', $searchTerm)
                   ->orWhere('slug', 'like', $searchTerm);
    }
}
