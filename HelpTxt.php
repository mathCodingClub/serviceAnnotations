<?php

namespace WS\annotations;

/** @Annotation */
class HelpTxt {
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
