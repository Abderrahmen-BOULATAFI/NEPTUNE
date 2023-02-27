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

function supprimer($id)
{
    if (require("./db-conn.php")) {
        $reque = $access->prepare("DELETE FROM listersv WHERE id = :id");
        $reque->bindParam(':id', $id);
        $reque->execute();
        $reque->closeCursor();
    }
}