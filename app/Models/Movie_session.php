<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie_session extends Model
{
    use HasFactory;
    protected $fillable = [
        'day',
        'start_time',
        'hall_id',
        'movie_id'
    ]; 
}
