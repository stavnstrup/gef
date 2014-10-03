<?php

// app/models/Addresse.php

class Addresse extends Eloquent {
      // let eloquent know that these attributes will be availible for mass assignment
      protected $fillable = array('havework','phone','email','workplace','pupil_id');

      public function pupils() {
      	     return $this->belongsTo('Pupil');
      }
}
