<input>
    
</input>


<?php
//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';
$test = 'root';

//database user password
$pass = 'MYSQL_ROOT_PASSWORD';

// database name
$mydatabase = 'blj21_soccer';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

// table 1
// select query
$sql = 'SELECT * FROM Soccer_city';


if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $asst_referee_mast[] = $data;
    }
}

// dicker titel 1
$dicke_schrift = "<h1><b>Table1</b></h1>";
echo $dicke_schrift;

foreach ($asst_referee_mast as $user) {
    echo "<br>";
    echo $user->ass_ref_id . " <b>│</b> " . $user->ass_ref_name. " <b>│</b> " . $user->country_id;
    echo "<br>";
}

echo "<br>";
echo "<br>";

// tablle 2
// select query 2
$sql = 'SELECT * FROM coach_mast';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $coach_mast[] = $data;
    }
}

//dicker titel 2
$dicke_schrift2 = "<h1><b>Table2</b></h1>";
echo $dicke_schrift2;


foreach ($coach_mast as $test) {
    echo "<br>";
    echo $test->coach_id . " <b>│</b> " . $test->coach_name;
    echo "<br>";
}

?>