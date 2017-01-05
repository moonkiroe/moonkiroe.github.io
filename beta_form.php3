
<html>
<head>
<style type="text/css" media="screen"><!--
INPUT { color: #000; font-size: 11px; font-family: verdana, Arial, Helvetica, Geneva, Swiss, SunSans-Regular; background-color: #EEEEEE }
SELECT { color: #000; font-size: 11px; font-family: verdana, Arial, Helvetica, Geneva, Swiss, SunSans-Regular; background-color: #EEEEEE }
TEXTAREA { color: #000; font-size: 11px; font-family: verdana, Arial, Helvetica, Geneva, Swiss, SunSans-Regular; background-color: #EEEEEE }
.txterror { color: black; font-size: 11px; font-family: Verdana, Arial, Helvetica, Geneva, Swiss, SunSans-Regular }
.txtform { color: black; font-size: 12px; font-family: Verdana, Arial, Helvetica, Geneva, Swiss, SunSans-Regular }
--></style></head>

<body LINK="#818181" ALINK="#4d5762" VLINK="#4d5762" BACKGROUND="colorschemes/colorscheme2/images/static/pgbk.jpg">


<form action='/beta_form.php3' method='post' name='Form'>
<table width='100%' border='0' cellspacing='1' cellpadding='1'>
<tr><td colspan='2'><span class='txterror'>Les champs marqué d'un * sont obligatoires</span></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Nom* :</span></td><td><input type='text' style='width:200 ;' name='f_1' value='' size='24' border='0'></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Adresse email* :</span></td><td><input type='text' style='width:200 ;' name='f_2' value='' size='24' border='0'></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Problème rencontré* :</span></td><td><select style='width:200 ;' name='f_3' size='1'>
<option selected value=0>Sélectionnez</option><option  value=1>Inscription au beta-test</option><option  value=2>Questions</option></select></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Titre :</span></td><td><input type='text' style='width:200 ;' name='f_4' value='' size='24' border='0'></td></tr>
<tr><td align='right' width='30%'><span class='txtform'>Message :</span></td><td><textarea style='width:360 ;' name='f_5' rows='6' cols='40'></textarea></td></tr>
<tr><td align='right' width='30%'></td><td><input type='submit' name='submit' value='Envoyer' border='0'></td></tr>
</table></center>
</form>

<br><br>
<center><font face="arial"><A href="javascript:self.close('beta_form.php3');">
[Fermer la fenêtre]
</A></font></center>


</body>
</html>