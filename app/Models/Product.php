<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "product";
    protected $primaryKey = "productID";
    public $timestamps = false;

    protected $fillable = [
        'categoryID',
        'product',
        'createdByUserID',
        'dateCreated',
    ];

    public function user(){
        return $this->belongsTo(User::class,'createdByUserID','id');
    }
    public function category(){
        return $this->belongsTo(Category::class,'categoryID','categoryID');
    }




}
