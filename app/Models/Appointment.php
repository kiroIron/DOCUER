<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable =[
        'date',
        'time',
        'status',
        'orderno',
        'user_id',
        'doctor_id',
    ];
    
    function user(){
    return $this->belongsTo(User::class);
    }
    function doctor(){
    return $this->belongsTo(Doctor::class);
    }
}
