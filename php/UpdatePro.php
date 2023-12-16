<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Update Information</title>
    <?php
    include('../includeFiles/dbCon.php');
    $sfId = $_GET["fdId"];
    $qwAll = 'SELECT * FROM tbldata WHERE id=' . $sfId;
    $rwAll = $dbCon->query($qwAll);
    $row = $rwAll->fetch_assoc();

    include('../includeFiles/tourTypesQuery.php');
    ?>
</head>

<body>
    <center>
        <table style="width:1280px">
            <tr>
                <!-- <td colspan="2">
                <?php include('includeFiles/header.php'); ?>
            </td> -->
            </tr>
            <tr>
                <td colspan="2" style="width:1200px; vertical-align: top">
                    <form name="frmUpdate" action="../includeFiles/qurUpdatePro.php" method="post"
                        enctype="multipart/form-data">
                        <table style="width:920px; font-size:20pt">
                            <tr>
                                <td colspan="2" style="padding: 5px">
                                    <h2> Updating New Information </h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:220px;padding: 5px"></td>
                                <td style="width:700px;padding: 5px"><input type="text" name="txtId" hidden="true"
                                        style="width:650px; font-size:20pt" value="<?php echo $row["id"]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="width:220px;padding: 5px">Product Name :</td>
                                <td style="width:700px;padding: 5px"><input type="text" name="txtProName" value="<?php echo $row["ProName"]; ?>" style="width:650px; font-size:20pt"></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Product Type :</td>
                                <td style="padding: 5px">
                                    <?php
                                    if ($rtt->num_rows > 0) {
                                        echo '<select name="CatType" style="width:150px">';
                                        while ($tourType = $rtt->fetch_assoc()) {
                                            echo '<option value="' . $tourType["CateID"] . '">' . $tourType["Category"] . '</option>';
                                        }
                                        echo '</select>';
                                    } else {
                                        echo '0 results';
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Description :</td>
                                <td style="padding: 5px"><textarea rows="8" name="des"
                                        style="width:650px; font-size:20pt"><?php echo $row["Description"]; ?></textarea></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px">Destination Link :</td>
                                <td style="padding: 5px"><input type="text" name="txtDesLink" value="<?php echo $row["DesURL"]; ?>" style="width:650px; font-size:20pt"></td>
                            </tr>
                            <tr>
                                <td style="padding: 5px"></td>
                                <td style="padding: 5px">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="submit" name="cmdSubmit" value="Submit">
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="reset" name="cmdReset" value="Cancel">
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
            <tr>
                <td>CopyRight@2023, NUM IT30_11</td>
                <td style="text-align: center">
                    <a href="aboutus.html">Contact</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="contactus.html">Contact</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>