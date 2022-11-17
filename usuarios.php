<?php session_start();
    if(isset($_SESSION['usuario'])){
        include './backend/conexion.php';
        include './header.php'; 
        include './navbar.php';
        $conexion = conexion();
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center">Usuarios</h2>
            <a href="./agregar.php" class="btn btn-outline-primary">
                Agregar usuario
            </a>
            <?php include "./tabla.php";  ?>
        </div>
    </div>
</div>
<?php include './footer.php'; ?>

<?php
    }else{
        header('location:./index.php');
    }
?>