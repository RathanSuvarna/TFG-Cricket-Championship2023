<?php
if (isset($Name) || isset($Age)  || isset($Phonenumber) || isset($Gender) || isset($Batting) || isset($Bowling) || isset($Wicketkeeping) || isset($Teamowner))
 { 

    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Phonenumber = $_POST['Phonenumber'];
    $Gender = $_POST['Gender'];
    $Batting = $_POST['Batsman'];
    $Bowling = $_POST['Bowl'];
    $Wicketkeeping = $_POST['Wicketkeeper'];
    $Teamowner = $_POST['Owner'];
    
    $conn = new mysqli('localhost','test','TCC.html');
    if ($conn->connect_error)
    {
        die('connection Failed : '.$conn->connect_error);
    }
    else
    {
    $stmt = $conn->prepare("insert into player($Name, $Age, $Phonenumber, $Gender, $Batsman, $Bowl, $Wicketkeeper, $Owner)values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("siisssss", $Name, $Age, $Phone, $Gender, $Batsman, $Bowl, $Wicketkeeper,
     $Owner);
    $stmt->execute();
    echo "registration successfull...";
    $stmt->close();
    $conn->close();   
}

}
?>
