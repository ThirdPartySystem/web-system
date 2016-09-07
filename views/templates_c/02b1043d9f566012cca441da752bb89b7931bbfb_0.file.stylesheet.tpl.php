<?php /* Smarty version 3.1.24, created on 2016-09-07 23:30:24
         compiled from "C:/xampp/htdocs/web-system/views/templates/common/stylesheet.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:482857d02480de3a12_03607007%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b1043d9f566012cca441da752bb89b7931bbfb' => 
    array (
      0 => 'C:/xampp/htdocs/web-system/views/templates/common/stylesheet.tpl',
      1 => 1473256792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '482857d02480de3a12_03607007',
  'variables' => 
  array (
    'styleDir' => 0,
    'controller' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d02480de9156_45863966',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d02480de9156_45863966')) {
function content_57d02480de9156_45863966 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '482857d02480de3a12_03607007';
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/init.css?ver=1.0" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/header.css?ver=1.0" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/footer.css?ver=1.0" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo $_smarty_tpl->tpl_vars['styleDir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
.css?ver=1.0" rel="stylesheet" type="text/css" media="all"><?php }
}
?>