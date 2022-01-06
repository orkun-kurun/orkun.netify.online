<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThesisForm extends Model
{
    protected $table= 'thesis';
         public $timestamps = true;
         protected $fillable = [
                'title', 'abstract', 'year', 'pages', 'submission_date',
    ];
}
