<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Club de scouts</title>

        <meta name="viewport" content="width=device-width, initial">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <main>
            <form>
                <section>
                    <input type="text" placeholder="Nom" autocomplete="none" required>
                    <input type="text" placeholder="Prénom"autocomplete="none"  required>
                    <input type="text" placeholder="Date de naissance" autocomplete="none" required>
                    <input type="text" placeholder="Ville" autocomplete="none" required>
                </section>
                <input type="submit">
            </form>

            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Age</th>
                        <th>Ville</th>
                        <th>Naissance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <tr>
                        <td>Lorem ipsum</td>
                        <td>Doloribus</td>
                        <td>19</td>
                        <td>praesentium</td>
                        <td>11/12/2001</td>
                        <td>
                            <a href="#">
                                <img src="svg/trash.svg" alt="236">
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </main>
    </body>
</html>