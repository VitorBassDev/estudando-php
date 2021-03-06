<!-- 
    Estudando PHP
    
    Códigos comentados por Marcelo Pereira
    https://github.com/marcelopoars
    https://marcelopoars.github.io/
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS Bootstrap 4.3 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <title>Estudando PHP - Upload de Arquivos</title>
</head>
<body>
<div class="container">

<h1 class="my-5">Estudando PHP - Upload de Arquivos</h1>

<?php
    // Verificamos se o usuário clicou no botão enviar
    if(isset($_POST['enviar-formulario'])): 
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif", "pdf");
        $quantidadeArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;
        
        while($contador < $quantidadeArquivos):
            
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

            // Verifica se a extensão existe no array de formatos prmitidos
            if(in_array($extensao, $formatosPermitidos)):
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                $novoNome = uniqid().".$extensao";

                // Verifica se houve o upload
                if(move_uploaded_file($temporario, $pasta.$novoNome)):
                    print '<div class="alert alert-success" role="alert">Imagem enviada com sucesso para '.$pasta.$novoNome.'</div>';
                else:
                   print '<div class="alert alert-danger" role="alert">Erro ao enviar o arquivo '.$temporario.'</div>';                
                endif;
            else:
                print '<div class="alert alert-danger" role="alert">A extensão <strong>'.$extensao.'</strong> não é permitida</div>';                            
            endif;

            $contador++;

        endwhile;
    endif; 
?>

<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-4">
            <!-- Permite o upload de multiplos arquivos / array de arquivos -->
            <input type="file" class="form-control" name="arquivo[]" multiple>
        </div>
    </div>
    <button class="btn btn-primary col-md-4 btn-block my-2" type="submit" name="enviar-formulario">Enviar arquivo</button>
    <button class="btn btn-danger col-md-4 btn-block my-2" type="clear" name="limpar">Limpar</button>
</form>

<hr class="my-5">

<?php var_dump($_FILES) ?>

</div><!-- Fim container-->

<!-- JQuery / Popper / Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>