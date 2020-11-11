<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Work extends Model
{
    protected $fillable = ['title', 'url', 'description','full_description', 'created_by', 'modified_by'];

    // Mutators
//    public function setSlugAttribute($value) {
//
//        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
//
//    }


}
