<?php /* Smarty version Smarty-3.1.20, created on 2015-04-24 18:14:20
         compiled from "./templates/register.TPL" */ ?>
<?php /*%%SmartyHeaderCode:72375515955340377c38049-82617211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c5fae108e25d68bde98b73c2b12f24ba3c17c70' => 
    array (
      0 => './templates/register.TPL',
      1 => 1429892054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72375515955340377c38049-82617211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55340377c82644_85482088',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55340377c82644_85482088')) {function content_55340377c82644_85482088($_smarty_tpl) {?><!doctype html><html><head><meta http-equiv="content-type" content="text/html; charset=windows-1252">  <title>index.php</title></head>  <body><!--    <div style="text-align: center;height: 30%;"><img style="width: 130px; height: 212px;" src="./img/deopen_colorful_logo_1_128.png"><br></div>--><form method="POST" action="register_contact_info.php" name=loginForm><div style="	background-image: url(./img/register_back.png);	background-position: center; 	background-repeat: no-repeat;	text-align: center;	height: 60%;	width: 100%;		background-size: contain;	position: relative;	display: table;		">	<div style="	padding-top:110px;		">	<input type="text" style="font-size:15px; text-align: center; display:table-cell" 	name="username" placeholder="Name" mozactionhint="next" size=12 />		<input type="text" style="font-size:15px; text-align: center; display:table-cell" 	name="username" placeholder="family" mozactionhint="next" size=12 />	</div>	<div style="	padding-top:15px;		">	<input type="text" style="font-size:15px; text-align: center; display:table-cell" 	name="username" placeholder="Username" mozactionhint="next" size=12 />		<input type="password" style="font-size:15px; text-align: center; display:table-cell"	name="password" placeholder="Password" mozactionhint="next" size=12 />	</div>	<div style="	padding-top:25px;					">	<font size=3 color="white">Birthdate:</font>	<input type= "date" name = "birth_date" />	</div>	<div style="	padding-top:50px;	">	<button type="submit"	style=";display:table-cell;border: 0; background: transparent"	>	<img src="./img/next_button.png" alt="submit"/>	</button>			<div style="padding-top:30px">	<input type="hidden" style="display:table-cell"/>	</div>	</div></form></body></html><?php }} ?>
