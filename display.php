<?php


    $servername="localhost";
    $username="root";
    $password="";
    $database="login";
    $logged=false;
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Sorry! we failed to connect");
    }
    $sql="SELECT * FROM `login`";
    $result=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($result);
    // if($total!=0){
    //    while($row=mysqli_fetch_assoc($result)){
    //     echo $row['S.no']."   ".$row['Username']."    ".$row['Email']."    ".$row['dob']."    ".$row['Phone'];
    //     echo"<br>";
    //    }
    // }
    // else{
    //     echo"No records found!";
    // }

?>

<!DOCTYPE html>
<html>
    <title>
        Database
    </title>
    <body>
        <table align="center" border="1px" style="width: 1400px;line-height:50px;">
            <tr>
                <th colspan="6"><h2>Record</h2></th>
            </tr>
            <t>
                <th>S.no</th>
                <th>Username</th>
                <th>Email</th>
                <th>dob</th>
                <th>Phone</th>
                <th>Photo</th>
            </t>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?> 
            <tr align="center">
                <td><?php echo $row['S.no']; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['Phone']; ?></td>
                <td><?php
                    
                    $imageURL = 'uploads/'.$row["Img_id"];
                    ?>
                        <img src="<?= $imageURL; ?>" width="500" />
                    <?php  ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>