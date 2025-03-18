<?php
require_once(__DIR__ . '/../db/connexion.php'); // Assurez-vous d'inclure votre connexion à la base de données

// Vérification si le formulaire a bien été envoyé
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $id_p = intval($_POST['id_p']);
    $mail_p = htmlspecialchars($_POST['mail_p']);
    $nom_p = htmlspecialchars($_POST['nom_p']);
    $prenom_p = htmlspecialchars($_POST['prenom_p']);
    $sexe_p = htmlspecialchars($_POST['sexe_p']);
    $tel_p = htmlspecialchars($_POST['tel_p']);
    $section_p = htmlspecialchars($_POST['section_p']);
    $fonction_p = htmlspecialchars($_POST['fonction_p']);
    
    // Récupération et validation des nouveaux mots de passe (si fournis)
    $new_password_p = !empty($_POST['new_password_p']) ? $_POST['new_password_p'] : null;
    $confirm_password_p = !empty($_POST['confirm_password_p']) ? $_POST['confirm_password_p'] : null;

    // Validation des mots de passe : doivent correspondre
    if ($new_password_p && $new_password_p !== $confirm_password_p) {
        die('Les mots de passe ne correspondent pas.'); // Arrêter le traitement si les mots de passe ne correspondent pas
    }

    // Si un nouveau mot de passe est fourni, le hacher
    if ($new_password_p) {
        $hashed_password = password_hash($new_password_p, PASSWORD_DEFAULT);
    } else {
        // Si pas de nouveau mot de passe, on ne modifie pas le mot de passe existant
        $hashed_password = null;
    }

    // Préparer la requête de mise à jour
    if ($hashed_password) {
        // Si un nouveau mot de passe est donné, on met à jour aussi le mot de passe
        $query = "UPDATE participant SET mail_p = ?, nom_p = ?, prenom_p = ?, sexe_p = ?, tel_p = ?, section_p = ?, fonction_p = ?, password = ? WHERE id_p = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$mail_p, $nom_p, $prenom_p, $sexe_p, $tel_p, $section_p, $fonction_p, $hashed_password, $id_p]);
    } else {
        // Sinon, on met à jour seulement les autres informations sans toucher au mot de passe
        $query = "UPDATE participant SET mail_p = ?, nom_p = ?, prenom_p = ?, sexe_p = ?, tel_p = ?, section_p = ?, fonction_p = ? WHERE id_p = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$mail_p, $nom_p, $prenom_p, $sexe_p, $tel_p, $section_p, $fonction_p, $id_p]);
    }

    // Rediriger après modification
    if ($stmt->execute()) {
        echo "<script>alert('Participant modifié avec succès !'); window.location.href='../index.php?page=participant';</script>";
    }}     else {
    // Si la méthode n'est pas POST, on redirige vers la page d'accueil ou une autre page
    header('Location: index.php');
    exit();
}
?>
