<!--THIS IS THE LOGIN PAGE-->


<?php
    include("assest/inc/dbCon.php"):
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">

    </head>

    <body>
        <!--Header-->
        <header>
            <!--RIT Marketplace Logo-->
            <img>
            <!--RIT Marketplace Title-->
            <h1></h1>
        </header>

        <!--Main Content-->
        <main>
            <?php
                if(empty($_POST)){
                    include("assest/inc/login.php");
                } elseif($_POST['account-form'] == "create"){
                    if($_POST['switch-form'] == "true"){
                        include("assets/inc/login.php")
                    } else {
                        $sql = "SELECT * FROM `Accounts` WHERE `Email` = '".$_POST['email']."' LIMIT 50;";
                        $result0 = $conn->query($sql);
                        if($result0->num_rows > 0) {
                            $Result0 = "true";
                        } else {
                            $Result0 = "falee";
                        }
                        if($Result0 == "true"){
                            echo "that email is already taken";
                            include("assets/inc/create.php");
                        } else {
                            session_name("RIT_Marketplace");
                            session_start();
                            $_SESSION['user'] = $_POST['email'];
                        }
                    }
                } elseif($_POST['account-form'] == "login"){
                    if($_POST['switch-form'] == "true"){
                        include("assets/inc/create.php");
                    } else {
                        $sql = "SELECT * FROM `Accounts` WHERE `Email` = '".$_POST['email']."' AND `Password` = '".$_POST['password']."' LIMIT 50;";
                        $result2 = $conn->query($sql);
                        if($result2->num_rows > 0) {
                            $Result2 = "true";
                        } else {
                            $Result2 = "False"
                        }
                        if($Result2 == "true"){
                            session_name("RIT_Marketplace");
                            session_start();
                            $_SESSION['user'] = $_POST['email'];
                        } else {
                            echo "Incorrect Email or Password";
                            include("assets/inc/login.php");
                        }
                    }
                }
            ?>
        </main>

        <!--Footer-->
        <footer>
            
        </footer>

    </body>
</html>