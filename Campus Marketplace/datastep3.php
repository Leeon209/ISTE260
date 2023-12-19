<?php
    $title = "Field Note";
    $head = "Field Note";
    $path = "./";
    include($path."asset/inc/header.php");
    include($path."asset/inc/nav.php");
?>
    <div class="container">
    <div id="pdf-viewer" style="width:100%; height:600px;">
        <object data="asset/media/DataStep3_BigHero6.pdf" type="application/pdf" style="width:100%; height:600px;">
    <embed src="asset/media/DataStep3_BigHero6.pdf" type="application/pdf" style="width:100%; height:600px;"/>
</object>
</div>
    </div>
<?php
    include($path."asset/inc/footer.php");
?>