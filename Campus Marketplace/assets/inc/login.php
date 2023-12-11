<?php
    include("dbCon.php");
?>
<main>
    <form class="login-form" action="index.php" method="post">
        <input type="text" id="email" name="email" placeholder="Email"/>
        <input type="text" id="password" name="password" placeholder="Password"/>

        <input type="hidden" id="account-form" name="account-form" value="login"/>
        <input type="hidden" id="switch-form" name="switch-form" value="false"/>
        
        <label id="label-form-switch" for="form-switch" >Dont have an account?</label>
        <input type="submit" id="form-switch" name="form-Switch" value="Create Account" onclick="return switchForm();">
        <input type="submit" id="form-submit" value="Login" onclick="return login();">
    </form>
</main>
