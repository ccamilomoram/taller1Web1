<?php

echo("<br>");  
echo("<br>");
echo("******************************************************"); 
echo("<br>");  
echo("<br>");
echo("Cristián Camilo Mora Martínez");
echo("<br>");  
echo("Grupo 1 / ACDIVOCA - CESDE");  
echo("<br>");
echo("<br>");
echo("******************************************************");  

echo("<br>");
echo("<br>");
echo("<br>");

echo("******************************************************");
echo("<br>");
echo("EJERCICIO No. 1 - CALCULADORA");
echo("<br>");
echo("******************************************************");
echo("<br>");

/* Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplication y división de dos números enteros
almacenados en 2 variables diferentes. Conserve el siguiente formato de impresión:
La suma de () + () = ()
La resta de ()-()= ()
La multiplicación de ()x() =()
La división de ()/()=()*/

$numero1=4325687;
$numero2=45;


$suma= $numero1 + $numero2;   
$resta= $numero1 - $numero2;
$multipicacion= $numero1 * $numero2;
$division= $numero1 / $numero2;

echo("1. SUMA: ".$numero1." + ".$numero2." = ".$suma);
echo("<br>");
echo("<br>");
echo("2. RESTA: ".$numero1." - ".$numero2." = ".$resta);
echo("<br>");
echo("<br>");
echo("3. MULTIPLICACIÓN: ".$numero1." * ".$numero2." = ".$multipicacion);
echo("<br>");
echo("<br>");
echo("4. DIVISIÓN: ".$numero1." / ".$numero2." = ".$division);
echo("<br>");
echo("******************************************************");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");


echo("******************************************************");
echo("<br>");
echo("EJERCICIO No. 2 - EJERCICIO BODYTECH");
echo("<br>");
echo("******************************************************");
echo("<br>");

/*
2. El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de
masa corporal, basado en la formula 𝐈𝐌𝐂 = 𝑷𝒆𝒔𝒐 / 𝑨𝒍𝒕𝒖𝒓𝒂 * 𝑨𝒍𝒕𝒖𝒓𝒂
La clasificación del IMC es la siguiente:
• IMC <= 18,4 (Insuficiencia de peso)
• 18,5<=IMC<=24,9 (Peso normal)
• 25<=IMC<=29,9 (Sobrepeso)
• 30<=IMC<=34,9 (Obesidad 1)
• 35<=IMC<=39,9 (Obesidad 2)
• IMC>=40 (Obesidad 3)

Ejecute su programa para un usuario cuyo peso es de 85KG y cuya estatura es de
1.78m y muestre en pantalla el resultado obtenido
*/


$pesoUsuario=85;
$estaturaUsuario=1.78;

$imc=  $pesoUsuario / ($estaturaUsuario * $estaturaUsuario);

echo("BODYTECH: El mejor gimnasio de Colombia");
echo("<br>");
echo("www.bodytech.com.co");
echo("<br>");
echo("Medellín - Antioquia");
echo("<br>");
echo("******************************************************");
echo("<br>");
echo("<br>");
echo("Calculadora de Indice de Masa Corporal (IMC)");

echo("<br>");
echo("<br>");
echo("Tu indice de Masa Corporal es: " .$imc );
echo("<br>");
echo("<br>");


if ($imc <=18.4) {
    echo("<br>");
    echo("Lamentamos informarle que padeces de INSUFICIENCIA DE PESO");
} 

elseif ($imc >= 18.5 && $imc <=24.9) {
    echo("<br>");
    echo("Felicitaciones tu IMC esta en los niveles de PESO NORMAL");
 } 

elseif ($imc >= 25 && $imc <=29.9) {
    echo("<br>");
    echo("Lamentablemente informamos que padeces de SOBREPESO ");
} 

elseif ($imc >= 30 && $imc <=34.9) {
    echo("<br>");
    echo("¡Alerta!, tienes OBESIDAD 1 ");
} 

elseif ($imc >= 35 && $imc <=39.9) {
    echo("<br>");
    echo("¡Alerta!, tienes OBESIDAD 2");
} 
    else {
        echo("<br>");
        echo("¡Alerta!, tienes OBESIDAD 3");
    } 

echo("<br>");
echo("******************************************************");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");



echo("******************************************************");
echo("<br>");
echo("EJERCICIO No. 3 - TIENDAS SPRING STEP");
echo("<br>");
echo("******************************************************");
echo("<br>");

/*
3.Hacer un programa en PHP para la tienda Spring Step que tiene una promoción de descuento para vender al mayor, esta dependerá delnúmero de zapatos que se compren. Si son 3 pares se les dará un 10% de descuento sobre el total de la compra; si el número de zapatos es mayor 3 pares pero menor o igual de 5 pares, se le otorga un 20% de descuento; y si son más 5 pares de zapatos se otorgará un 40% de descuento. Defina la cantidad de variables que necesite, el precio de cada pare de zapatos =$150.000 y establezca el valor total de una compra de 5 pares de zapatos.
*/

$cantidad = 5;
$valorParZ=150000;
$descuento = 0;
$valorNeto;

$totalCompra = $cantidad * $valorParZ;

if($cantidad==3){
    $descuento=$totalCompra * 0.10;
} 

elseif ($cantidad > 3 && $cantidad <= 5){
    $descuento = $totalCompra * 0.20;
}

elseif ($cantidad>5){
    $descuento = $totalCompra * 0.40;
}

$valorNeto = $totalCompra - $descuento;

//echo("el valor total de la compra de ".$cantidad." pares es $".$valorNeto);

echo ("Apreciado cliente, por la compra de " .$cantidad. " hermosos pares de Zapatos en nuestra tienda Spring Step, el precio final aplicando el descuento es de " .$valorNeto); 
echo("<br>");
echo(" Gracias por comprar en nuestras tiendas. ");
echo("<br>");


echo("<br>");
echo("******************************************************");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");



echo("******************************************************");
echo("<br>");
echo("EJERCICIO No. 4 - SUELDO POSTOBON");
echo("<br>");
echo("******************************************************");
echo("<br>");

/* 4.Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora. Ejecute su código para calcular el salario con 36 horastrabajadas.*/


$horasLaboradas = 36;
$sueldoSemanal;
$horasAdicional = 0;

if ($horasLaboradas <= 40) {
    $sueldoSemanal = $horasLaboradas * 20000;
}

else {
    $horasAdicional = $horasLaboradas-40;
    $sueldoSemanal = 40 * 20000 + $horasAdicional * 25000;
}

echo("Horas Laboradas en la semana ".$horasLaboradas );
echo("<br>");
echo("Estimado empleado su salario por esta semana laborada es de $ ".$sueldoSemanal );
echo("<br>");

echo("<br>");
echo("******************************************************");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<br>");



echo("******************************************************");
echo("<br>");
echo("EJERCICIO No. 5 - LA JUGOSA S.A.S.");
echo("<br>");
echo("******************************************************");
echo("<br>");

/*  Después de realizar una consulta en la base de datos DE LA JUGOSA SAS se tienen almacenados los valores de dicha consulta en un arreglo denominado salpicón, el cual presenta la siguiente configuración:

[dulce1]=>”Banano”
[dulce2]=>”Manzana”
[dulce3]=>”Durazno”
[acido1]=>”Piña”
[acido2]=>”Naranja”
[acido3]=>”Lulo”

Defina el arreglo salpicón e imprima utilizando un ciclo foreach el contenido deeste.*/

 
$salpicon = array ("dulce1" => "banano", "dulce2" => "manzana", "dulce3" => "durazno", "acido1" => "piña","acido2" => "naranja","acido3"=> "lulo" );

echo("<br>");
echo("INGREDIENTES PARA PREPARAR UN RICO SALPICON");
echo("<br>");
echo("<br>");

foreach ($salpicon as $Sabores=>$ingrediente){
    echo($Sabores.": ".$ingrediente);
    echo("<br>");
}


    echo("<br>");  
    echo("<br>");
    echo("******************************************************"); 
    echo("<br>");  
    echo("<br>");
    echo("Cristián Camilo Mora Martínez");
    echo("<br>");  
    echo("Grupo 1 / ACDIVOCA - CESDE");  
    echo("<br>");
    echo("<br>");
    echo("******************************************************");  

?>
