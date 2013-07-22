<?php
var_dump($_REQUEST);
?>
<style>
	.error_msg {
		color:red;
		font-size: 1em;
	}
</style>
<script type="text/javascript">

function checkValidEmailAddress(emailAddress) {
  var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
  console.log(emailAddress);
  return pattern.test(emailAddress);
};

function start_validar(){
	var email = document.getElementById("frm_email").value+"@"+document.getElementById("frm_domain").value+"."+document.getElementById("frm_region").value;
	if( checkValidEmailAddress( email ) ){
		document.getElementById("resp_mensajes").innerHTML= "<span class='error_msg'>&nbsp;</span>";
		document.getElementById("btn_guardar").style.display="block";
	} else {
		document.getElementById("resp_mensajes").innerHTML= "<span class='error_msg'>Sintaxis de correo incorrecta.</span>";
	}
}
function form_init(){
	document.getElementById("resp_mensajes").innerHTML= "<span class='error_msg'>&nbsp;</span>";
	document.getElementById("btn_guardar").style.display="none";
}
</script>
<div>
	<div id="resp_mensajes">&nbsp;</div>
	<label>Correo electr&oacute;nico:</label>
	<input type="textbox" size="40" maxlength="300" name="frm_email" id="frm_email" value="Captura un email" onchange="form_init();" />
	<select id="frm_domain" name="frm_domain" style="width:70px;" onchange="form_init();">
		<option>hotmail</option>
		<option>gmail</option>
		<option>live</option>
		<option>outlook</option>
	</select>
	<select id="frm_region" name="frm_region" style="width:70px;" onchange="form_init();">
		<option>com</option>
		<option>com.mx</option>
		<option>mx</option>
	</select>
	<br/>
	<input type="button" value="Validar" onclick="start_validar(); return false;" />
	<input type="button" value="Guardar" onclick="start_guardar(); return false;" id="btn_guardar" style="display:none;" />
</div>
