<?php 
  $site_title = "Mon compte";
  include ("view/template/doctype_html.php");
  include ("view/template/nav.php");
  include ("view/template/header.php");
?>

<h2>Votre compte</h2>

<!-- 6 appel des index & valeur dans la carte-->
<div >
  <div class="row">

    <div class="card text-center col-12 col-sm-10 col-md-6 col-lg-4 ">
      <section class="card-body">
        <h5 class="card-title"><?php echo $account["account_type"];?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $account["account_number"];?></h6>
        <hr>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $_SESSION["user"]["lastname"] ." ". $_SESSION["user"]["firstname"];?></li>
        </ul>
        <a href="depot-retrait.php" class="btn btn-primary">Dépot/Retrait</a>
        <a href="virement.php" class="btn btn-primary">Virement</a>
        <a href="supprimer.php" class="btn btn-primary">Cloturer</a>
        <a href="compte.php">Retourner sur vos comptes</a>
      </section>
    </div>
    
    <div class="col-12 col-sm-10 col-md-6 col-lg-8">
      <table class="table">
        <thead class="bg-primary">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Opération</th>
            <th scope="col">Montant</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td><?php echo $account["account_type"]; ?></td>
              <td><?php echo $account["operation_type"]; ?></td>
              <td><?php echo $account["operation_amount"];?></td>
              <td><?php echo $account["operation_date"]; ?></td>
            </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>

<?php 
  include ("view/template/footer.php");
?>