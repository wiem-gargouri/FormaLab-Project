<?php
session_start(); 
$serveur = "localhost";
$base = "tpbd";
$username = "root";
$pass = "";




$Link= mysqli_connect($serveur,$username,$pass);
mysqli_select_db($Link,$base);

if(isset($_POST['email'])){
    $uname=$_POST['nom'];
    $uemail=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from inscrit where email='".$uemail."' and PASSWORD ='".$password."' limit 1 ";
$result=mysqli_query($Link,$sql);

if(mysqli_num_rows($result)==1){
    echo "you have successfully logged in"; 
    $_SESSION['nom']= $uname ;
    header('location:connectee/acceuil-connectee.html');
   
}
else{
    echo" You have entered incorrect password"; 
    exit(); 
}


}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>No More Excuse| Accueil</title>
    <link rel="stylesheet" href="../css/accueil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="slabtexted" data-spy="scroll" data-target="navbarResponsive">
    <!--Header-->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color bg-danger fixed-top">
        <a class="navbar-brand" href="#">Gymr</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="acceil.php">Home
                <span class="sr-only">(current)</span>
              </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cours">Cours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#coachs">Coachs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
              </a>
                    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="planning.html">planning</a>
                        <a class="dropdown-item" href="tarifs.html">tarifs</a>

                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">

                <li class="nav-item dropdownbg-dark">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default bg-danger" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#home">login</a>
                        <a class="dropdown-item" href="inscrit.html">sign Up ! </a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--End header -->


    <!--Home-->
    <section id="home">
        <div class="home1">
            <div class="cover-container d-flex w-80  p-5 mx-auto flex-column  khalf">
                <h1 class="text-danger text-center pb-5">Welcome ! </h1>
                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input  name="password"type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <a href="connectee/acceuil-connectee.html"> <button type="submit" class="btn btn-danger ">Submit</button></a>
                </form>
                <h5 class="text-dark ml-5"> ---------------------- OR ----------------------</h5>

                <a href="inscrit.html" id="creat" class="btn btn-outline-danger">
                    <span class="psds-button__text">Create an account</span>
                </a>




            </div>

        </div>

    </section>
    <!--End home-->
    <!--cours -->

    <section id="cours">
        <div class="cours1  container ">
            <h1 class="m-5 text-center">
                <spam class="text-danger gras ">Nos</spam> cours</h1>
            <p class="text-center">Participez aux
                <spam class="text-danger">cours collectifs</spam> pour sculptez, renforcez et affinez votre corps!<br> Se défouler avec un programme riche et varié chez notre salle de sport et de fitness situé à tunis.</p>
            <!--carousel-->

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../image/aeirobic.jpg" class="d-block w-100" alt="airobic">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>aierobic</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../image/rejuvenate.namaste.jpg" class="d-block w-100" alt="yoga">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>yoga</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../image/running.jpg" class="d-block w-100" alt="cardio">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>cardio</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--End carousel-->

        </div>
    </section>
    <!--End cours-->
    <!--coachs-->
    <div id="coachs">
        <!--titre-->
        <h1 class="m-5 text-center">
            <spam class="text-danger gras ">Nos</spam> Coachs </h1>
        <div class="container ">

            <!-- Row Three columns of text below the carousel-->
            <div class="row pt-5">
                <!--first col-lg-4 -->
                <div class="col-lg-4">
                    <img class=" rounded-circle" width="200" height="200" src="../image/first.PNG">
                    <h2> Sally Matterson </h2>
                    <p>
                        Ever heard of the Extreme Shredder? Those are the revolutionary training systems made by Matterson herself.
                    </p>
                    <p><a class="btn btn-secondary" href="https://www.instagram.com/mattersonsally/" role="button">View insta &raquo;</a></p>
                </div>
                <!-- End first-->
                <!--2nd col-lg-4-->
                <div class="col-lg-4">
                    <img class=" rounded-circle" width="200" height="200" src="../image/sec.PNG">
                    <h2> Michael Morelli </h2>
                    <p>
                        Michael’s dedication to his clients is what makes him hands down the trust-worthiest trainer/coach we’ve seen yet.
                    </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View insta &raquo;</a></p>
                </div>
                <!-- End 2nd-->

                <!--3rd col-lg-4 -->
                <div class="col-lg-4">
                    <img class=" rounded-circle" width="200" height="200" src="../image/third.PNG">
                    <h2> Max Philisaire </h2>
                    <p>
                        Men want to be him and women want to be with him, and no, we’re not talking about James Bond, we’re talking about Max the Body.
                    </p>
                    <p><a class="btn btn-secondary" href="#" role="button">View insta &raquo;</a></p>
                </div>
                <!-- end 3rd  -->
            </div>
            <!-- END row -->

        </div>
    </div>

    <!--End coachs-->


    <!-- contact-->
 <div id="contact" class="mt-5">

    <footer class="bg-secondary p-3 row ">
            <div class="col-sm-6 col-xs-6 ">
            <h1 class="m-5 ">
                <spam class="text-danger gras ">Nos</spam> contact</h1>
            <p class="address"><strong>Addresse:</strong> 11, Rue ibn Zaydoun, Khledia CP-2054, Ben Arous - Tunisie</p>
            <p class="phone"><strong>Téléphone:</strong> (+216) 97 531 559</p>
            <p class="phone"><strong>Téléphone:</strong> (+216) 21 268 999</p>
            </div>

        <div class="col-sm-6 col-xs-6">
                
            <div id="gymedge_about-2" class="widget widget_gymedge_about">
                
            <h1  class="m-5  gras">Horaire :</h1>	
            
            <p>Monday – Friday: 6.15am – 10.00pm <br>
            Saturday: 8.30am – 8.00pm&nbsp;&nbsp;&nbsp;&nbsp;   <br> 
              Sunday: 8.30am – 6.00pm</p><br>
		

         </div>
    </div>

    </footer>

 </div>
    <!--End contact-->
    <!--js Files -->
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>