<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Annonce extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'annonce';

    protected $fillable = [
        'id',
        'title',
        'description',
        'location',
        'image',
        'price',
        'categories_id',
        'user_id',
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}
public function reservations()
{
    return $this->hasMany(Reservation::class);
}
}
