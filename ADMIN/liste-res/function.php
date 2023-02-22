<?php
function afficher()
{
    if (require("./db-conn.php")) {
        $reque = $access->prepare("SELECT*FROM listersv ORDER BY id DESC");
        $reque->execute();
        $data = $reque->fetchAll(PDO::FETCH_OBJ);
        $reque->closeCursor();
        return $data;
    }
}
