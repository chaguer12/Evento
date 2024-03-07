<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'auto_accept',
        'cat_id',
        'org_id',
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);

    }
    public function image()
    {
        return $this->hasOne(Image::class, 'imageable');
    }
}
