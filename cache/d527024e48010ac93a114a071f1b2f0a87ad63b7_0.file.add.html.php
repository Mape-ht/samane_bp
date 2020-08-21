<?php
/* Smarty version 3.1.30, created on 2020-08-21 17:09:40
  from "C:\xampp\htdocs\mesprojets\php\samane\samanemvc-bq\src\view\clientPhysique\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3fe3b4b7f191_61709247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd527024e48010ac93a114a071f1b2f0a87ad63b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\php\\samane\\samanemvc-bq\\src\\view\\clientPhysique\\add.html',
      1 => 1597932684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3fe3b4b7f191_61709247 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout ClientPhysique</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css">
</head>

<body>

    <div class="container col-md-8 col-md-offset-2" style="margin-top: 40px;">
        <?php if (isset($_smarty_tpl->tpl_vars['ok']->value) && $_smarty_tpl->tpl_vars['ok']->value == 0) {?>
        <div class="alert alert-danger">Echec de l'ajout du Client</div>
        <?php }?>
        <div class="panel panel-primary">
            <div class="panel-heading">Ajout Client Physique</div>
            <div class="panel-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientPhysique/add" method="post">
                    <div class="form-group">
                        <label class="control-label">Nom</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Prenom</label>
                        <input type="text" class="form-control" name="prenom">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Adresse</label>
                        <input type="text" class="form-control" name="adresse">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Telephone</label>
                        <input type="text" class="form-control" name="telephone">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Statut</label>
                        <input type="text" class="form-control" name="statut">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Salaire</label>
                        <input type="text" class="form-control" name="salaire">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="ajouter" value="Ajouter">
                        <input type="reset" class="btn btn-danger" name="annuler" value="Annuler">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container col-md-10 col-md-offset-1" style="margin-top: 40px;">
        <?php if (isset($_smarty_tpl->tpl_vars['ok']->value) && $_smarty_tpl->tpl_vars['ok']->value == 1) {?>
        <div class="alert alert-success">Listing du Client Physique reussi</div>

        <div class="panel panel-primary">
            <div class="panel-heading">Liste des Client Physique</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Statut</th>
                            <th>Salaire</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientPhysiques']->value, 'clientPhysique');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clientPhysique']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientPhysique']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientPhysique']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientPhysique']->value->getPrenom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientPhysique']->value->getAdresse();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientPhysique']->value->getTelephone();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientPhysique']->value->getStatut();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientPhysique']->value->getSalaire();?>
</td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
            </div>
        </div>
        <?php }?>
    </div>

</body>

</html><?php }
}
