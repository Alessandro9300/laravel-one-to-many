<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = 'tasks';

    public function employee(){
      return $this -> belongsTo(Employee::class);
    }

}
