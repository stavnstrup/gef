<?php

// app/models/Workshop.php

class Workshop extends Eloquent {
      // let eloquent know that these attributes will be availible for mass assignment
      protected $fillable = array('title', 'subtitle', 'description', 'teaser_image', 'freeplaces', 'uri', 'wstype');

      public function pupil() {
      	     return $this->belongsTo('Pupil');
      }

}
