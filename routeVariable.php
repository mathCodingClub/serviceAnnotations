<?php

namespace serviceAnnotations;

/**
 * @Annotation
 * @Target("METHOD")
 */
class routeVariable {
  public $name;
  public $type;
  public $desc; // ription
  public $default;
  private $data;
  public function __construct($data) {
    $this->name = $data['value'];
    $this->type = $data['type'];
    $this->desc = $data['desc'];
    if (isset($data['default'])){
      $this->default = $data['default'];
    }
    $this->data = $data;
  }

  public function hasDefaultValue(){
    return isset($this->data['default']);
  }

}

?>
