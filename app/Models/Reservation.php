<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'annonce_id',
        'user_id',
        'start_date',
        'end_date',
        'barCode',
    ];
    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }
}