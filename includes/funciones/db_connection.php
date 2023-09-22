<?php

$db = new mysqli('localhost', 'root', 'root', 'londontechweek');
if ($db->connect_error) {
    echo $error->$db->connect_error;
}

/* cambiar el conjunto de caracteres a utf8 */
if (!mysqli_set_charset($db, "utf8")) {
    mysqli_error($db);
    exit();
} else {
    mysqli_character_set_name($db);
}
