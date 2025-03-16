<div class="container mt-5">
    <h2 class="mb-4"><i class="fas fa-user-plus"></i> Ajouter un Participant</h2>
    
    <form action="ajout_participant.php" method="POST">
        <!-- ID Participant (Caché) -->
        <input type="hidden" id="id_p" name="id_p">

        <!-- Email -->
        <div class="mb-3">
            <label for="mail_p" class="form-label"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" class="form-control" id="mail_p" name="mail_p" required>
        </div>

        <!-- Mot de passe -->
        <div class="mb-3">
            <label for="password_p" class="form-label"><i class="fas fa-lock"></i> Mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password_p" name="password_p" required>
                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>

        <!-- Nom -->
        <div class="mb-3">
            <label for="nom_p" class="form-label"><i class="fas fa-user"></i> Nom</label>
            <input type="text" class="form-control" id="nom_p" name="nom_p" required>
        </div>

        <!-- Prénom -->
        <div class="mb-3">
            <label for="prenom_p" class="form-label"><i class="fas fa-user"></i> Prénom</label>
            <input type="text" class="form-control" id="prenom_p" name="prenom_p" required>
        </div>

        <!-- Sexe -->
        <div class="mb-3">
            <label class="form-label"><i class="fas fa-venus-mars"></i> Sexe</label>
            <select class="form-select" id="sexe_p" name="sexe_p" required>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </div>

        <!-- Téléphone -->
        <div class="mb-3">
            <label for="tel_p" class="form-label"><i class="fas fa-phone"></i> Téléphone</label>
            <input type="tel" class="form-control" id="tel_p" name="tel_p" pattern="[0-9]{10}" required>
        </div>

        <!-- Section -->
        <div class="mb-3">
            <label for="section_p" class="form-label"><i class="fas fa-layer-group"></i> Section</label>
            <select class="form-select" id="section_" name="section_" required>
                <optgroup label="ZONE THIAROYE YEUMBEUL">
                    <option value="Homme">Thiaroye Yeumbeul 1</option>
                    <option value="Femme">Thiaroye Yeumbeul 2</option>
                    <option value="Homme">Seydou Nourou</option>
                    <option value="Femme">Thiaroye Kaw 1</option>
                    <option value="Homme">Thiaroye Kaw 2</option>
                </optgroup>
                <optgroup label="ZONE THIAROYE AFIA">
                    <option value="Homme">Tivaouane Afia</option>
                    <option value="Femme">Tivaouane Yeumbeul</option>
                    <option value="Homme">Medina Yeumbeul</option>
                    <option value="Femme">Daroul Arkham</option>
                </optgroup>
                <optgroup label="ZONE BOUNE">
                    <option value="Homme">Tivaouane Alwar</option>
                    <option value="Femme">Boune</option>
                    <option value="Homme">Comico</option>
                    <option value="Femme">Kawsara</option>
                </optgroup>
                <optgroup label="ZONE SAM SAM">
                    <option value="Homme">Aïnoumady</option>
                    <option value="Femme">Sam Sam B</option>
                    <option value="Homme">Sam Sam 3</option>
                </optgroup>
            </select>
        </div>

        <!-- Fonction -->
        <div class="mb-3">
            <label for="fonction_p" class="form-label"><i class="fas fa-briefcase"></i> Fonction</label>
            <select class="form-select" id="fonction_p" name="fonction_p" required>
                <option value="Homme">PF</option>
                <option value="Femme">CA</option>
                <option value="Femme">CIPS</option>
                <option value="Femme">CL</option>
                <option value="Femme">CTC</option>
            </select>
        </div>

        <!-- Bouton de soumission -->
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Ajouter</button>
    </form>
</div>

<!-- Script pour afficher/masquer le mot de passe -->
<script>
    function togglePassword() {
        var passwordField = document.getElementById("password_p");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>