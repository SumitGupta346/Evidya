<!-- Start Footer -->
<footer class="container-fuild bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; 2021 || Designed By E-Vidya || <a href="#login" data-toggle="modal" data-target="#AdminLoginModalCenter">Admin  Login</a>
  || <a href="#login" data-toggle="modal" data-target="#Admin1LoginModalCenter">Educator  Login</a></small>
</footer> <!-- End Footer -->



<!-- Start Student Registration Model -->
    <!-- Modal -->
    <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

           <!-- Start Student Registration Form -->
           <?php include('studentRegistration.php'); ?>
       
           <!-- End  Student Registration form -->

<!-- Start Student Login Model -->
    <!-- Modal -->
    <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

           <!-- Start Student Login Form -->
           <form id="stuLoginForm">
                <div class="form-group">
                  <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="stuLogPass" id="stuLogPass">
                </div>
          </form>
          </div>
          <!-- End Student Login Form -->
          <div class="modal-footer">
          <small id="statusLogMsg"></small>
            <button type="button" class="btn btn-primary" id="stuLoginBtn" onClick="checkStuLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div> 
        </div>
      </div>
    </div>
        <!-- End  Student Login Model -->

<!-- Start  Admin Model -->
    <!-- Modal -->
    <div class="modal fade" id="AdminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="AdminLoginModalCenterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="AdminLoginModalCenterLabel">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

           <!-- Start Admin Form -->
           <form id="adminLoginForm">
                <div class="form-group">
                  <i class="fas fa-envelope"></i><label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="adminLogEmail" id="adminLogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="adminLogPass" class="pl-2 font-weight-bold">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="adminLogPass" id="adminLogPass">
                </div>
          </form>
          </div>
          <!-- End  Admin login Form -->
          <div class="modal-footer">
          <small id="statusAdminLogMsg"></small>
            <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div> 
        </div>
      </div>
    </div>
     
       <!-- End   Admin login Model -->

       <!-- Start  Educator Model -->

    <!-- Modal -->
    <div class="modal fade" id="Admin1LoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="Admin1LoginModalCenterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="Admin1LoginModalCenterLabel">Admin1 Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

           <!-- Start Admin Form -->
           <form id="admin1LoginForm">
                <div class="form-group">
                  <i class="fas fa-envelope"></i><label for="admin1LogEmail" class="pl-2 font-weight-bold">Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="admin1LogEmail" id="admin1LogEmail">
                </div>
                <div class="form-group">
                  <i class="fas fa-key"></i><label for="admin1LogPass" class="pl-2 font-weight-bold">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="admin1LogPass" id="admin1LogPass">
                </div>
          </form>
          </div>
          <!-- End  Admin login Form -->
          <div class="modal-footer">
          <small id="statusAdmin1LogMsg"></small>
            <button type="button" class="btn btn-primary" id="admin1LoginBtn" onclick="checkAdmin1Login()">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div> 
        </div>
      </div>
    </div>
     
     
       <!-- End   Educator login Model -->



<!-- jquery and Bootstrap js -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

<!-- Student Testimonial Owl Slider JS -->
<script type="text/javascript" src="js/owl.min.js"></script>
<script type="text/javascript" src="js/testyslider.js"></script>

<!-- Student Ajax Call JavaScript -->
<script type="text/javascript" src="js/ajaxrequest.js"></script>


<!-- admin Ajax Call JavaScript -->
<script type="text/javascript" src="js/Adminajaxrequest.js"></script>
<script type="text/javascript" src="js/ajaxEdu.js"></script>

</body>
</html>