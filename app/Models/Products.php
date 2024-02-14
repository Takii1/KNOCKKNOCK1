<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\CanBeBought;
use Laravel\Scout\Searchable;

class Products extends Model implements Buyable
{
   use CanBeBought;
    use HasFactory;
    use Searchable;
    protected $guarded=[];
     public function Images()
     {
        return $this -> hasMany(Images::class);
     }

     protected $fillable = [
      'search'
      ];

      public function toSearchableArray()
      {
            return [

               'Location' => $this->Location,
               'Category' => $this->Category

            ];
      }
      public function ratings(){
         return $this->hasMany(Rating::class);
      }
}
