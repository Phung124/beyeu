
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
     <link rel="stylesheet" href="sty.css">
     <link rel="stylesheet" href="sty1.css">
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
        include("admincb/config/config.php");
        include("include/header.php");
        include("include/menu.php");
       
        ?>
        
        
      </div>
    </div>
    
    <?php
// session_start(); 

// include('include/menu.php');
//include('TrangChu1.php');

include('admincb/config/config.php');

$user=$_SESSION['username'];

$sql = "SELECT id,username, email,fullname,birthday,sex,Anh FROM member where username='$user' ";
$result = mysqli_query($mysqli, $sql);
if(mysqli_num_rows($result)>0)
{
    while ( $data = mysqli_fetch_array($result) ) 
        {
        ?>
        <div class="container" style=" max-width: 1600px;">
  <div class="row">
    <div class="col-3" style="max-width: 100%;">
    <div class="shadow p-3 mb-5 bg-white rounded">
                        <img class="img-fluid rounded-circle" 
                        style="width:150px; height:150px;margin-bottom: 20px;"
                        src="<?php echo $data['Anh'] ;?>"  class="rounded-circle" class="rounded-lg" 
                        alt="User">
<form action="xuliuploadanh.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
 <div class="col-2">
    <input type="file"name="fileupload" id="fileupload">  
      <button type="submit" name="submit" class="btn btn-outline-primary btn-sm"style=" height: 29px; width: 54px;">Đăng</button>
 </div>
</from>



                        <br>
        <strong>Name:</strong> <?php echo $data['fullname'];?><br>
        <strong> Email: </strong><?php echo $data['email'];?><br>
        <strong>Birthday:</strong><?php echo $data['birthday'];?><br>
        <strong>Sex:</strong><?php echo $data['sex'];?> <br> 
        <a href="sua.php?&id=<?php echo $data['id'];?>">sửa</a>
      </div> 
       
    
            </div>
                  
                <?php
                }
        }
        else
        {
            echo "Chưa có thông tin!";
        }
        ?>

        </div>
        
        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!--Giao diện chính-->
        <link rel="stylesheet" type="text/css" href="public/css/theme.css">
        <!-- Fontfaces CSS-->
        <link href="public/css/font-face.css" rel="stylesheet" media="all">
        <link href="public/styles/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="public/styles/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="public/styles/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="public/styles/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="public/styles/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="public/styles/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="public/styles/wow/animate.css" rel="stylesheet" media="all">
        <link href="public/styles/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="public/styles/slick/slick.css" rel="stylesheet" media="all">
        <link href="public/styles/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="public/styles/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

       
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	
	<meta charset="UTF-8">

  <style>
  .btn{
  width: 46px;
 height: 30px;
  }
  .btn-sm{
    width: 52px;
 height: 30px;
  }
  .btn-info{
    width: 48px;
 height: 39px;
  }
</style>


</head>


 <!--------------------------------------XUẤT BÀI VIẾT------------------------------------->
 <div class="col-md-6">
  <div class="shadow p-3 mb-5 bg-white rounded">
<?php
include('admincb/config/config.php');
$user=$_SESSION['username'];
$sql = "SELECT post.id_post,post.noidung, post.thoigian,post.anh, member.Anh, member.fullname,chedo FROM post,member 
where member.username=post.username and member.username='$user' ";
$result = mysqli_query($mysqli, $sql);
if($result->num_rows > 0)
{
                while ( $data = $result->fetch_assoc() ) 
                { 
               
                            $post= $data["id_post"];

                                if($data['anh']==NULL)
                                {
                                    ?>
                                    <img src="<?php echo $data['Anh'] ;?>"  class="rounded-circle" class="rounded-lg" class="img-fluid rounded-circle" 
                                                style="width:50px; height:50px;margin-bottom: 50px;">
                                            <strong> <?php echo $data['fullname']; ?> </strong>
                                            
                                            <i><small>  <?php echo $data['thoigian'];?> </small></i>
                                            <?php
                                                if($data['chedo']==1)
                                                {?>
                                                  <i class="fas fa-globe"></i>
                                                <?php
                                                }
                                                elseif($data['chedo']==2)
                                                {
                                                  ?>
                                      
                                                    <i class="fas fa-users"></i>
                                               <?php 
                                                }
                                               else
                                               {?>
                                                  <i class="fas fa-lock"></i>
                                                  
                                               <?php
                                               }
                                          ?>
                                   
                                   
                               <h3> <?php echo $data['noidung']; ?></h3>
                               <?php }
                                else
                                {
                ?>
                <img src="<?php echo $data['Anh'] ;?>"  class="rounded-circle" class="rounded-lg" class="img-fluid rounded-circle" 
                style="width:50px; height:50px;margin-bottom: 50px;"><strong> <?php echo $data['fullname']; ?> </strong>
                            <i><small>  <?php echo $data['thoigian'];?> </small></i>
                            <?php
                                               if($data['chedo']==1)
                                               {?>
                                                 <i class="fas fa-globe"></i>
                                               <?php
                                               }
                                               elseif($data['chedo']==2)
                                               {
                                                 ?>
                                     
                                                   <i class="fas fa-users"></i>
                                              <?php 
                                               }
                                              else
                                              {?>
                                                 <i class="fas fa-lock"></i>
                                              <?php
                                              }
                                         ?>
                                <h3><?php echo $data['noidung']; ?></h3>
                                
                                <img src="<?php echo $data['anh'] ;?>"class="rounded mx-auto d-block" alt="Responsive image" 
                                style="max-width: 100%; height: auto;margin-bottom: 50px;"> 
                            <?php
                                 }
                                
                                 ?>

 <!-----------------xuat like------------------->
 <form method="POST" id="like_form<?php echo $data['id_post']; ?>"> 

 <input type="hidden" name="idlike" id="idlike<?php echo $data['id_post'];?>" value="<?php echo $data['id_post'];?>" />

 <button type="submit" name="like" id="submit<?php echo $data['id_post'];?>"  value="Submit">
  <div id="display_like<?php echo $data['id_post']; ?>"></div></button>



</form>


<script type="text/javascript">
$(document).ready(function() 
{
 $("#submit<?php echo $data['id_post'];?>").click( function(event)
 {
  event.preventDefault();
  var id=$("#idlike<?php echo $data['id_post'];?>").val('<?php echo $data['id_post'] ?>');
  $.ajax({
   url:"XuLyLike.php",
   method:"POST",
 data:id,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     console.log(data);
     $('#idlike<?php echo $data['id_post'];?>').val('<?php echo $data['id_post'];?>');
     load_like();
    }
   }
  })
 });

 load_like();

 function load_like()
 {
	var id=$("#idlike<?php echo $data['id_post'];?>").val('<?php echo $data['id_post'] ?>');
  $.ajax({
   url:"load_like.php",
   method:"POST",
data:id,
   success:function(data)
   {
    $('#display_like<?php echo $data['id_post']; ?>').html(data);
   }
  })
 }
});
</script>

 <!-----------------xuat like------------------->
                 
             <!---xuat comment-->
               <div id="display_comment<?php echo $data['id_post']; ?>" > 
           
               <?php
include("admincb/config/config.php");

                $sql2 = "SELECT post_comment.id, member.Anh, post_comment.noidung_comment, post_comment.thoigian,member.fullname FROM post_comment,member where 
                post_comment.username=member.username and post_comment.post_comment='$post'";
                $result2 = mysqli_query($mysqli, $sql2); 
                if($result2->num_rows > 0)
                    {
                        while ( $data2 = $result2->fetch_assoc() ) 
                            { 
                                ?>   
                         
			<div id="comment-<?php echo $data2["id"];?>" > 

      <div class="p-2 mb-2 bg-light text-dark">
          <img src="<?php echo $data2['Anh'] ;?>"  class="rounded-circle" class="rounded-lg" class="img-fluid rounded-circle" 
           style="width:50px; height:50px;margin-bottom: 50px;">
           <strong><?php echo $data2['fullname']; ?></strong>
           <i><small> <?php echo $data2['thoigian']; ?></small></i>
           <div class="container">
           <div class="row justify-content-start">
   
           <input type="submit" name="delete" id="delete<?php echo $data2['id'];?>" class="btn btn-outline-primary btn-sm" value="Xóa" 
onclick="deletecomment('<?php echo $data2['id'];?>')" />   
<input type="submit" name="update" id="update<?php echo $data2['noidung_comment'];?>" class="btn btn-outline-danger btn-sm" value="Sửa" 
onclick="updatecomment('<?php echo $data2['id'];?>')" />
</div> 
</div>

<h3><div class="message-content"><?php echo $data2['noidung_comment']; ?></div></h3>


           
       </div>    
                        


                          
</div>     
                         
          <script type="text/javascript"> 

function updatecomment(id) 
{
	var currentMessage = $("#comment-" + id + " .message-content").html();
  
	var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage">'+currentMessage+'</textarea><button name="ok" class="btn btn-outline-danger btn-sm" onClick="callCrudAction(\'edit\','+id+')">Save</button><button name="cancel" class="btn btn-outline-primary btn-sm" onClick="cancelEdit(\''+currentMessage+'\','+id+')">Cancel</button>';
  
  $("#comment-" + id + " .message-content").html(editMarkUp);
}

             function deletecomment(id) 
                {

                if(confirm("Are you sure you want to delete this comment?"))
                {
                        $.ajax({
                         url:"XuLyXoaComment.php",
                         method:"POST",
                         data:'id='+id,
                         dataType:"JSON",
                         success:function(data)
                         {
                          if(data.error != '')
                          {
                           
                           console.log(data);
                           $("#comment-"+id).remove();
                          }
                        }
                      });
                }
            }




function callCrudAction(action,id) 
{
  var data;
  switch(action) 
  {
  case "edit":
    data= 'action='+action+'&id='+ id + '&txtmessage='+ $("#txtmessage").val();
  break;
}	 

	$.ajax({
	url: "XuLyUpdateComment.php",
	data:data,
	type: "POST",

	success:function(data)
  {
    switch(action)
		 {
			
			case "edit":
        $("#comment-"+id + " .message-content").html(data);
		console.log(data);
    }
			
	}	
	});
}

                       </script>
                   <?php 
                   }
                  }
                
                          ?>

              </div>
              
 
              


               <!-- <span id="comment_message<?php //echo $data['id_post'];?>"></span>-->
             <!----xuat comment-->

<br>
        <form method="POST" id="comment_form<?php echo $data['id_post']; ?>">  
             
       <div class="input-group">           
<input type="text" id="nftext<?php echo $data['id_post']; ?>" name="nftext" placeholder="Comment" class="form-control">
<input type="hidden" name="id" id="id<?php echo $data['id_post'];?>" value="<?php echo $data['id_post'];?>" />
<input type="submit" name="comment" id="sub<?php echo $data['id_post'];?>" class="btn btn-info" value="Sub" />
                    
                    </div> 
        </from>
<br><br><br>                

<script type="text/javascript">
$(document).ready(function()
{
 $('#sub<?php echo $data['id_post'];?>').click( function(event)
 {
  event.preventDefault();
  var form_data = $('#comment_form<?php echo $data['id_post'] ;?>').serialize();
  $.ajax({
   url:"XuLyDangComment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
      {
        if(data.error != '')
        {
        $('#comment_form<?php echo $data['id_post'];?>')[0].reset();
        $('#comment_message<?php echo $data['id_post'];?>').html(data.error);
        console.log(data);
        $('#id<?php echo $data['id_post'];?>').val('<?php echo $data['id_post'];?>');
        load_comment();
        
        }
      }
  })
 });

 load_comment();

 function load_comment()
 {
	var id=$("#id<?php echo $data['id_post'];?>").val('<?php echo $data['id_post'] ?>');
  $.ajax({ 
   url:"load_comment.php",
   method:"POST",
data:id,
   success:function(data)
   {
    $('#display_comment<?php echo $data['id_post']; ?>').html(data);
   
   }
  })
 }
});
</script>         
                  <?php
        }
}   
else
{
echo" không bai viet";
}   ?> 
  </div>
 <!---------------------ket thuc xuat bai viet------------------------------> 
 </div>
  <?php
  include('admincb/config/config.php');
  $user=$_SESSION['username'];
 $sql = "SELECT child_info_submitted,mother_info_submitted FROM member WHERE username='$user'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $hasMotherInfo = $row['mother_info_submitted'];
  $hasBabyInfo = $row['child_info_submitted'];
 
 
} else {
  // Nếu không tìm thấy thông tin người dùng, điều hướng đến trang đăng nhập hoặc trang lỗi
 
  exit();
}
?>
<script>
        function toggleContent() {
            var hasBabyInfo = <?php echo json_encode($hasBabyInfo==1); ?>;
            var hasMotherInfo = <?php echo json_encode($hasMotherInfo==1); ?>;

            if (hasBabyInfo) {
                document.getElementById('babySection').style.display = 'block';
                document.getElementById('motherSection').style.display = 'none';
            } else if (hasMotherInfo) {
                document.getElementById('babySection').style.display = 'none';
                document.getElementById('motherSection').style.display = 'block';
            } 
        }

        window.onload = toggleContent;
    </script>
    <div class="shadow p-3 mb-5 bg-white rounded" style=" width: 499px;">
    <div class="container2">
      <div>
    <div id="motherSection" style="display: none;">
        <div class="header2">
            <div class="menu-icon">
            <i class="fa-solid fa-bars"></i>
            </div>
            <h1>Mẹ Bầu</h1>
            <div class="settings-icon">
        
            </div>
        </div>
        <div class="main-content2">
            <div class="due-date">
                <span>Dự sinh:</span>
                <span class="date">16/01/2024</span>
            </div>
            <div class="progress-section2">
                <div class="progress-bar2">
                    <span class="progress-info">60 Tuần 1 Ngày</span>
                </div>
                
            </div>
            <div class="buttons2">
                <button class="btn-image2">Hình Ảnh</button>
                <button class="btn-details2">Chi Tiết</button>
                <button class="btn-image2">Hình Ảnh</button>
                <button class="btn-details2">Chi Tiết</button>
                <button class="btn-image2">Hình Ảnh</button>
                <button class="btn-details2">Chi Tiết</button>
                <button class="btn-image2">Hình Ảnh</button>
                <button class="btn-details2">Chi Tiết</button>
            </div>
        </div>
    </div>
 
  
       <div id="babySection" style="display: none;">
       <div class="header3">
            <div class="user-info3">
                <img src="congdong/uploadss/unnamed.png" alt="User Avatar" class="avatar3">
                <span class="username3">Xin chào, phung!</span>
            </div>
            <h1>Con Yêu</h1>
        </div>

        <div class="main-content3">
            <div class="age-info3">
                <span class="age3">1 Năm</span>
               
            </div>
            <div class="info-buttons3">
                <button class="info-btn3">Thông Tin Con Yêu</button>
                <button class="info-btn3">Con Yêu Theo Tháng Tuổi</button>
                <button class="info-btn3">Cân Nặng & Chiều Cao</button>
            
            </div>
        </div>
       </div>
    </div>

 

  
</div>
<!-- ff -->
  </div>

  <div>
    
  </div>
</div>
</div>
