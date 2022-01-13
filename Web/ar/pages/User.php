<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

  <link rel="stylesheet" href="../assets/style/formstyle.css">
  <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="../assets/script/next_table.js"></script>
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

          <ul class="navbar-nav">
            <li class="nav-item ">
            <a class="nav-link" href="CaseDetail.html">بيانات الدعوى </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">User Details </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FieldControl.html">Field Control</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown  mt-2">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="far fa-bell fa-2x"></i>
              </a>
              <div class="dropdown-menu mx-auto" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Notification 1</a>
                <a class="dropdown-item" href="#">Notification 2</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
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
      <form><a href="Adduser.php" style="text-decoration: none;">
          <button type="button" class="addcasebutton">
            <span class="button__text">Add User</span>
          </button></a>
      </form>

    </div>

    <dir class="board">
      <table id="myTable" width="100%" class="paginated">
        <colgroup>
          <col style="width: 1%">
          <col style="width: 10px">
          <col style="width: 30px">
          <col style="width: 60px">
          <col style="width: 70px">
          <col style="width: 60px">
          <col style="width: 70px">
          <col style="width: 60px">
          <col style="width: 70px">
          <col style="width: 30px">
        </colgroup>
        <thead>
          <tr class="header">
            <th>م&nbsp;<button style="border-style: none;background: none;"><i
              class="fa fa-sort fa-xs " style="color: blue;" aria-hidden="true"></i></button></th>
              <th>إسم القانوني&nbsp;<button style="border-style: none;background: none;"><i
              class="fa fa-sort fa-xs " style="color: blue;" aria-hidden="true"></i></button></th>
              <th>الصورة&nbsp;<button style="border-style: none;background: none;"><i
              class="fa fa-sort fa-xs " style="color: blue;" aria-hidden="true"></i></button></th>
            <th>القطاع&nbsp;<button style="border-style: none;background: none;"><i
              class="fa fa-sort fa-xs " style="color: blue;" aria-hidden="true"></i></button></th>
            <th>UserType&nbsp;<button style="border-style: none;background: none;"><i
              class="fa fa-sort fa-xs " style="color: blue;" aria-hidden="true"></i></button></th>
            <th>رقم الهاتف النقال&nbsp;<button style="border-style: none;background: none;"><i
              class="fa fa-sort fa-xs " style="color: blue;" aria-hidden="true"></i></button></th>
              <th>البريد الوزاري&nbsp;<button style="border-style: none;background: none;"><i
              class="fa fa-sort fa-xs " style="color: blue;" aria-hidden="true"></i></button></th>
            <th>عرض/تعديل</th>
            <th>Status</th>
            <th>delete</th>

          </tr>
          <tr class="header">
            <th>
              <div class=searchbar><input id="myInput1" onkeyup="searchFunction1()" type="text" placeholder="بحث" name="Sno" size="1"></div>
            </th>
            <th>
              <div class=searchbar><input id="myInput2" onkeyup="searchFunction2()" type="text" placeholder="بحث" name="Name" size="2"></div>
            </th>
            <th></th>
            <th>
              <div class=searchbar><input id="myInput3" onkeyup="searchFunction3()" type="text" placeholder="بحث" name="Sector" size="2"></div>
            </th>
            <th>
              <div class=searchbar><input id="myInput4" onkeyup="searchFunction4()" type="text" placeholder="بحث" name="UserType" size="5"></div>
            </th>
            <th>
              <div class=searchbar><input id="myInput5" onkeyup="searchFunction5()" type="text" placeholder="بحث" name="MobileNumber" size="7"></div>
            </th>
            <th>
              <div class=searchbar><input id="myInput6" onkeyup="searchFunction6()" type="text" placeholder="بحث" name="Email" size="2"></div>
            </th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            <?php
              include "../connection/connection.php"; 
              $sql = "SELECT * FROM user";
              $result = $db->query($sql);
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($data = $result->fetch_assoc()) {
                    if($data['status']=="active"){
                      $status = "<td><button style=\"border: none;background: none;\" onclick=\"openForm()\"><a href=\"../assets/php/changestatus.php?user=".$data["email"]."&status=".$data["status"]."\"><i class=\"fas fa-check\" style=\"color:green;\"></i></a></button></td>";
                    }else{
                      $status = "<td><button style=\"border: none;background: none;\"><a href=\"../assets/php/changestatus.php?user=".$data["email"]."&status=".$data["status"]."\"><i class=\"fas fa-close\" style=\"color:red;\"></i></a></button></td>";
                    }
                    
			              $u_name = $data["name"];
                    echo "<tr>
                    <td><p>".$data["sno"]."</p></td>
                    <td><p>".$data["name"]."</p></td>
                    <td><p><img id=\"userprofilepic\" src=\"../assets/images/profilepic/".$data["photo"]."\"></p></td>
                    <td><p>".$data["sector"]."</p></td>
                    <td><p>".$data["auth_level"]."</p></td>
                    <td><p>".$data["mobile"]."</p></td>
                    <td><p>".$data["email"]."</p></td>
                    <td><a href=\"ViewUser.php?detail=".$data["email"]."\">عرض/تعديل</a></td>
                    ".$status."
                    <td><button style=\"border: none;background: none;\" name=\"delete\" type=\"submit\"><a href=\"../assets/php/deleteuser.php?user=".$data["email"]."\"><i class=\"fa fa-trash-o\" ></i></a></button></td>
                    </tr>";
                  }
                  }else{ 
                  echo "0 results"; 
              }
            ?>
        </tbody>
      </table>
      <br>
    </dir>



  </section>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/script/searchuser.js"></script>
  <script type="text/javascript" src="../assets/script/popupform.js"></script>
</body>

</html>