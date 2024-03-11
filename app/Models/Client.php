<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends User
{
    use HasFactory;
    protected $fillable = [
        'user_id' => 'required',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }

    
}
