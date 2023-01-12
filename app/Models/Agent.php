<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable =[
        "f_name", "l_name", "email","mobile", "password", "company_name",
        "image", "description", "skype", "fb", "twitter","instagram", "status"
    ];

}
