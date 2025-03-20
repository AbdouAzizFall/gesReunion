<?php
require_once(__DIR__ .'/../db/connexion.php');

if(isset($_GET['id'])){
    $id = intval($_GET['id']);
    $stmt = $db->prepare("SELECT * FROM participant WHERE id_p=?");
    $stmt->execute([$id]);

    $participant = $stmt->fetch();
}

?>
<div class="container mt-5">
    <h2 class="mb-4"><i class="fas fa-user-plus"></i> Modifier un participant</h2>
    
    <form action="traitements/tmodif_participant.php" method="POST">
        <input type="hidden" id="id_p" name="id_p" value="<?= htmlspecialchars($participant['id_p']) ?>">

        <div class="mb-3">
            <label for="mail_p" class="form-label"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" class="form-control" id="mail_p" name="mail_p" value="<?= htmlspecialchars( $participant['mail_p']) ?>">
        </div>

        <div class="mb-3">
            <label for="new_password_p" class="form-label"><i class="fas fa-lock"></i> Nouveau mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control" id="new_password_p" name="new_password_p" placeholder="Entrez le nouveau mot de passe">
                <button type="button" class="input-group-text" id="toggle-password">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <div class="mb-3">
            <label for="confirm_password_p" class="form-label"><i class="fas fa-lock"></i> Confirmer le mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control" id="confirm_password_p" name="confirm_password_p" placeholder="Confirmez le nouveau mot de passe">
                <button type="button" class="input-group-text" id="toggle-confirm-password">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <div class="mb-3">
            <label for="nom_p" class="form-label"><i class="fas fa-user"></i> Nom</label>
            <input type="text" class="form-control" id="nom_p" name="nom_p" value="<?= htmlspecialchars($participant['nom_p']) ?>">
        </div>

        <div class="mb-3">
            <label for="prenom_p" class="form-label"><i class="fas fa-user"></i> Prénom</label>
            <input type="text" class="form-control" id="prenom_p" name="prenom_p" value="<?= htmlspecialchars($participant['prenom_p']) ?>">
        </div>

        <div class="mb-3">
            <label class="form-label"><i class="fas fa-venus-mars"></i> Sexe</label>
            <select class="form-select" id="sexe_p" name="sexe_p" value="<?= htmlspecialchars($participant['sexe_p']) ?>">
                <option value="Homme" <?= $participant['sexe_p'] == 'Homme' ? 'selected' : '' ?>>Homme</option>
                <option value="Femme" <?= $participant['sexe_p'] == 'Femme' ? 'selected' : '' ?>>Femme</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tel_p" class="form-label"><i class="fas fa-phone"></i> Téléphone</label>
            <input type="tel" class="form-control" id="tel_p" name="tel_p" value="<?= htmlspecialchars($participant['tel_p']) ?>">
        </div>

        <div class="mb-3">
            <label for="section_p" class="form-label"><i class="fas fa-layer-group"></i> Section</label>
            <select class="form-select" id="section_" name="section_p">
                <optgroup label="ZONE THIAROYE YEUMBEUL">
                    <option value="Thiaroye Yeumbeul 1" <?= $participant['section_p'] == 'Thiaroye Yeumbeul 1' ? 'selected' : '' ?>>Thiaroye Yeumbeul 1</option>
                    <option value="Thiaroye Yeumbeul 2" <?= $participant['section_p'] == 'Thiaroye Yeumbeul 2' ? 'selected' : '' ?>>Thiaroye Yeumbeul 2</option>
                    <option value="Seydou Nourou" <?= $participant['section_p'] == 'Seydou Nourou' ? 'selected' : '' ?>>Seydou Nourou</option>
                    <option value="Thiaroye Kaw 1" <?= $participant['section_p'] == 'Thiaroye Kaw 1' ? 'selected' : '' ?>>Thiaroye Kaw 1</option>
                    <option value="Thiaroye Kaw 2" <?= $participant['section_p'] == 'Thiaroye Kaw 2' ? 'selected' : '' ?>>Thiaroye Kaw 2</option>
                </optgroup>
                <optgroup label="ZONE THIAROYE AFIA">
                    <option value="Tivaouane Afia" <?= $participant['section_p'] == 'Tivaouane Afia' ? 'selected' : '' ?>>Tivaouane Afia</option>
                    <option value="Tivaouane Yeumbeul" <?= $participant['section_p'] == 'Tivaouane Yeumbeul' ? 'selected' : '' ?>>Tivaouane Yeumbeul</option>
                    <option value="Medina Yeumbeul" <?= $participant['section_p'] == 'Medina Yeumbeul' ? 'selected' : '' ?>>Medina Yeumbeul</option>
                    <option value="Daroul Arkham" <?= $participant['section_p'] == 'Daroul Arkham' ? 'selected' : '' ?>>Daroul Arkham</option>
                </optgroup>
                <optgroup label="ZONE BOUNE">
                    <option value="Tivaouane Alwar" <?= $participant['section_p'] == 'Tivaouane Alwar' ? 'selected' : '' ?>>Tivaouane Alwar</option>
                    <option value="Boune" <?= $participant['section_p'] == 'Boune' ? 'selected' : '' ?>>Boune</option>
                    <option value="Comico" <?= $participant['section_p'] == 'Comico' ? 'selected' : '' ?>>Comico</option>
                    <option value="Kawsara" <?= $participant['section_p'] == 'Kawsara' ? 'selected' : '' ?>>Kawsara</option>
                </optgroup>
                <optgroup label="ZONE SAM SAM">
                    <option value="Aïnoumady" <?= $participant['section_p'] == 'Aïnoumady' ? 'selected' : '' ?>>Aïnoumady</option>
                    <option value="Sam Sam B" <?= $participant['section_p'] == 'Sam Sam B' ? 'selected' : '' ?>>Sam Sam B</option>
                    <option value="Sam Sam 3" <?= $participant['section_p'] == 'Sam Sam 3' ? 'selected' : '' ?>>Sam Sam 3</option>
                </optgroup>
            </select>
        </div>

        <div class="mb-3">
            <label for="fonction_p" class="form-label"><i class="fas fa-briefcase"></i> Fonction</label>
            <select class="form-select" id="fonction_p" name="fonction_p" value="<?= htmlspecialchars($participant['fonction_p']) ?>">
                <option value="PF" <?= $participant['fonction_p'] == 'PF' ? 'selected' : '' ?>>PF</option>
                <option value="CA" <?= $participant['fonction_p'] == 'CA' ? 'selected' : '' ?>>CA</option>
                <option value="CIPS" <?= $participant['fonction_p'] == 'CIPS' ? 'selected' : '' ?>>CIPS</option>
                <option value="CL" <?= $participant['fonction_p'] == 'CL' ? 'selected' : '' ?>>CL</option>
                <option value="CTC" <?= $participant['fonction_p'] == 'CTC' ? 'selected' : '' ?>>CTC</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Enregistrer</button>
    </form>
</div>

<script>
    document.getElementById('toggle-password').addEventListener('click', function() {
        var passwordField = document.getElementById('new_password_p');
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
        var confirmPasswordField = document.getElementById('confirm_password_p');
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
