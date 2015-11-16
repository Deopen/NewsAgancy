<?php /* Smarty version Smarty-3.1.20, created on 2015-05-13 12:55:13
         compiled from "./templates/login.TPL" */ ?>
<?php /*%%SmartyHeaderCode:1004224754553a0530a8e613-33850621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28fe85085beca44c514be40c4ae5b60675836d95' => 
    array (
      0 => './templates/login.TPL',
      1 => 1431514444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1004224754553a0530a8e613-33850621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_553a0530b1bcb1_09080853',
  'variables' => 
  array (
    'suggested_username' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553a0530b1bcb1_09080853')) {function content_553a0530b1bcb1_09080853($_smarty_tpl) {?><!doctype html><html><head><meta http-equiv="content-type" content="text/html; charset=windows-1252">  <title>login.php</title></head>  <body><form method="POST" action="login.php" name="loginForm"><table id="mainDiv" border="0" style="	background-image: url(./img/deopen_background.png);	background-position: center; 	background-repeat: no-repeat;	text-align: center;		background-size: contain;		position: relative;	">		<tr><td align="center">	<img id="banner" src="./img/mini_logo.png" />	</tr></td>		<tr><td>	<table align=center border=0><tr><td>		<?php if (isset($_smarty_tpl->tpl_vars['suggested_username']->value)) {?>	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['suggested_username']->value;?>
" style="font-size:15px;display:table-cell; text-align: center;" 	name="username" placeholder="Username" mozactionhint="next" size=30 />	<?php } else { ?>	<input type="text" style="font-size:15px;display:table-cell; text-align: center;" 	name="username" placeholder="Username" mozactionhint="next" size=30 />	<?php }?>	</td></tr>	<tr><td>&nbsp</td></tr>		<tr><td>	<input type="password" style="font-size:15px;display:table-cell; text-align: center"	name="password" placeholder="Password" mozactionhint="next" size=30	 />	</td></tr>	<tr><td>&nbsp</td></tr>		<tr><td>&nbsp</td></tr>			<!--		<tr><td style="font-size:90%">	<input type="checkbox" style="font-size:15px;display:table-cell; text-align: center"	name="remember" placeholder="Password" mozactionhint="next" size=20 />	Remember me	</td></tr>	<tr><td>&nbsp</td></tr>	-->	<tr><td>	<table border=0 align=center>	<tr><td>	<button type="button" onClick="location.href='register.php'"	style=";display:table-cell;border: 0; background: transparent"> 	<img src="./img/register_button.png" alt="submit"/>	</button>	</td><td>	<button type="submit" 	style=";display:table-cell;border: 0; background: transparent"	>	<img src="./img/login_button.png" alt="submit"/>	</button>	</td></tr></table>	</td></tr>	</table>	</td>	</tr>	<?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>	<tr><td>	<font color=red size=3><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</font>	</td></tr>	<?php }?>	</table>		</div></form><script>        function autoResizeDiv()        {//            document.getElementById('mainDiv').style.height = window.innerHeight*0.5 +'px';            document.getElementById('mainDiv').style.width = window.innerWidth 	+'px';        }        window.onresize = autoResizeDiv;        autoResizeDiv();</script></body></html><?php }} ?>
