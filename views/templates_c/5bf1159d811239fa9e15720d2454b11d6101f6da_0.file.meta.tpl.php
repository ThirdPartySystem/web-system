<?php /* Smarty version 3.1.24, created on 2016-09-07 23:30:24
         compiled from "C:/xampp/htdocs/web-system/views/templates/common/meta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:289557d02480dc11c7_15794378%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bf1159d811239fa9e15720d2454b11d6101f6da' => 
    array (
      0 => 'C:/xampp/htdocs/web-system/views/templates/common/meta.tpl',
      1 => 1473256792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289557d02480dc11c7_15794378',
  'variables' => 
  array (
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d02480dc5777_06829628',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d02480dc5777_06829628')) {
function content_57d02480dc5777_06829628 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '289557d02480dc11c7_15794378';
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
<meta name="viewport" content="width=device-width"/><?php }
}
?>