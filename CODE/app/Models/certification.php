<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certification extends Model
{
    protected $fillable=['title','issuer','date','summary'];
}
