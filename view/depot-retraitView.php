<?php 
    $site_title = "Dépot / Retrait";
    include ("view/template/doctype_html.php");
    include ("view/template/nav.php");
    include ("view/template/header.php");
?>

<h2>Réaliser une opération</h2>
<form class="mt-5 fullForm" method="post" action="">
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="account_id">Choisissez votre compte</label>
        <select class="form-control" id="account_id" name="account_id">
        <?php ?>
        <?php endforeach ?>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="operation">Type d'opération</label>
        <select class="form-control" id="operation" name="operation_type">
        <option value="crédit">Dépot</option>
        <option value="débit">Retrait</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="amount">Montant en euros</label><br>
        <input class="form-control" name="amount" type="number" step="1" id="amount" min="1" value="1">
    </div>
    <div class="text-center col-md-12">
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="operation">Exécuter</button>
    </div>
</div>
</form>

<?php 
    include ("view/template/footer.php");
?>