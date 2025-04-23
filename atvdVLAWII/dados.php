<?php
    function geradorSenhas($chars)
    // parâmetro $chars recebe a quantidade de caracteres desejados na senha
    {
    // Define uma string com os caracteres possíveis de utilização na senha
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    
    return substr(str_shuffle($data),0, $chars);
    }
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta ao formulario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <nav class="navbar navbar - light bg - light ">
        <a class ="navbar-brand " href =" #" >
        <img src=" bootstrap/logo.png" width =" 30 " height =" 30 " alt=" ">
        </a>
        </nav>
    </div>
    <div class="container">
            <p class="h2 text-left py-4">Escolha uma opção </p>
    </div>
    <main role="main">
        <div class="container">
        <p class="h4">Escolha sua senha: </p>
            <form action="dados.php" method="get">
            <div class="row">   
                <input type="radio" name="options" value="op1"required>
                <label for="op1"> <?php echo geradorSenhas (7);?> </label>
            </div>
            <div class="row">   
                <input type="radio" name="options" value="op2"required>
                <label for="op2"> <?php echo geradorSenhas (7);?> </label>
            </div>
            <div class="row">   
                <input type="radio" name="options" value="op3"required>
                <label for="op3"> <?php echo geradorSenhas (7);?> </label>
            </div>
            <div class="row">   
                <input type="radio" name="options" value="op4"required>
                <label for="op4"> <?php echo geradorSenhas (7);?> </label>
            </div>

            </form>
    </div>
    <div class="container">
                <div class="row">
                    <a class="btn btn-primary" href="formulario.html">Enviar</a>
                </div>
            </div>    
    </div>
</body> 
</main>
 </html>

    
