<?php $titulo = "Inicio" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "includes/head.php"?>
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
</head>

<body>
<div id="app">
    <?php include "includes/sidebar.php"?>
    <div id="main">
        <?php
        $countType = "admin";
        $countType == 'admin' ?  require_once("home-admin.php"):  require_once("home-teach.php");
        ?>
        <footer class="text-center text-white ">
            <?php include "modals/generalModals.php"?>
            <?php include "includes/footer.php" ?>
        </footer>
    </div>
</div>
<?php include "includes/js.php"?>
<?php include "includes/services-js.php"?>

<script src="../assets/vendors/apexcharts/apexcharts.js"></script>
<script src="../assets/js/pages/dashboard.js"></script>


<script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
<!-- INCLUDE SERIVES AJAX

<script src="./service/lista-alumnos.js"></script>

-- INCLUDE SERIVES AJAX -->
<script>
    // Simple Datatable
    let table1 = document.querySelector('#tbl1');
    let dataTable = new simpleDatatables.DataTable(table1);

    let table2 = document.querySelector('#tbl2');
    let dataTable2 = new simpleDatatables.DataTable(table2);
</script>
</body>

</html>