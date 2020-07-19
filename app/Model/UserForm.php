<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message'
    ];
}
