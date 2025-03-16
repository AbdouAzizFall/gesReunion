<div class="container mt-5">
        <form action="votre_script_serveur.php" method="POST">
            <!-- Type de réunion -->
            <div class="mb-3">
                <label for="type_r" class="form-label"><i class="fas fa-cogs"></i> Type de réunion</label>
                <select class="form-select" id="type_r" name="type_r" required>
                    <option value="Conseil">Conseil</option>
                    <option value="Administration">Administration</option>
                    <option value="CIPS">CIPS</option>
                    <option value="Logistique">Logistique</option>
                    <option value="Bureau Conseil">Bureau Conseil</option>
                </select>
            </div>

            <!-- Date de la réunion -->
            <div class="mb-3">
                <label for="date_r" class="form-label"><i class="fas fa-calendar-alt"></i> Date</label>
                <input type="date" class="form-control" id="date_r" name="date_r" required>
            </div>

            <!-- Lieu de la réunion -->
            <div class="mb-3">
                <label for="lieu_r" class="form-label"><i class="fas fa-map-marker-alt"></i> Lieu</label>
                <input type="text" class="form-control" id="lieu_r" name="lieu_r" required>
            </div>

            <!-- Heure de début -->
            <div class="mb-3">
                <label for="hd_r" class="form-label"><i class="fas fa-clock"></i> Heure de début</label>
                <input type="time" class="form-control" id="hd_r" name="hd_r" required>
            </div>

            <!-- Heure de fin -->
            <div class="mb-3">
                <label for="hf_r" class="form-label"><i class="fas fa-clock"></i> Heure de fin</label>
                <input type="time" class="form-control" id="hf_r" name="hf_r" required>
            </div>

            <!-- Ordre du jour -->
            <div class="mb-3">
                <label for="oj_r" class="form-label"><i class="fas fa-list"></i> Ordre du jour</label>
                <textarea class="form-control" id="oj_r" name="oj_r" rows="3" required></textarea>
            </div>

            <!-- Participants -->
            <div class="mb-3">
                <label for="mail_participant" class="form-label"><i class="fas fa-users"></i> Participants</label>
                <select multiple class="form-select" id="mail_participant" name="mail_participant[]" size="5" required>
                    <!-- Options générées dynamiquement via PHP (ou autre serveur) -->
                    <option value="participant1@example.com">participant1@example.com</option>
                    <option value="participant2@example.com">participant2@example.com</option>
                    <!-- Ajoute les participants disponibles ici -->
                </select>
                <button type="button" class="btn btn-link mt-2" onclick="selectAll()">Sélectionner tout</button>
            </div>

            <!-- Secrétaire -->
            <div class="mb-3">
                <label for="sec_r" class="form-label"><i class="fas fa-user"></i> Secrétaire</label>
                <input type="text" class="form-control" id="sec_r" name="sec_r" required>
            </div>

            <!-- President seance -->
            <div class="mb-3">
                <label for="sec_r" class="form-label"><i class="fas fa-user"></i> Président de séance</label>
                <input type="text" class="form-control" id="sec_r" name="sec_r" required>
            </div>

            <!-- Compte rendu -->

            <div class="mb-3">
                <label for="cr_r" class="form-label"><i class="fas fa-file-alt"></i> Compte rendu</label>
                <textarea class="form-control" id="oj_r" name="cr_r" rows="12"  required></textarea>
            </div>

            <!-- Statut de la réunion -->
            <div class="mb-3">
                <label for="statut_r" class="form-label"><i class="fas fa-check-circle"></i> Statut</label>
                <select class="form-select" id="statut_r" name="statut_r" required>
                    <option value="Terminée">Terminée</option>
                    <option value="Planifiée">Planifiée</option>
                    <option value="Annulée">Annulée</option>
                </select>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Sauvegarder</button>
        </form>
    </div>

    <script>
        // Fonction pour sélectionner tous les participants
        function selectAll() {
            var select = document.getElementById('mail_participant');
            for (var i = 0; i < select.options.length; i++) {
                select.options[i].selected = true;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>