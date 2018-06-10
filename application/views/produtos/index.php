<html lang="pt-br">
<head>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css")?>">
    <link rel="stylesheet" href="<?= base_url("css/estilo.css")?>">
</head>

<body class="container">
    <h1>produtos</h1>
    <table class="table">
        <?php foreach($prd as $produto) :?>
            <tr>

                <td><?= $produto["nome"] ?></td>
                <td><?= $produto["descricao"] ?></td>
                <td><?= numeroReais($produto["preco"]) ?> </td>
            </tr>
        <?php endforeach ?>

    </table>

    

    <?php if(!$this->session->userdata("usuario_logado")) : ?>
    
    <h1>longin</h1>
    <?php
        echo form_open("longin/autentificar");

                echo form_label("Email", "email");
                echo form_input(array(
                    "name" => "email",
                    "id" => "email",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));

                echo form_label("Senha", "senha");
                echo form_password(array(
                    "name" => "senha",
                    "id" => "senha",
                    "class" => "form-control",
                    "maxlength" => "255"
                ));

                echo form_button(array(
                "class" => "botoes btn btn-success",
                "content" => "Longin",
                "type" => "submit"
                
                ));

        echo form_close();
    ?>

    

    <h1>Cadastro</h1>
    <?php 
       echo form_open("usuarios/novo");

            echo form_label("Nome", "nome");    
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_label("Email", "email");
            echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_label("Senha", "senha");
            echo form_password(array(
                "name" => "senha",
                "id" => "senha",
                "class" => "form-control",
                "maxlength" => "255"
            ));

            echo form_button(array(
                "class" => "botoes btn btn-primary",
                "content" => "Cadastrar",
                "type" => "submit"
            ));
            
            echo form_close();
            ?>

            <?php endif ?>
    
</body>
</html>