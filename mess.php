<?php
include("admincb/config/config.php");
include("thuvien.php"); 

$user=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home</title>
    <link rel="stylesheet" href="assets/css/golden.css" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css"
    />
  </head>
  <body>
  <div id="warpper">
      <div id="header">
        <div class="header--">
        <?php 
        include("include/header.php");
        include("include/menu.php");
        ?>
        </div>
      </div>
      <div id="wpcontent">
      <div class="card-group">
   <?php $query2=  "SELECT distinct member.fullname,member.username,member.Anh FROM mess,member where 
    ((member.username=mess.user_gui and mess.user_nhan='$user') or (member.username=mess.user_nhan and mess.user_gui='$user') )
     ";
      $sql2 = mysqli_query($mysqli,$query2);
      if($sql2->num_rows > 0)
      { 
          while ( $data= $sql2->fetch_assoc() ) 
          {?>
     <div class="card">
    <img class="card-img-center">
    <a class="pest_btn" href="chat.php?username=<?php echo $data['username'];?> " 
            data-toggle="tooltip"  data-placement="right" title="<?php echo $data['fullname']?>">
            <?php $link_anh=$data['Anh']; echo "<img src='$link_anh' width='249px'height='180px'  >";?> 

    <div class="card-body">
      <h5 class="card-title"><strong> <?php echo $data['fullname']; ?> </strong></h5>
    
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div> 
  <?php
          }
    }

?>


  
</div>
          
      </div>

      <?php
      include("include/footer.php")
      ?>
    </div>


    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>











    