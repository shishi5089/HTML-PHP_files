    <?php

    $DBServer = 'localhost'; // e.g 'localhost' or '192.168.1.100'
    $DBUser   = 'root';
    $DBPass   = '';
    $DBName   = '';

    $mysqli = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

    if ($mysqli->connect_error) {
      trigger_error('Database connection failed: '  . $mysqli->connect_error, E_USER_ERROR);
    }
    else
    {
              $query1 =$mysqli->query("select name from posuser");
                  echo "<table border=1>";           
              while($result = $query1->fetch_array())
            {  
               echo "<tr><td>$result[name]</td></tr>";
            }
               echo "</table>";
             echo "<br>Read next tutorial to insert, update values using php/mysqli<br><br>";
             echo "<a href='http://techietet.com/howto'>Techietet.com</a>";
            
    }
    ?>
