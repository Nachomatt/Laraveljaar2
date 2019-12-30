<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    //

    protected $fillable = [
        'description','user_id',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
