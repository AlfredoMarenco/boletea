<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function calendars(){
        return $this->hasMany(Calendar::class);
    }

    public function kits(){
        return $this->hasMany(Kit::class);
    }

    public function countBetweenDates($date_start,$date_end){
        $count = Kit::whereBetween('updated_at',[$date_start,$date_end])->where('user_id',$this->id)->where('status','LIKE','scanning')->count();
        return $count;
    }

    public function countKitsTemp($date_start,$date_end){
        $count = Kit::whereBetween('updated_at',[$date_start,$date_end])->where('user_id',$this->id)->where('status','LIKE','scanning')->where('event','LIKE','TEMPORADA2324')->count();
        return $count;
    }
    public function countKitsApert($date_start,$date_end){
        $count = Kit::whereBetween('updated_at',[$date_start,$date_end])->where('user_id',$this->id)->where('status','LIKE','scanning')->where('event','LIKE','APERTURA23')->count();
        return $count;
    }
    public function countKitsGt($date_start,$date_end){
        $count = Kit::whereBetween('updated_at',[$date_start,$date_end])->where('user_id',$this->id)->where('status','LIKE','scanning')->where('event','LIKE','GUERRERO TOTAL')->count();
        return $count;
    }
}
