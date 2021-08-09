<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categs_label extends Model
{
    use HasFactory;

    protected $table ="Categs_labels";

     public function LinksLabels()
    {
        return $this->hasMany(Links_label::class);
    }

     public function Section()
    {
        return $this->belongsTo(Sections_label::class);
    }
}
