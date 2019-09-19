<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'description', 'created_at', 'updated_at'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function correctAnswer()
    {
        return $this->answers()->correct()->first();
    }
}
