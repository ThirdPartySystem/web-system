<?php /* Smarty version 3.1.24, created on 2016-09-07 22:37:40
         compiled from "/Applications/MAMP/htdocs/web-system/views/templates/common.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:74127828457d018244d9ec6_77456322%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b6eda31cb51d9a9cd7ec081d05cda14b0ed0ad3' => 
    array (
      0 => '/Applications/MAMP/htdocs/web-system/views/templates/common.tpl',
      1 => 1473255458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74127828457d018244d9ec6_77456322',
  'variables' => 
  array (
    'templatePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d0182453f794_81882630',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d0182453f794_81882630')) {
function content_57d0182453f794_81882630 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '74127828457d018244d9ec6_77456322';
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