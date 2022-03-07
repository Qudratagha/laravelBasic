<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolls extends Model
{
    use HasFactory;

    protected $table = "rolls";
    protected $primaryKey = "roll_id";
    public $timestamps = false;

    protected $fillable = [
        'rollName',
        'rollDesc',
        ];

    public function users(){
        return $this->belongsToMany(User::class,'user_rolls','roll_id', 'user_id');
    }
}
