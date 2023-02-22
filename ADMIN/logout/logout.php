<?php
session_start();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion
header('location: ../../LOGIN-SIGNUP-ADMIN/login-admine.php');
exit;
