<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'org_id',
        'client_id',
        'accepted',
    ];

    // protected $with = ['event','organizer','reservation'];

    public function event(){
        return $this->belongsTo(Event::class);
    }

    public function organizer(){
        return $this->belongsTo(Organizer::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
