<?php
// function get_db() {
// 	$db = NULL;
// 	try {
// 		$dbUrl = getenv('DATABASE_URL');
// 		if (!isset($dbUrl) || empty($dbUrl)) {
// 			$dbUrl = "postgres://hnwrxhnwjaeuoq:3be1b49075697899f852ff2ad72fbff0f0ed8d0d58bdf50707cced1f1a21b30a@ec2-34-193-42-173.compute-1.amazonaws.com:5432/dbl3iqe4nq84qh";
			
// 		}
// 		$dbopts = parse_url($dbUrl);
// 		$dbHost = $dbopts["host"];
// 		$dbPort = $dbopts["port"];
// 		$dbUser = $dbopts["user"];
// 		$dbPassword = $dbopts["pass"];
// 		$dbName = ltrim($dbopts["path"],'/');
// 		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
// 		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
// 	}
// 	catch (PDOException $ex) {
// 		echo "Error connecting to DB. Details: $ex";
// 		die();
// 	}
// 	return $db;
// }

/* Database connections */

function get_db() {
    $server = "localhost";
    $database = "cs313projectone";
    $user = "iClient";
    $password = "Q8pAdTG1q75Cd1fC";
    $dsn = 'mysql:host=' . $server . ';dbname=' . $database;
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $cs313Link = new PDO($dsn, $user, $password, $options);
        if(is_object($cs313Link )){
            // echo 'It worked';
        }
        return $cs313Link;
    } catch (PDOException $ex) {
        // echo 'It failed, ' . $e->getMessage();
        // header('Location: /phpmotors/view/500.php');
		//exit;
		echo "Error connecting to DB. Details: $ex";
		die();
    }
}

//phpmotorsConnect();