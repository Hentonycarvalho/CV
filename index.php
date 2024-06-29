<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Gerador de Currículos</h1>
        <form action="process.php" method="post">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" required>

            <div id="experience">
                <label>Experiência:</label>
                <div class="experience-item">
                    <input type="text" name="experience[]" placeholder="Descrição da experiência">
                </div>
            </div>
            <button type="button" id="add-experience">Adicionar Experiência</button>

            <div id="education">
                <label>Educação:</label>
                <div class="education-item">
                    <input type="text" name="education[]" placeholder="Descrição da educação">
                </div>
            </div>
            <button type="button" id="add-education">Adicionar Educação</button>

            <input type="submit" value="Gerar Currículo">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>