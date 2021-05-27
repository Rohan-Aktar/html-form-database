<html>
    <head>
        <title>Display Record</title>
    </head>
    <body>
    <div id="table2" class="data ">
        <table border="1" style="<?=$disnone?>">

            <tr>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Email_ID</th>
                <th>Phone_Number</th>
            </tr>
<?php
include("connect.php");
$query="select * from user";
$data= mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result2=mysqli_query($conn,"SELECT * FROM user ORDER BY id DESC LIMIT 1");


if($total!=0){
    
    while($result=mysqli_fetch_assoc($result2)){
        echo"
        
        <tr>
        <td>".$result['firstname']."</td>
        <td>".$result['lastname']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        </tr>
        
        ";
        }
}
else{
    $disnone="display:none" ;
}

?>

        </table>
        </div>
    </body>
</html>
