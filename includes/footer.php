<footer>
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
</footer>

</body>

</html>