<?php /* Smarty version Smarty-3.1.20, created on 2015-05-17 10:38:33
         compiled from "./templates/register_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1055018252554f48a4993bd4-97355355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '253bf7da42d13aeed90839ddb512bc3412f33388' => 
    array (
      0 => './templates/register_news.tpl',
      1 => 1431851911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1055018252554f48a4993bd4-97355355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_554f48a49eccb4_70443264',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554f48a49eccb4_70443264')) {function content_554f48a49eccb4_70443264($_smarty_tpl) {?><!doctype html><html><head>  <!--<script src='https://www.google.com/recaptcha/api.js'></script>--><script> function mouseMove(ID){	if (ID=="send")		document.getElementById(ID).innerHTML="<img src=\"./img/send_button_on.png\" alt=\"send\">"	else if (ID=="back")		document.getElementById(ID).innerHTML="<img src=\"./img/back_button_on.png\" alt=\"back\">"}//end mouseMovefunction mouseLeave(ID){	if (ID=="send")		document.getElementById(ID).innerHTML="<img src=\"./img/send_button.png\" alt=\"send\">"	else if (ID=="back")		document.getElementById(ID).innerHTML="<img src=\"./img/back_button.png\" alt=\"back\">"}//end mouseMove </script><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("register_news", null, 0);?><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title><script> function validateTitleAndContext(){	var title=document.getElementsByName("title")[0].value	var context=document.getElementsByName("context")[0].value	context=context.replace(/^\s+|\s+$/g,'');	if (title.length==0){	    	alert ("Please enter title")    	return false    }	if (context.length==0){	    	alert ("Context can't be empty")    	return false    }    	document.<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
.submit();	}//end validating</script></head>  <body><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
.php" name="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">		<table id="main" border="0" align="center" style="	background-image: url(./img/deopen_background.png);	background-position: center; 	background-repeat: no-repeat;	text-align: center;	background-size: contain;	width:100%;	height:100%;	position: relative;	">	<tr><td>&nbsp&nbsp</td></tr>	<tr><td align="center">	<img id="banner" src="./img/mini_logo.png" />	</tr></td>	<tr><td>&nbsp&nbsp</td></tr>		<tr><td>	<input type="text" style="font-size:15px; text-align: center;" 	name="title" placeholder="Title" size=45 />	</td></tr>			<tr><td>	<textarea name="context"	style="font-size:15px; text-align: center;" 	rows="14" cols="38"> 	</textarea>	</td></tr>	<!--	<tr><td align="center">	<div align="center" class="g-recaptcha" data-sitekey="6LdkoQYTAAAAAL5fW_63ZMoP0yAfYxdzs5Rv8BME"></div>	</tr></td>	-->	<tr><td>	<table border=0 align=center>	<tr><td>	<button type="button" id="back" onClick="javascript:history.back()"	style=";border: 0; background: transparent"	onmousemove="mouseMove(this.id)"	onmouseleave="mouseLeave(this.id)"	>	<img src="./img/back_button.png" alt="back" />	</button>	</td>		<td>	<button type="button"  id="send"	onClick="validateTitleAndContext()"	onmousemove="mouseMove(this.id)"	onmouseleave="mouseLeave(this.id)"	style=	"	border: 0;	background:transparent">	<img src="./img/send_button.png"	alt="send" />	</button>	</td></tr>	</table>	</tr></td>	</table>	</form><script>        function autoResizeDiv()        {            document.getElementById('main').style.height = window.innerHeight*0.8 +'px';        	document.getElementById('main').style.width = window.innerWidth*0.8 +'px';        }window.onresize = autoResizeDiv;autoResizeDiv();</script></body></html><?php }} ?>
