<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>

<?php
    mysql_connect("localhost", "root", "admin") or die (mysql_error ());
    mysql_select_db("news") or die(mysql_error());


    //$id = ;

    $sql = 'SELECT * FROM news WHERE id = ' . $_GET['id'];
    $queryResult = mysql_query($sql);
    $row = mysql_fetch_assoc($queryResult);
    
    echo '<a href="Index.php">Все новости>>></a></div>';

    echo '<div>' . $row['title'] . '</div>';
    echo '<div>' . $row['content']. '</div>';
    

?>


        
    </body>
</html>
