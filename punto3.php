<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Salpicon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="punto1.php">Operacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="punto2.php">Biotopo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="punto3.php">Edad</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <h3 class="text-center text-white">Edad</h3>
                    <form action="punto3.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" >Año de nacimiento</label>
                            <input type="text" class="form-control" placeholder="Ingrese año de nacimiento" name="nacimiento">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Año actuap</label>
                            <input type="text" class="form-control" placeholder="Ingrese año actual" name="actual">
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="calcular">Edad</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php 
    
    if(isset($_POST["calcular"])){
        
        $nacer=$_POST["nacimiento"];
        $actualidad=$_POST["actual"];
        function restar($actualidad,$nacer){
            $total=$actualidad-$nacer;
            return($total);
            
        }
        $edad= restar($actualidad,$nacer);
        echo($edad);
        
    }
    
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>