<?php
require 'config.php';
// session_start();
$id_admin = $_SESSION["id_admin"] ; 
if(empty($_SESSION["id_admin"])){
	header("Location: login.php");
  }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/The Ultimate Gamers</title>

    <meta content="The Ultimate Gamers" name="description">
    <meta content="The Ultimate Gamers" name="keywords">

    <!-- Favicons -->
    <link href="../client/assets/img/game-controller.png" rel="icon">
    <link href="../client/assets/img/game-controller.png" rel="apple-touch-icon">
    <link href="admin.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="../client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../client/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../client/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top ">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-xl-9 d-flex align-items-center justify-content-lg-between" id="source">
                    <h1 class="logo me-auto me-lg-0"><a href="#">The Ultimate Gamers</a></h1>

                    <a id='logout' href="logout.php" id="submit" name="submit" class="btn btn-danger">Se déconnecter</a>
                </div>
            </div>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <section class="tables-page-section"="service">
            <section id="history" class="history">
                <div class="container">
                    <div class="section-title">
                        <h2>Réservation</h2>
                    </div>
                    <div>

                        <?php

// Fetch data from the database
$sql = "SELECT reservation.*, client.firstname AS firstname, client.lastname AS lastname
        FROM reservation
        JOIN client ON reservation.`id_client` = client.id";
$result = $conn->query($sql);

?>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section_title text-center">
                                        <div class="brand_border">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                            <i class="fas fa-handshake"></i>
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <th>#</th>
                                                <th>Id Reservation</th>
                                                <th>Date Réservation</th>
                                                <th>Date Debut</th>
                                                <th>Date Fin</th>
                                                <th>Etat</th>
                                                <th>Nombre de joueur</th>
                                                <th>Post</th>
                                                <th>Nom et Prénom</th>
                                                <th>Actions</th>
                                            </thead>

                                            <tbody>
                                                
                                                <?php
                                                
                        if ($result->num_rows > 0) {
                            $index = 1; 

                            while ($row = $result->fetch_assoc()) {
                              
                                echo "<tr>";
                                echo "<th>" . $index . "</th>";
                                echo "<td>" . $row['id_reservation'] . "</td>";
                                echo "<td>" . $row['date_reservation'] . "</td>";
                                echo "<td>" . $row['date_debut'] . "</td>";
                                echo "<td>" . $row['date_fin'] . "</td>";
                                echo "<td>" . $row['etat'] . "</td>";
                                echo "<td>" . $row['nombre_de_joueur'] . "</td>";
                                echo "<td>" . $row['id_post'] . "</td>";
                                echo "<td>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
                                echo "<td>";
                                echo "<form method='POST' action='edit.php'>";
                                echo "<input type='hidden' name='reservation_id' value='" . $row['id_reservation'] . "'>";
                                if ($row['etat'] == 'en attente') {
                                    echo "<button type='submit' name='update_reservation' class='btn btn-primary'>Valider</button>";
                                    echo "<button type='submit' name='delete_reservation' class='btn btn-danger'>Supprimer</button>";
                                }elseif($row['etat'] == 'en cours') {
                                    echo "<button type='submit' name='confirm_reservation' class='btn btn-success'>Confirme</button>";
                                }elseif($row['etat'] == 'confirmer'){
                                    echo '<p></p>';
                                }
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";

                                $index++; 
                            }
                        } else {
                            echo "<tr><td colspan='9'>No data found.</td></tr>";
                        }
                        
                        

                     
                        



                        $conn->close();
                        ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                        </tbody>
                        </table>

                        </tr>
                        </table>
                    </div>

                </div>
                </div>
                </div>
            </section>
            </div>


        </section>
    </main><!-- End #main -->
    <br>
    <footer id="footer">
        <div class="container">
            <h3>The Ultimate Gamers</h3>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>The Ultimate Gamers</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                developed by <a href="">ALpha</a>
            </div>
        </div>
    </footer><!-- End Footer -->

</body>

</html>