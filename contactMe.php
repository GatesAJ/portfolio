

<?php

    if(isset($_POST['btnDownload'])){
        $to      = 'andrewgates@hotmail.com';
        $subject = 'Email from Portfolio';
        $message = 'hello';
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }
?> 


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type = "text/javascript"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Gates Development</title>
</head>
<body>
    <div id="navBar">  
       <a href="index.php"> Home </a>| <a href="aboutMe.php"> About Me </a>| <a href="projects.php"> Projects </a>| <a href="resume.php"> Resume </a> | <a href="contactMe.php"> Contact Me </a>     
    </div>


    <div id="emailForm">
        <form class="form-horizontal" action="mailto:andrewgates@hotmail.com.com" method="POST">
            <fieldset>

            <!-- Form Name -->
            <legend></legend>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="txtName">Name</label>  
            <div class="col-md-4">
            <input id="txtName" name="txtName" type="text" placeholder="" class="form-control input-md" required="" onpaste="return false">
                
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="txtEmailAddress">Email Address</label>  
            <div class="col-md-4">
            <input id="txtEmailAddress" name="txtEmailAddress" type="text" placeholder="" class="form-control input-md" required="" onpaste="return false">
                
            </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="txtEmail">Email</label>
            <div class="col-md-4">                     
                <textarea class="form-control" id="txtEmail" name="txtEmail" onpaste="return false"></textarea>
            </div>
            </div>

            <!-- Button -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="txtSubmit"></label>
            <div class="col-md-4">
                <button id="txtSubmit" name="txtSubmit" class="btn btn-primary">Submit</button>
            </div>
            </div>

            </fieldset>


        </form>
    </div>


</body>

<footer>
    <div id="footerNavBar" style="center">

       <a href="index.php"> Home </a>| <a href="aboutMe.php"> About Me </a>| <a href="projects.php"> Projects </a>| <a href="resume.php"> Resume </a> | <a href="contactMe.php"> Contact Me </a> <br/>
       <span id="dev"> Gates Development</span>
       
    </div>
</footer>
</html>
