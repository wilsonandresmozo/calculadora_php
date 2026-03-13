<?php 
echo "ingrese la cantida de numero que desea agregar: ";
$x = (int) trim(fgets(STDIN));
$lista = [];
for ( $i = 0 ; $i < $x; $i ++){
echo "ingrese el vamor numero". ($i+1)." : ";
$lista [] = (int) trim(fgets(STDIN));
}
echo "\n lista original es: [" .implode(", ",$lista)."]\n";
$pares = array_filter($lista, fn ($numero)=> $numero % 2 === 0 );
if(!empty($pares)){
echo "\n los numeros pares son: [" .implode(", ",$pares)."]\n";
}
else{echo " no hay numeros pares";
}
?>
