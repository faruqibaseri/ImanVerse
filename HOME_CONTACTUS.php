<?php

//connect to mysql
$db=mysqli_connect ("localhost", "root","") or die ("Connection failed");

//select a database
mysqli_select_db ($db, "imanverse") or die ("Select database failed");

if (isset ($_POST["Name"])) $name=$_POST["Name"];
else $name="";

if (isset ($_POST["email"])) $email=$_POST["email"];
else $email="";

if (isset ($_POST["Message"])) $message=$_POST["Message"];
else $message="";
                                                   


//provide numbering
$sqlchecknumber="SELECT * from contact_us";
$resultchecknumber=mysqli_query ($db, $sqlchecknumber);
$totalchecknumber=mysqli_num_rows ($resultchecknumber);

$Num=1000;
$Numid;
if ($totalchecknumber==0)
{
    $Numid=$Num;
}
else
{
$Numid=($totalchecknumber*1) + 999 + 1;
}

//the sql statement
$sql="INSERT INTO contact_us (id, name, email, message)
values ('$Numid', '$name','$email','$message')";    

//query the MySQL server
$result=mysqli_query ($db, $sql);

if($result){
    echo
    "<script>
        alert('Feedback received successfully!');
        window.location.href='HOME.php';
    </script>";

} else {
    echo "<script>
        alert('Login failed!');
        window.history.back();
    </script>";
}

?>