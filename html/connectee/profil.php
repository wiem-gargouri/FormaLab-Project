<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="../../css/profil.css">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bodynoir">
        <!--Header-->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color bg-danger fixed-top">
        <a class="navbar-brand" href="acceuil-connectee.html">Gymr</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="acceuil-connectee.html">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/salle%20de%20sport/html/connectee/acceuil-connectee.html#cours">Cours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/salle%20de%20sport/html/connectee/acceuil-connectee.html#coachs">Coachs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                  </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item far fa-calendar-alt" href="planning-con.html">Planning</a>
                        <a class="dropdown-item" href="tarifs-con.html">Tarifs</a>
                        <a class="dropdown-item far fa-bell" href="offrespecial.html">Offre Special pour vous </a>
                        <a class="dropdown-item 	 " href="article.html"> Articles</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">

                <li class="nav-item dropdownbg-dark">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default bg-danger" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item fas fa-address-book" href="profil.php ">My profil</a>
                        <a class="dropdown-item far fa-heart" href="goals.php">My goals </a>
                        <a class="dropdown-item" href="../acceil.php">Deconnexion </a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--End header -->
    <?php
      include_once "../../php/connect.php";
    

    $conn = connect();

    $req = "select * from inscrit where email='wiemgargouri2000@gmail.com'";

    //query(requette) => select
    //success => data ( inconnu )
    //erreur => false ( boolean )
    $result = $conn->query($req);
    ?>
    <div class="container bg-light">
    <h1 class="text-danger m-5 p-5 text-center  "> <spam class="par p-2">My Profile</spam> </h1>
    <img src="../../image/AVT_Anonyme_3730.png" class="rounded mx-auto d-block ima"> 
    <h2 class="text-danger m-3 ">My Information</h2>
    <table  class="table tab1 " border="1">
        <thead class="thead-light">
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Mot de passe</th>
                <th>Adress</th>
                <th>Gender</th>
                <th>card Name</th>
                <th>card num</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user = $result->fetchObject()) {
                ?>
                <tr>
                    <td><?php echo $user->nom; ?></td>
                    <td> <?php echo $user->prenom; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td> <?php echo $user->PASSWORD; ?> </td>
                    <td> <?php echo $user->adress; ?> </td>

                    <td> <?php echo $user->gender; ?> </td>
                    <td> <?php echo $user->cardname; ?> </td>
                    <td> <?php echo $user->cardnum; ?> </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <input type="submit" value="Changer Mot passe ! " class="float-right bg-warning ">
    <h2 class="text-danger mt-5 ml-3 ">Set My Goals </h2>
    <a href="goals.php" class="btn btn-outline-success bt">
                    <span class="psds-button__text ">Here</span>
                </a>

    </div>
<!-- footer -->
<div id="contact" >

 <footer class="bg-secondary p-3 row ">
    <div class="col-sm-6 col-xs-6 ">
        <h1 class="m-5 ">
            <spam class="text-danger gras ">Nos</spam> contact</h1>
        <p class="address 	fas fa-building"><strong> Addresse:</strong> 11, Rue ibn Zaydoun, Khledia CP-2054, Ben Arous - Tunisie</p><br>
        <p class="phone  	fas fa-phone"><strong> Téléphone:</strong> (+216) 97 531 559</p><br>
        <p class="phone  	fas fa-phone"><strong> Téléphone:</strong> (+216) 21 268 999</p>
    </div>

    <div class="col-sm-6 col-xs-6">

        <div id="gymedge_about-2" class="widget widget_gymedge_about">

            <h1 class="m-5  gras">Horaire :</h1>

            <p>Monday – Friday: 6.15am – 10.00pm <br> Saturday: 8.30am – 8.00pm&nbsp;&nbsp;&nbsp;&nbsp; <br> Sunday: 8.30am – 6.00pm</p><br>


        </div>
    </div>

 </footer>

</div>
<!--js Files -->
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script src="../../js/chat.js" integrity="" crossorigin=""></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>