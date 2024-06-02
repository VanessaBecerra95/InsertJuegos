<?php

$keys = ['name-game', 'synopsis', 'release-date', 'type', 'language', 'size'];

foreach ($keys as $key) {
    if (empty($_POST[$key])) {
        echo "No se han rellenado todos los campos";
        return;
    }
}

echo "Los datos de ingreso son los siguientes:<br>";
foreach ($keys as $key) {
    echo $_POST[$key] . "<br>";
}



$minRequired = ['min-so', 'min-processor', 'min-memory', 'min-graphics', 'min-storage'];

foreach ($minRequired as $requirement) {
if (empty($_POST[$requirement])) {
echo "No se han rellenado todos los campos";
return;
}
}

echo "Los requerimientos mínimos son los siguientes:<br>";
foreach ($minRequired as $requirement) {
echo $_POST[$requirement] . "<br>";
}

$recommended = ['recommended-so', 'recommended-processor', 'recommended-memory', 'recommended-graphics', 'recommended-storage'];

foreach ($recommended as $recommend) {
if (empty($_POST[$recommend])) {
echo "No se han rellenado todos los campos";
return;
}
}

echo "Los requerimientos mínimos son los siguientes:<br>";
foreach ($recommended as $recommend) {
echo $_POST[$recommend] . "<br>";
}
?>