<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cooperator extends Model
{
    protected $table = 'cooperators';

    protected $fillable = [
        'id','name', 'document', 'email', 'phoneNumber',
    ];

}
