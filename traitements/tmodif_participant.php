<?php
require_once(__DIR__ . '/../db/connexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_p = intval($_POST['id_p']);
    $mail_p = htmlspecialchars($_POST['mail_p']);
    $nom_p = htmlspecialchars($_POST['nom_p']);
    $prenom_p = htmlspecialchars($_POST['prenom_p']);
    $sexe_p = htmlspecialchars($_POST['sexe_p']);
    $tel_p = htmlspecialchars($_POST['tel_p']);
    $section_p = htmlspecialchars($_POST['section_p']);
    $fonction_p = htmlspecialchars($_POST['fonction_p']);
    
    $new_password_p = !empty($_POST['new_password_p']) ? $_POST['new_password_p'] : null;
    $confirm_password_p = !empty($_POST['confirm_password_p']) ? $_POST['confirm_password_p'] : null;

    if ($new_password_p && $new_password_p !== $confirm_password_p) {
        die('Les mots de passe ne correspondent pas.');
    }

    if ($new_password_p) {
        $hashed_password = password_hash($new_password_p, PASSWORD_DEFAULT);
    } else {
        $hashed_password = null;
    }

    if ($hashed_password) {
        $query = "UPDATE participant SET mail_p = ?, nom_p = ?, prenom_p = ?, sexe_p = ?, tel_p = ?, section_p = ?, fonction_p = ?, password = ? WHERE id_p = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$mail_p, $nom_p, $prenom_p, $sexe_p, $tel_p, $section_p, $fonction_p, $hashed_password, $id_p]);
    } else {
        $query = "UPDATE participant SET mail_p = ?, nom_p = ?, prenom_p = ?, sexe_p = ?, tel_p = ?, section_p = ?, fonction_p = ? WHERE id_p = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$mail_p, $nom_p, $prenom_p, $sexe_p, $tel_p, $section_p, $fonction_p, $id_p]);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Participant modifié avec succès !'); window.location.href='../index.php?page=participant';</script>";
    }}     else {
    header('Location: index.php');
    exit();
}
?>
