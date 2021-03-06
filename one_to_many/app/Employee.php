<?php

namespace App;

// use App\Tasks;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
      protected $table = 'employees';

      public function tasks() {
        return $this -> hasMany(Tasks::class);
      }

      public function locations(){

        return $this -> belongsToMany(Location::class);

      }
}
