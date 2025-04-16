<?php
    $nome_1 = $_POST['nome_1'];
    $nome_2 = $_POST['nome_2'];
    $nome_3 = $_POST['nome_3'];
    $nome_4 = $_POST['nome_4'];

    $data_1 = $_POST['data_1'];
    $data_2 = $_POST['data_2'];
    $data_3 = $_POST['data_3'];
    $data_4 = $_POST['data_4'];


    function calculaIdade($dataNascimento){
        $hoje = new DateTime();
        $diff = $hoje->diff(new DateTime($dataNascimento));
        return $diff->y;
        }

    $idade_1 = calculaIdade($data_1);
    $idade_2 = calculaIdade($data_2);
    $idade_3 = calculaIdade($data_3);
    $idade_4 = calculaIdade($data_4);

        $pessoas [] = array('nome' => $nome_1, 'idade' => $data_1);
        $pessoas [] = array('nome' => $nome_2, 'idade' => $data_2);
        $pessoas [] = array('nome' => $nome_3, 'idade' => $data_3);
        $pessoas [] = array('nome' => $nome_4, 'idade' => $data_4);
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styleindex.css">
    <title>Todos</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="bootstrap/img/Bootstrap_logo.svg.png" width="30" height="30" alt="">
        </a>
    </nav>
    <header>
        <div class="jumbotron bg-light jumbotron-fluid">
            <div class="container">
            <div class="jumbotron">
            <p class="h1 text-center py-4">Exibindo dados em ordem decrescente de idade</p>
            </div>
        </div>
    </header>
    <main role="main">
        <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach( $pessoas as $linha => $item ):?>
                        <th scope="row"><?php echo $item['nome']?></th>
                        <td><?php echo $item['idade']?></td>
                        </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <div class="form-group-row py-3">
            <button type="" class="btn btn-primary mb-2">Voltar</button>
        </div>
    </div>
</body> 
</main>
</html>