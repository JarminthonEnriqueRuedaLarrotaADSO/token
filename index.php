
<?php
// Generar un token aleatorio de 32 bytes
$token = bin2hex(random_bytes(10));

// $token contiene ahora un token aleatorio de 64 caracteres (32 bytes en formato hexadecimal)
echo strlen($token);
echo ($token);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main>
        <section class="container ">
            <div class="row justify-content-center mt-4">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h1 class="card-title text-center text-white">Registro Usuario</h1>
                        </div>
                        <div class="card-body">
                            <form action="controller/userController.php" method="post">
                                <label>Nombre usuario</label>
                                <input type="text" name="User" class="form-control mt-2 w-75">
                                <input type="submit" value="Enviar" class="btn btn-primary mt-4 w-100" name="envio">
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

