<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    protected $fillable = [
        'todo',
        'is_done',
    ];
}
