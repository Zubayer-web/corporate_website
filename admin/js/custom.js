(function($){
    $(document).ready(function () {
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



    });
})(jQuery);

