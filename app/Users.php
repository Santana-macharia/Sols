<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //Table name
    protected $table = 'details';

    public $primaryKey = 'id';

    public $timestamps = 'true';
}
