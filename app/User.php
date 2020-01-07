<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'address', 'postal_code', 'city', 'country', 'tel', 'whatsapp', 'mail', 'company_name', 'company_register_nr', 'tax_nr', 'bank_account_nr', 'bank_account_receiver_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sales()
    {
        return $this->hasMany('App\Sale');
    }
}
