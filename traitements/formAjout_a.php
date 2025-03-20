<div class="container mt-5">
    <h2 class="mb-4"><i class="fas fa-user-plus"></i> Ajouter un administrateur</h2>
    
    <form action="traitements/ajout_admin.php" method="POST">
        <input type="hidden" id="id_a" name="id_a">

        <div class="mb-3">
            <label for="mail_a" class="form-label"><i class="fas fa-envelope"></i> Email</label>
            <input type="email" class="form-control" id="mail_a" name="mail_a" required>
        </div>

        <div class="mb-3">
            <label for="password_p" class="form-label"><i class="fas fa-lock"></i> Mot de passe</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password_a" name="password_a" required>
                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
        </div>
 
        <div class="mb-3">
            <label for="nom_a" class="form-label"><i class="fas fa-user"></i> Nom</label>
            <input type="text" class="form-control" id="nom_a" name="nom_a" required>
        </div>

        <div class="mb-3">
            <label for="prenom_a" class="form-label"><i class="fas fa-user"></i> Prénom</label>
            <input type="text" class="form-control" id="prenom_a" name="prenom_a" required>
        </div>
 

        <div class="mb-3">
            <label for="tel_a" class="form-label"><i class="fas fa-phone"></i> Téléphone</label>
            <input type="tel" class="form-control" id="tel_a" name="tel_a" required>
        </div>

         
        <div class="mb-3">
            <label for="fonction_a" class="form-label"><i class="fas fa-briefcase"></i> Fonction</label>
            <select class="form-select" id="fonction_a" name="fonction_a" required>
                <option>PF</option>
                <option>CA</option>
                <option>CIPS</option>
                <option>CL</option>
                <option>CTC</option>
            </select>
        </div>
 
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Ajouter</button>
    </form>
</div>

 <script>
    function togglePassword() {
        var passwordField = document.getElementById("password_a");
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }
</script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>