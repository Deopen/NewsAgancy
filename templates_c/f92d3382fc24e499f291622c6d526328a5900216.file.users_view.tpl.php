<?php /* Smarty version Smarty-3.1.20, created on 2015-05-17 07:36:37
         compiled from "./templates/users_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1419482256555818aab4b6e8-13482369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f92d3382fc24e499f291622c6d526328a5900216' => 
    array (
      0 => './templates/users_view.tpl',
      1 => 1431840995,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1419482256555818aab4b6e8-13482369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_555818aab841a4_44482879',
  'variables' => 
  array (
    'allUsers' => 0,
    'userInfo' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555818aab841a4_44482879')) {function content_555818aab841a4_44482879($_smarty_tpl) {?><!doctype html>
 $_from = $_smarty_tpl->tpl_vars['allUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userInfo']->key => $_smarty_tpl->tpl_vars['userInfo']->value) {
$_smarty_tpl->tpl_vars['userInfo']->_loop = true;
?>
 $_from = $_smarty_tpl->tpl_vars['userInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>

">Edit</a></td>
">Delete</a></td>