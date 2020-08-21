<?php
/* Smarty version 3.1.30, created on 2020-08-21 17:09:27
  from "C:\xampp\htdocs\mesprojets\php\samane\samanemvc-bq\src\view\welcome\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f3fe3a7c50007_58412330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3eff3b5a119335dd2a9f23ec64fd010008757bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\php\\samane\\samanemvc-bq\\src\\view\\welcome\\index.html',
      1 => 1597933430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3fe3a7c50007_58412330 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css" />
    <!-- integration de javascript dans le moteur de rendu de vue Smarty -->
    
    <?php echo '<script'; ?>
 language=javascript>
        function load_design() {
            document.getElementById("design_js").style.color = "#40007d";
        }
    <?php echo '</script'; ?>
>
    
</head>

<body onload="load_design()">
    <div class="nav navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav">
            <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Accueil</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientMoral/add">Ajout de Client Moral </a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
clientPhysique/add">Ajout Client Physique </a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
compte/add">Ajout de Compte </a></li>
        </ul>
    </div>
    <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />

    <div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:160px;">
        <div class="panel panel-info">
            <div class="panel-heading">BIENVENUE A LA BANQUE DU PEUPLE</div>
            <div class="panel-body">
                <div class="alert alert-success" style="font-size:18px; text-align:justify;">
                    Une équipe qui gagne et chaque centime compte.
                    <br/>
                </div>
                <div id="design_js">MODELE DEVELOPPE PAR Ngor SECK !
                    <h1>Version 1.9.3 Doctrine ORM</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php }
}
