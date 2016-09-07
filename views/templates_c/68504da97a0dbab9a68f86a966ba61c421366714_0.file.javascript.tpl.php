<?php /* Smarty version 3.1.24, created on 2016-09-07 23:30:24
         compiled from "C:/xampp/htdocs/web-system/views/templates/common/javascript.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1635757d02480e177f3_59160570%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68504da97a0dbab9a68f86a966ba61c421366714' => 
    array (
      0 => 'C:/xampp/htdocs/web-system/views/templates/common/javascript.tpl',
      1 => 1473256792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1635757d02480e177f3_59160570',
  'variables' => 
  array (
    'javaScriptDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_57d02480e1bf29_11871230',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57d02480e1bf29_11871230')) {
function content_57d02480e1bf29_11871230 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1635757d02480e177f3_59160570';
?>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['javaScriptDir']->value;?>
/const.js?ver=1.0" type="text/javascript"  charset="UTF-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['javaScriptDir']->value;?>
/jQuery.js?ver=1.0" type="text/javascript"  charset="UTF-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['javaScriptDir']->value;?>
/all.js?ver=1.0" type="text/javascript"  charset="UTF-8"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49196479-5', 'auto');
  ga('send', 'pageview');
<?php echo '</script'; ?>
>
<?php }
}
?>