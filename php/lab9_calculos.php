<?php
  function arrayToString($array){
    $string = "";
    for ($i=0; $i < count($array); $i++) {
      $string = $string . $array[$i];
      if($i != (count($array) - 1)){
        $string = $string . ",";
      }
    }
    return $string;
  }

  function menorMayor($array){
    $flag = true;
    while($flag){
      $flag = false;
      for ($i=0; $i < count($array); $i++) {
        if(isset($array[$i+1]) && $array[$i] > $array[$i+1]){
          $aux = $array[$i+1];
          $array[$i+1] = $array[$i];
          $array[$i] = $aux;
          $flag = true;
        }
      }
    }
    return $array;
  }

  function mayorMenor($array){
    $flag = true;
    while($flag){
      $flag = false;
      for ($i=0; $i < count($array); $i++) {
        if(isset($array[$i+1]) && $array[$i] < $array[$i+1]){
          $aux = $array[$i+1];
          $array[$i+1] = $array[$i];
          $array[$i] = $aux;
          $flag = true;
        }
      }
    }
    return $array;
  }

  function promedio($inputs){
    $promedio = 0;
    for ($i=0; $i < count($inputs); $i++) {
      $promedio += intval($inputs[$i]);
    }
    $promedio /= count($inputs);
    return $promedio;
  }

  function mediana($inputs){
    $inputs = menorMayor($inputs);
    $count = count($inputs);
    if($count%2 == 0){
      $mediana = ($inputs[$count/2] + $inputs[($count/2) - 1])/2;
    }else{
      $mediana = $inputs[floor($count/2) + 1];
    }
    return $mediana;
  }

  function muestraResultados($inputs, $promedio, $menorMayor, $mayorMenor, $mediana){
    echo "
      <p>Input: ". arrayToString($inputs)."</p>
      <p>Promedio: $promedio</p>
      <p>Menor a mayor: ". arrayToString($menorMayor)."</p>
      <p>Input: ". arrayToString($mayorMenor)."</p>
      <p>Mediana: $mediana</p>
    ";
  }

  /*Problema extra*/
  function expectedValue($array){
    $sum = 0;
    for ($i=0; $i < count($array); $i++) {
      $sum += $array[$i];
    }
    $sum /= count($array);
    return $sum;
  }
  function varianza($array, $expected){
    $sum = 0;
    for ($i=0; $i < count($array); $i++) {
      $sum += ($array[$i]-$expected)*($array[$i]-$expected);
    }
    $sum /= count($array);
    return $sum;
  }

  $input = $_POST['input'];
  $inputs = explode(",",$input);
  $promedio = promedio($inputs);
  $menorMayor = menorMayor($inputs);
  $mayorMenor = mayorMenor($inputs);
  $mediana = mediana($menorMayor);
  muestraResultados($inputs,$promedio,$menorMayor,$mayorMenor,$mediana);

  echo '<br>';
  $expected = expectedValue($inputs);
  $varianza = varianza($inputs,$expected);
  $desv = pow($varianza,1/2);
  echo "
    <p>Esperado: $expected</p>
    <p>Varianza: $varianza</p>
    <p>Desviación: $desv</p>
  ";

  Exit();
?>
