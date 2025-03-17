<?php
 require_once '../db/connexion.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mail = $_POST['mail_p'];
    $mot_de_passe = password_hash($_POST['password_p'], PASSWORD_BCRYPT);
    $nom = $_POST['nom_p'];
    $prenom = $_POST['prenom_p'];
    $sexe = $_POST['sexe_p'];
    $telephone = $_POST['tel_p'];
    $section = $_POST['section_p'];
    $fonction = $_POST['fonction_p'];


    $sql ="INSERT INTO participant(mail_p,password_p,nom_p,prenom_p,sexe_p,tel_p,section_p,fonction_p)
    VALUES (:mail_p,:password_p,:nom_p,:prenom_p,:sexe_p,:tel_p,:section_p,:fonction_p)";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':mail_p',$mail);
    $stmt->bindParam(':password_p',$mot_de_passe);
    $stmt->bindParam(':nom_p',$nom);
    $stmt->bindParam(':prenom_p',$prenom);
    $stmt->bindParam(':sexe_p',$sexe);
    $stmt->bindParam(':tel_p',$telephone);
    $stmt->bindParam(':section_p',$section);
    $stmt->bindParam(':fonction_p',$fonction);


    if ($stmt->execute()) {
        echo "<script>alert('Participant ajouté avec succès !'); window.location.href='../index.php?page=participant';</script>";
        } else {
            echo "<script>alert('Erreur lors de l\'ajout du participant.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Accès non autorisé !'); window.location.href='index.html';</script>";
}

?>