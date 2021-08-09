<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections_labels_user extends Model
{
    use HasFactory;

    protected $fillable = [
    	
        'sections_label_id',
        'user_id',
        'label',
        'order',
       
    ];
}
