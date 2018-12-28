<?php



?>


<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<body>

    <div id="navBar">  
       <a href="index.php"> Home </a>| <a href="aboutMe.php"> About Me </a>| <a href="projects.php"> Projects </a>| <a href="resume.php"> Resume </a> | <a href="contactMe.php"> Contact Me </a>     
    </div>
    
    <div id="parser">
        I have coded a script to go into a mailbox and extract all information from emails recieved that was pertanent to the Company. In the script I used RegEx <br/>
        &nbsp and IMAP in PHP. With IMAP I used imap_open, imap_mail_move, imap_headers, imap_body and imap_close. Using the IMAP functions I was able to pull <br/>
        &nbsp the info using RegEx as all the emails all had standard formats in which I was able to match up a RegEx to and extract the info. The info was then placed into <br/>
        &nbsp the Company's Database for later use. <br/>  
    </div>

    <div id="pageEdit">
        I was given a small project where I had to sift through thousands of lines of code, to debug an issue with regards to display issues for a Company Employee facing page only. I also had to<br/>
        &nbsp edit the page to include more info to be displayed to the employees. This was done by using SQL to gather the information and tables to display the new information.<br/><br/>
    </div>

    <div id="nscja">
        Assisted with the site www.nscja.ca. My team was tasked with reorganizing the site and adding more functionality to it. You can now see up coming events, apply for<br/>
        &nbsp membership and also book seats at events that are being held. This site was created using WordPress.<br/>
        <img src="pictures/nscja.PNG" alt="PlaceHolder" id="nscjaPic"> 
    </div>

    <div id="mobile">
        As part of a Android Mobile Development class at school I created a Choose Your Own Adventure App for the OS Lollipop. Although the story was short it was fun to code<br/>
        &nbsp and I have had a soft spot for mobile apps since. I also created an Insult Generator App so that those people that have a hard time coming up with an insult<br/>
        &nbsp on the spot could use it to their benefit. I have two versions of the Insult app as one is generic and bland and the second one will melt snowflakes<br/>
        &nbsp or at least trigger them. These two apps though were never published to the Play Store.<br/> <br/>
    </div>

   

</body>

<footer>
    <div id="footerNavBar" style="center">

       <a href="index.php"> Home </a>| <a href="aboutMe.php"> About Me </a>| <a href="projects.php"> Projects </a>| <a href="resume.php"> Resume </a> | <a href="contactMe.php"> Contact Me </a> <br/>
       <span id="dev"> Gates Development</span>
       
    </div>
</footer>
</html>
