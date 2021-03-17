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
}
