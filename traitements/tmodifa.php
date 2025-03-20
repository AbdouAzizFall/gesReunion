<?php
require_once(__DIR__ . '/../db/connexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_a = intval($_POST['id_a']);
    $mail_a = htmlspecialchars($_POST['mail_a']);
    $nom_a = htmlspecialchars($_POST['nom_a']);
    $prenom_a = htmlspecialchars($_POST['prenom_a']);
    $tel_a = htmlspecialchars($_POST['tel_a']);
    $fonction_a = htmlspecialchars($_POST['fonction_a']);
    
    $new_password_a = !empty($_POST['new_password_a']) ? $_POST['new_password_a'] : null;
    $confirm_password_a = !empty($_POST['confirm_password_a']) ? $_POST['confirm_password_a'] : null;

    if ($new_password_a && $new_password_a !== $confirm_password_a) {
        die('Les mots de passe ne correspondent pas.');
    }

    if ($new_password_a) {
        $hashed_password = password_hash($new_password_a, PASSWORD_DEFAULT);
    } else {
        $hashed_password = null;
    }

    if ($hashed_password) {
        $query = "UPDATE administrateur SET mail_a = ?, nom_a = ?, prenom_a = ?, sexe_a = ?, tel_a = ?, section_a = ?, fonction_a = ?, password = ? WHERE id_a = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$mail_a, $nom_a, $prenom_a, $tel_a, $fonction_a, $hashed_password, $id_a]);
    } else {
        $query = "UPDATE administrateur SET mail_a = ?, nom_a = ?, prenom_a = ?, tel_a = ?, fonction_a = ? WHERE id_a = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$mail_a, $nom_a, $prenom_a, $tel_a, $fonction_a, $id_a]);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Administrateur modifié avec succès !'); window.location.href='../index.php?page=admin';</script>";
    }}     else {
    header('Location: index.php');
    exit();
}
?>
