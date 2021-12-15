<?php

if ( ! $_GET['q'] ){
    return ;
}

$q = $_GET['q'];
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    $servername = "localhost";
$username = "shopadmin";
$password = "shopadmin1234!@#$";
$dbname = "book_shop";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

// Select database
if ( ! mysqli_select_db($conn,$dbname) ) {
    echo "Database select failed !!";
}

$query = "SELECT *
  FROM books
 WHERE title LIKE '%$q%'";

 $results = mysqli_query($conn,$query);

 //print_r($results);
 //$result_arr = [];

 if(mysqli_num_rows($results) > 0){

    // Fetch result rows as an associative array
    while($result_arr[] = mysqli_fetch_assoc($results));

    // remove last empty entry.
    array_pop($result_arr);
    // Set the status to success, since we got the results.
    $response['status'] = 'success';

    // Add results received from database to response.
    $response['results'] = $result_arr;
} else {
    $response['status'] = 'failed';
}

$response['results'] = $result_arr;

// add instruction for the browser to interpret correctly as JSON.
header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>