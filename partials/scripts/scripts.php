<script>
    function showPassword()
{
    var pass = document.getElementById("password");
    if (pass.type === "password") 
    {
        pass.type = "text";
      } 
      else 
      {
        pass.type = "password";
      }
    
}

function confirmPassword()
{
    var confirmPassword = document.getElementById("confirmpassword");
    if (confirmPassword.type === "password") 
    {
        confirmPassword.type = "text";
      } 
      else 
      {
        confirmPassword.type = "password";
      }
    
}


</script>