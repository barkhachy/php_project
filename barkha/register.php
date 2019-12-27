
<?php
    include './db_connect.php';
    include './router.php';
    $conn = OpenCon();
    // echo "Connected Successfully";

    $firstName = strval($_REQUEST['FirstName']);
    $lastName = strval($_REQUEST['LastName']);
    $email = strval($_REQUEST['Email']);
    $startingYear = intval($_REQUEST['StartingYear']);
    $mobile = intval($_REQUEST['Mobile']);
    $stream = strval($_REQUEST['Stream']);
    $city = strval($_REQUEST['City']);
    $state  = strval($_REQUEST['State']);
    $zip = strval($_REQUEST['Zip']);
    $bio = strval($_REQUEST['Bio']);
    // echo $firstName, $lastName, $email;
    // echo $name,$userName,$email, $address;
    $sql = "INSERT INTO users (FirstName, LastName, Email, StartingYear, Mobile, Stream, City, State, Zip, Bio)
        VALUES ('$firstName', '$lastName', '$email', '$startingYear', '$mobile', '$stream', '$city', '$state', '$zip', '$bio')";
    
    if ($conn->query($sql) === TRUE) {
        home($firstName);
    } else {
        echo "{}<html>
                <h1> Error!!! Please enter all unique fileds</h1>
            </html>
            ";
    }


    CloseCon($conn);
?>