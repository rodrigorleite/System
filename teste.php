<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    
    $nome = 'Lord michael';
    echo "<h1> Hello Lord Whats up? $nome </h1>";
        if($nome == 'Lord michael'){
            echo  'Me chama de Lord!';
    }else{
        echo 'Não é o lord';
    }

    $idade = 17;
    if($idade >= 18){
        echo '<br> Pode votar!';
    }else{
        echo '<br> Não pode votar!';
    } 

    for($contador=0; $contador < 10; $contador++){
        echo '<hr> <img width="" src="https://ichef.bbci.co.uk/ace/ws/640/cpsprodpb/B3ED/production/_97216064_eneas_prona.jpg.webp";>' ;
        echo $contador;
    }

    $numero = 0;
    while($numero < 10){
        echo '<br> item da lista Numero $numero';
        $numero = $numero + 1;
    }
    ?>

</body>

</html>