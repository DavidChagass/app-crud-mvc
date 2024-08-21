<?php

include 'model/Conexao.class.php';
include 'model/Manager.class.php';

$class = new Manager();


class Alertas
{
    public static function sucess($message)
    {
        echo "<div class='alert text-center alert-success' role='alert'>
            $message
            </div>";
    }

    public static function danger($message)
    {
        echo "<div class='alert text-center alert-danger' role='alert'>
            $message
            </div>";
    }
}


?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="shortcut icon" href="resources/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/lib/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>
    <style>
        body{background-color:gray;}


    </style>
<?php
        if (isset($_GET['cod'])) {
            switch ($_GET['cod']) {
                case 1:
                    Alertas::sucess('Cadastro confirmado com sucesso');
                    break;
                case 2:
                    Alertas::sucess('Cadastro excluido com sucesso');
                    break;
                case 3:
                    Alertas::sucess('Cadastro atualizado com sucesso');
                    break;
                default:
                    Alertas::danger('Nenhuma ação realizada');
                    break;
            }
        }
        ?>


    <div class="container">

        <h2 class="text-center">Lista de Usuários<i class="bi bi-people-fill"></i></h2>
        <h5 class="text-end">
            <a href="view/page_register.php" class="btn btn-primary">
                <i class="bi bi-person-plus-fill"></i>
            </a>
        </h5>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead">
                    
                    <tr>
                        <th>ID</th>
                        <th></th>
                        <th></th>
                        <th></th>
                         <th colspan="3">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                    <?php foreach ($class->listar() as $data): ?>
                        <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['nome'] ?></td>
                            <td><?= $data['sexo'] ?></td>
                            <td><?= $data['historico_medico'] ?></td>
                        
                            <td>
                                <form action="./view/page_update.php" method="get">
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <button class="btn btn-warning btn-xs">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="./controller/delete_client.php" method="post"
                                    onclick="return confirm('Tem certeza que deseja excluir?')">
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <button class="btn btn-danger btn-xs">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>