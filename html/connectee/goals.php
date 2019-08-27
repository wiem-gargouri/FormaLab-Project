<head>
    <meta charset="UTF-8">

    <title> My Goals</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="../../css/accueil.css">
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
                        <a class="dropdown-item far fa-calendar-alt" href="planning-con.html">planning</a>
                        <a class="dropdown-item" href="tarifs-con.html">tarifs</a>
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
                        <a class="dropdown-item fas fa-address-book" href="profil.php"> My profil</a>
                        <a class="dropdown-item far fa-heart" href="goals.php">My goals </a>
                        <a class="dropdown-item" href="../acceil.php">Deconnexion </a>


                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--End header -->
    <!--Main-->
    <div class="container bg-light">
   
    


        <div class="text-center">
            <img src="../../image/goalllll.jpg">
        </div>
             <!--Message-->
       <?php
       session_start();
       if (isset($_SESSION['message'])){ ?>
       <div class=" mt-5 alert alert-<?=$_SESSION['msg_type']?>">
       <?php echo $_SESSION['message'];
       unset ($_SESSION['message']);
       ?>
    </div>
    <?php } ?>
        <h2 class="mt-5" style="color: goldenrod">Add New Goal</h2>
        <!--form-->

        <div class="row justify-content-center">
            <form action="../../php/process.php" method="POST">
                <div class="form-group">
                    <label for="des">Description</label>
                    <input name="des" class="form-control" type="text" >
                </div>
                <div class="form-group">
                    <label for="date">Date d'ajout </label>
                    <input class=" form-control" type="date" name="date">
                </div>
                <div class="form-group">
                    <input type="submit" name="Add" value="Add" class="btn btn-primary">
                </div>


            </form>
        </div>
        <h2 class="mt-5" style="color: goldenrod">Goals To Achive</h2>
        <?php
     //connect to DB   
    function connect(){
    $serveur = "localhost";
    $base = "tpbd";
    $username = "root";
    $pass = "";
    try{
        $dataBase = new PDO("mysql:host=$serveur;dbname=$base",$username,$pass);
        return $dataBase;
    }catch(PDOException $e){
        die("erreur de connexion : ".$e->getMessage());
    }
}
$conn = connect();
$req = "select * from data";

$result = $conn->query($req);?>

        <table class="table">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Description</th>
                    <th>Date d'ajout</th>
                    <th>Action </th>
                </tr>
            </thead>

            <tbody>
            <?php
            while ($user = $result->fetchObject()) {
                ?>
                <tr>
                     <td><?php echo $user->num; ?></td>
                    <td><?php echo $user->des; ?></td>
                    <td> <?php echo $user->date; ?> </td>
                    <td>
                      
                        <a href="../../php/update.php?edit=<?php echo $user->num ;?>" class="btn btn-warning mx-3">Edit</a>
                        <a href="../../php/delete.php?delete=<?php echo $user->num;?>"class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>



        <hr>
        <h2 style="color: goldenrod ">Achived</h2>




        <table class="table">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Description</th>
                    <th>Date d'ajout</th>
                    <th>Date Fin </th>
                    <th>Action </th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>

                        <button class="btn btn-danger">Supprimer</button>
                    </td>
                </tr>

            </tbody>
        </table>


    </div>
    <!-- footer -->
    <div id="contact">

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
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>