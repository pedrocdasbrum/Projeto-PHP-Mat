<?php
  class Mat
  {
    private $v1;
    private $v2;

    public function Mat ()
    {}

    public function getV1 ()
    {
      return $this->v1;
    }

    public function setV1 ($v1)
    {
      return $this->v1 = $v1;
    }

    public function getV2 ()
    {
      return $this->v2;
    }

    public function setV2 ($v2)
    {
      return $this->v2 = $v2;
    }

    public function root1 ()
    {
      return sqrt($this->v1);
    }

    public function root2 ()
    {
      return sqrt($this->v2);
    }

    public function pow ()
    {
      return pow($this->v1, $this->v2);
    }
  }
 ?>
