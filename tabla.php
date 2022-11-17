<?php
    $sql = "SELECT * FROM t_usuario";
    $respuesta = mysqli_query($conexion,$sql);
?>
<table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm mt-3">
    <thead class="text-center">
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">Password</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody class="text-center">
    <?php while($ver = mysqli_fetch_array($respuesta)) :  ?>
        <tr>
            <td><?php echo $ver['usuario']; ?></td>
            <td><?php echo $ver['password']; ?></td>
            <td> 
                <a href="./actualizar.php?id=<?php echo $ver['id'];?>"
                class="btn btn-outline-warning">
                    Editar
                </a> 
            </td>
            <td>
                <a href="./backend/eliminar.php?id=<?php echo $ver['id'];?>?>"
                class="btn btn-outline-danger">
                    Eliminar
                </a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>