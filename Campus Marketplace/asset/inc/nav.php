<div class="nav">
        <ul class="main">
            <li <?php if($title == "Home"){ echo 'class="active"'; }?> id="logo"> <a href="<?php echo $path; ?>index.php"><img src="<?php echo $path; ?>asset/media/campus_marketplace_logo-01.png" alt="Logo of a market"></a></li>
            <li <?php if($title == "Home"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>index.php">Home</a></li>
            <li <?php if($title == "Meet the Team"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>team.php">Meet the Team</a></li>
            <li <?php if($title == "Kickstarter Video"){ echo 'class="active"'; }?>><a href="<?php echo $path; ?>kickstarter.php">Kickstarter Video</a></li>
            <li <?php if($title == "Research"){ echo 'class="active"'; }?>>
    <span class ="dropdown-toggle">Research</span>
    <ul class="dropdown" style="display: none;">
        <li><a href="<?php echo $path; ?>persona.php">Persona</a></li>
        <li><a href="<?php echo $path; ?>storyboard.php">Storyboard</a></li>
        <li><a href="<?php echo $path; ?>datastep3.php">Data Step 3</a></li>
        <li><a href="<?php echo $path; ?>datastep5.php">Data Step 5</a></li>
    </ul>
</li>
            <li <?php if($title == "Prototype Evaluation"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>prototype.php">Prototype Evaluation</a></li>
            <li <?php if($title == "Accessibility"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>accessibility.php">Accessibility</a></li>
            <li <?php if($title == "Conclusion"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>conclusion.php">Conclusion</a></li>
        </ul>
    </div>