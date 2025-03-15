<?php 
$sql="SELECT * FROM reunion";
$reunions= $db->query($sql)->fetchAll();

?>
<a class="btn btn-success mt-3" href="ajout_r.php">
<i class="fas fa-plus-circle">Ajouter une réunion</i>
</a>

<div class="container justify-content-center mt-5 ">
<table class="table table-striped table-bordered shadow-lg rounded table-primary text-center">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Type</th>
      <th scope="col">Staut</th>
      <th scope="col">Action</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($reunions as $reunion): ?>
        <tr>
      <td scope="row"><?php echo $reunion['date_r'] ?></td>
      <td scope="row"><?php echo $reunion['titre_r'] ?></td>
      <td scope="row"><?php echo $reunion['statut_r'] ?></td>
      <td>
      <a class="btn btn-primary" href="#"><i class="fas fa-edit"></i>modifier</a>
      <a class="btn btn-danger" href="#"><i class="fas fa-trash-alt"></i>supprimer</a>
      </td>
      <td><button class="btn btn-info"><i class="bi bi-eye"></i> Voir plus</button></td>
    </tr>
    <?php endforeach ;?>
    
  </tbody>
</table>
</div>

