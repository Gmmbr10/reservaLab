<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logi-lab</title>
    <link rel="stylesheet" href="./src/style/style.css">
    <link rel="stylesheet" href="./src/font-awesome/css/fontawesome.css">
    <link rel="stylesheet" href="./src/font-awesome/css/brands.css">
    <link rel="stylesheet" href="./src/font-awesome/css/solid.css">
    <link rel="stylesheet" href="./src/font-awesome/css/regular.css">
    <link rel="stylesheet" href="./src/font-awesome/css/all.css">
</head>

<body>

    <?php include_once __DIR__ . "/header.php"; ?>

    <main class="m-auto pv-4 g-1 flex f-column">
        
        <h2 class="center">Reservar laboratório</h2>

        <form name="reservar" method="POST" class="form f-column center-grid">

            <section class="input">
                <label for="">Nome do professor:</label>
                <input type="text" name="">
            </section>
            
            <p class="bold important">
                Matéria de base:
            </p>

            <section class="input-select col-3">

                <input type="radio" name="materia" value="comum" id="comum">
                <label for="comum">
                    Comum
                </label>
                <input type="radio" name="materia" value="adm" id="adm">
                <label for="adm">
                    Técnica - Administração
                </label>
                <input type="radio" name="materia" value="info" id="info">
                <label for="info">
                    Técnica - Informática
                </label>
            </section>

            <section class="input">
                <label for="">Data de uso:</label>
                <input type="date" name="">
            </section>

            <p class="bold important">
                Aula(s) de uso:
            </p>

            <section class="input-checkbox g-1">

                <label>
                    <input type="checkbox" name="class_select"> 1&deg; Aula ( 07:30 - 08:20 )
                </label>
                <label>
                    <input type="checkbox" name="class_select"> 2&deg; Aula ( 08:20 - 09:10 )
                </label>
                <label>
                    <input type="checkbox" name="class_select"> 3&deg; Aula ( 09:10 - 10:00 )
                </label>
                <label>
                    <input type="checkbox" name="class_select"> 4&deg; Aula ( 10:20 - 11:10 )
                </label>
                <label>
                    <input type="checkbox" name="class_select"> 5&deg; Aula ( 11:10 - 12:00 )
                </label>
                <label>
                    <input type="checkbox" name="class_select"> 6&deg; Aula ( 13:00 - 13:50 )
                </label>
                <label>
                    <input type="checkbox" name="class_select"> 7&deg; Aula ( 13:50 - 14:40 )
                </label>
                <label>
                    <input type="checkbox" name="class_select"> 8&deg; Aula ( 14:40 - 15:30 )
                </label>

            </section>

            <p class="bold important">
                A aula será dividida em turmas (A e B)?
            </p>

            <section class="input-select col-2">
                
                <input type="radio" name="turma" value="yes" id="sim">
                <label for="sim">
                    Sim
                </label>
                <input type="radio" name="turma" value="not" id="nao">
                <label for="nao">
                    Não
                </label>

            </section>

            <button type="submit" class="btn">Agendar</button>

        </form>

    </main>

    <?php include_once __DIR__ . "/footer.php"; ?>

</body>

</html>