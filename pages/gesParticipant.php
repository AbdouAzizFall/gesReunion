<?php 
$sql="SELECT * FROM participant";
$participants= $db->query($sql)->fetchAll();

?>
<a class="btn btn-success mt-3" href="?page=formAjout_p">
<i class="fas fa-plus-circle">Ajouter un participant</i>
</a>

<div class="container justify-content-center mt-5 ">
<table class="table table-striped table-bordered shadow-lg rounded table-primary text-center">
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
      <a class="btn btn-primary" href="#"><i class="fas fa-edit"></i>modifier</a>
      <a class="btn btn-danger" href="?page=supPart&id=<?php echo $participant['id_p'] ?>"
        onclick="return confirm('Voulez vous supprimer ce participant')">
        <i class="fas fa-trash-alt"></i></i>supprimer
      </a>
      </td>
      <td><button class="btn btn-info"><i class="bi bi-eye"></i> Voir plus</button></td>
    </tr>
    <?php endforeach ;?>
    
  </tbody>
</table>
</div>

