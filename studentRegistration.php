<!-- Start Student Registration Form -->
<form id="stuRegForm">
    <div class="form-group">
        <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
        <small id="statusMsg1"></small>
        <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
    </div>
    <div class="form-group">
        <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
        <small id="statusMsg2"></small>
        <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
        <div class="form-group">
            <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label>
            <small id="statusMsg3"></small>
            <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
        </div>
</form>
    </div>
          <!-- End Student Registration Form -->
    <div class="modal-footer">
    <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onClick="addStu()" id="signup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div> 
    </div>
    </div>
    </div>
<!-- End  Student Registration Model -->