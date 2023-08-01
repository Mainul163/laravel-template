<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'sububcategories';
    protected $fillable = [
        'category_id',
        'subcategory_name',
        
      
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id'); //category_id [aita forgen key] 
    }
}