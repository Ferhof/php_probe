<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Новости</title>
        <link href="/css/stylesheet.css" rel="stylesheet">
    </head>
    <body>
        <div class= "content">
            <div>
                Новости.
            </div>
            <hr>
            <div>
                <?php

                    if($_GET['id'])
                    {
                       include 'PHPPage.php';
                    }else
                    {
                       include 'Pageshow.php';
                    }
                   
                ?>
            </div>
        </div>
    </body>
</html>
