<?php

      $valor1 = 10;
      $valor2 = 2;

      $resultado = $valor1 + $valor2;

      echo "Resultado da Soma: ".$resultado;

      echo '<h3>Outras Funções:</h3>';

      $valor3 = 8;
      $valor4 = 2;

      //Potencia -  pow (base, potencia)
      $resultado_Potencia = pow($valor3,$valor4);

      echo "Resultado da Potencia: ".$resultado_Potencia;

      //Raiz Quadrada -  sqrt (variavel)
      $valor5 = 16;

      $resultadoRaiz = sqrt($valor5);

      echo "<br>Resultado da Raiz Quadrada: ".$resultadoRaiz;
      echo '<h3>Exemplo de Porcentagem:</h3>';

      /*
      Em um sistema de condomínio precisamos gerar uma multa de 37% em cima de uma
      parcela que esteja vencida a vários meses. A parcela possui um valor de R$125,00.
      */

      $valorDeMulta = 0.37;   // 37%   /  100 = 0.37
      $valorDaParcela = 125.00;

      // qual será o valor do acréssimo
      $porcentagemDeMulta = $valorDeMulta * $valorDaParcela;

      // qual será o valor total com a multa
      $valorTotalDaParcela = $valorDaParcela + $porcentagem
      echo '<h3>Exemplo de Porcentagem:</h3>';

      echo "<br>Valor da Multa: ".$porcentagemDeMulta;
      echo "<br>Valor da Parcela inicial: ".$valorDaParcela;
      echo "<br>Valor da Parcela final: ".$valorTotalDaParcela;
?>
