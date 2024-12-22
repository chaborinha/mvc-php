<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
</head>
<body>
    <form action="<?php echo 'http://localhost/web/product/update/' . $data['product']->id; ?>" method="post">
        
        <label for="name">Nome do Produto:</label>
        <input type="text" value="<?= $data['product']->name ?>" id="name" name="name" required>
    
        <br><br>

        <label for="description">Descrição do Produto:</label>
        <textarea id="description" name="description" rows="4" required><?= $data['product']->description ?></textarea>

        <br><br>

        <label for="price">Preço:</label>
        <input type="number" value="<?= $data['product']->price ?>" id="price" name="price" step="0.01" required>
    
        <br><br>

         <button type="submit">Enviar</button>
    </form>
</body>
</html>