<?php

include('funciones.php');

// ejercicio 1 
echo("taller 1 elaborado por samuel zapata perez <br><br>");

echo (" ejercicio 1");

$n1=200;
 $n2=450;

echo("n1 =".$n1."<br>");
echo("n2 =".$n2."<br><br>");
 
echo("suma <br>");

  $suma=$n1+$n2;
  
  echo(" la suma de de los numeros es : ".$suma."<br><br>");

  echo("resta <br>");
  $resta=$n1-$n2;
  echo(" la resta de los numeros es  :".$resta."<br><br>");

  echo("multiplicacion <br>");
  $multiplicacion=$n1*$n2;
  echo(" la multiplicacion de los numeros es :".$multiplicacion."<br><br>");

  echo("division <br>");
  $division=$n1/$n2;
  echo("la division de los numeros es :".$division. "<br><br>");



// ejercicio 2 

echo ( "<br><br> ejercicio 2 <br><br>");
echo ("calcular el indice de masa corporal<br>");

$peso=85;
$altura=1.78;
echo("<br>el peso del usuario es =".$peso."kg <br>");
echo("<br> la altura del usuario es = ".$altura." <br>");

$imc =$peso/($altura*$altura);


echo("<br>el peso del usuario es =".$peso."kg"."la altura del usuario es :".$altura." <br>");
echo("<br> el indice de masa corporal del usuario es =".$imc."<br>");


if($imc<=18.4){
    echo("el usuario tiene insuficiencia de peso <br>");
}else if  ($imc>=18.5 && $imc<=24.9){
    echo("el usuario tiene peso normal <br>");
}else if($imc>=25 && $imc<=29.9){
    echo("el usuario tiene sobrepeso <br>");
}else if($imc>=30 && $imc<=34.9){
    echo("el usuario tiene obesidad 1 <br>");
}else if ($imc>=35 && $imc<=39.9){
    echo("el usuario tiene obesidad 2 <br>");
}else{
    echo("el usuario tiene obesidad 3 <br>");
}


// ejercicio 3 

echo("<br><br> ejercicio 3<br><br>");
echo("pormocion descuento");

$cantzapatosvendidos=5;
$precioparzapatos=150000;

if ($cantzapatosvendidos==3){
    $descuento=$precioparzapatos*0.1;
     $valor=$precioparzapatos-$descuento;
     echo("el valor a pagar es : $ ".$valor. "el descuento fue del 10% de : ".$descuento."<br>");
}else if ($cantzapatosvendidos> 3 && $cantzapatosvendidos<= 5){
    $descuento=$precioparzapatos*0.2;
    $valor=$precioparzapatos-$descuento;
    echo("el valor a pagar es : $".$valor. " el descuento fue del 20% de : ".$descuento."<br>");
}else if($cantzapatosvendidos>5){
    $descuento=$precioparzapatos*0.4;
    $valor=$precioparzapatos-$descuento;
    echo( "el a pagar es : $".$valor." el descuento fue del 40% : ".$descuento."<br>");
}else{
    echo("el valor a pagar es : $".$precioparzapatos. "<br>");
    
}
echo("cantidad vendida :".$cantzapatosvendidos."<br>");
echo("costo neto :".$precioparzapatos."cantidad".$cantzapatosvendidos);
// ejercicio 4 

echo("<br><br> ejercicio 4 <br>");


$horaslaboradas=36;
$horaSinExtra=20000;
$extras=25000;
if($horaslaboradas<=40){
    $pago=$horaslaboradas*20000;
    echo(" para un total de 36 horas, se obtiene un valor hora de: $".$horaSinExtra."<br>");

}else if($horaslaboradas>40){
    $pago=$horaslaboradas*25000;

}
echo("el salario devengado en la semana : $".$pago);
echo("<br><br>..........................................................");
// ejercicio 5 

$sucursalB=20000000; 
$sucursalC=15000000;
$sucursalA=array(
    'usuario1'=>array('nombre'=>"pedro",'telefono'=>2355678,'direccion'=>"cr 56 # 30-28",'salario'=>2.500000),
    'usuario2'=>array('nombre'=>"juan",'telefono'=>6345678,'direccion'=>"cr36a #45-78",'salario'=>1.633000),
    'usuario3'=>array('nombre'=>"sandra",'telefono'=>3245698,'direccion'=>"crb76 #65-07",'salario'=>3.650000),
    'usuario4'=>array('nombre'=>"camila",'telefono'=>5436710,'direccion'=>"cr27 #54-81",'salario'=>1000000),
    'usuario5'=>array('nombre'=>"luis",'telefono'=>2370867,'direccion'=>"cll37 #72-10",'salario'=>2000000));
    print_r($sucursalA);
    echo("los usuarios registrados en la sucursalA son:")

    foreach ($arregloMultidimensional as $claveSucursal=>$arregloUnidimensional){
        echo($arregloUnidimensional);

    foreach ($arregloUnidimensional as $salario=>$valor){
        echo ($valor)."<br>";
    }
    echo ("<br>");
}
        if($sucursalA>$sucursalB && $sucursalB>$sucursalC ){
            echo("el mayor ingreso lo tiene la sucursal".$sucursalB);
    }

    // ejercicio 6 
     $nuemrosPares=array(
         'pares'=>array('nuemro1'=>2),
         'pares'=>array('nuemro2'=>4),
         'pares'=>array('nuemro3'=>6),
         'pares'=>array('nuemro4'=>8),
         'pares'=>array('nuemro5'=>10),
         'pares'=>array('nuemro6'=>12,
         'pares'=>array('nuemro7'=>14,
         'pares'=>array('nuemro8'=>16),
         'pares'=>array('nuemro9'=>18),
         'pares'=>array('nuemro10'=>20));
         echo("el primer numero par es : "."<br>");

print_r($numerosPares);
  
// ejercicio 7 

$salpicon=array(
    'dulce1'=>"banano"),
    'dulce2'=>"manzana"),
    'dulce3'=>"durazno"),
    'dulce4'=>"piña"),
    'dulce5'=>"naranja"),
    'dulce6'=>"lulo"));

?>




