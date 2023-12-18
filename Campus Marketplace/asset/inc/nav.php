<div class="nav">
        <ul class="main">
            <li <?php if($title == "Home"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>index.php">Home</a></li>
            <li <?php if($title == "Meet the Team"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>team.php">Meet the Team</a></li>
            <li <?php if($title == "Kickstarter Video"){ echo 'class="active"'; }?>><a href="<?php echo $path; ?>kickstarter.php">Kickstarter Video</a></li>
            <li <?php if($title == "Research"){ echo 'class="active"'; }?>><a href="<?php echo $path; ?>research.php">Research</a></li>
            <li <?php if($title == "Prototype Evaluation"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>prototype.php">Prototype Evaluation</a></li>
            <li <?php if($title == "Accessibility"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>accessibility.php">Accessibility</a></li>
            <li <?php if($title == "Conclusion"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>conclusion.php">Conclusion</a></li>
        </ul>
    </div>