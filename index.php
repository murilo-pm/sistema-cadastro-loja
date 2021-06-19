<!DOCTYPE html>
<html>
<head>
    <!-- ENDEREÇO: http://localhost/sistema-cadastro-loja/ -->
    <meta charset='utf-8'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <title>Page Title</title>
    <!-- <meta name='viewport' content='width=device-width, initial-scale=1'> -->
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <!-- <script src='main.js'></script> -->
</head>
<body>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!-- CSS do Materialize -->        <!-- O minificado carrega mais rápido -->
     <link rel="stylesheet" href="materialize/css/materialize.min.css">


    <nav class="purple darken-1">
        <div class="nav-wrapper container">
            <div class="brand-logo light">Sistema de Cadastro</div>
            <ul class="right">
                <li><a href=""><i class="material-icons left">account_circle</i>Cadastro</a></li>
                <li><a href=""><i class="material-icons left">search</i>Consultas</a></li>
            </ul>
        </div>
    </nav>


    <!-- formulário de cadastro -->
    <div class="row container">
        <p>&nbsp;</p>   <!-- para acrescentar uma linha vazia -->
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend><img src="images/avatarVerde.png" alt="imagem do usuario" width="100"></legend>
                <h5 class="light center">Cadastro de clientes</h5>

                <!-- campo nome -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                    <label for="nome">Nome do(a) cliente</label>
                </div>

                <!-- campo email -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input type="email" name="email" id="email" maxlength="50" required>
                    <label for="email">E-mail do(a) cliente</label>
                </div>

                <!-- campo telefone -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" name="telefone" id="telefone" maxlength="15" required>
                    <label for="telefone">Telefone do(a) cliente</label>
                </div>

                <!-- botões -->
                <div class="input-field col s12">
                    <input type="reset" value="limpar" class="btn red"> 
                    <input type="submit" value="cadastrar" class="btn blue">    
                </div>
            </fieldset>
        </form>
    </div>

     <!-- arquivos jQuery/Javascript -->
    <script type="text/javascript" src="materialize/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

    <!-- inicialização do jQuery -->
    <script type="text/javascript">
        $(document).ready(function(){

        });
    </script>
</body>
</html>