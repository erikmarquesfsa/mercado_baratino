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

            <?php
                switch($_GET['r']){
                    case 'cadProd':
                        include "pag/cadProd.php"; 
                        break;                       
                    case 'dash':
                        include "graficos.php";
                        break;
                }
            ?>

            <?php include "footer.php" ?>
        </div>
        </main>
        <!--   Core JS Files   -->        
        <?php include "js.php"; ?>
       
</body>

</html>