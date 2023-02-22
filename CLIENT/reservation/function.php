<?php

function afficher()
{
    if (require("./db-conn.php")) {
        $req = $access->prepare("SELECT * FROM reservation ORDER BY id DESC");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    }
}
