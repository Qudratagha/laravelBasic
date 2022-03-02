<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "category";
    protected $primaryKey = "categoryID";
    public $timestamps = false;


    protected $fillable = [
        'categoryName',
        'user_id',
        'dateCreated',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function products(){
        return $this->hasMany(Product::class,"categoryID","categoryID");
    }

}
