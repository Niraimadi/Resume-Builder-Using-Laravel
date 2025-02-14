<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['institution_name','institution_location','degree','field_of_study','graduation_start_date','graduation_end_date'];
}
