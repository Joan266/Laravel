<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Contacts extends Model
{
    
    protected $fillable = ['fullname', 'phone', 'email', 'subject', 'message', 'stars'];
}
