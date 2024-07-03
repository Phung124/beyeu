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
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.1.1-web/css/all.min.css" />
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

        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Sử dụng bootstrap online-->
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
<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (isset($_POST['timkiem'])) // Kiểm tra nút có giá trị dữ liệu
{
    include('admincb/config/config.php');
    $search = addslashes($_POST['txtTenTimKiem']);
        $sqlsearch = "SELECT post.id_post,post.noidung, post.thoigian,post.anh,post.chedo, member.Anh, member.fullname
 FROM post,member where member.username=post.username and post.noidung like '%$search%'";
        $query_search = mysqli_query($mysqli, $sqlsearch);
   ?>

<div class="container">
<div class="row" style=" margin: 0px auto;">
 <!--------------------------------------XUẤT BÀI VIẾT------------------------------------->
  <div class="col-md-10" style=" flex: 0 0 100%; max-width: 100%; padding-left: 0px;"> 
  <div class="shadow p-3 mb-5 bg-white rounded">
<?php

if($query_search->num_rows > 0)
{
                while ( $data = $query_search->fetch_assoc() ) 
                { 
               
                            $post= $data["id_post"];
                                if($data['anh']==NULL)
                                {
                                    ?>
                                    <img src="<?php echo $data['Anh'] ;?>"  class="rounded-circle" class="rounded-lg" class="img-fluid rounded-circle" 
                                                style="width:50px; height:50px;margin-bottom: 50px;"><strong> <?php echo $data['fullname']; ?> </strong>
                                           
                            <i><small>  <?php echo $data['thoigian'];?>  </small></i>
                                          
                                           
                                  
                                    
                                    
                          <h3>  <?php   echo $data['noidung'] ; ?> </h3>
                               <?php }
                                else
                                {
                ?>
                
                <img src="<?php echo $data['Anh'] ;?>"  class="rounded-circle" class="rounded-lg" class="img-fluid rounded-circle" 
                style="width:50px; height:50px;margin-bottom: 50px;"><strong> <?php echo $data['fullname']; ?> </strong>
                            <i><small>  <?php echo $data['thoigian'];?> </small></i>
                           
                              <h3> <?php  echo $data['noidung']; ?></h3>
                                
                                <img src="<?php echo $data['anh'] ;?>"class="rounded mx-auto d-block" alt="Responsive image" 
                                style=" max-width: 100%; height: auto; margin-bottom: 50px;"> 
                            <?php
                                 }
                                
                                 ?>

 <!----------------- bat dau xuat like------------------->
 <form method="POST" id="like_form<?php echo $data['id_post']; ?>"> 

 <input type="hidden" name="idlike" id="idlike<?php echo $data['id_post'];?>" value="<?php echo $data['id_post'];?>" />

 <button type="submit" name="like" id="submit<?php echo $data['id_post'];?>" value="Submit">
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

 <!-----------------ket thuc xuat like------------------->
                 
<!--------------------bat dau xuat comment------------------------>
               <div id="display_comment<?php echo $data['id_post']; ?>" style=" width: 466px;"> 
           
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
    

    
           <input type="submit"style=" width: 46px; height: 30px;" name="delete" id="delete<?php echo $data2['id'];?>" class="btn btn-outline-primary btn-sm" value="Xóa" 
onclick="deletecomment('<?php echo $data2['id'];?>')" />
<input type="submit" style=" width: 46px; height: 30px;" name="update" id="update<?php echo $data2['noidung_comment'];?>" class="btn btn-outline-danger btn-sm" value="Sửa" 
onclick="updatecomment('<?php echo $data2['id'];?>')" />
</div> 
</div>

          <h3> <div class="message-content"><?php echo $data2['noidung_comment']; ?></div></h3>

</div>
           
        
  <br>                      

                          
</div>     
                         
          <script type="text/javascript"> 

function updatecomment(id) 
{
	var currentMessage = $("#comment-" + id + " .message-content").html();
  
	var editMarkUp = '<textarea  rows="5" cols="80" id="txtmessage">'+currentMessage+'</textarea><button name="ok" class="btn btn-outline-danger btn-sm" onClick="callCrudAction(\'edit\','+id+')">Save</button><button name="cancel" class="btn btn-outline-primary btn-sm" onClick="cancelEdit(\''+currentMessage+'\','+id+')">Cancel</button>';
  
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
              
 
              


               <!--thong bao thanh cong <span id="comment_message<?php //echo $data['id_post'];?>"></span>-->
<!--------------------------------------ket thuc xuat comment------------------------>

<br>
<!--------------------xu ly dang comment---------------------->
        <form method="POST" id="comment_form<?php echo $data['id_post']; ?>">  
             
       <div class="input-group">           
<input type="text" id="nftext<?php echo $data['id_post']; ?>" name="nftext" placeholder="Comment" class="form-control">
<input type="hidden" name="id" id="id<?php echo $data['id_post'];?>" value="<?php echo $data['id_post'];?>" />
<input type="submit" style=" width: 48px; height: 39px;" name="comment" id="sub<?php echo $data['id_post'];?>" class="btn btn-info" value="Sub" />
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
//--------------ket thuc xu ly danh comment--------------
else
{

}   ?> 
  </div>
 <!---------------------ket thuc xuat bai viet------------------------------> 

<!---------------------------bat dau xuat ban be dang online----------------->
  </div>

  
  
  </div> 
</div>
<?php   
}
?>















































































        <div id="wpcontent">
            <?php

include('thuvien.php');
include('admincb/config/config.php');
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if (isset($_POST['timkiem'])) // Kiểm tra nút có giá trị dữ liệu
{
    $search = addslashes($_POST['txtTenTimKiem']);
        $sql2 = "SELECT username FROM member where fullname like '$search'";
        $result = mysqli_query($mysqli, $sql2);
        if($result->num_rows > 0)
        {
            while ( $data2 = $result->fetch_assoc() ) 
                { 
                $user_timkiem =$data2['username'];
                
                }
                
                  $query = "SELECT fullname,birthday,sex,Anh,email from member where fullname like '%$search%'";
            $sql = mysqli_query($mysqli,$query);
            if($sql->num_rows > 0)
            { 
                while ( $data= $sql->fetch_assoc() ) 
                {?>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <img class="img-fluid rounded-circle" style="width:150px; height:150px;margin-bottom: 20px;"
                                src="<?php echo $data['Anh'] ;?>" class="rounded-circle" class="rounded-lg" alt="User">


                            <br>
                            <strong>Fullname:</strong> <?php echo $data['fullname'];?><br>
                            <strong> Email: </strong><?php echo $data['email'];?><br>
                            <strong>Birthday:</strong><?php echo $data['birthday'];?><br>
                            <strong>Sex:</strong><?php echo $data['sex'];?> <br>
                        </div>

                    </div>
                    <?php 
                }

            }?>
       
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                    <link rel="stylesheet"
                        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

                    <div class="container">
                        
                        <form method="POST" id="comment_form">

                            <div class="form-group">
                                <input type="hidden" name="search" id="search" value="<?php echo $search ;?>" />

                                <button style="width:80px;" type="submit" name="submit" id="submit" class="btn btn-info">
                                    <div id="display_comment"></div>
                                </button>
                                <h2><a href="chat.php?username=<?php echo $user_timkiem;?>"><i class="fa-brands fa-facebook-messenger"></i></a></h2>
                            </div>
                        </form>
                        <span id="comment_message"></span>
                        <br />
                        <div id="display_comment" ></div>
                    </div>
                
                    <script>
                    $(document).ready(function() {

                        $('#submit').click(function(event) {
                            event.preventDefault();
                            var search = $('#search').val('<?php echo $search ;?>');
                            $.ajax({
                                url: "XuLyKB.php",
                                method: "POST",
                                data: search,
                                dataType: "JSON",
                                success: function(data) {
                                    if (data.error != '') {
                                        $('#comment_form')[0].reset();
                                        $('#comment_message').html(data.error);
                                        $('#search').val('<?php echo $search ;?>');
                                        console.log(data);
                                        load_comment();
                                    }
                                }
                            })
                        });

                        load_comment();

                        function load_comment() {
                            var search = $("#search").val('<?php echo $search ;?>');
                            $.ajax({
                                url: "load_trangthaiKB.php",
                                method: "POST",
                                data: search,
                                success: function(data) {
                                    $('#display_comment').html(data);
                                }
                            })
                        }


                    });
                    </script>


                    <?php
       }
              
}

?>

                            <div class="col-md-9" style=" left: 187px; max-width: 100%;">
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                    <!--------------------------------------XUẤT BÀI VIẾT------------------------------------->
                                    <?php
include('admincb/config/config.php');

$sql = "SELECT post.id_post,post.noidung, post.thoigian,post.anh,post.chedo, member.Anh, member.fullname
FROM post,member where member.username=post.username and member.fullname='$search' "; 

$result = mysqli_query($mysqli, $sql);


if($result->num_rows > 0)
{
                while ( $data = $result->fetch_assoc() ) 
                { 
               
                            $post= $data["id_post"];
                            if($data['anh']==NULL)
                            {
                                ?>
                                    <img src="<?php echo $data['Anh'] ;?>" class="rounded-circle" class="rounded-lg"
                                        class="img-fluid rounded-circle"
                                        style="width:50px; height:50px;margin-bottom: 50px;">
                                    <strong> <?php echo $data['fullname']; ?> </strong>

                                    <i><small> <?php echo $data['thoigian'];?> </small></i>

                                    <br>
                                    <?php echo $data['noidung']; 
                            }
                            else
                            {
            ?>
                                    <img src="<?php echo $data['Anh'] ;?>" class="rounded-circle" class="rounded-lg"
                                        class="img-fluid rounded-circle"
                                        style="width:50px; height:50px;margin-bottom: 50px;"><strong>
                                        <?php echo $data['fullname']; ?> </strong>
                                    <i><small> <?php echo $data['thoigian'];?> </small></i>
                                    <br>
                                    <?php echo $data['noidung']; ?>
                                    <br>
                                    <img src="<?php echo $data['anh'] ;?>" class="rounded mx-auto d-block"
                                        alt="Responsive image"
                                        style="max-width: 100%; height: auto;margin-bottom: 50px;">
                                    <?php
                             }
                            
                             ?>

                                    <!-----------------xuat like------------------->
                                    <form method="POST" id="like_form<?php echo $data['id_post']; ?>">

                                        <input type="hidden" name="idlike" id="idlike<?php echo $data['id_post'];?>"
                                            value="<?php echo $data['id_post'];?>" />

                                        <button type="submit" name="like" id="submit<?php echo $data['id_post'];?>"
                                            value="Submit">
                                            <div id="display_like<?php echo $data['id_post']; ?>"></div>
                                        </button>
                                    </form>


                                    <script type="text/javascript">
                                    $(document).ready(function() {
                                        $("#submit<?php echo $data['id_post'];?>").click(function(event) {
                                            event.preventDefault();
                                            var id = $("#idlike<?php echo $data['id_post'];?>").val(
                                                '<?php echo $data['id_post'] ?>');
                                            $.ajax({
                                                url: "XuLyLike.php",
                                                method: "POST",
                                                data: id,
                                                dataType: "JSON",
                                                success: function(data) {
                                                    if (data.error != '') {
                                                        console.log(data);
                                                        $('#idlike<?php echo $data['id_post'];?>')
                                                            .val(
                                                                '<?php echo $data['id_post'];?>'
                                                                );
                                                        load_like();
                                                    }
                                                }
                                            })
                                        });

                                        load_like();

                                        function load_like() {
                                            var id = $("#idlike<?php echo $data['id_post'];?>").val(
                                                '<?php echo $data['id_post'] ?>');
                                            $.ajax({
                                                url: "load_like.php",
                                                method: "POST",
                                                data: id,
                                                success: function(data) {
                                                    $('#display_like<?php echo $data['id_post']; ?>')
                                                        .html(data);
                                                }
                                            })
                                        }
                                    });
                                    </script>

                                    <!-----------------xuat like------------------->

                                    <!---xuat cometn-->
                                    <div id="display_comment<?php echo $data['id_post']; ?>">

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

                                        <div id="comment-<?php echo $data2["id"];?>">

                                            <div class="p-2 mb-2 bg-light text-dark">
                                                <img src="<?php echo $data2['Anh'] ;?>" class="rounded-circle"
                                                    class="rounded-lg" class="img-fluid rounded-circle"
                                                    style="width:50px; height:50px;margin-bottom: 50px;">
                                                <strong><?php echo $data2['fullname']; ?></strong>
                                                <i><small> <?php echo $data2['thoigian']; ?></small></i>
                                                <div class="container">
                                                    <div class="row justify-content-start">

                                                        <input type="submit" name="delete"
                                                            id="delete<?php echo $data2['id'];?>"
                                                            class="btn btn-outline-primary btn-sm" value="Xóa"
                                                            onclick="deletecomment('<?php echo $data2['id'];?>')" />
                                                        <input type="submit" name="update"
                                                            id="update<?php echo $data2['noidung_comment'];?>"
                                                            class="btn btn-outline-danger btn-sm" value="Sửa"
                                                            onclick="updatecomment('<?php echo $data2['id'];?>')" />
                                                    </div>
                                                </div>

                                                <h3>
                                                    <div class="message-content">
                                                        <?php echo $data2['noidung_comment']; ?></div>
                                                </h3>



                                            </div>




                                        </div>

                                        <script type="text/javascript">
                                        function updatecomment(id) {
                                            var currentMessage = $("#comment-" + id + " .message-content").html();

                                            var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage">' +
                                                currentMessage +
                                                '</textarea><button name="ok" class="btn btn-outline-danger btn-sm" onClick="callCrudAction(\'edit\',' +
                                                id +
                                                ')">Save</button><button name="cancel" class="btn btn-outline-primary btn-sm" onClick="cancelEdit(\'' +
                                                currentMessage + '\',' + id + ')">Cancel</button>';

                                            $("#comment-" + id + " .message-content").html(editMarkUp);
                                        }

                                        function deletecomment(id) {

                                            if (confirm("Are you sure you want to delete this comment?")) {
                                                $.ajax({
                                                    url: "XuLyXoaComment.php",
                                                    method: "POST",
                                                    data: 'id=' + id,
                                                    dataType: "JSON",
                                                    success: function(data) {
                                                        if (data.error != '') {

                                                            console.log(data);
                                                            $("#comment-" + id).remove();
                                                        }
                                                    }
                                                });
                                            }
                                        }




                                        function callCrudAction(action, id) {
                                            var data;
                                            switch (action) {
                                                case "edit":
                                                    data = 'action=' + action + '&id=' + id + '&txtmessage=' + $(
                                                        "#txtmessage").val();
                                                    break;
                                            }

                                            $.ajax({
                                                url: "XuLyUpdateComment.php",
                                                data: data,
                                                type: "POST",

                                                success: function(data) {
                                                    switch (action) {

                                                        case "edit":
                                                            $("#comment-" + id + " .message-content").html(
                                                                data);
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





                                    <!--<span id="comment_message<?php //echo $data['id_post'];?>"></span>-->
                                    <!----xuat comment-->

                                    <br>
                                    <form method="POST" id="comment_form<?php echo $data['id_post']; ?>">

                                        <div class="input-group">
                                            <input type="text" id="nftext<?php echo $data['id_post']; ?>" name="nftext"
                                                placeholder="Comment" class="form-control">
                                            <input type="hidden" name="id" id="id<?php echo $data['id_post'];?>"
                                                value="<?php echo $data['id_post'];?>" />
                                            <input type="submit" name="comment" id="sub<?php echo $data['id_post'];?>"
                                                class="btn btn-info" value="Đăng" />

                                        </div>
                                        </from>
                                        <br><br><br>

                                        <script type="text/javascript">
                                        $(document).ready(function() {
                                            $('#sub<?php echo $data['id_post'];?>').click(function(event) {
                                                event.preventDefault();
                                                var form_data = $(
                                                        '#comment_form<?php echo $data['id_post'] ;?>')
                                                    .serialize();
                                                $.ajax({
                                                    url: "XuLyDangComment.php",
                                                    method: "POST",
                                                    data: form_data,
                                                    dataType: "JSON",
                                                    success: function(data) {
                                                        if (data.error != '') {
                                                            $('#comment_form<?php echo $data['id_post'];?>')[
                                                                0].reset();
                                                            $('#comment_message<?php echo $data['id_post'];?>')
                                                                .html(data.error);
                                                            console.log(data);
                                                            $('#id<?php echo $data['id_post'];?>')
                                                                .val(
                                                                    '<?php echo $data['id_post'];?>'
                                                                    );
                                                            load_comment();

                                                        }
                                                    }
                                                })
                                            });

                                            load_comment();

                                            function load_comment() {
                                                var id = $("#id<?php echo $data['id_post'];?>").val(
                                                    '<?php echo $data['id_post'] ?>');
                                                $.ajax({
                                                    url: "load_comment.php",
                                                    method: "POST",
                                                    data: id,
                                                    success: function(data) {
                                                        $('#display_comment<?php echo $data['id_post']; ?>')
                                                            .html(data);

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

}   ?>
                                </div>
                                <!---------------------ket thuc xuat bai viet------------------------------>
                            </div>
                            <!-- <div class="col-3">
                              


                            </div> -->
                        
                    </div>
                </div>

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