<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labels_links_user extends Model
{
    use HasFactory;

    protected $fillable = [
    	
        'links_label_id',
        'user_id',
        'label',
        'order',
       
    ];
}
