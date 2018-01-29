<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    public $table = 'databasebv';

    public $fillable = ['name' , 'email' , 'message'];

}
