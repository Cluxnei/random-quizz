<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
