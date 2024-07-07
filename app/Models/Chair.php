<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'active',        
        'hall_id',
        'hall_row',
        'place',
        'price',
        'free'        
    ]; 

    public function hall() {
        return $this->belongsTo(Hall::class, 'hall_id', 'id');
    }
}
