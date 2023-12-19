<?php
    $title = "Accessibility";
    $head = "Accessibility";
    $path = "./";
    include($path."asset/inc/header.php");
    include($path."asset/inc/nav.php");
?>
   <div class="container">
    <h1>ACCESSIBILITY FEATURES</h1>
    <div class="accessibility-page">

        <div class="row_accessibility">
            <div class="column text">
                <h2>Appearance Mode</h2>
                <p>This accessibility feature allows users to personalize the application's appearance. Users can control the appearance mode,
                    toggling between light and dark mode. Visual performance can vary between users. Users with corrected to normal vision perform better with light mode.
                    Users with cataracts and related disorders often prefer and perform better with dark mode.</p>
            </div>
            <div class="column image">
                <img src="asset/media/Accessibility/AppearanceMode.png" alt="Appearance Mode">
            </div>
        </div>

        <div class="row_accessibility">
            <div class="column text">
                <h2>Text to Speech</h2>
                <p>This accessibility feature is beneficial for users who may be visually impaired or struggle to read small text and would prefer it to be read.
                    When users see a block of text with a 'megaphone' icon near it, users can tap the icon to trigger the text to speech.</p>
            </div>
            <div class="column image">
                <img src="asset/media/Accessibility/TexttoSpeech.png" alt="Text to Speech">
            </div>
        </div>

    </div>
</div>
<?php
    include($path."asset/inc/footer.php");
?>