<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable =[
        'team_fullname', 
        'team_last_name',
        'team_email',
        'team_gender',
        'team_profile',
        'team_phone',
        'team_Address',
        'team_photo', 
    ];
}
