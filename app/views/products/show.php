<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto <?= $data['product']->name ?></title>
</head>
<body>
    <p><?= $data['product']->name ?></p>
    <p><?= $data['product']->description ?></p>
    <p><?= $data['product']->price ?></p>
</body>
</html>