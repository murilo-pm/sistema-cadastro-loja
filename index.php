<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
     
    <?php include_once 'includes/menu.inc.php' ?>

    <!-- formulário de cadastro -->
    <div class="row container">
        <p>&nbsp;</p>   <!-- para acrescentar uma linha vazia -->
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend><img src="images/avatarVerde.png" alt="imagem do usuario" width="100"></legend>
                <h5 class="light center">Cadastro de clientes</h5>

                <?php 
                    if(isset($_SESSION['msg'])):
                        echo $_SESSION['msg'];
                        session_unset();
                    endif;
                ?>

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
    
<?php include_once 'includes/footer.inc.php' ?>