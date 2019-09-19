<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['title','question_id','correct','created_at','updated_at'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function scopeCorrect($query)
    {
        return $query->where('correct', 1);
    }
}
