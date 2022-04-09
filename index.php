<?php
include('./header.php');
?>
</nav>
  <!-- end navigation -->
  <!--- start video background -->
  <video width="1270px" playsinline autoplay muted loop id="myvideo">
    <source src="video/elearning.mp4" type="video/mp4">

  </video> 
  <div class ="vid-content">
    <h1> WELCOME TO LOVELY PROFESSIONAL UNIVERSITY E-LEARNING MANAGEMENT SYSTEM</h1>
    <a href="a" class=" btn-danger" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a> 
     

   

  </div>
   

  <!--- end video background -->
  <!--- start text banner-->
  <div class="container-fluid bg-danger text-banner">
    <div class="row buttom-banner">
      <div class="col-sm">
        <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>

      </div>
      <div class="col-sm">
        <h5><i class="fas fa-book-open mr-3"></i>Expert Instructor</h5>

      </div>
      <div class="col-sm">
        <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>

      </div>
      <div class="col-sm">
        <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Gaurantee</h5>

      </div>

    </div>

  </div>
  <!--- end text banner-->

   <!--- start most popular courses-->
   <div class="container mt-5">
     <h1 class="text-center">Popular Course</h1>

     <!--- fist card dack mt4 means margin top-->
    
     
<!--- fist card dack mt4 means margin top-->
      <div class="card-deck mt-4">
      <a href="#"  class="btn" style="text-align: left; padding:0px; margin:0px;">
      <div class="card">
        <div class="img">
        <img src='image/zava/zava.jpg' class="card-img-top" alt="learn java"/>
</div>
        <div class="card-body">
          <h5 class="card-tittle">Learn zava Easy Way</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consecteture adipisicing elit. facilies,nemo </p>

        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
           <span
          class="font-weigth-bolder"> &#8377 200 <span></p>
          <a class="btn btn-primary text-white font-weigth-bolder float-right" href="#">Enroll</a>

</div>
</div>
<!--- 2 card dack mt4 means margin top-->
<div class="card-deck mt-4">
      <a href="#"  class="btn" style="text-align: left; padding:0px; margin:0px;">
      <div class="card">
       <div class="img1">
        <img src='image/png2jpg/python.jpg' class="card-img-top" alt="Learn Python"/>
       </div>
        <div class="card-body">
          <h5 class="card-tittle">Learn Python Easy Way</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consecteture adipisicing elit. facilies,nemo </p>

        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del>&#8377 2000 </del></small>
           <span
          class="font-weigth-bolder"> &#8377 200 <span></p>
          <a class="btn btn-primary text-white font-weigth-bolder float-right" href="#">Enroll</a>

</div>
</div>       
</div>
   </div>


<!-- end of card deck-->
<div class="text-center m-2">
  <a class="btn btn-danger btn-sm" href="#"> View All Course</a>

</div>
<br>
<!-- end of card deck-->
<!--  start contect us-->
<?php
include('./form.php');
?>
<!-- end of contect us-->

 


<!---social media--->
<div class="container-fluid bg-danger text-banner">
    <div class="row buttom-banner">
      <div class="col-sm">
        <h5><i class="fab fa-facebook-f" ></i>Facebook</h5>

      </div>
      <div class="col-sm">
        <h5><i class="fab fa-twitter" ></i>Twitter</h5>

      </div>
      <div class="col-sm">
        <h5><i class="fab fa-whatsapp" ></i>WhatsApp</h5>

      </div>
      <div class="col-sm">
        <h5><i class="fab fa-instagram" ></i>Instagram</h5>

      </div>

    </div>

  </div>
   
 
<!--  start Admin page form modal--> 
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class= "modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!-- yeha prr  login form ka code hai -->
      <form>
       

      
    
      <div class ="form-group">
        <i class="fas fa-envelope"></i><lable for ="adminemail"
         class="pl-2 font -weigth-bold">Email</lable><input
        type="email"
        class="form-control" placeholder="Email"
        name="adminemail" id="adminemail">

      </div>
      <br>
      <div class ="form-group">
        <i class="fas fa-key"></i><lable for ="adminpass"
         class="pl-2 font -weigth-bold">New Password</lable><input
        type="password"
        class="form-control" placeholder="Password"
        name="adminpass" id="adminpass">

       
      </div>
      
    
   
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Login</button>
        <button type="button" class="btn btn-primary">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- end student admin page form modal--> 
<?php
include('./footer.php');
?>

  
<script src="js/jquery.min.js"></script>  
  <script src="js/popper.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/all.min.js"></script> 
  <script type="text/javascript" src="js/ajaxrequest.js"></scrip>
 








    
</body>
</html>
 