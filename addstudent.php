<?php
session_start();
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"]!==true){
    header(header:"location:login.php");
    exit();
}
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD STUDENT</title>
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
            <div class="row m-2">
                <div class="col-6">
                    <h3 class="grey">Dashboard</h3>
                </div>
                <div class="col-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        View Report
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> ADMIN REPORT</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-hover table-bordered m-3" >
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Grade</th>
                                        </tr>
                                        <tr>
                                            <td>Rosemary Ngaara</td>
                                            <td>Female</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Macho Chris</td>
                                            <td>male</td>
                                            <td>A</td>
                                        </tr>
                                        <tr>
                                            <td>Angel Moraa</td>
                                            <td>Female</td>
                                            <td>B</td>
                                        </tr>
                                        <tr>
                                            <td>Nemwel Onsando</td>
                                            <td>Male</td>
                                            <td>B</td>
                                        </tr>
                                        <tr>
                                            <td>Angel Nemwel</td>
                                            <td>Female</td>
                                            <td>B</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row m-2">
                 <form action="handle_addstudent.php" method="post" enctype="multipart/form-data">
                     <div class="row m-2 p-2">
                         <div class="col-md-6">
                             <label class="form-label grey">Full Name</label>
                             <input class="form-control" type="text" name="fullname" placeholder="" required>
                         </div>
                         <div class="col-md-6">
                             <label class="form-label grey">Email Adress</label>
                             <input class="form-control" type="text" name="emailaddress" required>
                         </div>
                     </div>
                     <div class="row m-2 p-2">
                         <div class="col-md-6">
                             <label class="form-label grey">Phone Number</label>
                             <input class="form-control" type="text" name="phonenumber" required>
                         </div>
                         <div class="col-md-6">
                             <label class="form-label grey">Address Location</label>
                             <input class="form-control" type="text" name="location" >
                         </div>
                     </div>
                     <div class="row m-2 p-2">
                         <div class="col-md-6">
                             <label class="form-label grey">Date of Birth</label>
                             <input class="form-control" type="date" name="dob" required >
                         </div>
                         <div class="col-md-6">
                             <label class="form-label grey">Gender</label>
                             <select class="form-control" name="gender" required>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                                 <option value="other">Other</option>
                             </select>
                         </div>
                         <div class="row m-2 p-2">
                             <div class="col-md-6">
                                 <label class="form-label grey">Your Photo</label>
                                 <input class="form-control" type="file" name="photo">
                             </div>
                             <div class="col-md-6">
                                 <label class="form-label grey">Your CV</label>
                                 <input class="form-control" type="file" name="cv">
                             </div>
                         </div>
                         <div class="row m-2 p-2">
                             <div class="text-center">
                                 <input type="submit" class="col-6 btn btn-outline-danger" value="SUBMIT">
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
        </div>
    </div>
</div>
</body>
</html>