<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $table = 'players';
    protected $fillable = ['name', 'phone_number', 'score', 'voucher_id'];
}
