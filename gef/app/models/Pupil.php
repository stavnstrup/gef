<?php

// app/models/Pupil.php

class Pupil extends Eloquent {
      // let eloquent know that these attributes will be availible for mass assignment
      protected $fillable = array('pupidid','firstname','lastname','ODselected','havework','phone','email','workplace');

      public function workshops() {
      	     return $this->belongsTo('Workshop');
      }
}
