<?php

require 'config.php';

if (isset($_POST['confirm_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    // Update the reservation status to 'confirm' in the database
    $confirm_query = "UPDATE reservation SET etat = 'confirmer' WHERE `id_reservation` = '$reservation_id'";
    $conn->query($confirm_query);

    // Redirect back to the reservation page
    header("location:admin.php");
    exit();
}
if (isset($_POST['update_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    // Update the reservation status to 'confirm' in the database
    $confirm_query = "UPDATE reservation SET etat = 'en cours' WHERE `id_reservation` = '$reservation_id'";
    $conn->query($confirm_query);

   
    header("location:admin.php");
    exit();

}


// Check if the delete_reservation form is submitted
if (isset($_POST['delete_reservation'])) {
    $reservation_id = $_POST['reservation_id'];

    // Delete the reservation from the database
    $delete_query = "DELETE FROM reservation WHERE `id_reservation` = '$reservation_id'";
    $conn->query($delete_query);
    header("location:admin.php");

    exit();


}




?>