<?php


?>

<section class="form-group">
    <h1>Informações do seu perfil</h1>

    <form action="controller/user-panel.php" method="post">
        <label>Nome de usuário</label>
        <input type="text" name="login-name"  pattern="^([a-zA-Z\u00C0-\u017F']{0,}(\s?)){0,}$" title="Permitido somente letras e espaços"placeholder="Nome de usuário" value="<?php echo $user->getName();?>" required>
        <label>E-mail</label>
        <input type="email" name="login-email" placeholder="E-mail" value="<?php echo $user->getLogin();?>" required>
        <hr>
        <h2>Configurações de senhas</h2>
        <p>Caso haja necessidade de alteração de senha</p>
        <input type="password" pattern="[a-zA-Z0-9\u00C0-\u017F]{0,}" title="Senha somente letras e números" placeholder="Digite a senha atual" name="login-senha"><br>
        <input type="password" pattern="[a-zA-Z0-9\u00C0-\u017F]{0,}" title="Senha somente letras e números" placeholder="Nova senha" name="login-confirma">
        <div class="btn-group btn-right">
            <button name="submit-profile" class="btn-default btn-save">Salvar alterações</button>
        </div>
        <p style="text-align:center">
            <?php
                if(isset($_SESSION['error']['profile'])){
                    echo $_SESSION['error']['profile'];
                    unset($_SESSION['error']);

                }else if(isset($_SESSION['profile'])){
                    echo $_SESSION['profile'];
                    unset($_SESSION['profile']);
                }

            ?>
        </p>



</section>
