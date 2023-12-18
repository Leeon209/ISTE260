<!--THIS IS THE LOGIN PAGE-->
<?php
    $path = "";
    include("assest/inc/dbCon.php");
    include("assets/inc/header.php");

    function sanitize($string, $len = 50){
        $string = trim($string);
        $string = htmlentities($string);
        $string = substr($string,0,$len);
    
        return $string;
    }
?>
        <!--Main Content-->
        <main>
            <!--RIT Marketplace Logo-->
            <img>
            <!--RIT Marketplace Title-->
            <h1>Campus Marketplace</h1>
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
                            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['year']) && !empty($_POST['major'])) {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $major = $_POST['major'];
                                $year = $_POST['year'];
                                $password = $_POST['password'];
                            
                                $name = sanitize($name);
                                $email = sanitize($email);
                                $major = sanitize($major);
                                $year = sanitize($year);
                                $password = sanitize($password);
                            
                                $sql = "INSERT INTO `Accounts` (`Name`, `Email`, `Major`, `Year`, `Password`) VALUES (?, ?, ?, ?, ?);";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("sssis", $name, $email, $major, $year, $password);
                                $stmt->execute();
                            }
                            session_name("RIT_Marketplace");
                            session_start();
                            $_SESSION['user'] = $_POST['email'];
                            header("Location: home.php");
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
                            header("Location: home.php");
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
            </div>
        </body>
    </html>
</div>