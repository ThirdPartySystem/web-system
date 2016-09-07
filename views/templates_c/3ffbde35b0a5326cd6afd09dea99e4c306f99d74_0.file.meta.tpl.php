<?php /* Smarty version 3.1.24, created on 2016-09-07 22:46:23
         compiled from "/Applications/MAMP/htdocs/web-system/views/templates/common/meta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:90267109857d01a2fdcedb5_88578809%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ffbde35b0a5326cd6afd09dea99e4c306f99d74' => 
    array (
      0 => '/Applications/MAMP/htdocs/web-system/views/templates/common/meta.tpl',
      1 => 1473255878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90267109857d01a2fdcedb5_88578809',
  'variables' => 
  array (
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d01a2fe1e6f6_91678843',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d01a2fe1e6f6_91678843')) {
function content_57d01a2fe1e6f6_91678843 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '90267109857d01a2fdcedb5_88578809';
?>
<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
<meta name="viewport" content="width=device-width"/><?php }
}
?>