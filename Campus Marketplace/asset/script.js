document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.nav .dropdown-toggle');
    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener('click', function () {
            var menu = this.nextElementSibling;
            menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
        });
    });
});

pdfjsLib.getDocument('asset/media/DataStep3_BigHero6.pdf').promise.then(pdfDoc => {
});