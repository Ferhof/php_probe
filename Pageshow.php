<?php
    
    mysql_connect("localhost", "root", "admin") or die (mysql_error ());
    mysql_select_db("news") or die(mysql_error());

    $per_page=5;

    if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;
    $start=abs($page*$per_page);
    $q="SELECT * FROM `news` ORDER BY idate DESC LIMIT $start,$per_page";
    $res=mysql_query($q);

    while($row=mysql_fetch_array($res)) 
    {
        echo '<div class="news"><div class="date">' . date('d.m.Y', $row['idate']) . '</div>';
        echo '<div><a href="/?id=' .$row['id']. '">' . $row['title'] . '</a></div>';
        echo  '<p>' . $row['announce'] . '</p></div>';
    }

    $q="SELECT count(*) FROM `news`";
    $res=mysql_query($q);
    $row=mysql_fetch_row($res);
    $total_rows=$row[0];


    echo '<hr>';
    echo '<div>Страницы:</div>';

    $num_pages=ceil($total_rows/$per_page);

    for($i=1;$i<=$num_pages;$i++) 
    {
        if ($i-1 == $page) 
        {
            echo $i." ";
        }
         
        else 
        {
            echo '<div class="button"><a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i."</a></div> ";
        }
    }

    mysql_close();
?>