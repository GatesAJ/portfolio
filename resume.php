




<?php

     if(isset($_POST['btnDownload'])){
        header("Location: https://gates-development.herokuapp.com/download.php");
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
    <div id="resume">
        <div id="downloadResume">
             <br/>
             <form method="POST">
                <div class="form-group" >
                    If you would like to download a copy of my Resume to have for your own records please click the Download Button.
                    <button id="btnDownload" name="btnDownload" class="btn btn-primary" style="margin-bottom: 1em;">Download Resume</button>
                </div>
            </form>
        </div>
<br/><br/>

        <div id="whoIAm">
            Andrew Gates<br/>
            35 Wright Ave, Truro, N.S.<br/>
            (902) 893-1301<br/>
            andrewgates@hotmail.com<br/>
        </div>

           <div id="resumeHeader"> <b>Skills:</b><br/><br/></div>
            <div id="resumeResponsibilities">
                Programming: Experience using: PHP, Java, ASP .Net, JavaScript, JQuery, Angular2, Android, MySQL, SQL, HTML5, Visual Basic, AJAX, JSON, JIRA, Node JS <br/>
                Other IT Skills: A basic knowledge and understanding of Networking<br/>
                Team oriented thinking: Well versed experience in team based environments, critical team thinking, as well as team based projects honed through 16 years from working in a military environment.<br/>
                Great in a leadership role: Have experience in leading teams to a specific goal and meeting that goal efficiently and effectively while maintaining team focus. Strong leader-ship skills developed through twelve years of working in a high stress environment<br/>
                Innovative: Experience in taking minimal information and producing the required re-sults.<br/>
                Adaptive to ever-changing situations: Experienced in an ever-changing environment where unexpected incidents occur frequently and able to adapt quickly.<br/><br/>
            </div>
            <div id="resumeHeader"> <b>Work Experience</b><br/><br/></div>
                <div style="background-color:#D3D3D3; max-width:37em; border: 2px solid #D3D3D3; border-radius: 3.125em 1.25em;">
                    <div id="resumeCompany" style="padding-left:3em;">Pay 4 Performance Marketing 2017 - 2018<br/></div>
                        <div id="resumeJobTitle" style="padding-left:3.5em;">PHP Developer<br/></div>
                        <div id="resumeResponsibilities" style="padding-left: 4em;">
                            Designed and Coded an Email Parser to search through emails in a mailbox to<br/>
                            pick out any relevant information to the company and enter it into the database.<br/>
                            Redesigned and Coded changes to the Company’s Employee site.<br/>
                            Worked on an app to send a fax using the Company’s dialing provider.<br/>
                        </div>
                </div><br/>
                <div id="resumeCompany" style="padding-left:3em;">Department of National Defense - Casual 2000 - present<br/></div>
                    <div id="resumeJobTitle" style="padding-left:3.5em;">Infantry Reserves<br/></div>
                    <div id="resumeResponsibilities" style="padding-left: 4em;">
                        Responsible for training of fellow soldiers<br/>
                        Works in a fast paced environment which has the ability to change constantly<br/>
                        Help foster self-confidence in other soldiers through evaluation<br/>
                        Maintained the high standards set by the CAF and DND<br/>
                    </div><br/>
                <div style="background-color:#D3D3D3; max-width:37em; border: 2px solid #D3D3D3; border-radius: 3.125em 1.25em;">
                    <div id="resumeCompany" style="padding-left:3em;">Premiere Van Lines 2014 – 2015<br/></div>
                        <div id="resumeJobTitle" style="padding-left:3.5em;">Driver Helper<br/></div>
                        <div id="resumeResponsibilities" style="padding-left: 4em;">
                            Responsible for packing Clients items<br/>
                            Responsible for loading the truck<br/>
                            Unload the truck<br/>
                            Unpack Clients items<br/>
                        </div>
                </div><br/>
                <div id="resumeCompany" style="padding-left:3em;">Securitas Canada 2012 - 2014<br/></div>
                    <div id="resumeJobTitle" style="padding-left:3.5em;">Security Guard<br/></div>
                    <div id="resumeResponsibilities" style="padding-left: 4em;">
                        Responsible for Technicians Safety<br/>
                        Responsible for areas that are under guard<br/>
                        Detect and prevent thefts and vandalism<br/>
                        Enforce regulations of establishment and maintain order<br/>
                        Ensure safety and emergency procedures are followed<br/>
                    </div><br/>
                <div style="background-color:#D3D3D3; max-width:37em; border: 2px solid #D3D3D3; border-radius: 3.125em 1.25em;">
                    <div id="resumeCompany" style="padding-left:3em;">Bartlett’s Plastic and Precision Machining 2007 - 2011<br/></div>
                        <div id="resumeJobTitle" style="padding-left:3.5em;">Warehouse Department Manager<br/></div>
                        <div id="resumeResponsibilities" style="padding-left: 4em;">
                            Responsible for organizing incoming and outgoing shipments.<br/>
                            Created Customs documents for international shipments<br/>
                            Trained team members on the use of warehouse machinery<br/>
                            Worked in a fast paced high stress environment<br/>
                            Responsible for order accuracy<br/>
                        </div>
                </div><br/>
             <div id="resumeHeader"><b>Education and Training</b><br/></div>
                <div id="resumeCompany"style="padding-left:3em;">Graduated IT Course Web Dev at NSCC Truro 2017<br/></div>
                <div id="resumeCompany"style="padding-left:3em;">CPR and First Aid Certificates, St. John’s Ambulance Current<br/></div>
                <div id="resumeCompany"style="padding-left:3em;">WHMIS Training Current<br/><br/></div>
            <div id="resumeHeader"><b>References</b><br/></div>
                <div id="resumeCompany"style="padding-left:3em;">Available Upon Request<br/></div>
    </div>
  
</div>
</body>

<footer>
    <div id="footerNavBar" >

<a href="index.php"> Home </a>| <a href="aboutMe.php"> About Me </a>| <a href="projects.php"> Projects </a>| <a href="resume.php"> Resume </a> | <a href="contactMe.php"> Contact Me </a> <br/>
       <span id="dev"> Gates Development</span>
       
    </div>
</footer>
</html>
