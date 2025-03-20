<?php
require_once(__DIR__ .'/../db/connexion.php');

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $stmt = $db->prepare("SELECT * FROM administrateur WHERE id_a=?");
    $stmt->execute([$id]);

    $admin = $stmt->fetch();
}

?>
<div class="container mt-5">
    <h2 class="mb-4"><i class="fas fa-user-plus"></i> Modifier un administrateur</h2>
    
    <form action="traitements/tmodifa.php" method="POST">
        <input type="hidden" id="id_a" name="id_a" value="<?= htmlspecialchars($admin['id_a']) ?>">

        <div class="mb-3">
            <label for="mail_a" class="form-label"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" class="form-control" id="mail_a" name="mail_a" value="<?= htmlspecialchars( $admin['mail_a']) ?>">
        </div>

        <div class="mb-3">
            <label for="new_password_a" class="form-label"><i class="fas fa-lock"></i> Nouveau mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control" id="new_password_a" name="new_password_a" placeholder="Entrez le nouveau mot de passe">
                <button type="button" class="input-group-text" id="toggle-password">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <div class="mb-3">
            <label for="confirm_password_a" class="form-label"><i class="fas fa-lock"></i> Confirmer le mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control" id="confirm_password_a" name="confirm_password_a" placeholder="Confirmez le nouveau mot de passe">
                <button type="button" class="input-group-text" id="toggle-confirm-password">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <div class="mb-3">
            <label for="nom_a" class="form-label"><i class="fas fa-user"></i> Nom</label>
            <input type="text" class="form-control" id="nom_a" name="nom_a" value="<?= htmlspecialchars($admin['nom_a']) ?>">
        </div>

        <div class="mb-3">
            <label for="prenom_a" class="form-label"><i class="fas fa-user"></i> Prénom</label>
            <input type="text" class="form-control" id="prenom_a" name="prenom_a" value="<?= htmlspecialchars($admin['prenom_a']) ?>">
        </div>

        
        <div class="mb-3">
            <label for="tel_a" class="form-label"><i class="fas fa-phone"></i> Téléphone</label>
            <input type="tel" class="form-control" id="tel_a" name="tel_a" value="<?= htmlspecialchars($admin['tel_a']) ?>">
        </div>

        <div class="mb-3">
            <label for="fonction_a" class="form-label"><i class="fas fa-briefcase"></i> Fonction</label>
            <select class="form-select" id="fonction_a" name="fonction_a" value="<?= htmlspecialchars($participant['fonction_a']) ?>">
                <option value="PF" <?= $admin['fonction_a'] == 'PF' ? 'selected' : '' ?>>PF</option>
                <option value="CA" <?= $admin['fonction_a'] == 'CA' ? 'selected' : '' ?>>CA</option>
                <option value="CIPS" <?= $admin['fonction_a'] == 'CIPS' ? 'selected' : '' ?>>CIPS</option>
                <option value="CL" <?= $admin['fonction_a'] == 'CL' ? 'selected' : '' ?>>CL</option>
                <option value="CTC" <?= $admin['fonction_a'] == 'CTC' ? 'selected' : '' ?>>CTC</option>
            </select>
        </div>
 
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Enregistrer</button>
    </form>
</div>

<script>
    document.getElementById('toggle-password').addEventListener('click', function() {
        var passwordField = document.getElementById('new_password_a');
        var icon = this.querySelector('i'); 

        if (passwordField.type === "password") {
            passwordField.type = "text";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = "password";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });

    document.getElementById('toggle-confirm-password').addEventListener('click', function() {
        var confirmPasswordField = document.getElementById('confirm_password_a');
        var icon = this.querySelector('i');

        if (confirmPasswordField.type === "password") {
            confirmPasswordField.type = "text";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            confirmPasswordField.type = "password";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>
