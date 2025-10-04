<?php

namespace Vinalask3\LaravelVirtualWallet\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Vinalask3\LaravelVirtualWallet\Interfaces\WalletInterface;
use Vinalask3\LaravelVirtualWallet\Traits\HasVirtualWallet;

class User extends Authenticatable implements WalletInterface
{
    use HasFactory;
    use Notifiable;
    use HasVirtualWallet;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
