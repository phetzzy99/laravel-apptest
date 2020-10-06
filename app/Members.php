<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'mbmembmaster';
    protected $fillable = ['member_no', 'person_id'];
}
