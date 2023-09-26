<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Formulário</title>
</head>
<body>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            background-image: url('');            
            background-repeat: no-repeat;            
            background-attachment: fixed;            
            background-size: 100% 100%;
        }
        h1 {
            text-align: center;
        }
        
    </style>
    <h1>Resultado do Formulário</h1>

    <p align="center"> Seu feedback foi enviado com Sucesso!! Abaixo você pode conferir os dados e o seu feedback:) </p>
    <?php
    if ( isset( $_POST["nome"] ) && isset( $_POST["email"] ) && isset( $_POST["mensagem"] )  ) 
    { 
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
    ?>

        <p><strong>Nome:</strong> <?php echo $nome; ?> </p>
        <p><strong>E-mail:</strong> <?php echo $email; ?> </p>
        <p><strong>Mensagem:</strong> <?php echo $mensagem; ?> </p>
    
        <?php
    }
        ?>

    <p align="center"><h2><a href="index.html">Voltar para o Formulário</a></h2></p>
</body>
</html>