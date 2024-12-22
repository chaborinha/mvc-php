<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="<?php echo 'http://localhost/web/product/store/';?>" method="post">
    
        <label for="name">Nome do Produto:</label>
        <input type="text" id="name" name="name" required>
    
        <br><br>

        <label for="description">Descrição do Produto:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <br><br>

        <label for="price">Preço:</label>
        <input type="number" id="price" name="price" step="0.01" required>
    
        <br><br>

         <button type="submit">Enviar</button>
    </form>
</body>
</html>