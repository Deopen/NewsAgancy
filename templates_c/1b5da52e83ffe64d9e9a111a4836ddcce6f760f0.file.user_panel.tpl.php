<?php /* Smarty version Smarty-3.1.20, created on 2015-05-16 19:17:07
         compiled from "./templates/user_panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3441070345550f6333938c7-99578059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5da52e83ffe64d9e9a111a4836ddcce6f760f0' => 
    array (
      0 => './templates/user_panel.tpl',
      1 => 1431796626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3441070345550f6333938c7-99578059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_5550f6334004f5_49447300',
  'variables' => 
  array (
    'admin' => 0,
    'username' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5550f6334004f5_49447300')) {function content_5550f6334004f5_49447300($_smarty_tpl) {?><!doctype html><html><head><meta http-equiv="content-type" content="text/html; charset=windows-1252"><?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?><title>user_panel</title><?php } else { ?><title>admin_panel</title><?php }?></head>  <body><table id="mainDiv" border="0" style="	<?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?>	background-image: url(./img/admin_back.png);	<?php } else { ?>	background-image: url(./img/deopen_background.png);	<?php }?>	background-position: center; 	background-repeat: no-repeat;	text-align: center;		background-size: contain;		position: relative;	">		<tr><td align="center">	<img id="banner" src="./img/mini_logo.png" />	</tr></td>			<tr><td>	<table border=3 align="center">	<tr> <td>==&nbsp<font color="white">	<?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?>Admin<?php }?>	<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</font>&nbsp==</td> </tr>	</table>	</td></tr>			<tr><td>	<button type="button" id="insert_news" onClick="location.href='register_news.php'"	style=";display:table-cell;border: 0; background: transparent"	onmousemove="mouseMove(this.id)" 		onmouseleave="mouseLeave(this.id)"	>	<img src="./img/insert_news_button.png" alt="insert_news"/>	</button>	</td></td>		<tr><td>	<button type="button" id="edit_profile" onClick="location.href='user_edit.php'"	style=";display:table-cell;border: 0; background: transparent"	onmousemove="mouseMove(this.id)"	onmouseleave="mouseLeave(this.id)"	>	<img src="./img/edit_profile_button.png" alt="edit_profile"/>	</button>	</td></td>			<tr><td>	<button type="button" id="view_news" onClick="location.href='news_reader.php'"	style=";display:table-cell;border: 0; background: transparent"	onmousemove="mouseMove(this.id)"	onmouseleave="mouseLeave(this.id)"	>	<img src="./img/view_news_button.png" alt="view_news"/>	</button>	</td></td>			<?php if (isset($_smarty_tpl->tpl_vars['admin']->value)) {?>		<tr><td>	<button type="button" id="users_view" onClick="location.href='users_view.php'"	style=";display:table-cell;border: 0; background: transparent"	onmousemove="mouseMove(this.id)"	onmouseleave="mouseLeave(this.id)"	>	<img src="./img/users_view_button.png" alt="users_view"/>	</button>	</td></td>		<?php }?>		<tr><td>	<button type="button" id="logout" onClick="location.href='logout.php'"	style=";display:table-cell;border: 0; background: transparent"	onmousemove="mouseMove(this.id)" 		onmouseleave="mouseLeave(this.id)"	>	<img src="./img/logout_button.png" alt="logout"/>	</button>	</td></td>		<?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>	<tr><td>	<font color=red size=3><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</font>	</td></tr>	<?php }?>		</table>		</div><script>		function mouseMove(ID){					if (ID=="logout")			document.getElementById(ID).			innerHTML="<img src=\"./img/logout_button_on.png\" alt=\"logout\"\>"			else if (ID=="insert_news")			document.getElementById(ID).			innerHTML="<img src=\"./img/insert_news_button_on.png\" alt=\"insert_news\"\>"			else if (ID=="edit_profile")			document.getElementById(ID).			innerHTML="<img src=\"./img/edit_profile_button_on.png\" alt=\"edit_profile\"\>"			else if (ID=="users_view")			document.getElementById(ID).			innerHTML="<img src=\"./img/users_view_button_on.png\" alt=\"users_view\"\>"			else if (ID=="view_news")			document.getElementById(ID).			innerHTML="<img src=\"./img/view_news_button_on.png\" alt=\"view_news\"\>"							}//end mouse move						function mouseLeave(ID){			if (ID=="logout")			document.getElementById(ID).innerHTML="<img src=\"./img/logout_button.png\" alt=\"logout\"\>"			else if (ID=="insert_news")			document.getElementById(ID).			innerHTML="<img src=\"./img/insert_news_button.png\" alt=\"insert_news\"\>"			else if (ID=="edit_profile")			document.getElementById(ID).			innerHTML="<img src=\"./img/edit_profile_button.png\" alt=\"edit_profile\"\>"			else if (ID=="users_view")			document.getElementById(ID).			innerHTML="<img src=\"./img/users_view_button.png\" alt=\"users_view\"\>"			else if (ID=="view_news")			document.getElementById(ID).			innerHTML="<img src=\"./img/view_news_button.png\" alt=\"view_news\"\>"								}//end mouse move		        function autoResizeDiv()        {            document.getElementById('mainDiv').style.width = window.innerWidth +'px';        }        window.onresize = autoResizeDiv;        autoResizeDiv();</script></body></html><?php }} ?>
