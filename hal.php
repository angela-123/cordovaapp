<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
    <?php 
     $conn = mysql_connect('localhost','dejek_autos','kovachenko123');
     mysql_select_db(dejek_automobiles)or die('Cant connect');
     $huge = "select company,location,phone from haulages order by rand() limit 3";

     $res = mysql_query($huge);

     if($res)
     {
         //echo 'Search Result';
         //echo $autotype;
     }
     
else {
         echo 'No Results';
}

  $buns = mysql_num_fields($res);
             echo '<table class = "table table-responsive table-bordered">';
             
            
             
             while ($rago = mysql_fetch_assoc($res))
                     
                     
             {
                 
                 
                 
                 
                 
                 echo '<tr>';
                 echo '<td>';
                 echo '<nobr class = miki>'. 'Haulage Company' .'</nobr>';
                 echo '</td>';
                 echo '<td>';
                 echo '<nobr class = miki>'. $rago['company'] .'</nobr>';
                 echo '</td>';
                 
                 
                 echo '</tr>';
                 
                 echo '<tr>';
                 echo '<td>';
                 echo 'Location';
                 echo '</td>';
                 echo '<td>';
                 echo $rago['location'];
                 echo '</td>';
                 
                 
                 echo '</tr>';
                 
                 
                 
                 echo '<tr>';
                 echo '<td>';
                 echo 'Phone#';
                 echo '</td>';
                 echo '<td>';
                 echo $rago['phone'];
                 echo '</td>';
                 
                 
                 echo '</tr>';
                 
                 
                
                 
                 
                 
                 
                 
                
                 
                 
                 
                 
                 
                 
                 
                 
             }
     
     
     
 
 

  
 echo '</table>';


    ?>

    </body>
</html>