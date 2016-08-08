<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailList extends Model
{
    protected $fillable = [
        'user_id', 'username', 'email'
    ];
}
