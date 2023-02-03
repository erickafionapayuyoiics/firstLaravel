<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    
    use SoftDeletes;
    //use User;
    protected $fillable = ['title', 'description', 'user_id'];
    
}
