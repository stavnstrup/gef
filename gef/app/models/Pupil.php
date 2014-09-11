<?php

// app/models/Pupil.php

class Pupil extends Eloquent {
      // let eloquent know that these attributes will be availible for mass assignment
      protected $fillable = array('pupidid','firstname','lastname');

      public function workshop() {
      	     return $this->hasOne('Workshop');
      }
}
