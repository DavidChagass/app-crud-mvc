<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="shortcut icon" href="../resources/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/lib/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>
    
    <div class="container">
    <h2 class="py-5 text-center">Novo Aluno</i></h2>
    <form action="../controller/insert_client.php" method="post">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="" class="form-label">Exemplo <i class="bi bi-person"></i></label>
                <input type="text" name="nome" class="form-control" id="nome" require autofocus>
                <input type="text" name="sexo" class="form-control" id="sexo" >
                <input type="text" name="historico" class="form-control" id="historico" >

            </div>
            
            
            <hr class="my-4">

            <div class="col-md-12 text-end">
                <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
                <a class="btn btn-success btn-lg" href="../index.php">Cancelar</a>
            </div>
        </div>
    </form>
       
    </div>

</body>

</html>