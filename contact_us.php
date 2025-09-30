<?php

//connect to mysql
$db=mysqli_connect ("localhost", "root","") or die ("Connection failed");

//select a database
mysqli_select_db ($db, "imanverse") or die ("Select database failed");

if (isset ($_POST["name"])) $name=$_POST["name"];
else $name="";

if (isset ($_POST["email"])) $email=$_POST["email"];
else $email="";

if (isset ($_POST["message"])) $message=$_POST["message"];
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
        window.location.href='HOME.html';
    </script>";

} else {
    echo "<script>
        alert('Login failed!');
        window.history.back();
    </script>";
}

?>