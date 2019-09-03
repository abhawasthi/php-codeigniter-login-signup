<?php include('header.php'); ?>
<meta name="google-signin-client_id" content="571574936924-gst4deof1slkdpedip2fjt5eb7elsg5c.apps.googleusercontent.com">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://apis.google.com/js/platform.js?onload=onLoadGoogleCallback" async defer></script> 
<script src="<?php  echo base_url(); ?>assets/js/google.js" ></script>
<style>
    .loader{position:fixed;left:0;top:0;width:100%;height:100%;z-index:9999;background:url(../assets/images/loading.gif) 50% 50% no-repeat #000;opacity:.75}
</style>
<div class="loader hide"></div>  
<div id="logreg-forms">
    <div id="infoMessage"><?php echo $message;?></div>

        <form class="form-signin" method="POST" action="<?php echo  base_url(); ?>auth/login">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                
                <button class="btn google-btn social-btn" id="googleSignIn" type="button">
                    
                    <span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span>
                
                     </button>
            </div>
            <p style="text-align:center"> OR  </p>
            <input type="email" name="identity" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <a href="#" class="anchor" id="forgot_pswd">Forgot password?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
            </form>

            <form action="<?php echo base_url(); ?>auth/forgot_password"  method="POST" class="form-reset">
                <input type="email" id="resetEmail" name="identity" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            
            <form id="idFormSignup" action="<?php echo base_url(); ?>auth/create_user" method="POST" class="form-signup">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" id="googleSignIn2" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
                </div>
                
                <p style="text-align:center">OR</p>

                <input type="text" id="user-name" name="first_name" value="<?php echo $this->form_validation->set_value('first_name');  ?>" class="form-control" placeholder="First name" required="" autofocus="">
                <input type="text" id="user-name1" name="last_name"  <?php echo $this->form_validation->set_value('last_name');  ?> class="form-control" placeholder="Last name" required="" autofocus="">
                <input type="email" id="user-email" name="email" <?php echo $this->form_validation->set_value('email');  ?> class="form-control" placeholder="Email address" required autofocus="">
                <input type="text" id="company" name="company" <?php echo $this->form_validation->set_value('company');  ?> class="form-control" placeholder="Company name" required autofocus="">
                <input type="text" id="phone" name="phone" <?php echo $this->form_validation->set_value('phone');  ?> class="form-control" placeholder="Phone" required autofocus="">
                <input type="password" id="user-pass" name="password" <?php echo $this->form_validation->set_value('password');  ?> class="form-control" placeholder="Password" required autofocus="">
                <input type="password" id="user-repeatpass"  <?php echo $this->form_validation->set_value('password_confirm');  ?> name="password_confirm" class="form-control" placeholder="Repeat Password" required autofocus="">

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>


</div>
<style>
  
/* sign in FORM */
#logreg-forms{
    width:412px;
    margin:10vh auto;
    background-color:#f3f3f3;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
#logreg-forms form {
    width: 100%;
    max-width: 410px;
    padding: 15px;
    margin: auto;
}
#logreg-forms .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}
#logreg-forms .form-control:focus { z-index: 2; }
#logreg-forms .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}
#logreg-forms .form-signin input[type="password"] {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

#logreg-forms .social-login{
    width:390px;
    margin:0 auto;
    margin-bottom: 14px;
}
#logreg-forms .social-btn{
    font-weight: 100;
    color:white;
    width:190px;
    font-size: 0.9rem;
}

#logreg-forms .anchor{
    display: block;
    padding-top:10px;
    color:lightseagreen;
}

#logreg-form .lines{
    width:200px;
    border:1px solid red;
}


#logreg-forms button[type="submit"]{ margin-top:10px; }

#logreg-forms .facebook-btn{  background-color:#3C589C; }

#logreg-forms .google-btn{ background-color: #DF4B3B; }

#logreg-forms .form-reset, #logreg-forms .form-signup{ display: none; }

#logreg-forms .form-signup .social-btn{ width:210px; }

#logreg-forms .form-signup input { margin-bottom: 2px;}

.form-signup .social-login{
    width:210px !important;
    margin: 0 auto;
}

/* Mobile */

@media screen and (max-width:500px){
    #logreg-forms{
        width:300px;
    }
    
    #logreg-forms  .social-login{
        width:200px;
        margin:0 auto;
        margin-bottom: 10px;
    }
    #logreg-forms  .social-btn{
        font-size: 1.3rem;
        font-weight: 100;
        color:white;
        width:200px;
        height: 56px;
        
    }
    #logreg-forms .social-btn:nth-child(1){
        margin-bottom: 5px;
    }
    #logreg-forms .social-btn span{
        display: none;
    }
    #logreg-forms  .facebook-btn:after{
        content:'Facebook';
    }
  
    #logreg-forms  .google-btn:after{
        content:'Google+';
    }
    
}  

</style>

<script>
    function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
     
    $("#infoMessage").html("");
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
  //  $("#infoMessage").toggle();
    $("#infoMessage").html("");
}

 
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
 
///  Google login ///
function onLoadGoogleCallback(){
  gapi.load('auth2', function() {
    auth2 = gapi.auth2.init({
      client_id: '571574936924-gst4deof1slkdpedip2fjt5eb7elsg5c.apps.googleusercontent.com',
      cookiepolicy: 'single_host_origin',
      scope: 'profile email'
    });

  auth2.attachClickHandler(element, {},
    function(googleUser) {

        var name = googleUser.getBasicProfile().getName();
        var email = googleUser.getBasicProfile().getEmail();
        var accesstoken = googleUser.getBasicProfile().getId();

        $.post('process.php', {name:name,email:email,accesstoken:accesstoken,'action':'1'}, function(data){
                                if(data=='1')
                                {
                                  window.location= "dashboard.php";     
                                }else 
                                {
                                    alert('something goes wrong');
                                }
            
         });

        
        
      }, function(error) {
        console.log('Sign-in error', error);
      }
    );
  });

  element = document.getElementById('googleSignIn');
}



$("#idFormSignup").submit(function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    var url = form.attr('action');
    $(".loader").removeClass("hide");
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           dataType: 'json', 
           success: function(data)
           {
            console.log(data);
           var response =  JSON.parse(JSON.stringify(data));
           console.log(response.status);
           if (response.status==true) {
               $('#idFormSignup')[0].reset();
           }
               $("#infoMessage").html(response.message);
               $(".loader").addClass("hide");
           }
         });


});



</script>