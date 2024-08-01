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

    <main class="m-auto pv-4">

        <form name="reservar" method="POST" class="form f-column center-grid">
            
            <h2>Reservar laboratório</h2>

            <section class="input">
                <label for="">Seu nome:</label>
                <input type="text" name="">
            </section>
            
            <p class="bold important">
                Matéria de base:
            </p>
            <section class="input-select">

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
                <label for="">Dia de uso:</label>
                <input type="date" name="">
            </section>
            <section class="input-checkbox">

                <p class="bold important">
                    Aulas de uso:
                </p>

                <?php

                    for ( $limit = 1 ; $limit <= 8 ; $limit++ ) {

                        echo ("
                            <label>
                                <input type=\"checkbox\" name=\"class_select\"> ${limit}º Aula
                            </label>
                        ");

                    }

                ?>
            </section>

            <p class="bold important">
                A sua aula é dividida em turmas(A e B)?
            </p>
            <section class="input-select">
                
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