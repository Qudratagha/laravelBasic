<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'id';
    public $timestamp = 'false';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function categories(){
        return $this->hasMany(Category::class,'createdByUserID','id');
    }
    public function products(){
        return $this->hasMany(Product::class,'createdByUserID','id');
    }

    public function rolls(){
        return $this->belongsToMany(Rolls::class,'user_rolls','user_id', 'roll_id');
    }
}
