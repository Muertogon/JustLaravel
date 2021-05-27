<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'subject',
         'priority',
          'dueDate',
           'status',
            'percComplete',
             'modifiedOn'
    ];

    protected $table = 'tasks';
}
