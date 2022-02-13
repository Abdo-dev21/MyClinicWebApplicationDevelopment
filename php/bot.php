<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style_bot.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<header>
<nav>
<div class="header">
<a href="home_page.php"><img src="../images/logo.png" alt="logo"/></a>

<ul> 
<li><a name="" id="" class="button" href="home_page.php" role="button">Home</a></li>
<li><a name="" id="" class="button" href="view_doctor.php" role="button">V. Doc.</a></li>
<li><a name="" id="" class="button" href=" about_us.php" role="button">Ab.Us</a></li>
<li><a name="" id="" class="button" href="contact_us.php" role="button">Con.Us</a></li>
<li><a name="" id="" class="button" href="register_patient.php" role="button">Reg.</a></li>
<li><a name="" id="" class="button" href="login_patient.php" role="button">Login Pat.</a></li>
<li><a name="" id="" class="button" href="login_admin.php" role="button">Login Adm.</a></li>
</ul>
</nav>
</div>
</header>

<body><
<div class="container">

    <div class="wrapper">
        <div class="title">daVinci assisant</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
	</div>

    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>

