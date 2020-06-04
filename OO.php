<?php

class ObjectOriented {
  
  protected $firstProperty;
  
  protected $secondProperty;
    
  protected $thirdProperty;
  
  public function setFirstProperty($firstProperty = 0) {
    $this->firstProperty = $firstProperty;
  }
  public function getFirstProperty() {
    return $this->firstProperty;
  }

  public function setSecondProperty($secondProperty = 0) {
    $this->secondProperty = $secondProperty;
  }
  public function getSecondProperty() {
    return $this->secondProperty;
  }

  public function setThirdProperty($thirdProperty = 0) {
    $this->thirdProperty = $thirdProperty;
  }
  public function getThirdProperty() {
    return $this->thirdProperty;
  }

  public function multiplePropertys($a, $b, $c) {
    $this->setFirstProperty($a);
    $this->setSecondProperty($b);
    $this->setThirdProperty($c);
    
    return (
      $this->getFirstProperty() * 
      $this->getSecondProperty() * 
      $this->getThirdProperty()
    );
  }

}

$OO = new ObjectOriented;
echo($OO->multiplePropertys(1, 2, 3));