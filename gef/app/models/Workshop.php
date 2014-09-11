<?php

// app/models/Workshop.php

class Workshop extends Eloquent {
      // let eloquent know that these attributes will be availible for mass assignment
      protected $fillable = array('name', 'description', 'teaser_image', 'freeplaces', 'speaker', 'uri');
}
