<?php
/* Smarty version 3.1.30, created on 2020-08-21 17:09:34
  from "C:\xampp\htdocs\mesprojets\php\samane\samanemvc-bq\src\view\clientMoral\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3fe3ae1cf126_64035770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fee7dfff10ab18ca8d005d5710e3f095b8373821' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\php\\samane\\samanemvc-bq\\src\\view\\clientMoral\\add.html',
      1 => 1597932484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3fe3ae1cf126_64035770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout des Client Moral</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css">
</head>

<body>

    <div class="container col-md-8 col-md-offset-2" style="margin-top: 40px;">
        <?php if (isset($_smarty_tpl->tpl_vars['ok']->value) && $_smarty_tpl->tpl_vars['ok']->value == 0) {?>
        <div class="alert alert-danger">Echec de l'ajout du Client</div>
        <?php }?>
        <div class="panel panel-primary">
            <div class="panel-heading">Ajout Client Moral</div>
            <div class="panel-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientMoral/add" method="post">
                    <div class="form-group">
                        <label class="control-label">Raison Social</label>
                        <input type="text" class="form-control" name="raisonSocial">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nom</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Telephone</label>
                        <input type="text" class="form-control" name="telephone">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Adresse</label>
                        <input type="text" class="form-control" name="adresse">
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
        <div class="alert alert-success">Listing du ClientMoral reussi</div>

        <div class="panel panel-primary">
            <div class="panel-heading">Liste des Client Moral</div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Raison Social</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientMorals']->value, 'clientMoral');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clientMoral']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientMoral']->value->getId();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientMoral']->value->getRaisonSocial();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientMoral']->value->getNom();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientMoral']->value->getAdresse();?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['clientMoral']->value->getTelephone();?>
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

</html>

</html><?php }
}
