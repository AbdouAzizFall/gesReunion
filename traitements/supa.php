<?php
require_once(__DIR__ .'/../db/connexion.php');
if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $stmt = $db->prepare("DELETE FROM administrateur WHERE id_a=?");
    $stmt->execute([$id]);

    header("Location: ?page=admin");
    exit();
}
?>
