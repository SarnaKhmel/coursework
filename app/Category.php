<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{ protected $fillable = [

    'id_category',
    'category' ,

];
    protected $table = 'category';
    protected $casts = [
        'id_category' => 'int',
    ];


    public function prod()
    {
        return $this->belongsTo(Category::class);
    }
}
