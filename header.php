<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>DASHBOARD</title>
      <!--Google font-->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="dash.css">
    <!-- font awesome icons -->
    <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
<div class="container-fluid">
    <div class="row">
<!--        The Menu will be here-->
        <div class="col-3 bg-primary ">
            <ul class="nav flex-column">
                <li class="nav-item navstyles">
                     <i class="fa fa-ravelry fa-3x text-white"></i>
                    <span class="h4 text-white"> ADMIN </span>
                </li>
                <hr>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-dashboard text-white "> </i>
                       <span class="text-white"> Dashboard</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="addstudent.php">
                        <i class="fa fa-users text-white"> </i>
                        <span class="text-white"> Participants </span>
                    </a>
                </li>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-cogs text-white "> </i>
                        <span class="text-white">  Components </span>
                    </a>
                </li>
                <hr>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="documents.php">
                        <i class="fa fa-file text-white"> </i>
                        <span class="text-white"> Documents </span>
                    </a>
                </li>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-line-chart text-white"> </i>
                        <span class="text-white">  Charts </span>
                    </a>
                </li>
                <hr>
                <li class="nav-item navstyles">
                    <a class="nav-link" href="#">
                        <i class="fa fa-wrench text-white"> </i>
                        <span class="text-white"> Settings </span>
             </a>
        </li>
 </ul>
  </div>
<!--The content will be here-->
        <div class="col-9 bg-light">
            <div class="row bg-white">
                <div class="col-7">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                                <input class="col-6 form-control me-2" type="search" placeholder="Search here ..." aria-label="Search">
                                <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="col-5">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                        <i class="fa fa-bell fa-lg "></i>
                                            <span class="badge rounded-pill bg-danger">5+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                        <i class="fa fa-envelope fa-lg"></i>
                                            <span class="badge rounded-pill bg-danger">35+</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            Chris Nemwel |
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <img src="images/male_avatar.svg" alt="" class="rounded-circle float-end" width="50" height="50">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>