<?php
include('php/config.php'); 
if (isset($_POST['ongera'])) {  
    $id = $_POST['id'];  
    $umuryango = $_POST['umuryango'];  
    $umurenge = $_POST['umurenge'];  
    $username = $_POST['username'];
    $password = $_POST['password'];   
    
        $sql = "INSERT INTO umuryango  VALUES ('$id','$umuryango','$umurenge','$username','$password','umuryango')";  

        if(mysqli_query($con, $sql)){  
          echo '<script>alert("Byatunganye Mwakinjira...????")</script>'; 
        }  
        else{  
          echo '<script>alert("Byanze kubera impambvu..????")</script>';  
        }  
      }   
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style1.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>DUHIGURE MU MIRYANGO</title>
</head>
<body>
    

    <section class="navsection col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow:.01rem .01rem 1rem black;">
            <div class="container-fluid  col-12">
              <a class="navbar-brand" href="#" style="padding-right:2rem; font-style:bold;"><span style="color: #0d6efd;margin-left:2rem; "class="logo"><b>DUHIGURE </span>MU MIRYANGO</b></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse col-8 navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" style="color:#0d6efd;" aria-current="page" href="#home">Ahabanza</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:rgb(117, 117, 117);" href="#about">Ibyerekeye Twe</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="color:rgb(117, 117, 117);"href="#footer">Serivisi</a>
                  </li>
                </ul>
                
                 <button onclick="document.getElementById('signin').style.display='block'; document.getElementById('signup').style.display='none'" class="btn btn-primary" style="margin:.8rem;">Injira</button>
                 <button onclick="document.getElementById('signup').style.display='block'; document.getElementById('signin').style.display='none'" class="btn btn-primary"><ion-icon name="add-outline"></ion-icon>&nbsp; Umuryango</button>
                
              </div>
            </div>
            
          </nav>
          
    </section>
 
<div class="sigin" id="signin">
        <div class="dropdown">
                <form class="px-4 py-3" method="POST" action="php/login.php">
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Amazina</label>
                    <input type="text" name="name" class="form-control" id="exampleDropdownFormEmail1" placeholder="Amazina .." required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormPassword1" class="form-label">Ijambobanga</label>
                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormPassword1" class="form-label">Role</label>
                   <!--  <select name="role" id="">
                      <option value="member">Umunyamuryango</option>
                      <option value="umuryango">Umuryango</option>
                      <option value="admin">Intore Yumurenge</option>
                    </select> -->
                     <input type="text" name="role" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="dropdownCheck">
                      <label class="form-check-label" for="dropdownCheck">
                        Remember me
                      </label>
                    </div>
                  </div>
                  <button type="submit" name="login" class="btn btn-primary">Injira</button>
                  <button onclick="document.getElementById('signin').style.display='none'" type="submit" class="btn btn-danger">Gufunga</button>
                
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Nta konti ufite? Iyandikishe</a>
                <a class="dropdown-item" href="#">Wibagiwe ijambo banga?</a>
              </div>
</div>

    
<div class="sigin" id="signup">
        <div class="dropdown">
              
                <form class="px-4 py-3" method="POST" action="">
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" id="exampleDropdownFormEmail1" placeholder="Amazina .." read only>
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Umuryango wa:</label>
                    <input type="text" name="umuryango" class="form-control" id="exampleDropdownFormEmail1" placeholder="Amazina .." required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Umerenge</label>
                    <input type="text" name="umurenge" class="form-control" id="exampleDropdownFormEmail1" placeholder="Amazina .." required>
                  </div>
                  <div class="mb-3">
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Amazina</label>
                    <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Amazina .." required>
                  </div>
                    <label for="exampleDropdownFormPassword1" class="form-label">Ijambobanga</label>
                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                  </div>
                  
                  
                  <button "type="submit" name="ongera" class="btn btn-primary">Iyandikishe</button>
                  <button onclick="document.getElementById('signup').style.display='none'" type="submit" class="btn btn-danger">Gufunga</button>
                </form>
              
              
            
              </div>
</div>
    <section class="home" id="home">
        <div class="image">
          <div class="content">
              <h4 style="color:white;">Guhiga Mu Miryango</h4>
              <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto sint necessitatibus animi aliquam commodi fuga aperiam velit eaque molestiae minus soluta repellendus labore, quaerat eos fugiat quo nulla repudiandae delectus?</p>
          </div>
          <button  style="color" class="btn btn-primary">Birambuye</button>
        </div>
    </section>
    <section class="adssection col-sm-12" id="about">
        <div class="ads">
            <div class="ads1 adsdet">
                <div class="icon">
                    <img src="images/fam4.jpg" alt="">
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate in sit rerum labore quidem sed provident cum nihil optio quasi?</p>
                </div>
            </div>
            <div class="ads1 adsdet">
                    <div class="icon">
                        <img src="images/fam4.jpg" alt="">
                    </div>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate in sit rerum labore quidem sed provident cum nihil optio quasi?</p>
                    </div>
                </div>
                <div class="ads1 adsdet">
                        <div class="icon">
                            <img src="images/fam4.jpg" alt="">
                        </div>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate in sit rerum labore quidem sed provident cum nihil optio quasi?</p>
                        </div>
                    </div>
                    <div class="ads1 adsdetv">
                            <iframe width="100%" height="220" src="https://www.youtube.com/embed?listType=playlist&amp;list=PL9VWATpgDpORqa7nBkVmYZyU5P1zB1pCE&amp;rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        <p >Wakomeza kandi gukurikira ukoresheje amashusho ...</p>
     
                        </div>
        </div>
    </section>





    <div class="footer">
        


      <h6 style="color:white;">CopyRight @2021. DUHIGURE MU MIRYANGO</h6>
    </div>

</body>
</html>