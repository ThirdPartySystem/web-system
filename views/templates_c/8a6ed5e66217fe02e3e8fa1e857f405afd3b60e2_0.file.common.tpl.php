<?php /* Smarty version 3.1.24, created on 2016-09-07 23:30:24
         compiled from "C:/xampp/htdocs/web-system/views/templates/common.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:862257d02480cbf217_79025949%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a6ed5e66217fe02e3e8fa1e857f405afd3b60e2' => 
    array (
      0 => 'C:/xampp/htdocs/web-system/views/templates/common.tpl',
      1 => 1473256792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '862257d02480cbf217_79025949',
  'variables' => 
  array (
    'templatePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d02480d26006_50081084',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d02480d26006_50081084')) {
function content_57d02480d26006_50081084 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '862257d02480cbf217_79025949';
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<?php echo $_smarty_tpl->getSubTemplate ("common/meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/stylesheet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("common/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</head>

<body>
<div id="page">
<header>
</header>
<section id="content">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['templatePath']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</section>
<footer>
</footer>
</div><!-- #page -->
</body>
</html><?php }
}
?>