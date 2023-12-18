<!--THIS IS THE PROFILE PAGE-->
<?php
    session_name("RIT_Marketplace");
    session_start();
    
    $path = "";
    include("assest/inc/dbcon.php");
    include("assets/inc/header.php");
?>
        <section class="Top">
        <!--Profile Title-->
        <h1>Settings</h1>
        <!--Shopping Cart-->

        </section>
        
        <!--Main Content-->
        <main>
            
            
            <!--UserData Part-->
            <?php
                $sql = "SELECT * FROM `Accounts` WHERE `Email` = '".$_SESSION['email']."' LIMIT 50;";
                $result0 = $conn->query($sql);
                if($result0->num_rows > 0) {
                    while($row = $result0->fetch_assoc()) {
                        $Results0[] = $row;
                    }
                }
                //This echo is for the user's name 
                echo '<h2>'.$Results0['Name'].'</h2>';
                //This echo is for the users major and year 
                echo '<p>'.$Results0['Major'].', '.$Results0['Year'].'<p>';
                echo '<h2>Courses</h2>';
                echo '<p>'.$Results0['Courses'].'</p>';
            ?>

            <!--UserPosts-->
            <h3>Posts</h3>
            <?php
                $sql = "SELECT * FROM `Posts` WHERE `Email` = '".$_SESSION['email']."' LIMIT 50;";
                $result1 = $conn->query($sql);
                if($result1->num_rows > 0) {
                    while($row = $result0->fetch_assoc()) {
                        $Results1[] = $row;
                    }
                    $count = 0;
                    foreach($Results1 as $results1){
                        echo '<div id="Post'.$count.'" class="Post">';
                        echo '<p class="PostPrice">'.$results1['Price'].'</p>';
                        echo '</div>';
                        $count = $count + 1;
                    }
                }
            ?>
        </main>
<?php
    include("assets/inc/footer.php");
?>
