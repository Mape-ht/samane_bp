<?php
/* Smarty version 3.1.30, created on 2020-08-21 18:59:47
  from "C:\xampp\htdocs\mesprojets\php\samane\samanemvc-bq\src\view\compte\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3ffd8339e878_79750435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4574304fad3913a0c051e551c050637b4c8564d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\php\\samane\\samanemvc-bq\\src\\view\\compte\\add.html',
      1 => 1598029181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ffd8339e878_79750435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Compte</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css">
</head>

<body>

    <div class="container col-md-8 col-md-offset-2" style="margin-top: 40px;">
        <?php if (isset($_smarty_tpl->tpl_vars['ok']->value) && $_smarty_tpl->tpl_vars['ok']->value == 0) {?>
        <div class="alert alert-danger">Echec de l'ajout du Compte</div>
        <?php }?>
        <div class="panel panel-primary">
            <div class="panel-heading">Ajout Compte</div>
            <div class="panel-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compte/add" method="post">
                    <div class="form-group">
                        <label class="control-label">Type de Compte</label>
                        <input type="text" class="form-control" name="typeCompte">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Numero</label>
                        <input type="text" class="form-control" name="numero">
                    </div>
                    <div class="form-group">
                        <label class="control-label ">Cle Rib</label>
                        <input type="text" class="form-control" name="cleRib">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Solde</label>
                        <input type="text" class="form-control" name="solde">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Date Ouverture</label>
                        <input type="date" class="form-control" name="dateOuverture">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Frais Bancaire</label>
                        <input type="text" class="form-control" name="typefrais">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="ajouter" value="Ajouter">
                        <input type="reset" class="btn btn-danger" name="annuler" value="Annuler">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container col-md-10 col-md-offset-1 " style="margin-top: 40px; ">
        <?php if (isset($_smarty_tpl->tpl_vars['ok']->value) && $_smarty_tpl->tpl_vars['ok']->value == 1) {?>
        <div class="alert alert-success">Listing du Compte reussi</div>

        <div class="panel panel-primary">
            <div class="panel-heading">Liste des Comptes</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type Compte</th>
                            <th>Numero</th>
                            <th>Cle Rib</th>
                            <th>Solde</th>
                            <th>Date Ouverture</th>
                            <th>Frais Bancaire</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comptes']->value, 'compte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['compte']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getTypeCompte();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getNumero();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getCleRib();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getSolde();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getDateOuverture();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['compte']->value->getTypefrais();?>
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
