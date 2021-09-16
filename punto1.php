<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
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
                            <a class="nav-link active" aria-current="page" href="punto2.php">Biotipo</a>
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
        <div class="row d-flex justify-content-center ">
            <div class=col-4>
                <h3 class="text-center text-white">Operacion</h3>
                <form action="punto1.php" method="POST">
                <div class="mb-3">
                    <label  class="form-label">Numero uno</label>
                    <input type="text" class="form-control" placeholder="Ingrese numero uno" name="numberOne" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Numero dos</label>
                    <input type="text" class="form-control" placeholder="Ingrese numero dos" name="numberTwo" >
                </div>
                <button type="submit" class="btn btn-primary w-100" name="numeros">Calcular</button>
                </form>
            </div>
        </div>
    </div>
</main>
    <?php
        if(isset($_POST["numeros"])){
    
            $numberOne=$_POST["numberOne"];
            $numberTwo=$_POST["numberTwo"];
        
            $suma=$numberOne+$numberTwo;
            $resta=$numberOne-$numberTwo;
            $multiplicacion=$numberOne*$numberTwo;
            $division=$numberOne/$numberTwo;
            
            echo("La suma es => ".$suma);
            echo("<br>");
            echo("La resta es => ".$resta);
            echo("<br>");
            echo("La multiplicacion es => ".$multiplicacion);
            echo("<br>");
            echo("La division es => ".$division);
        }
       
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>