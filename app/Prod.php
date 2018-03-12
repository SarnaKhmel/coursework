<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Prod extends Model
{
    protected $fillable = [

            'user_email',
            'prodEmail',
            'name',
            'subscribe',
            'phone',
            'price',

    ];
    protected $table = 'users_products_list';
    protected $casts = [
        'id' => 'int',
    ];


    public function prod()
    {
        return $this->belongsTo(Prod::class);
    }

}
