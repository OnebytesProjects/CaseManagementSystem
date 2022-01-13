<?php
$data = $_GET['detail'];
include "../connection/connection.php"; // Using database connection file here

  $sql = "SELECT * FROM sector";
  $all_sector = mysqli_query($db,$sql);

  $sql2 = "SELECT * FROM user WHERE email = '$data'";
  $user = mysqli_query($db,$sql2);

  $userdetails = mysqli_fetch_array($user,MYSQLI_ASSOC);

  if(isset($_POST['update']))
  {	

    //   $lawyer_photo = $_FILES["uploadfile"]["name"];
    //   $tempname = $_FILES["uploadfile"]["tmp_name"];	
    //       $folder = "../assets/images/profilepic/".$lawyer_photo;

      $update = " UPDATE user SET name ='".$_POST['lawyer_name']."',gender='".$_POST['lawyer_gender']."', mobile='".$_POST['lawyer_number']."', dob='".$_POST['lawyer_dob']."', email='".$_POST['lawyer_email']."',sector='".$_POST['lawyer_sector']."',auth_level='".$_POST['authorization_level']."',password='".$_POST['lawyer_password']."' WHERE email ='$data';";
      if (mysqli_query($db, $update)) {
    //       if (move_uploaded_file($tempname, $folder))  {
    //         $msg = "Image uploaded successfully";
    //     }else{
    //         $msg = "Failed to upload image";
    //   }
      } else {
    
      }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <link rel="stylesheet" href="../assets/style/formstyle.css">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <section id="interface">
        <div class="topbar1">

            <nav class="navbar navbar-expand-lg navbar-light bg-light py-5s">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">

                            <img src="../assets/images/logo2.png" width="120" height="120" alt="">
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <h3 class="i-name">User Details</h3>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <img src="../assets/images/logo.png" width="100" height="100" alt="">
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="topbar2">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown  mt-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-bell fa-2x"></i>
                            </a>
                            <div class="dropdown-menu mx-auto" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Notification 1</a>
                                <a class="dropdown-item" href="#">Notification 2</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/m.jpg" width="50" height="50" alt="" style="width: 45px;
                                height: 45px;
                                object-fit: cover;
                                border-radius: 50%;
                                margin-right: 15px;">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Profile.html">Profile</a>
                                <a class="dropdown-item" href="../index.html">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <div class="addcase">
            <form><a href="User.php" style="text-decoration: none;">
                    <button type="button" class="addcasebutton">
                        <span class="button__text">Back</span>
                    </button></a>
            </form>
        </div>

    <form action="#" method="POST" enctype="multipart/form-data">

        <dir class="board">
            <table id="myTable" width="100%">

                <thead>
                    <tr class="header">
                        <th>User Details</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- profilepic -->
                        <td>
                            <img src="../assets/images/profilepic/<?php echo $userdetails["photo"];?>"><br><br>
                            <label for="minmaxlength">Update Profile Photo</label>
                            <input type="file" id="myFile" name="filename">
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <!-- Name -->
                        <td>
                            <div>
                                <label for="minmaxlength">Name </label>
                                <input type="text" id="minmaxlength" name="lawyer_name" value="<?php echo $userdetails["name"];?>" >
                            </div>
                        </td>
                        <!-- Gender -->
                        <td>

                            <div>
                                <label> الجنس</label>
                                <select name="lawyer_gender" id="lawyer_gender">
                                    <?php echo '<option value="'.$userdetails["gender"].'">'.$userdetails["gender"].'</option>'; ?>
                                    <option value="Male">ذكر</option>
                                    <option value="feMale">أنثى</option>
                                </select>
                            </div>
                        </td>
                        <!-- Mobile -->
                        <td>
                            <div>
                                <label>رقم الهاتف النقال</label>
                                <input name="lawyer_number" id="lawyer_number"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type="number" maxlength="9" value="<?php echo $userdetails["mobile"];?>"/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- DOB -->
                        <td>
                            <div>
                                <label for="date">تاريخ الميلاد</label>
                                <input type="date" id="date" name="lawyer_dob"
                                    pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"
                                    value="<?php echo $userdetails["dob"];?>"
                                    required>
                            </div>

                        </td>
                        <!-- Email -->
                        <td>
                            <div>
                                <label>Lawyer Email</label>
                                <input name="lawyer_email" type="text" id="lawyer_email" value="<?php echo $userdetails["email"];?>">
                            </div>
                        </td>
                        <!-- sector -->
                        <td>
                            <div>
                                <label>القطاع</label>
                                <select name="lawyer_sector" id="lawyer_sector" >
                                <?php echo '<option value="'.$userdetails["sector"].'">'.$userdetails["sector"].'</option>'; ?>
                                <?php 
                                    while ($sector = mysqli_fetch_array(
                                         $all_sector,MYSQLI_ASSOC)):; 
                                ?>
                                <option value="<?php echo $sector["sector"];?>">
                                <?php echo $sector["sector"];?>
                                </option>
                                    <?php 
                                        endwhile;
                                    ?>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!-- AuthLevel -->
                        <td>
                            <div>
                                <label>Authorization Level</label>
                                <select name="authorization_level" id="opp_sex">
                                    <?php echo '<option value="'.$userdetails["auth_level"].'">'.$userdetails["auth_level"].'</option>'; ?>
                                    <option value="admin">admin</option>
                                    <option value="manager">manager</option>
                                    <option value="departmentmanager">department manager</option>
                                    <option value="lawyer">lawyer</option>
                                </select>
                            </div>
                        </td>
                        <!-- Password -->
                        <td>
                            <div>
                                <label for="minmaxlength">Password </label>
                                <input type="password" id="minmaxlength" minlength="6" name="lawyer_password" value="<?php echo $userdetails["password"];?>">
                            </div>
                        </td>
                        <!-- CnfrmPassword -->
                        <td>
                            <div>
                                <label for="minmaxlength">Confrim Password </label>
                                <input type="password" id="minmaxlength" minlength="6" name="lawyer_password" value="<?php echo $userdetails["password"];?>">
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="addcase" style="margin-bottom: 15px;">
                <a href="User.php" style="text-decoration: none;">
                        <button type="submit" class="addcasebutton" onclick="cnfrmselection()" name="update">
                            <span class="button__text">Update</span>
                </button></a>
                
            </div>
            <br>
        </dir>
        </form>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"></script>
</body>

</html>