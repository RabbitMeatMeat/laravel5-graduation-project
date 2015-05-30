<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model {

    public function hasManyComments()
    {
        return $this->hasMany('App\Comment', 'page_id', 'id');
    }

}
