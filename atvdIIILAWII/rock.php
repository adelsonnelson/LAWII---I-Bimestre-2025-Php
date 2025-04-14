<?php
    include 'dados.php';
    function filtro($a){
        return $a['estilo'] == 'Rock';
    }
    $dados = array_filter($dados, 'filtro');
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
    <nav class="nav">
        <a class="nav-link active" href="#">Utilizando Arrays em PHP</a>
        <a class="nav-link" href="index.html">Início</a>
      </nav>
    <header>
        <div class="jumbotron bg-light jumbotron-fluid">
            <div class="container">
            <div class="jumbotron">
            <p class="h1 text-center py-4">Manipulação de Arrays em PHP</p>
            <p class="text-center py-4">Exibindo rockeiros</p>
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
                <th scope="col">Gosto Musical</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach( $dados as $linha => $item ):?>
                            <th scope="row"><?php echo $item['nome']?></th>
                            <td><?php echo $item['idade']?></td>
                            <td><?php echo $item['estilo']?></td>
                            </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body> 
</main>
</html>