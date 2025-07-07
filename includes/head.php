<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/system/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/css/index.css">
    <script src="../public/js/index.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" id="closeModalBtn">&times;</span>
        <h2>PAGSASANAY.com</h2>
        <p>
            Your donation helps make the website more reliable and supports its continued growth. Consider donating to
            help us improve!
        </p>
        <div class="image-container">
            <img src="../images/system/gcash.jpg" alt="Donation Image">

        </div>
        <div class="button-container">
            <a href="../images/system/gcash.jpg" download="gcash-image.jpg" class="download-btn">Download
                Image</a>
        </div>
    </div>
</div>


<script>
    var modal = document.getElementById("myModal");
    var closeModalBtn = document.getElementById("closeModalBtn");
    function openModal() {
        modal.style.display = "block";
    }

    function closeModal() {
        modal.style.display = "none";
    }

    closeModalBtn.onclick = function () {
        closeModal();
    }

    window.onload = function () {
        openModal();  // Show the modal
        setTimeout(function () {
            closeModal();
        }, 500000);
    }
    window.onclick = function (event) {
        if (event.target == modal) {
            closeModal();
        }
    }
</script>