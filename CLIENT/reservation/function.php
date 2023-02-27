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

function annulerReservation($email)
{
    if (require("./db-conn.php")) {
        $query = "SELECT * FROM listersv WHERE email=:email";
        $statement = $access->prepare($query);
        $statement->bindParam(":email", $email);
        $statement->execute();
        $reservation = $statement->fetch(PDO::FETCH_OBJ);

        if ($reservation) {
            $query = "DELETE FROM listersv WHERE email=:email";
            $statement = $access->prepare($query);
            $statement->bindParam(":email", $email);
            $result = $statement->execute();
            if ($result) {
                echo "<p>La réservation pour l'e-mail " . $email . " a été annulée avec succès.</p>";
            } else {
                echo "<p>Une erreur est survenue lors de l'annulation de la réservation. Veuillez réessayer plus tard.</p>";
            }
        } else {
            echo "<p>Aucune réservation trouvée pour l'e-mail " . $email . ".</p>";
        }

        $access = null;
    }
}
