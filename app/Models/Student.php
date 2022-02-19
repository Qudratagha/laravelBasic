<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $table = "students";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'username',
        'phone',
        'dob',
    ];
}
