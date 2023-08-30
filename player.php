<?php
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Phonenumber = $_POST['Phonenumber'];
    $Gender = $_POST['Gender'];
    $Batting = $_POST['Batsman'];
    $Bowling = $_POST['Bowl'];
    $Wicketkeeping = $_POST['Wicketkeeper'];
    $Teamowner = $_POST['Owner'];

    echo($Name."".$Age."".$Phonenumber."".$Gender."".$Batting."".$Bowling."".$Wicketkeeping."".$Teamowner);

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "tcc";

    // Database connection here

    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    if (!$conn)
    {
        die("Failed to connect to MYSQL:".mysqli_connect_error());
    }
    else
    {
        $sqli = "INSERT INTO player(Name, Age, Phonenumber, Gender, Batsman, Bowl, Wicketkeeper,Owner)
        values ('".$Name."','".$Age."','".$Phonenumber."','".$Gender."','".$Batting."','".$Bowling."','".$Wicketkeeping."','".$Teamowner."')";
        if($conn->query($sqli))
        {
echo "successfully inserted";
        }
        else
        {
        echo "Error:".$sql.$conn->error;
        }
    $conn->close();   
}
?>