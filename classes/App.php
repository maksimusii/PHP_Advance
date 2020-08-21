<?php

namespace Classes;

class App {
  
  public function gallery() {
    $images = array(
      array(
        'id_img' => 1,
        'img_link' => 'img/img1.jpg',
        'img_name' => 'img1'
      ),
      array(
      'id_img' => 2,
      'img_link' => 'img/img2.jpg',
      'img_name' => 'img2'
      )
    );
    return $images;
  }
  
}