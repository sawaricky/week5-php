<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    //  this is the ocnnection string to the database 
    $connect = mysqli_connect('localhost','root','root','http5225week5');
    // if you are unable to connect ot the database error should be displayed in the error handling it is good to know the daya erorrs and the number for the data 
    if(!$connect){
        // error number
        echo 'Error code: ' . mysqli_connect_errno();
        //error type
        echo 'Error code: ' . mysqli_connect_error();
        exit;
    }
    // use back tick above tab key not quote for table name 
    $query = 'select `Name`, `Hex` From table1';
    $results = mysqli_query($connect, $query);

    if(!$results){
        echo 'Error Message ' . mysqli_error($connect);
        exit;
    }
    else{
        echo 'The query found ' .mysqli_num_rows($results);
    }

    foreach($results as $result){
        // gettign hte name from the result array
        echo '<div class="fw-bold fs-3">' . $result['Name'] . '</div>';
        // getting the wifht and height for the color to fit into a container
        echo '<div style= "height: 30px; width: 50px; background: '.$result['Hex'].'"></div>';

    }



    ?>

</body>
</html>