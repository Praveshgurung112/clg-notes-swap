<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<link rel="stylesheet" href="css/style.css"> 

<style>

</style>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Note's<span class="text-warning text-bold">Point</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Faculty</a>
              </li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#example">Student</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#admin">Admin</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#services">Service</a>
          </li>
          <!--li class="nav-item">
            <a class="nav-link " aria-disabled="true">NS Team</a>
          </li-->
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div id="home">
      
    </div>
  </div>


  <div id="about" style="margin-top: 150px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="text-center text-warning text-uppercase mt-5">About Us</h2>
          <p class="text-uppercase pt-5 pl-5">We bridge the gap between teachers and students by providing a centralized hub for sharing and accessing study materials. Our platform empowers faculty members to easily upload notes, resources, and essential materials, while enabling students to download them effortlessly, anytime and anywhere..</p>
          <hr>
          <p class="text-uppercase pb-5 pl-5">Our mission is to simplify learning by fostering an environment of accessibility and collaboration, ensuring that quality education is just a click away.

Join us in creating a smarter and more connected learning community. Together, let’s make education simpler and more effective!</p>
        </div>
        <div class="col-lg-6">
          <!-- Add an image of your team or company here -->
          <img src="images\Jan-Business_team_8.jpg" alt="About Us Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fuild">


    <div class="services" id="services">
      <div class="container-fuild py-5 bg-light">
        <h1 class="text-center pb-5" style="color:#ffcc00;">Services</h1>
        <div class="row pb-3">
          <!--  -->
          <div class="col-lg-4 mb-3">
            <div class="card text-center py-3" >
              <div class="card-body">
                <div class="circle">
                  <span><i class="fas fa-tablet"></i></span>
                </div>
                <h4 class="font-weight-bold pb-2">Oragnized Notes</h4>
                <p>All your study materials in one place, neatly categorized by subjects and topics. Find what you need quickly and focus on learning.</p>
              </div>
            </div>
          </div>
          
          <!--  -->
          <div class="col-lg-4 mb-3">
            <div class="card text-center py-3" >
              <div class="card-body">
                <div class="circle">
                  <span><i class="fas fa-tablet"></i></span>
                </div>
                <h4 class="font-weight-bold pb-2">Oragnized Assignments</h4>
                <p>Stay on top of your coursework with ease! Our platform ensures that assignments are neatly organized, making it simple for students to access and for teachers to manage submissions.</p>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col-lg-4 mb-3">
            <div class="card text-center py-3" >
              <div class="card-body">
                <div class="circle">
                  <span><i class="fas fa-tablet"></i></span>
                </div>
                <h4 class="font-weight-bold pb-2">Advanced Faculty</h4>
                <p>Our Advanced Faculty feature empowers educators with easy-to-use tools for uploading and managing study materials. It’s designed to simplify sharing resources, enabling teachers to focus on what they do best—educating and inspiring students!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            <p>&copy; 2024 Note's Point. All rights reserved.</p>
        </div>
    </footer>



  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-success text-center" id="exampleModalLabel">FACULTY</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action ="Admin/adminlogin.php" method="POST">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Username</label>
              <input type="text" class="form-control" id="recipient-name" name="fac_username">
            </div>
            <div class="mb-3">
            <label class="col-form-label">Password</label>
              <input type="password" name="fac_password" class="form-control" >
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="Login" class="btn btn-success" name = "faculty_login">
          <a href="" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#forgotfaculty">Forgot password?</a>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="forgotfaculty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Forgot Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="forgotpasswordfaculty.php" method="POST">
              <div class="modal-body">
                <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter email" name="faculty_email" placeholder="Enter Email">
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success text-white" name="fac-send-reset-link">SEND LINK</button>
                
              </div>
              </form>
            </div>
          </div>
        </div>


  <div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-warning text-center" id="exampleModalLabel">STUDENT</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action ="Admin/adminlogin.php" method="POST">
            <div class="mb-3">
              <label class="col-form-label">Username</label>
              <input type="text" class="form-control" name="student_username">
            </div>
            <div class="mb-3">
              <label class="col-form-label">Password</label>
              <input type="password" name="student_password" class="form-control" >
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="Login" class="btn btn-warning" name = "student_login">
          <a href="" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#forgotstudent">Forgot password?</a>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="forgotstudent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Forgot Password</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="forgotpasswordstudent.php" method="POST">
              <div class="modal-body">
                <div class="form-group">
              <input type="email" class="form-control" placeholder="Enter email" name="student_email" placeholder="Enter Email">
            </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning text-white" name="stud-send-reset-link">SEND LINK</button>
                
              </div>
              </form>
            </div>
          </div>
        </div>

<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-danger text-center" id="exampleModalLabel">Admin</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action ="Admin/adminlogin.php" method="POST">
            <div class="mb-3">
              <label class="col-form-label">Username</label>
              <input type="text" class="form-control" name="admin_username">
            </div>
            <div class="mb-3">
              <label class="col-form-label">Password</label>
              <input type="password" name="admin_password" class="form-control" >
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="Login" class="btn btn-danger" name = "admin_login">
        </div>
        </form>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>