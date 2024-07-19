<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Cooperator extends Model
{
    protected $table = 'cooperators';

    protected $fillable = [
        'id','coop_name', 'coop_document', 'coop_email', 'coop_phoneNumber',
    ];

}
