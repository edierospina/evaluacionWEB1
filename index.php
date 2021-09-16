<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                            <a class="nav-link active" aria-current="page" href="punto2.php">Biotipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="punto.3">Edad</a>
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
                <h3 class= "tex-center tex-white">Salpicon</h3>
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label  class="form-label">Fruta1</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="fruta1">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta 1</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="foto1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fruta2</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="fruta2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto fruta 2</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="foto2">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta3</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="fruta3">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta 3</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="foto3">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta4</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="fruta4">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta 4</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="foto4">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta5</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="fruta5">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta 5</label>
                        <input type="tex" class="form-control" placeholder="Digite fruta" name="foto5">
                    </div>


                    
                    <button type="submit" class="btn btn-primary w-100" name="boton">Preprarar</button>
                </form>
            </div>
        </div>
    </div>
        

    </main>
    
    <?php

        
       
        if (isset($_POST["boton"])) {
            $fruta1=$_POST["fruta1"];
            $fruta2=$_POST["fruta2"];
            $fruta3=$_POST["fruta3"];
            $fruta4=$_POST["fruta4"];
            $fruta5=$_POST["fruta5"];
            
            $foto1=$_POST["foto1"];
            $foto2=$_POST["foto2"];
            $foto3=$_POST["foto3"];
            $foto4=$_POST["foto4"];
            $foto5=$_POST["foto5"];


            $salpicones=array(array("nombre"=>$fruta1,"foto"=>$foto1),
            array("nombre"=>$fruta2,"foto"=>$foto2),
            array("nombre"=>$fruta3,"foto"=>$foto3),
            array("nombre"=>$fruta4,"foto"=>$foto4),
            array("nombre"=>$fruta5,"foto"=>$foto5));






         }    

    ?>
     <?php if (isset($_POST["boton"])):?>
        <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php foreach($salpicones as $salpicon):?>
                    <div class="col">
                    <div class="card h-100">
                    <img src="<?php echo($salpicon["foto"]) ?>" class="card-img-top" alt="...">
                <   div class="card-body">
                    <h5 class="card-title text-black"><?php echo($salpicon["nombre"]) ?></h5>
                </div>
            </div>
        </div>
    <?php endforeach ?>
        </div>
    <?php endif?>
   
    
   
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>