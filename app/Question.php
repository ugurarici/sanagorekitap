<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

	protected $fillable = ['user_id', 'body', 'user_email'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }
}
