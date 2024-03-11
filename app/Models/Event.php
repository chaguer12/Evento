<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'auto_accept',
        'cat_id',
        'org_id',
    ];

    protected $with = ['image','categorie'];

    public function categorie(){
        return $this->belongsTo(Categorie::class);

    }
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function organizer(){
        return $this->belongsTo(Organizer::class);
    }

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
