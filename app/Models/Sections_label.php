<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categs_label;

class Sections_label extends Model
{
    use HasFactory;

    protected $table ="Sections_labels";

     public function CategsLabels()
    {
        return $this->hasMany(Categs_label::class);
    }
}
