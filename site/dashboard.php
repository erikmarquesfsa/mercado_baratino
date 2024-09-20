<?php include "head.php"; ?>

<body class="g-sidenav-show  bg-gray-200">
    <?php include "menu.php"; //adiciona o menu 
    ?>
    <!-- Navbar -->
    <?php include "header.php" ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <?php include "cards.php" ?>
            <?php include "graficos.php" ?>
            <?php include "footer.php" ?>
        </div>
        </main>
        <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <?php include "js.php"; ?>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>