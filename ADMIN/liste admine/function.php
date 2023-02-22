<?php
function afficher()
{
    if (require("./db-conn.php")) {
        $reque = $access->prepare("SELECT*FROM adminlogin ORDER BY id DESC");
        $reque->execute();
        $data = $reque->fetchAll(PDO::FETCH_OBJ);
        $reque->closeCursor();
        return $data;
    }
}
