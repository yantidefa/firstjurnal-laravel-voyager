<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;

class Headline extends Model
{
    // use HasFactory;

    protected $model = 'App\Models\Headline';

    protected $table = 'headline';

    protected $fillable = ['post_id'];

    public function posts()
    {
        return $this->belongsTo(Voyager::modelClass('Post'), 'post_id', 'id');
    }
}
