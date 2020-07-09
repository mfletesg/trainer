<?php

namespace LaraDex;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles(){
        return $this->belongsToMany('LaraDex\Role'); //Creamos la relacion con el rol
    }

    public function authorizeRoles($roles){ //Validamos que tenga un rol
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'This Action is unauthorized');
    }

    public function hasAnyRole($roles){
        if (is_array($roles)) { //Checamos si tiene varios roles en un array
            foreach ($roles as $i => $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        }
        else {
            if ($this->hasRole($roles)) { //Si solo tiene un rol
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){ //Funcion para validar si el usuario tiene ese rol
        if ($this->roles()->where('name', $role)->first()) { //Validamos si ese rol existe
            return true;
        }
        return false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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
}
