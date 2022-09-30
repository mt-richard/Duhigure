<?php 
include('../php/config.php');
error_reporting(0);
?>
 
<?php 

     if (isset($_POST['vugurura'])) {

      $id = $_POST['id'];  
      $name = $_POST['umuryango'];  
      $gender = $_POST['gender'];  
      $age = $_POST['age']; 
      $username = $_POST['username'];
      $password = $_POST['password']; 

        $sql="UPDATE abanyamuryango SET `ab_name`='$name', gender='$gender', age='$age', username='$username', `password`='$password' where `um_id`='$id'";

        if (mysqli_query($con,$sql)) {
          echo '<script>alert("Byavuguruwe !!!")</script>'; 
        }
        else{
            echo '<script>alert("Failed to Update")</script>';
        }
     }
     ?>


<?php
if ($_GET['id']) {  
    $id = $_GET['id'];  
        $sql = "DELETE FROM `abanyamuryango` WHERE `um_id` = '$id'";  

        if(mysqli_query($con, $sql)){  
          $msg = "<h4 style='color:green;margin:1rem;'>Umuryango wasibwe !!!</h4>";  
        }  
        else{  
          $msg = "<h4 style='color:red;margin:1rem;'>Byanze gusiba Umuryango</h4>";
      }
    }   
?> 

<?php
include('../php/config.php'); 
if (isset($_POST['ongera'])) {  
  $id = $_POST['id'];  
  $name = $_POST['umuryango'];  
  $gender = $_POST['gender'];  
  $age = $_POST['age']; 
  $username = $_POST['username'];
  $password = $_POST['password']; 
    
        $sql = "INSERT INTO abanyamuryango  VALUES ('$id','$name','$gender','$age','$username', '$password','umunyamuryango')";  

        if(mysqli_query($con, $sql)){  
          $msg = "<h4 style='color:green; margin:1rem;'>Byatunganye </h4>";  
        }  
        else{  
          $msg = "<h6 style='color:red;margin:1rem;'>Byanze kubwimpamvu runaka </h6>";  
        }  
      }   
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin </title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../css/styledash.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <h4>&nbsp;&nbsp;DUHIGURE IMIHIGO</h4>
        <div class="line"></div>
        <div class="sidebar-nav">
        <ul>
                <li><a  style=" text-decoration: none;" href="index.php" ><span><i style="margin:0 .1rem; padding:0 1.4rem; " class="fas fa-window-restore"></i>Ahabanza</span></a></li>
                <li><a  style=" text-decoration: none;"  href="imiryango.php"><span><i  style="margin:0 .1rem; padding:0 1.4rem; " class="fas fa-archive"></i>Imiryango</span></a></li>
                <li><a  style=" text-decoration: none;" class="active"   href="abanyamuryango.php"><span><i  style="margin:0 .1rem; padding:0 1.4rem; " class="fas fa-archive"></i>Abanyamuryango</span></a></li>
                <li><a  style=" text-decoration: none;"  href="imihigo.php"><span><i  style="margin:0 .1rem; padding:0 1.4rem; " class="fas fa-book-reader"></i>Imihigo</span></a></li>
                <li><a  style=" text-decoration: none;" href="../"><span><i  style="margin:0 .1rem; padding:0 1.4rem; " class="fas fa-sign-out-alt"></i>Gusoka</span></a></li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
         
            <div class="search-wrapper">
                <input type="text" placeholder="Search Here">
            </div>
            <div class="user-wrapper" style="width:15%;">
                <img src="../images/user.png" alt="" height="30px" width="30px">
            
            <h6>Admin</h6>
           
            
        </div>
        </header>
        <div class="main">

            <h5>Abanyamuryango</h5>
            <hr>
            <div class="search">
                    <h6><?php echo $msg; ?></h6>
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('signin').style.display='block'; "></ion-icon>&nbsp; + Umunyamuryango</button>
                    </div>
                    
<div style="display:none; width:400px; top:5rem; left:40%; position:absolute; background:gray" class="sigin absolute" id="signin">
        <div class="dropdown">
                <form class="px-4 py-3" method="POST" action="">
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" id="exampleDropdownFormEmail1">
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Umunyamuryango wa:</label>
                    <input type="text" name="umuryango" class="form-control" id="exampleDropdownFormEmail1" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Igitsina</label>
                    <input type="text" name="gender" class="form-control" id="exampleDropdownFormEmail1"  required>
                  </div>
                  <div class="mb-3">
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Imyaka</label>
                    <input type="text" name="age" class="form-control" id="exampleDropdownFormEmail1" required>
                  </div>
                    <label for="exampleDropdownFormPassword1" class="form-label">Amazina</label>
                    <input type="text" name="username" class="form-control" id="exampleDropdownFormPassword1"  required>
                  </div>
                  
                    <label for="exampleDropdownFormPassword1" class="form-label">Ijambobanga</label>
                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" required>
                  </div>
                  
          
                
                  <div style=" padding:2rem" class="but">
                  <button type="submit" name="ongera" class="btn btn-primary">Ongera</button>
                  <button onclick="document.getElementById('signin').style.display='none'" type="submit" class="btn btn-danger">Gufunga</button>
                
                  </div>
                  
                </form>
                
</div>

                    <br>
            <div class="tablet">
                <table class="table table-bordered table-striped">
                    <tr >
                    <th>ID</th>
                    <th>Umunyamuryango</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Amazina</th>
                    <th colspan="4">Ibikorwa</th>
                </tr>
                              <?php 
                                $sql = mysqli_query($con, "SELECT * FROM abanyamuryango");
                                while($row = mysqli_fetch_assoc($sql)){
                                ?>
                <tr>
                    <td><?php echo $row['um_id']; ?></td>
                    <td><?php echo $row['ab_name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><a  onclick="return confirmation();" style="color:red;" href="abanyamuryango.php?id=<?php echo $row['um_id'];?>"><svg color="red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                      </svg></a></td>
                    <td><a href="abanyamuryango.php?id1=<?php echo $row['um_id'];?>"  onclick="document.getElementById('exampleModal1').style.dispaly='display'"><svg color="#0d6efd" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                      </svg></a></td>
                    <td title="Grant"><svg color="#13914c"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus-fill" viewBox="0 0 16 16">
                        <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                      </svg></td>
                      <td title="Revoke"><svg  color="#910630"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-minus-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M16 8a5 5 0 0 1-9.975.5H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5h2.025A5 5 0 0 1 16 8zm-2 0a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5A.5.5 0 0 0 14 8z"/>
                      </svg></td>
                </tr>
                <?php } ?>
                
                </table>

                <?php
                                    if ($_GET['id1']) {
                                    $edit=$_GET['id1'];
                                    
                                    $sql=mysqli_query($con,"SELECT * FROM abanyamuryango where um_id='$edit' ");
                                    while ($row=mysqli_fetch_array($sql)) {?>

                                    <div>
                                    
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Vugurura Umuryango</h5>
                                           
                                        </div>
                                        <div class="modal-body">
                                        <form class="px-4 py-3" method="POST" action="">
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" id="exampleDropdownFormEmail1" value="<?php echo $row['um_id']; ?>" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Umunyamuryango wa:</label>
                    <input type="text" name="umuryango" class="form-control" id="exampleDropdownFormEmail1" value="<?php echo $row['ab_name']; ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Igitsina</label>
                    <input type="text" name="gender" class="form-control" id="exampleDropdownFormEmail1" value="<?php echo $row['gender']; ?>" required>
                  </div>
                  <div class="mb-3">
                  <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Imyaka</label>
                    <input type="text" name="age" class="form-control" id="exampleDropdownFormEmail1"value="<?php echo $row['age']; ?>" required>
                  </div>
                    <label for="exampleDropdownFormPassword1" class="form-label">Amazina</label>
                    <input type="text" name="username" class="form-control" id="exampleDropdownFormPassword1" value="<?php echo $row['username']; ?>" required>
                  </div>
                  
                    <label for="exampleDropdownFormPassword1" class="form-label">Ijambobanga</label>
                    <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" value="<?php echo $row['password']; ?>" required>
                  </div>
                  
                                            
                                           
                                      
                                        <div class="modal-footer">
                                            
                                            <button type="submit" class="btn btn-primary" name="vugurura">Vugurura</button>

                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <?php }} ?>
            </div>
            
                    </div>


                </div>

            </div>

        </div>
    </div>

    <script>
    function confirmation(){
        alert('Do You want to Dlete');
    }

</script>
</body>
</html>

<?php 
include('../php/config.php');
?>
 