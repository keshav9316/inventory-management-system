<?php

require 'connect.php';

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ". mysqli_error($conn);
}

require 'closeconnection.php';

?>