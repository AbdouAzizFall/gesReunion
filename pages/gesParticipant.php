<?php 
$sql="SELECT * FROM participant";
$participants= $db->query($sql)->fetchAll();

?>
<a class="btn btn-success mt-3" href="?page=formAjout_p">
<i class="fas fa-plus-circle">Ajouter un participant</i>
</a>
 
<div class="container mt-4">
    <input type="text" id="searchInput" class="form-control" placeholder="Rechercher un participant...">
</div>

<div class="container justify-content-center mt-5 "> 
<table id="participantsTable" class="table table-striped table-bordered shadow-lg rounded table-primary text-center">
  <thead>
    <tr>
      <th scope="col">Prénom</th>
      <th scope="col">Nom</th>
      <th scope="col">Section</th>
      <th scope="col">Fonction</th>
      <th scope="col">Action</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($participants as $participant): ?>
        <tr>
            <td scope="row"><?php echo $participant['prenom_p'] ?></td>
            <td scope="row"><?php echo $participant['nom_p'] ?></td>
            <td scope="row"><?php echo $participant['section_p'] ?></td>
            <td scope="row"><?php echo $participant['fonction_p'] ?></td>
            <td>
                <a class="btn btn-primary" href="?page=modifPart&id=<?php echo $participant['id_p'] ?>"><i class="fas fa-edit"></i>modifier</a>
                <a class="btn btn-danger" href="?page=supPart&id=<?php echo $participant['id_p'] ?>"
                  onclick="return confirm('Voulez vous supprimer ce participant')">
                  <i class="fas fa-trash-alt"></i></i>supprimer
                </a>
            </td>   
            <td>
                <button class="btn btn-info" data-toggle="modal" data-target="#participantModal<?php echo $participant['id_p']; ?>">
                    <i class="bi bi-eye"></i> Voir plus
                  </button>
            </td>
        </tr>
                  <!--Boite de dialogue --> 
                 <div class="modal fade" id="participantModal<?php echo $participant['id_p']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Détails du participant</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class="form-control" value="<?php echo $participant['nom_p']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input type="text" class="form-control" value="<?php echo $participant['prenom_p']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="<?php echo $participant['mail_p']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input type="text" class="form-control" value="<?php echo $participant['tel_p']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Section</label>
                                        <input type="text" class="form-control" value="<?php echo $participant['section_p']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Fonction</label>
                                        <input type="text" class="form-control" value="<?php echo $participant['fonction_p']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Date d'ajout</label>
                                        <input type="date" class="form-control" value="<?php echo $participant['date_ajoutP']; ?>" readonly>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--Code pour fltrage -->
<script>
$(document).ready(function() {
    $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#participantsTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
});
</script>