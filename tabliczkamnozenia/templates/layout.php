<html>
    <head>

    </head>
    <body>
        <div class="header">
            <h1>Tablica mnożenia JSON’a</h1>
        </div>
        <div class="header">
            Wybierz wartość dla której chcesz zobaczyć tablice mnożenia:
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="/">Table</a>
                </li>
                <li>
                    <a href="/?calculate=History">History</a>
                </li>
            </ul>
        </div>

        <div>
        <?php
        if($calculate === 'Table'):
         include("templates/pages/table.php");
        elseif($calculate === 'History'):
            include("templates/pages/history.php");
        else:
            include("templates/pages/table.php");
        endif;
        ?>
        </div>
    </body>
</html>