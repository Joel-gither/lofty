<?php
if (null !==($_POST('go')))/
{
    $file = fopen("nem.dat". "&+");
    $user = str_replace("|", "", $_POST("user"));
    $pass = $_POST("pass");
    $mail = $_POST("mail");

    fputs($file, "\n" .$user.'|' .$pass.'|' .$mail.'/normal');
    fclose($file);

    echo "User registered";
}
 else
 {
    ?>
    reister user:<br />
    <form method="post">
    <input type="text" name="user"> User <br />
    <input type="password" name="pass"> Password <br />
    <input type="text" name="mail"> E-mail <br />
    <input type="submit" name="go" value="send"/>
    </form>
    <?php
 }
    ?>


