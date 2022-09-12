<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    // use HasFactory;
    protected $model = 'App\Models\Advertisement';
    protected $table = 'advertisement';
    protected $fillable = ['name', 'position', 'url', 'date_start', 'date_stop', 'deskripsi', 'image', 'status'];
}
