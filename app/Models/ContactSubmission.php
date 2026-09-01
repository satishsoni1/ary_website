<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'kind', 'name', 'email', 'organisation', 'role', 'message', 'ip', 'user_agent',
    ];
}
