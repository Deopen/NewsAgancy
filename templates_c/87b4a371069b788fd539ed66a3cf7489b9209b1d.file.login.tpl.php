<?php /* Smarty version Smarty-3.1.20, created on 2015-05-16 20:31:31
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1848282317553a0c0a6342a9-79827543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87b4a371069b788fd539ed66a3cf7489b9209b1d' => 
    array (
      0 => './templates/login.tpl',
      1 => 1431801090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1848282317553a0c0a6342a9-79827543',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_553a0c0a6811b9_58757388',
  'variables' => 
  array (
    'suggested_username' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553a0c0a6811b9_58757388')) {function content_553a0c0a6811b9_58757388($_smarty_tpl) {?><!doctype html><html><head><meta http-equiv="content-type" content="text/html; charset=windows-1252"><script>function mouseMove(ID){	if (ID=="login")			document.getElementById(ID).			innerHTML="<img src=\"./img/login_button_on.png\" alt=\"logout\"\>"	else if (ID=="register")			document.getElementById(ID).			innerHTML="<img src=\"./img/register_button_on.png\" alt=\"insert_news\"\>"			}//end mouseMovefunction mouseLeave(ID){	if (ID=="login")			document.getElementById(ID).			innerHTML="<img src=\"./img/login_button.png\" alt=\"logout\"\>"	else if (ID=="register")			document.getElementById(ID).			innerHTML="<img src=\"./img/register_button.png\" alt=\"insert_news\"\>"}//end mouseLeave</script><title>login.php</title></head>  <body><form method="POST" action="login.php" name="loginForm"><table id="mainDiv" border="0" style="	background-image: url(./img/deopen_background.png);	background-position: center; 	background-repeat: no-repeat;	text-align: center;		background-size: contain;		position: relative;	">		<tr><td align="center">	<img id="banner" src="./img/mini_logo.png" />	</tr></td>		<tr><td>	<table align=center border=0><tr><td>		<?php if (isset($_smarty_tpl->tpl_vars['suggested_username']->value)) {?>	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['suggested_username']->value;?>
" style="font-size:15px;display:table-cell; text-align: center;" 	name="username" placeholder="Username" mozactionhint="next" size=30 />	<?php } else { ?>	<input type="text" style="font-size:15px;display:table-cell; text-align: center;" 	name="username" placeholder="Username" mozactionhint="next" size=30 />	<?php }?>	</td></tr>	<tr><td>&nbsp</td></tr>		<tr><td>	<input type="password" style="font-size:15px;display:table-cell; text-align: center"	name="password" placeholder="Password" mozactionhint="next" size=30	 />	</td></tr>	<tr><td>&nbsp</td></tr>		<tr><td>&nbsp</td></tr>			<!--		<tr><td style="font-size:90%">	<input type="checkbox" style="font-size:15px;display:table-cell; text-align: center"	name="remember" placeholder="Password" mozactionhint="next" size=20 />	Remember me	</td></tr>	<tr><td>&nbsp</td></tr>	-->	<tr><td>	<table border=0 align=center>	<tr><td>	<button type="button" id="register" onClick="location.href='register.php'"	onmouseleave="mouseLeave(this.id)"	onmousemove="mouseMove(this.id)"	style=";display:table-cell;border: 0; background: transparent"> 		<img src="./img/register_button.png" alt="submit"/>	</button>	</td><td>	<button type="submit" id="login"	style=";display:table-cell;border: 0; background: transparent"	onmouseleave="mouseLeave(this.id)"	onmousemove="mouseMove(this.id)"		>	<img src="./img/login_button.png" alt="submit"/>	</button>	</td></tr></table>	</td></tr>	</table>	</td>	</tr>	<?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>	<tr><td>	<font color=red size=3><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</font>	</td></tr>	<?php }?>	</table>		</div></form><script>        function autoResizeDiv()        {//            document.getElementById('mainDiv').style.height = window.innerHeight*0.5 +'px';            document.getElementById('mainDiv').style.width = window.innerWidth 	+'px';        }        window.onresize = autoResizeDiv;        autoResizeDiv();</script></body></html><?php }} ?>
