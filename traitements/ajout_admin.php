<?php
 require_once '../db/connexion.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mail = $_POST['mail_a'];
    $mot_de_passe = password_hash($_POST['password_a'], PASSWORD_BCRYPT);
    $nom = $_POST['nom_a'];
    $prenom = $_POST['prenom_a'];
     $telephone = $_POST['tel_a'];
     $fonction = $_POST['fonction_a'];


    $sql ="INSERT INTO administrateur(mail_a,password_a,nom_a,prenom_a,tel_a,fonction_a)
    VALUES (:mail_a,:password_a,:nom_a,:prenom_a,:tel_a,:fonction_a)";

    $stmt = $db->prepare($sql);

    $stmt->bindParam(':mail_a',$mail);
    $stmt->bindParam(':password_a',$mot_de_passe);
    $stmt->bindParam(':nom_a',$nom);
    $stmt->bindParam(':prenom_a',$prenom);
     $stmt->bindParam(':tel_a',$telephone);
     $stmt->bindParam(':fonction_a',$fonction);


    if ($stmt->execute()) {
        echo "<script>alert('Administrateur ajouté avec succès !'); window.location.href='../index.php?page=admin';</script>";
        } else {
            echo "<script>alert('Erreur lors de l\'ajout de l'administrateur.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Accès non autorisé !'); window.location.href='index.html';</script>";
}

?>
 