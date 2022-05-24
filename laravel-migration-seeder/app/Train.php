<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    //
     /**
      * The table associated with the model.
      *
      * @var string
      */
      protected $table = 'trains';
      // funzione che mi restituisce la data
      public function getData() {
          return date('d/m/Y H:i:s', strtotime($this->departure_time));
      }
}
