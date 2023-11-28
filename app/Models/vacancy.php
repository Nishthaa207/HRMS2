<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancy extends Model
{
    protected $table = 'vacancy';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'min_exp', 'max_exp','description', 'skills', 'salary', 'dispaly_from','display_till'];
    //protected $guarded=[];
    use HasFactory;
}
