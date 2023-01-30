<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

/*colectivo con las arrays personas y DNI*/
//Array de personas
$personas = array("Pepe", "Juan", "Marcelo", "Alberto", "Gerardo");
//Para ordenar alfabeticamente.
sort($personas);
//Mostrar los nombres de las personas alfabeticamente.
foreach ($personas as $key => $value) {
    echo "personas[" . $key . "]=" . $value . "<br>";
}
//Array de DNIs
$DNI = array("1234C", "1234B", "1234A", "1234D");
//Para ordenar alfabeticamente.
sort($DNI);
//Mostrar los DNIs alfabeticamente.
foreach ($DNI as $key => $value) {
    echo "DNI[" . $key . "]=" . $value . "<br>";
}
//Comprobar la exitencia del nombre Pepe en la array de personas.
$comprobar->where('personas', '===', 'Pepe');

