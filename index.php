<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            // fuction to get users
                function getUsers(){
                    // defining the location of the file
                    $url = "users.json";
                    $data = file_get_contents($url);
                    return json_decode($data, true);
                }
                $users = getUsers();
                if(!empty($users)){
                    for ($i = 0; $i<count($users); $i++)
                    {
                        echo
                        '<div class="col-md-3">
                            <div class="card mt-2 mb-2" style="">
                                <div class="card-body">
                                    <h5 class="card-title">' . "Name: " . $users[$i]["name"] . '</h5>
                                    <p class="card-text">' . "Email: " . $users[$i]["email"] . '</p>
                                    
                                    <p class="card-text">' . "Phone: ". $users[$i]["phone"] . '</p>
                                    <p class="card-text">' . "Website: ". $users[$i]["website"] . '</p>
                                    <p class="card-text">'  . "Address: ". 
                                    $users[$i]["address"]["street"] . 
                                    $users[$i]["address"]["city"] .
                                    $users[$i]["address"]["suite"] .
                                    $users[$i]["address"]["zipcode"] .
                                    $users[$i]["address"]["geo"]["lat"].
                                     '</p>
                                </div>
                            </div>
                        </div>';
                    }
                    echo '</br>';
                    foreach ($users as $user)
                    {
                        echo
                        '<div class="col-md-3">
                            <div class="card mt-2 mb-2" style="">
                                <div class="card-body">
                                    <h5 class="card-title">' . "Name: " . $user["name"] . '</h5>
                                    <p class="card-text">' . "Email: " . $user["email"] . '</p>
                                    
                                    <p class="card-text">' . "Phone: ". $user["phone"] . '</p>
                                    <p class="card-text">' . "Website: ". $user["website"] . '</p>
                                    <p class="card-text">'  . "Address: ". 
                                    $user["address"]["street"] . 
                                    $user["address"]["city"] .
                                    $user["address"]["suite"] .
                                    $user["address"]["zipcode"] .
                                    $user["address"]["geo"]["lat"].
                                     '</p>
                                </div>
                            </div>
                        </div>';
                    }
                }
            ?>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>