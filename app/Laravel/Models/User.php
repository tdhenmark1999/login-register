<?php

namespace App\Laravel\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;

use Str;


class User extends Authenticatable implements JWTSubject
{
    use Notifiable,SoftDeletes;
    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["first_name","middle_name","last_name","mobile_number","birthdate","gender","department","area","email","username","type","email_verified_at","password","status","path","directory","filename","url"];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function getNameAttribute(){
    //     return Str::title($this->firstname . ' ' . $this->lastname);
    // }

    public function transaction()
    {
        return $this->hasOne("App\Laravel\Models\TransactionHeader","user_id","id")->where("status","pending");
    }

    public function getDisplayGenderAttribute(){
        if(!$this->gender)
            return '-';

        if($this->gender == "F")
            return "Female";

        return "Male";
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }
    public function getJWTCustomClaims(){
        return [];
    }

    protected $appends = ['avatar'];

    public function getAvatarAttribute(){

        if($this->filename){
            return "{$this->directory}/resized/{$this->filename}";
        }

        if($this->fb_id){
            return "https://graph.facebook.com/{$this->fb_id}/picture?width=310&height=310#v=1.0";
        }

        return asset('placeholder/user.png');
    }
}
