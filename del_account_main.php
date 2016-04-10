<?php include "entete.php" ?>
<HTML>
<BODY>
<div class= "middle">
<h1>Delete account</h1>
<fieldset id="contac">
<form id="form" action="del_account.php" method="POST">
<b>Are you sure you want to delete your account?</b>
<br />
        Identifiant: <input type="text" name="login" value=""/>
        <br />
        Mot de passe: <input type="password" name="passwd" value=""/>
        <br />
        <input type="submit" name="submit" value="OK">
</form>
</div>
</BODY>
</HTML>