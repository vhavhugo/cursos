<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['subject', 'made', 'description'];

    public function protects(){
        return $this->belongsToMany('App\Project');
    }
}
