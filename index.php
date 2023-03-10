<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
       <h1>Numeros pares de 0 ao 500</h1>
        <?php
            for ($impar=0; $impar<=500; $impar++){
                    if (($impar % 2 == 1)and($impar <500)){
                        continue;
                    }elseif ($impar <=500){
                        echo $impar. "-";
                    }else{
                        break;
                    }
                }
        ?>
    </body>
</html>