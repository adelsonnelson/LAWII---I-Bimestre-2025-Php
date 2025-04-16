<?php
    $num - $_POST['num'];
    $dividor = 2;
    $total = "";
    $num_1 = $_POST['num_1'];
    $num_2 = $_POST['num_2'];
    $resultado;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h3>Resultado do exercício 1:</h3>
    </div>
    <div class="container">
        <?php
            echo "<h1>Decomposição em fatores primos</h1>";
            while($num != 1){
                if($num % $divisor == 0){
                    $num = $num / $divisor;
                    $total = $total . $divisor;
                    if($n != 1){
                        $total = $total . " x ";
                    }
                }
                else{
                    $divisor++;
                }
            }
            echo "<h4>$total</h4>";
        ?>
    </div>
    <div class="container">
        <h3>Resultado do exercício 2:</h3>
    </div>
    <div class="container">
        <?php
            if($num_1 > $num_2){
                $dividendo = $num_1;
                $divisor = $num_2;
            }else{
                $dividendo = $num_2;
                $divisor = $num_1;
            }
            if($dividendo % $divisor == 0){
                $resultado = $divisor;
                echo "<h4>$resultado</h4>";
            }else{
                while($dividendo % $divisor != 0) {
                    $resto = $dividendo % $divisor;
                    $dividendo = $divisor;
                    $divisor = $resto;
                }
                $resultado = $divisor;
                echo "<h4>$resultado</h4>";
            }
        ?>
    </div>
</body>
</html>