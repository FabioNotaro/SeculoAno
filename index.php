<?php
    
    $seculo = "";
    $ano = filter_input(INPUT_POST, 'ano');
    if(isset($ano) && !empty($ano)){

        $calc = intval($ano)/100;
        if($calc < 0){
            $seculo ="Século ".abs(ceil($calc))." a.C.";
        }else if($calc > 0){
            $seculo ="Século ".ceil($calc);
        }else if($calc == 0){
            $seculo = "Século 0";
        }

    }



?>
<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calcule seu Século!</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        
        <main class="container">
            <section class="content">
                <h1>Qual o seu século?</h1>
                <h3>Digite a baixo o ano e descubra o século referente a ele.</h3>
                <form action="" method="post">
                        <input type="number" name="ano" placeholder="DIGITE AQUI O ANO"> <br>
                        <input class="btn" type="submit" name="SubmitButton" value="Calcular">
                        <input class="resposta" type="text" readonly value="<?php echo($seculo)?>"> <br>
                </form>
            </section>
        </main>
    </body>
</html>
