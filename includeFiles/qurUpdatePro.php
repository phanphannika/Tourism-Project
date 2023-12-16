

<?php
            include('dbCon.php');
            $sfId = $_POST["txtId"];
            $queryUpdate = 'Update tbldata SET 
            ProName = "'.$_POST["txtProName"].'", 
            CateId = "'.$_POST["CatType"].'", 
            Description = "'.$_POST["des"].'", 
            DesURL = "'.$_POST["txtDesLink"].'" 
            WHERE id="'.$sfId.'"';

            if (mysqli_query($dbCon, $queryUpdate)) {
                $dbCon->close();
                header("location:../php/editPro.php");
            } 
            else 
                echo "Error: " . $queryUpdate . "<br>" . mysqli_error($dbCon);

        ?>