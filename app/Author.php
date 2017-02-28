<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books()
    {
    	return $this->hasMany(Book::class);
    }

    //	@todo: burada bu yazarın kitaplarının iliştirildiği yanıtların sorularını döndürecek bir method hazırlamamız gerekiyor
}
