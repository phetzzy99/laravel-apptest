<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $fillable = ['title', 'price', 'typebooks_id']; //กำหนดให้สามารถเพิ่มข้อมูลได้ในคำสั่งเดียว Mass Assignment
}
