<?php
    ini_set('error_reporting', 2047);
    ini_set('display_errors', 1);
    $db = new PDO('mysql:dbname=hospital;host=localhost', 'root', '');

    $output = "";
    $image = "";

    if(isset($_POST["searchVal"])) {
        $searchq = $_POST["searchVal"];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

        $query = $db->query("SELECT * FROM doctors WHERE firstname LIKE '%$searchq%' OR lastname LIKE '%$searchq%'") or die("Could not search");
        $count = $query->rowCount();

        if($count == 0) {
            $output = 'There were no search results';
        }else{
            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $field = $row['field'];
                $photo = $row['photo'];
                $availability = $row['availability'];
                $location = $row['location'];
                $phoneNo = $row['phone_no'];

                $output .= '<div>'.$field.' '.$fname.' '.$lname.' is on the '.$location.'. Status is: '.$availability.'</div>'.'<br>';
            }
        }
    }
    echo($output);

    /*
    mysql_connect("localhost", "zivile_dk", "Spalis16?") or die ("Could not connect");
    mysql_select_db("zivile_dk") or die ("Could not find database");

    $output = "";
    $image = "";

    if(isset($_POST["searchVal"])) {
        $searchq = $_POST["searchVal"];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

        $query = mysql_query("SELECT * FROM doctors WHERE firstname LIKE '%$searchq%' OR lastname LIKE '%$searchq%'") or die("Could not search");
        $count = mysql_num_rows($query);

        if($count == 0) {
            $output = 'There were no search results';
        }else{
            while($row = mysql_fetch_array($query)) {
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $field = $row['field'];
                $photo = $row['photo'];
                $availability = $row['availability'];
                $location = $row['location'];
                $phoneNo = $row['phone_no'];

                $output .= '<div>'.$field.' '.$fname.' '.$lname.' is on the '.$location.'. Status is: '.$availability.'</div>'.'<br>';
            }
        }
    }
    echo($output);
    */
?>
