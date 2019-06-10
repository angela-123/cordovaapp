<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
     <style>
     .pop{
         color:darkblue;

     }

     #pila{

         background:navy;
         color:white;
     }
     </style>
    </head>
    <body>
    <?php
     $conn = mysql_connect('localhost','dejek_autos','kovachenko123');
     mysql_select_db(dejek_automobiles)or die('Cant connect');
     $cname = $_POST['cname'];
     $comm = $_POST['comm'];
     $loc = $_POST['loc'];

     $chad = "insert into comments(date,commentedby,comment,location)values(curdate(),'$cname','$comm','$loc')";
     mysql_query($chad);

     $chila = "select * from comments where date = curdate() and commentedby = '$cname'";

     $ret = mysql_query($chila);
     $res = mysql_fetch_assoc($ret);



     ?>

     <section id = "pila">
         <h3>Your Comment</h3>
         <p class = "pop" >Comment By  <?php echo $res['commentedby'] ?></p>
         <p class = "pop">Location     <?php echo $res['location'] ?></p>
         <textarea class = "form-control" rows="10" cols="20"><?php echo $res['comment'] ?></textarea>
         <button type="button" class = "btn btn-primary btn-lg">Remove Comment</button>
     </section>

            
    </body>
</html>