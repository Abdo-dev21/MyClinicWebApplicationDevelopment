$('document').ready(function() {   
  /* handle form validation */  
  $("#register-form").validate({
      rules:
   {
   firstname: {
      required: true,
   minlength: 3
   },
   lastname: {
      required: true,
   minlength: 3
   },
   pass: {
   required: true,
   minlength: 8,
   maxlength: 15
   },
   confirm: {
   required: true,
   equalTo: '#pass'
   },
   email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            firstname: "please enter first name",
            lastname: "please enter last name",
            pass:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            email: "please enter a valid email address",
   confirm:{
      required: "please retype your password",
      equalTo: "password doesn't match !"
       }
       },
    submitHandler: submitForm 
       });  
    /* handle form submit */
    function submitForm() {  
    var data = $("#register-form").serialize();    
    $.ajax({    
    type : 'POST',
    url  : '../php/registration.php',
    data : data,
    beforeSend: function() { 
     $("#error").fadeOut();
     $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
    },
    success :  function(response) {      
        if(response==1){         
			 $("#error").fadeIn(1000, function(){
			   $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');           
			   $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');          
			 });                    
        } else if(response=="registered"){         
			 $("#btn-submit").html('<img src="../images/ajax-loader.gif" /> &nbsp; Signing Up ...');
			 setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("welcome.php"); }); ',3000);         
        } else {          
         	$("#error").fadeIn(1000, function(){           
      			$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');           
         		$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');         
         	});           
       	}
        }
    });
    return false;
  }
});
