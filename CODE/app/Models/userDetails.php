<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetails extends Model
{
    public $table = "user_detail";
    protected $fillable = ['name','email','phone','address','summary'];
}
