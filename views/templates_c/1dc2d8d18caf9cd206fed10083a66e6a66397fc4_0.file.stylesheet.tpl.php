<?php /* Smarty version 3.1.24, created on 2016-09-07 22:46:23
         compiled from "/Applications/MAMP/htdocs/web-system/views/templates/common/stylesheet.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53092349457d01a2fe26d60_07981214%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dc2d8d18caf9cd206fed10083a66e6a66397fc4' => 
    array (
      0 => '/Applications/MAMP/htdocs/web-system/views/templates/common/stylesheet.tpl',
      1 => 1473255891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53092349457d01a2fe26d60_07981214',
  'variables' => 
  array (
    'styleDir' => 0,
    'controller' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d01a2fe34eb6_20430838',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d01a2fe34eb6_20430838')) {
function content_57d01a2fe34eb6_20430838 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53092349457d01a2fe26d60_07981214';
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