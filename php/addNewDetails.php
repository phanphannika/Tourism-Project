<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Information</title>
    <!-- <link rel="stylesheet" href="../style/style.css"> -->
</head>

<body>

    <?php 
        include('../includeFiles/header.php'); 
        
    ?>

    <table style="width:1280px; margin:auto; ">
        <!-- <tr>
            <td colspan="2">
                <?php include('../includeFiles/header.php'); ?>
            </td>
        </tr> -->
        <tr>
            <td style="width:920px;  ">
                <?php  
                  $img = $_FILES["fImg"]["name"];
                  $rand = rand();
                  $imgU = $rand.$img;
                  $path = "../images/".$imgU;
                  move_uploaded_file($_FILES['fImg']['tmp_name'],$path);
                  $indate = date('Y/m/d H:m:s');
          
                  include('../includeFiles/dbCon.php');
           
                  $queryAdd = 'Insert into tblData (ProName, DesURL, CateID, imageURL, Description, DateIn) 
                  Values("'.$_POST["txtProName"].'", "'.$_POST["txtDesLink"].'", "'.$_POST["CatType"].'", "'. $path .'","'.$_POST["des"].'", "'. $indate .'")';
                  //Check From Here  
                  if (mysqli_query($dbCon, $queryAdd)) {
                    echo '<h1 style="margin-top:10rem;">The Post Summary !!!</h1>';
                    echo 'New record created successfully!';   
                  } 
                  else 
                    echo "Error: " . $queryAdd . "<br>" . mysqli_error($dbCon);
                  echo 'Thank You!!!';
                   $dbCon->close();
                ?>

                    </br>
                    <a href="addnew.php">Add more</a>
            </td>
        </tr>
        
    </table>

    

</body>

</html>