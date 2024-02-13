(function($){
    $(document).ready(function () {
      let siteurl = "http://localhost/corporate/";
      
//Script for Register 
      // form redirect       
       $("#registerBack").click(function () { 
        $("#loginFormBox").hide();
        $("#registerFormBox").show();        
       });
       $("#loginBack").click(function () { 
        $("#registerFormBox").hide();
        $("#loginFormBox").show();        
       });
       $("#forgetForm").click(function () { 
        $("#loginFormBox").hide();
        $("#forgetFormBox").show();        
       });
       $("#registerBackFormForget").click(function () { 
        $("#forgetFormBox").hide();
        $("#registerFormBox").show();        
       });

       // validaton check 
       $("#register").click(function (e) { 
          e.preventDefault();
          let username = $("#fullname").val();
          let email = $("#useremail").val();
          let password = $("#password").val();
          let c_password = $("#c_password").val(); 

          if( username === '' || email === '' ){
            $("#fullNameError").text("Please enter your full name");            
          }
          if( email === '' ){          
            $("#emailError").text("Please enter your email address");
          }
          if( password === '' || c_password === '' ){
            $("#passwordError").text("Please enter your password");
          }
          if( password !== c_password ){
            $("#matcherror").text("Please enter your right password");        
          }
          if( username !== '' && email !== '' && (password === c_password)){
            let form = $("#registerForm");
              $.ajax({
                url: siteurl + "admin/action.php",
                type: "POST",
                data: form.serialize()+ "&action=register",
                success: function(response){
                  if(response === 'ok' ){
                    window.location = './index.php';
                  }else{
                      $("#displayError").html(response);
                  }
                }

              });
          }else{
            console.log(0);
          }
        });

//Script for login
        $("#login").click(function(e){          ;
          if($('#loginForm')[0].checkValidity()){
            e.preventDefault();              
            let loginemail = $("#loginUsername").val();
            let loginpassword = $("#loginPassword").val();
            
            if( loginemail === '' ){
              $("#loginUsernameEorr").text( "Enter your email address" );
            }
            if( loginpassword === '' ){
              $("#loginPasswordError").text( "Enter your password" );
            }

            if( loginemail !== '' && loginpassword !== ''){
              let loginForm = $("#loginForm");
              $.ajax({
                type: "POST",
                url: siteurl+"admin/action.php",
                data: loginForm.serialize()+ "&action=login",
                success: function (response) {
                  if( response === 'ok' ){
                    window.location = "index.php";
                  }else{
                    $("#loginError").html(response);
                  }
                }
              });
            }else{

            }

          }
        });

    });
})(jQuery);

