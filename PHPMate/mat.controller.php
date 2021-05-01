<?php
  include "mat.class.php";

  $m = new Mat;

  $m->setV1(8);
  $m->setV2(20);

  echo "<br>Valor 1: ".$m->getV1().'.';
  echo "<br>Valor 2: ".$m->getV2().'.';
  echo "<br>Raiz Quadrada do valor 1: ".$m->root1().'.';
  echo "<br>Raiz Quadrada do valor 2: ".$m->root2().'.';
  echo "<br>Valor 1 elevado à potência do valor 2: ".$m->pow().'.';
 ?>
