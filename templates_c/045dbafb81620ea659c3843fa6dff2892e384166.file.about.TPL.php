<?php /* Smarty version Smarty-3.1.20, created on 2015-05-03 13:55:35
         compiled from "./templates/about.TPL" */ ?>
<?php /*%%SmartyHeaderCode:1663052663553cd4fe0707a4-64676438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045dbafb81620ea659c3843fa6dff2892e384166' => 
    array (
      0 => './templates/about.TPL',
      1 => 1430654134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1663052663553cd4fe0707a4-64676438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_553cd4fe0aa863_68538658',
  'variables' => 
  array (
    'email' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553cd4fe0aa863_68538658')) {function content_553cd4fe0aa863_68538658($_smarty_tpl) {?><!doctype html><html><head><meta http-equiv="content-type" content="text/html; charset=windows-1252">  <title>about.php</title></head><body>		<table id="main" border="0" align="center" 	style="	background-image: url(./img/about-back.png);	background-position: center; 	background-repeat: no-repeat;	text-align: center;	background-size: contain;	position: relative;">		<tr><td>&nbsp</td></tr>		<tr><td background="./img/email-back.png" align="center"	style=	"background-repeat:no-repeat;	background-position:center;	background-size: contain;	display: table-cell;	font-size: 20%;	text-align: center; ">		<font size=5><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</font>	</td></tr>		<tr><td background="./img/phone-back.png" align="center"	style="background-repeat:no-repeat;	background-position:center;	background-size: contain;	font-size: 20%;	text-align: center; ">		<font size=5><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</font>	</td></tr>	<tr><td>	<button  type="button" onClick="location.href='login.php'"	style=";display:table-cell;border: 0; background: transparent">	<img src="./img/home_button.png" alt="home" style="width:50% "/>	</button>	</td></tr>	<script>        function autoResizeDiv()        {            document.getElementById('main').style.height = window.innerHeight *0.8 +'px';            document.getElementById('main').style.width = window.innerWidth *0.8 +'px';            document.getElementById('main').style.fontSize = (window.innerHeight)*0.3 +'px';        	document.getElementById('homeButton').style.height = (window.innerHeight)*0.2 +'px';        }        window.onresize = autoResizeDiv;        autoResizeDiv();</script></body></html><?php }} ?>
