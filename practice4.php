<!DOCTYPE html>
 
<html>
<body>
  <h1>Multiplication Table </h1>

  <?php
    $size= $_POST['size'];
    
    echo "<table border =\"1\">";
    for ($row=0; $row<=$size; $row++){
        echo "<tr> \n";
        for ($col=0;$col<=$size; $col++){
            if ($row==0 && $col==0){
                echo "<td> </td>";

            }
            else if($row==0 && $col!=0){
                echo "<td> $col </td>";
            }
            else if($row!=0 && $col==0){
                echo "<td> $row </td>";
            }
            else {
                $product= $row*$col;
                echo "<td>$product</td> \n";
            }
        }
        echo "</tr>";

    }
    
  ?>
</body>
</html>