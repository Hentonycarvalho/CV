<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?php echo $name; ?></title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .print-button {
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $name; ?></h1>
        <p>Email: <?php echo $email; ?></p>
        <p>Telefone: <?php echo $phone; ?></p>

        <h2>Experiência</h2>
        <ul>
            <?php foreach ($experience as $exp): ?>
                <li><?php echo htmlspecialchars($exp); ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Educação</h2>
        <ul>
            <?php foreach ($education as $edu): ?>
                <li><?php echo htmlspecialchars($edu); ?></li>
            <?php endforeach; ?>
        </ul>

        <button class="print-button" onclick="window.print();">Imprimir / Salvar como PDF</button>
    </div>
</body>
</html>