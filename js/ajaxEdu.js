// Ajax Call for admin Login Verification
function checkAdmin1Login() {
  var admin1LogEmail = $("#admin1LogEmail").val();
  var admin1LogPass = $("#admin1LogPass").val();
  $.ajax({
    url: "Educator/educator.php",
    type: "POST",
    data: {
      checkLogemail: "checklogmail",
      admin1LogEmail: admin1LogEmail,
      admin1LogPass: admin1LogPass
    },
    success: function(data) {
      console.log(data);
      if (data == 0) {
        $("#statusAdmin1LogMsg").html(
          '<small class="alert alert-danger"> Invalid Email ID or Password ! </small>'
        );
      } else if (data == 1) {
        $("#statusAdmin1LogMsg").html(
          '<small class="alert alert-success"> Success! Loading..... </small>'
        );
        // Empty Login Fields
        clearAdmin1LoginField();
        setTimeout(() => {
          window.location.href = "educator/educatorDashboard.php";
        }, 1000);
      }
    }
  });
}

// Empty Login Fields
function clearAdmin1LoginField() {
  $("#admin1LoginForm").trigger("reset");
}

// Empty Login Fields and Status Msg
function clearAdmin1LoginWithStatus() {
  $("#statusAdmin1LogMsg").html(" ");
  clearAdmin1LoginField();
}
