<?php

namespace serviceAnnotations;

/** @Annotation */
class HelpTxt {
  
  private $value;

  public function __construct(array $data) {
    $this->value = $data['value'];
  }

  public function get() {
    return $this->value;
  }

}

?>