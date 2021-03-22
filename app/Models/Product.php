<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getProductImage()
    {
        if($this->product_image)
        {
            return '/images/' .$this->product_image;
        }
        return 'https://screenshotlayer.com/images/assets/placeholder.png';

    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'category_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\ProductBrand', 'brand_id', 'id');
    }
}
