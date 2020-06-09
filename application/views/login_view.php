<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 09.06.2020
 * Time: 12:19
 */

?>


<?php if(Session::get('loggedIn') != true):?>
    login done!

    <form method="POST">
        <input name="login" type="text" placeholder="username" required><br>
        <input name="password" type="password" placeholder="password" required><br>
        <input name="submit" type="submit" value="login">
    </form>
<?php endif; ?>