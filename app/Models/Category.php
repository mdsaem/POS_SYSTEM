<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable=['title'];

   public function Products(){
   	return $this->hasMany(Product::class);
   }

   public static function arrayForSelect() 
    {
      $array = [];
      $categories = Category::all();
        foreach ($categories as $category) {
            $array[$category->id] = $category->title;
        } 

        return $array;
    }
}
