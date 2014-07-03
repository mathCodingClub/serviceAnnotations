<?php

namespace WS\annotations;

/** @Annotation */
class DefineRoute {
  //put your code here
  private $value;

  public function __construct(array $data){
    $this->value = $data['value'];
  }

  public function get(){
    return $this->value;
  }
}

?>
