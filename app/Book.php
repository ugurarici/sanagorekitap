<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
    	return $this->belongsTo(Author::class);
    }

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }

    //	@todo: burada bu kitabın iliştirildiği yanıtların sorularına erişeceğimiz bir method oluşturmamız gerekiyor
}
