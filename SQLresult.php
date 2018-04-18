<?php

	mysql_connect("localhost", "root", "admin") or die (mysql_error ());
	mysql_select_db("news") or die(mysql_error());

	$strSQL = "SELECT * FROM news ORDER BY `idate` DESC ";
	$rs = mysql_query($strSQL);

	

    while($row = mysql_fetch_array($rs)) 
    {
      echo '<div class="news"><div class="date">' . date('d.m.Y', $row['idate']) . '</div>';
      echo '<div><a href="/?page=1">' . $row['title'] . '</a></div>';
      echo  '<p>' . $row['announce'] . '</p></div>';

    }

	mysql_close();
?>