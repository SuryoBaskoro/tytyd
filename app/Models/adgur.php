<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class adgur extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded = ['id'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
