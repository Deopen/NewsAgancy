<?php /* Smarty version Smarty-3.1.20, created on 2015-05-19 15:58:37
         compiled from "./templates/news_reader.TPL" */ ?>
<?php /*%%SmartyHeaderCode:2096989904554f59e000d9d2-39739526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88bae594f86c487e74b31c087751e284721ce73d' => 
    array (
      0 => './templates/news_reader.TPL',
      1 => 1432043915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096989904554f59e000d9d2-39739526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_554f59e007f965_37071158',
  'variables' => 
  array (
    'unknown' => 0,
    'viewer' => 0,
    'allNews' => 0,
    'news' => 0,
    'newsId' => 0,
    'title' => 0,
    'likeCount' => 0,
    'context' => 0,
    'owner' => 0,
    'date' => 0,
    'admin' => 0,
    'i' => 0,
    'more' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554f59e007f965_37071158')) {function content_554f59e007f965_37071158($_smarty_tpl) {?><!doctype html>
&nbsp===
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allNews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
" width="20%"><td width="20%">
">
 
">
 </font>
">
 </font>
" >

&nbspat&nbsp<?php echo $_smarty_tpl->tpl_vars['date']->value;?>

" type="button" 
" type="button" 
" type="button" 
" type="button" 
" type="button" 
_<?php echo $_smarty_tpl->tpl_vars['newsId']->value;?>
" type="button" 
" onClick="moreClick(<?php echo $_smarty_tpl->tpl_vars['newsId']->value;?>
)"