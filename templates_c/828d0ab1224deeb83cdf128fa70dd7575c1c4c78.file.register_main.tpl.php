<?php /* Smarty version Smarty-3.1.20, created on 2015-05-29 09:31:48
         compiled from "./templates/register_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13239012965551028119cee2-26663001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '828d0ab1224deeb83cdf128fa70dd7575c1c4c78' => 
    array (
      0 => './templates/register_main.tpl',
      1 => 1432884699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13239012965551028119cee2-26663001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_55510281245581_69898647',
  'variables' => 
  array (
    'edit' => 0,
    'title' => 0,
    'name' => 0,
    'family' => 0,
    'username' => 0,
    'email' => 0,
    'err' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55510281245581_69898647')) {function content_55510281245581_69898647($_smarty_tpl) {?><!doctype html><html><head> <?php if (!isset($_smarty_tpl->tpl_vars['edit']->value)) {?> <script src='https://www.google.com/recaptcha/api.js'></script> <?php }?><script> function validatePasswordThenSubmit() {          var pass=document.getElementsByName("pass")[0].value    var pass_c=document.getElementsByName("pass_c")[0].value    var name=document.getElementsByName("name")[0].value    var family=document.getElementsByName("family")[0].value    var username=document.getElementsByName("username")[0].value	var email=document.getElementsByName("email")[0].value	var email_c=document.getElementsByName("email_c")[0].value	    if (name.length==0){	    	alert ("Please enter your name")    	return false    }    if (family.length==0){	    	alert ("Please enter your family")    	return false    }        if (username.length==0){	    	alert ("Please choose a username")    	return false    }        if (email.length==0){		alert ("Please enter your email")		return false        }	var letters = /^[A-Za-z]+$/;        if ( !letters.test(name) || !letters.test(family)) {        	alert ("Please enter your Name or Family correctly")    	return false    }            if (pass.length==0){	    	alert ("Please choose a password")    	return false    }        if (pass!=pass_c){    	alert("Passwords doesn't match")    	return false    }        if (email!=email_c){		alert ("email confirmation does'nt match!")		return false	}	var emailRe = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;	if (!emailRe.test(email)){		alert ("email format doesn't match!")		return false;	}            document.registerMainForm.submit();	}//end functionfunction mouseMove(ID){	if (ID=="register")		document.getElementById(ID).innerHTML="<img src=\"./img/register_button_icon_on.png\" alt=\"send\">"	else if (ID=="back")		document.getElementById(ID).innerHTML="<img src=\"./img/back_button_on.png\" alt=\"back\">"	else if (ID=="edit")		document.getElementById(ID).innerHTML="<img src=\"./img/edit_button_on.png\" alt=\"back\">"}//end mouseMovefunction mouseLeave(ID){	if (ID=="register")		document.getElementById(ID).innerHTML="<img src=\"./img/register_button_icon.png\" alt=\"send\">"	else if (ID=="back")		document.getElementById(ID).innerHTML="<img src=\"./img/back_button.png\" alt=\"back\">"	else if (ID=="edit")		document.getElementById(ID).innerHTML="<img src=\"./img/edit_button.png\" alt=\"back\">"}//end mouseMove</script><?php if (!isset($_smarty_tpl->tpl_vars['edit']->value)) {?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("register", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable("edit", null, 0);?><?php }?><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
.php</title></head>  <body><?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?><form method="POST" action="user_edit.php" name="registerMainForm"><?php } else { ?><form method="POST" action="register.php" name="registerMainForm"><?php }?>		<table id="main" border="0" align="center" style="	background-image: url(./img/deopen_background.png);	background-position: center; 	background-repeat: no-repeat;	text-align: center;	background-size: contain;	width:100%;	height:100%;	position: relative;	">	<tr><td>&nbsp&nbsp</td></tr>	<tr><td align="center">	<img id="banner" src="./img/mini_logo.png" />	</tr></td>	<tr><td>&nbsp&nbsp</td></tr>		<tr><td>		<table border=0 align=center>	<tr><td>	<label for="name"><font color="orange" size=3>*</font></label>	</td><td>	<input type="text" <?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php }?>		style="font-size:15px; text-align: center;" 	name="name" placeholder="Name" id="fullname" 	mozactionhint="next" size=40 />	</td></tr>	</table>	<table border=0 align=center>	<tr><td>	<label for="family"><font color="orange" size=3>*</font></label>	</td><td>	<input type="text" style="font-size:15px; text-align: center;" 	<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> value=<?php echo $_smarty_tpl->tpl_vars['family']->value;?>
 <?php }?>		name="family" placeholder="Family" id="fullname" 	mozactionhint="next" size=40 />	</td></tr>	</table>		<tr><td>	<table border=0 align=center>	<tr><td>	<label for="username"><font color="orange" size=3>*</font></label>	</td><td>	<input type="text" 	<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?> value=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <?php }?>		onkeyup="checkUniqUser(this.value)"	style="font-size:15px; text-align: center; " 	name="username" id="username" placeholder="Username" mozactionhint="next" size=40			 />		</td></tr>	</table>	</td></tr>	<tr><td>	<table border=0 align=center>	<tr><td>	<label for="pass"><font color="orange" size=3>*</font></label>	</td><td colspan=2>	<input type="password" style="font-size:15px; text-align: center;" 	name="pass" id="pass" placeholder="password" mozactionhint="next" size=40 />	</td></tr>	</table></td></tr>	<tr><td>	<table border=0 align=center>	<tr><td><label for="pass_c"><font color="orange" size=3>*</font></label></td>	<td>	<input type="password" style="font-size:15px; text-align: center; " 	name="pass_c" id="pass_c" placeholder="Password Confirmation"	 mozactionhint="next" size=40 />		</td></tr>	</table></td></tr>		<tr><td>	<table border=0 align=center>	<tr><td><label for="email"><font color="orange" size=3>*</font></label></td>	<td>	<input type="text" 	<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<?php }?>	style="font-size:15px; text-align: center; " 	name="email" id="email" placeholder="Email"	 mozactionhint="next" size=40 />		</td></tr>	</table></td></tr>		<tr><td>	<table border=0 align=center>	<tr><td><label for="email_c"><font color="orange" size=3>*</font></label></td>	<td>	<input type="text" 	<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<?php }?>	style="font-size:15px; text-align: center; " 	name="email_c" id="email_c" placeholder="Email Confirmation"	 mozactionhint="next" size=40 />		</td></tr>	</table></td></tr>			<!---		<tr><td>	<table border=0 align=center> <tr><td>	<label for="birthdate">	</td><td>	<table border=0 align=center><tr><td>	<font size=5 color="white">Birthdate</font>	</label></td><td>	<input type= "date" style="font-size:18px; text-align: center;float:right"		name = "birthdate" id="birthdate;" />	</td></tr></table>	</td></tr>	</table></td></tr>	-->		<?php if (!isset($_smarty_tpl->tpl_vars['edit']->value)) {?>	<tr><td align="center">	<div align="center" class="g-recaptcha" data-sitekey="6LdkoQYTAAAAAL5fW_63ZMoP0yAfYxdzs5Rv8BME"></div>	</tr></td>	<?php }?>	<tr><td>	<table border=0 align=center>	<tr><td>	<button type="button" onClick="javascript:history.back()"	style=";border: 0; background: transparent"	id="back"	onmousemove="mouseMove(this.id)"	onmouseleave="mouseLeave(this.id)"	>	<img src="./img/back_button.png" alt="home"/>	</button>	</td>		<td>	<button type="button" 	onClick="validatePasswordThenSubmit()"	<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>	id="edit"	<?php } else { ?>	id="register"	<?php }?>	onmousemove="mouseMove(this.id)"	onmouseleave="mouseLeave(this.id)"	style=	"	border: 0;	background:transparent">	<?php if (isset($_smarty_tpl->tpl_vars['edit']->value)) {?>	<img src="./img/edit_button.png" style="width:100%"	alt="edit" />	<?php } else { ?>	<img src="./img/register_button_icon.png" style="width:100%"	alt="submit" />	<?php }?>	</button>	</td></tr>	</table>		<?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>	<tr><td>	<font color=red size=3><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</font>	</td></tr>	<?php }?>    	</table>		</td></tr>	</table></form><script><?php if (!isset($_smarty_tpl->tpl_vars['edit']->value)) {?>var TBL_SIZE=11<?php } else { ?>var TBL_SIZE=10<?php }?>		function checkUniqUser(str){						if (str.length!=0){							var xmlhttp=new XMLHttpRequest()				xmlhttp.onreadystatechange=function(){								if (xmlhttp.readyState==4 && xmlhttp.status==200){						response=xmlhttp.responseText;						//alert(response)						if (response!="OK"){							//alert(mainTbl.rows.length)							var mainTbl=document.getElementById("main")							var row=(mainTbl.rows.length==TBL_SIZE) && mainTbl.insertRow(TBL_SIZE)							var cell=row.insertCell()							cell.innerHTML="<font color=red size=3>\							This username is choosen before,\							 please choose another.\							 </font>";									}else{														var mainTbl=document.getElementById("main")							mainTbl.deleteRow(TBL_SIZE) //last row if having error							}																	}//end response ready if statement				}//end onready function								xmlhttp.open("GET","register.php?isUniqUser="+str,true)				xmlhttp.send()							}//end str length!=0 (if user type sth)		}//end check uniq                function autoResizeDiv()        {            document.getElementById('main').style.height = window.innerHeight*0.8 +'px';        	document.getElementById('main').style.width = window.innerWidth*0.8 +'px';        }        window.onresize = autoResizeDiv;        autoResizeDiv();</script></body></html><?php }} ?>
