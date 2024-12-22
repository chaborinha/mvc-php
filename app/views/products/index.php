<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Produtos</title>
</head>
<body>

    <a style="text-decoration: none;" href="<?php echo 'http://localhost/web'; ?>">Voltar para home</a>
    <hr>
    <a style="text-decoration: none;" href="http://localhost/web/product/create">Criar novo produto</a>
    <hr>

    <?php foreach($data['products'] as $produto): ?>
        <p>
            <a href="<?php echo 'http://localhost/web/product/show/' . $produto->id; ?>" class="btn btn-primary">
                <?= $produto->name ?>
            </a> 
            ... 
            <a href="<?php echo 'http://localhost/web/product/edit/' . $produto->id; ?>">Editar produto</a> | 
            <a href="<?php echo 'http://localhost/web/product/destroy/' . $produto->id; ?>">Deletar produto</a>
        </p> 
    <?php endforeach; ?>   

</body>
</html>
