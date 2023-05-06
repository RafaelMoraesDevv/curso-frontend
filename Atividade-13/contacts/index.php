<?php 
    $projeto = "Agenda de Contatos";
    include('./includes/functions.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $projeto ?></title>
</head>
<body>
<header>
        <h1><?php echo $projeto ?></h1>
</header>

<section>
    <h2><?php echo boasVindas("Rafael") ?></h2> 
       
    <div class="container">
        <form action="./createContact.php" method="post" class="form">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="input-group">
                        <input class="form-control" type="text" name="name" placeholder="Digite seu nome" required>
                    </div>
                </div>
                    
                <div class="col-md-6 col-sm-12">
                    <div class="input-group">
                        <input class="form-control" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="text" name="email" class="form-control" placeholder="Digite seu E-mail">
                </div>

                <div class="col-md-6 col-sm-12">
                    <input type="text" name="phone"  class="form-control" placeholder="Digite seu telefone">
                </div>
            </div>

            <button type="submit" class="btn btn-sm btn-success">Realizar cadastro</button>
            <button type="reset" class="btn btn-sm btn-danger">Limpar dados</button>
        </form>

        <h3><?= $projeto ?></h3><!--  shorttag = tag curta -->

        <ul>
            <? include('./includes/listContacts.php') ?>
        </ul>
    </div> <!-- end .container -->
</section>

<footer>
        <div class="container">
            <div class="row">
                <div class="col rodape">
                    <small>Desenvolvido por Rafael Moraes</small>
                </div>
            </div>
        </div>
</footer>
</body>
</html>