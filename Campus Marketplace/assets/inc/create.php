<?php
    include("dbCon.php");
?>
<main>
    <form class="login-form" action="index.php" method="post" onsubmit="return CheckCreate()">
        <input type="text" id="email" name="email" placeholder="Email"/>    
        <input type="text" id="password" name="password" placeholder="Password"/>
        <input type="text" id="confirm-password" name="confirm-password" placeholder="Confirm Password"/>
        
        <input type="hidden" id="account-form" name="account-form" value="create"/>
        <input type="hidden" id="switch-form" name="switch-form" value="false"/>

        <label id="label-form-switch" for="form-switch" >Alread have an account?</label>
        <input type="submit" id="form-switch" name="form-switch" value="Login" onclick="return switchForm();">
        <input type="submit" id="form-submit" value="Create Account" onclick="return createAccount();">
    </form>
</main>




