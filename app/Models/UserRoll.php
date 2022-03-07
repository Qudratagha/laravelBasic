<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoll extends Model
{
    use HasFactory;

    protected $table = "user_rolls";
    protected $primaryKey = 'ur_id';
    public $timestamp = 'false';
    protected $fillable = [
        'user_id',
        'roll_id',
    ];

}
