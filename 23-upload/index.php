<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Upload de Arquivos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-5">Estudando PHP - Upload de Arquivos</h1>



<?php
    // Verificamos se o usuário clicou no botão enviar
    if(isset($_POST['enviar-formulario'])): // if - 01
        // print 'enviouuuuuu';
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        // Verifica se a extensão existe no array de formatos prmitidos
        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid().".$extensao";

            // Verifica se houve o upload
            if(move_uploaded_file($temporario, $pasta.$novoNome)):
                $mensagem = '<div class="alert alert-success" role="alert">Imagem enviada com sucesso!</div>';
            else:
                $mensagem = '<div class="alert alert-danger" role="alert">Erro</div>';                
            endif;
        else:
            $mensagem = '<div class="alert alert-danger" role="alert">Formato de imagem inválido</div>';                            
        endif;
    
    print $mensagem;

    endif; // Fim if -01
?>

<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-1">
            <input type="file" class="form-control" name="arquivo">
        </div>
    </div>
    <button class="btn btn-primary btn-block my-2" type="submit" name="enviar-formulario">Enviar arquivo</button>
    <button class="btn btn-danger btn-block my-2" type="clear" name="limpar">Limpar</button>
</form>

<hr class="my-5">


</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>