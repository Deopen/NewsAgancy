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
<?php if ($_valid && !is_callable('content_555818aab841a4_44482879')) {function content_555818aab841a4_44482879($_smarty_tpl) {?><!doctype html><html><head><title>admin_users_view</title><script>function mouseMove(ID){	if (ID=="user_panel")			document.getElementById(ID).			innerHTML="<img src=\"./img/user_panel_mini_button_on.png\" alt=\"user_panel\"\>"	}//end mouseMovefunction mouseLeave(ID){	if (ID=="user_panel")			document.getElementById(ID).			innerHTML="<img src=\"./img/user_panel_mini_button_off.png\" alt=\"user_panel\"\>"}//end mouseLeave</script></head><body><table id="mainDiv" border="0" style="	background-image: url(./img/admin_back.png);	background-position: center; 	background-repeat: no-repeat;	text-align: center;		background-size: cover;		position: relative;	">	<tr><td align=center	style="		background-image: url(./img/user_panel_banner.png);	background-position: center; 	background-repeat: no-repeat;	text-align: center;	background-size: cover;	position: relative;"	>		<button align=center type="button" id="user_panel"	onClick="location.href='user_panel.php'"	style=";border: 0; background: transparent"	onmousemove="mouseMove(this.id)"	onmouseleave="mouseLeave(this.id)"	>	<img src="./img/user_panel_mini_button_off.png" alt="home" />	</button>	</td></tr>	<tr><td>	<table border=1 align="center">	<tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Family</b></td>	<td><b>Email</b></td><td><b>user_name</b></td>	<td><b>Edit</b></td><td><b>Delete</b></td>		</tr>	<?php  $_smarty_tpl->tpl_vars['userInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['userInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allUsers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['userInfo']->key => $_smarty_tpl->tpl_vars['userInfo']->value) {
$_smarty_tpl->tpl_vars['userInfo']->_loop = true;
?>	<tr>	<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>	<td>	<?php echo $_smarty_tpl->tpl_vars['e']->value;?>
	</td>	<?php } ?>	<td><a href="user_edit.php?edit_user=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value["username"];?>
">Edit</a></td>	<td><a href="user_edit.php?delete_user=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value["username"];?>
">Delete</a></td>	</tr>	<?php } ?>	</table>	</div><script>        function autoResizeDiv()        {            document.getElementById('mainDiv').style.width = window.innerWidth +'px';        }        window.onresize = autoResizeDiv;        autoResizeDiv();</script></body></html><?php }} ?>
