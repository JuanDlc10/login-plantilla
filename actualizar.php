<?php
    include './backend/conexion.php';
    $conexion = conexion();
    $id = $_GET['id'];
    $sql = "SELECT * FROM t_usuario WHERE id = '$id'";
    $respuesta = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_array($respuesta); 
    include "./header.php"; 
?>

<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<div class="container">
    <link rel="stylesheet" href="./public/css/agregarStyle.css">
    <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Actualizar usuario</h5>
            <form action="./backend/actualizar.php" method="post">
            <input type="text" hidden name="id" value="<?php echo $ver['id'];?>">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="usuario" placeholder="Usuario"
                value="<?php echo $ver['usuario'];?>" required>
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">
                    Actualizar
                </button>
            </div>
            <hr>
            <div class="d-grid">
                <a href="./usuarios.php" class="btn btn-outline-primary btn-login text-uppercase fw-bold">
                    Regresar
                </a>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
<?php include "./footer.php" ?>