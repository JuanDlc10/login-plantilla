<?php include './header.php'; ?>
<link rel="stylesheet" href="./public/css/registroStyle.css">
<div class="container">
        <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Registrar usuario</h5>
                <form action="./backend/crearUsuario.php" method="post">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputUsername" name="usuario" placeholder="myusername" required autofocus>
                    <label for="floatingInputUsername">Usuario</label>
                </div>


                <hr>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>


                <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrar</button>
                </div>

                <a class="d-block text-center mt-2 small" href="./index.php">Iniciar sesion</a>

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
<?php include './header.php'; ?>
    
    