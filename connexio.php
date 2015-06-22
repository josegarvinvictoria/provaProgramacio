<?php
/** Arxiu PHP que s'encarrega d'obtenir la connexió a la base de dades,
    recuperar les dades i detectar quan l'usuari vol afegir un nou registre
    a la BBDD. He col.locat tot el codi PHP en un únic fitxer ja que el codi
    PHP de la prova consta de poques línies.**/

    /**
     * Detectant quan es fa un POST per afegir un nou registre a la BBDD.
     **/
    $state = false;
    if ($_POST['action'] == "add") {
        
        if($_POST['nom'] != ""){
        $conexio = obtenirConn();
       
        $q = "INSERT INTO prova (nom, url) ";
        $q.= "VALUES ('".$_POST['nom']."', 'https://www.youtube.com/embed/JNbTvInths0') ";
        $res = mysql_query($q, $conexio) or die(mysql_error());
        $state = true;
        }
    }


/**
 * Funció per obtenir la connexió a la BBDD MySQL.
 **/
function obtenirConn(){

 if (!$conexio = mysql_connect('josegarvinvictoria-prova_omo-1581175', 'josegarvinvictor', '')) {
    echo 'No pudo conectarse a mysql';
    exit;
}

if (!mysql_select_db('prova', $conexio)) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}else{
    return $conexio;
}
}

/**
 * Funció per obtenir els registres de la base de dades i per mostrar els registres
 * recuperats en una llista.
 **/
function obtenirNoms(){

$conexio = obtenirConn();
$sql       = 'SELECT nom, url FROM prova';
$resultat = mysql_query($sql, $conexio);

if (!$resultat) {
    echo "Error de BD, no se pudo consultar la base de datos";
    echo "Error MySQL: " . mysql_error();
    exit;
}
echo "<div id='llistaNoms'>";
echo "<ul>";
while ($fila = mysql_fetch_assoc($resultat)) {
    
    echo "<li><a href='" . $fila['url'] ."' target='zonaV'>" . $fila['nom'] . "</a></li>";
}
echo "</ul>";
echo "</div>";
mysql_free_result($resultat);
mysql_close($conexio);
}


?>