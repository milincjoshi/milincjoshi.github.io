<html>
  <head>
      <!--JQuery Link-->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <!--Bootstrap-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<!--MDL Loader Link-->
      <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-pink.min.css">

      <!-- Material Design icon font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.red-blue.min.css" />

      <!--font link-->
      <link href='https://fonts.googleapis.com/css?family=PT+Sans:700,400' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
      <!--Bootstrap Links-->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

      <!--Google Tracking-->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-72228722-1', 'auto');
        ga('send', 'pageview');

      </script>
      

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

      <style>
      /*Height Links*/
      .height100{height:100%;min-height:100%;}

      body {font-family: 'PT Sans', sans-serif; position:relative;}


      /*Font Links*/
      .fontPTSans {font-family: 'PT Sans', sans-serif; }
      .fontLato{font-family: 'Lato', sans-serif;}
      
      /*Font*/
      .font1em{font-size: 1em;}
      .font1by2em{font-size: 1.5em;}
      .font2em{font-size: 2em;}
      .font3em{font-size: 3em;}

      /*border*/
      //.border{ border:solid 1px black;}
      /*Margin*/
    	.marginTop1 { margin-top:1%;}
      .marginTop5 { margin-top:5%;}
      .marginTop10 { margin-top:10%;}
      .marginTop15 { margin-top:15%;}

      /*Card Css*/
      .demo-card-square.mdl-card {
          width: 320px;
          height: 320px;
      }
      .demo-card-square > .mdl-card__title {
          color: #fff;
      }
      /*End Card Css*/

      /*Large Card*/
      .demo-card-wide.mdl-card {
          // width: 512px;
      }
      .demo-card-wide > .mdl-card__title {
        color: #fff;
        height: 176px;

        //background: url('images/trslogo.jpg') center / cover no-repeat;
        background: url('http://www.weebly.com/editor/uploads/2/6/9/1/26913164/custom_themes/491711962254056724/files/trslogo.jpg') center / cover no-repeat;
        background-size:contain;
      }
      .demo-card-wide > .mdl-card__menu {
        color: #fff;
      }
      /*End Large Card*/
      /*Event Card*/
      .demo-card-event.mdl-card {
        width: 256px;
        height: 256px;
        background: #3E4EB8;
      }
      .demo-card-event > .mdl-card__actions {
        border-color: rgba(255, 255, 255, 0.2);
      }
      .demo-card-event > .mdl-card__title {
        align-items: flex-start;
      }
      .demo-card-event > .mdl-card__title > h4 {
        margin-top: 0;
      }
      .demo-card-event > .mdl-card__actions {
        display: flex;
        box-sizing:border-box;
        align-items: center;
      }
      .demo-card-event > .mdl-card__title,
      .demo-card-event > .mdl-card__actions,
      .demo-card-event > .mdl-card__actions > .mdl-button {
        color: #fff;
      }
      /*Round Button CSS*/
      .round-button {
          display:block;
          width:100px;
          height:100px;
          border: 2px solid #f5f5f5;
          border-radius: 50%;
          color:#f5f5f5;
          text-align:center;
          text-decoration:none;
          background: #464646;
          box-shadow: 0 0 3px gray;
          font-size:15px;
      }
      /*End Round Button CSS*/
      hr {
          display: block;
          margin-top: 1em;
          margin-bottom: 1em;
          margin-left: auto;
          margin-right: auto;
          border-style: inset;
          border-width: 2px;

      }
      .circleDiv{
          width:250px;
          height:200px;
          //border-radius:10%;
          font-size:18px;
          color:#fff;
          //line-height:200px;
          //text-align:center;
          padding:2%;
          background:#000;
          margin-left: 1%;
          margin-top: 1%;
          background-color:grey;

          box-shadow: 10px 10px 10px #ccc;
          -webkit-box-shadow: 10px 10px 10px #ccc;
          -moz-box-shadow: 10px 10px 10px #ccc;
      }
      .circleSkills{
                  width:150px;
                  height:150px;
                  line-height:150px;
                  border-radius:50%;
                  font-size:1em;
                  color:#fff;
                  text-align:center;
                  background:#000
        }
        .hrClass{ margin-top:0%;}
        .socialMargin{ height:50px;width:50px;}
        .inlineDisplay{display: inline; margin-left: 5%;}
        #projects{height:100%; min-height: 100%;}
        #skills{height:100%; min-height: 100%;}
        
      @media screen and (max-width: 480px) {
          .height100{height:150%; min-height: 150%;}
          #projects{height:270%; min-height: 270%;}
          #skills{height:180%; min-height: 180%;}
          
          .font1by2em{ font-size: 1em;}
           .circleSkills{
                  width:100px;
                  height:100px;
                  line-height:100px;
                  border-radius:50%;
                  font-size:1em;
                  color:#fff;
                  text-align:center;
                  background:#000
        }
      }

        </style>
  </head>
  <body  data-spy="scroll" data-target=".navbar" data-offset="50" class="container">
    <!--Navbar-->
    <!--Navbar test-->
  	
  	<nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">

              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
  				  <span class="sr-only">Toggle navigation</span>
  				  <span class="icon-bar"></span>
  				  <span class="icon-bar"></span>
  				  <span class="icon-bar"></span>
              </button>
  				<a class="navbar-brand" href="#">Milin Joshi</a>
              </div>
              <div  class="collapse navbar-collapse navbar-right">
                  <ul class="nav navbar-nav">
                      <li><a href="#home">Home</a></li>
                      <li><a href="#info">Info</a></li>
                      <li><a href="#education">Education</a></li>
                      <li><a href="#experience">Experience</a></li>
                      <li><a href="#projects">Projects</a></li>
                      <li><a href="#skills">Skills</a></li>
                      <li><a href="#contact">Contact</a></li>
                      
                  </ul>

              </div>
          </div>
      </nav>
      <!--End Navbar-->

    <!--End navbar-->
    <div class="row">

        <!--Profile Image-->
        <section id="home" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border height100">
          <div class="marginTop15 col-lg-12 col-md-12 col-sm-12 col-xs-12"><!--div for creating margin-->
            <img class="img-circle col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-12 col-xs-12 " src="milinjoshi.jpg"/>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <strong class="font2em col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">Milin Joshi</strong>
              <p class="font1by2em">A PC devotee, constantly inquisitive for new advances.</p>
              <p class="font1by2em">I like to compose Code, construct Animations and create Games.</p>
              <p class="font1by2em">Looking for Internship-position opportunity as Software Developer</p>
              <p class="font1by2em">I drink Java. I can C#. I wear Bootstrap.</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border marginTop5"><!--Social Network Links-->
              <span class="col-lg-offset-2 col-md-offset-2 col-lg-1 col-md-1 col-sm-6 col-xs-6 border">
                <a target="_blank" href="https://www.facebook.com/milincjoshi"> 
                 <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border" src="icons/social-1_logo-facebook.svg"/>
                </a>
              </span>
              <span class="col-lg-1 col-md-1 col-sm-6 col-xs-6 border">
                <a target="_blank" href="https://github.com/milincjoshi"> 
                  <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border" src="icons/social-1_logo-github.svg"/>
                </a>
              </span>
              <span class="col-lg-1 col-md-1 col-sm-6 col-xs-6 border">
                <a target="_blank" href="https://plus.google.com/+milinjoshi">
                  <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border" src="icons/social-1_logo-google-plus.svg"/>
                </a>
              </span>
              <span class="col-lg-1 col-md-1 col-sm-6 col-xs-6 border">
                <a target="_blank" href="https://www.linkedin.com/in/milincjoshi">
                  <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border" src="icons/social-1_logo-linkedin.svg"/>
                </a>
              </span>
              <span class="col-lg-1 col-md-1 col-sm-6 col-xs-6 border">
                <a target="_blank" href="https://twitter.com/MilincJoshi">
                  <img class="ccol-lg-12 col-md-12 col-sm-12 col-xs-12 border" src="icons/social-1_logo-twitter.svg"/>
                </a>
              </span>
              <span class="col-lg-1 col-md-1 col-sm-6 col-xs-6 border">
                <a target="_blank" href="https://500px.com/milincjoshi">
                  <img class="ccol-lg-12 col-md-12 col-sm-12 col-xs-12 border" src="icons/social-1_logo-500px.svg"/>
                </a>
              </span>
              <span class="col-lg-1 col-md-1 col-sm-6 col-xs-6 border">
                <a target="_blank" href="https://www.instagram.com/milincjoshi/">
                  <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border" src="icons/social-1_logo-instagram.svg"/>
                </a>
              </span>
              <span class="col-lg-1 col-md-1 col-sm-6 col-xs-6 border">
                <a target="_blank" href="skype:milincjoshi?call">
                  <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border" src="icons/social-1_logo-skype.svg"/>
                </a>
              </span>
            </div><!--End Social Network Links-->
          </div><!--End div for margin effect-->
        </section>

<hr>
        <!--Info-->
        <section id="info" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border height100">
          <h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center font2em border">Info</h3>
          <p class="font1by2em col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <span class=" col-lg-12  col-md-12 col-sm-12 col-xs-12 border marginTop1">
              Well, It's an advancing world, but it's the only one we got. I guarantee you that everyday developers are needed to build softwares.
            </span>
            <br>
            <span class="col-lg-12  col-md-12 col-sm-12 col-xs-12 border marginTop1">
              I have a philosphy: Knowing to code is like having a superpower
            </span>
            <br>
            <span class="col-lg-12  col-md-12 col-sm-12 col-xs-12 border marginTop1">
              Yeah, I can code.
            </span>
            <br>
            <span class="col-lg-12  col-md-12 col-sm-12 col-xs-12 border marginTop1">
              I've been called many things. Developer is one of them.
            </span>
            <br>
            <span class="col-lg-12  col-md-12 col-sm-12 col-xs-12 border marginTop1">
              Am I making you want to hire me?
            </span>
            <br>
            <span class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border marginTop1">
              Here's a little Holiday greeting I've been wanting to get an Internship. My name is Milin Joshi and I want it. I know you've got a vacany at your firm. I know you are looking for an Intern. here's my LinkedIn address: https://www.linkedin.com/in/milincjoshi I'll leave the profile public. That's what you wanted, right?
            </span>
            <br>
            <span class="col-lg-12 border marginTop1">
              A Guy who codes. Take that off, what am I? A Designer, Teacher, Your Chess-mate, Photographer, Dancer, Comics Reader, one who has Dual nature of learning and teaching Physics.
            </span>
          </p>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 font1by2em border text-center">
              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Birthdate :
                January 21, 1992
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Cellphone :
                323-203-2119
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                Email :
                milincjoshi@gmail.com
              </div>
            
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="resume_icon.jpg"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="linkedin.png"/>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="github.png"/>
                </div>

              </div>
            </div>
          </div>
        </section>
<hr>
        <!--Education-->
        <section id="education" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border height100">
            <h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center font2em border">Education</h3>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              
              <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-8 col-xs-8">
                <img class="col-lg-12 col-sm-12 col-md-12 col-xs-12" src="college.png" />
              </div>
              <div class="col-lg-7 col-md-7 col-sm-9 col-xs-8 font1by2em  marginTop5">
                Masters in Computer Science <br> California State University, Los Angeles, USA <br> 2015 - 2017
              </div>

            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 marginTop5">
              
              <div class="col-lg-3 col-lg-offset-2 col-md-3 col-md-offset-2 col-sm-8 col-xs-8">
                <img class="col-lg-12 col-sm-12 col-md-12 col-xs-12 img-circle" src="graduation.png" />
              </div>
              <div class="col-lg-7 col-md-7 col-sm-9 col-xs-8 font1by2em marginTop5">
                Bachelors in Computer Engineering <br> Gujarat Technological University, India <br> C U Shah College of Engineering and Technology <br> 2009 - 2013
              </div>

            </div>
        </section>
<hr>
        <!--Experience-->
        <section id="experience" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border height100">
          <h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center font2em border">Experience</h3>
          <!--Job1-->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 font1by2em">
            <div class="col-lg-3 col-lg-offset-3 col-md-3 col-sm-12 col-xs-12">Research Assistant</div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">Feb 2015 - May 2015</div>
            <div class="col-lg-9 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12">Lamar University, Texas, USA</div>
            <div class="col-lg-6 col-lg-offset-3 font1em">
              <p>
                Developed Application using Unity, C#<br>
                Ported Application to Oculus Rift, Web, Desktop<br>
                Lead Developer for 3D Navigation<br>
                Designed Game Logic<br>
                Built 3D Models using Autodesk Maya.
              
              </p>
              
            </div>
            </div>
            <!--Job1-->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 font1by2em marginTop5">
            <div class="col-lg-3 col-lg-offset-3 col-md-3 col-sm-12 col-xs-12">Web Developer Intern</div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">June 2012 - April 2013</div>
            <div class="col-lg-9 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12">Perfetto Solutions, Ahmedabad, India</div>
            <div class="col-lg-6 col-lg-offset-3 font1em">
              <p>
              Frontend: HTML, ASP.NET 3.5 Framework<br>
              Backend: SQL Server 2008<br>
              A web application for counseling students about career opportunities. 
              Inputs:- Interests, Aptitude and Language Skills. 
              Process:- MCQ Tests.
              Output:- Relative Universities for Bachelors as well as Masters Program.
              </p>
              
            </div>
            </div>
        </section>
<hr>
        <!--Projects-->
       <section id="projects" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border">
           <h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center font2em border">Projects</h3>
              <!--Projects-->
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 height100'>
                  <div class='col-lg-12' style='margin-left:0%;'>
                      <!--Metamorphosis-->
                      <div class='col-lg-1 circleDiv'>
                          <span>Metamorphosis</span><hr class='hrClass'>
                            <div class='hrClass' style="font-size:14px; margin-top:-2%;">
                                <span>Language Translation</span><br>
                                <span>Text-To-Speech Translation</span><br>
                                <span>Web App using IBM Watson Services</span>
                            </div>
                       </div>
                      <!--End Metamorphosis-->
                      <!--Student Info System-->
                      <div class='col-lg-1 circleDiv'>
                            <span>Student Information System</span><hr class='hrClass'>
                             <div style="font-size:14px;">
                                <span>ASP.Net, C#, MS SQL Server, Bootstrap</span><br>
                                <span>Web app for storing Student Data.</span><br>
                            </div>
                      </div>
                      <!--End Student Info System-->
                      <!--Nerv-->
                      <div class='col-lg-1 circleDiv'>
                            <span>Project Nerv</span><hr class='hrClass'>
                            <div style="font-size:14px;">
                                <span>Lead Developer, Team Lead </span><br>
                                <span>Unity, Autodesk Maya, C#</span><br>
                                <span>3D Navigation</span><br>
                            </div>
                      </div>
                      <!--End Nerv-->
                      <!--GOT-->
                      <div class='col-lg-1 circleDiv'>
                            <span>Game of Thrones</span><hr class='hrClass'>
                            <div style="font-size:14px;">
                                <span>A Windows Phone 8 app</span><br>
                                <span>Info App made for Game of Thrones</span><br>
                                <span>Multi-Lingual.</span><br>
                                <span>MVVM</span><br>
                            </div>
                      </div>
                      <!--End GOT-->
                      <!--TRS-->
                      <div class='col-lg-1 circleDiv'>
                           <span>Transformer Repair System</span><hr class='hrClass'>
                            <div style="font-size:14px;">
                                <span>Windows Forms, C#, Desktop App.</span><br />
                                <span>Lead Developer, Programmer</span> <br />
                                <span>Led a team of 5 members</span><br />
                <span>Sold application to 100 companies in 2 days.</span><br/>
                            </div>
                      </div>
                      <!--End TRS-->
                      <!--Rachana-->
                      <div class='col-lg-1 circleDiv'>
                           <span>Rachana Constructions</span><hr class='hrClass'>
                            <div style="font-size:14px;">
                                <span>A portfolio Website for Real Estate Company.</span><br />
                                <span>Bootstrap, ASP.NET with C#, MS SQL Server 2010 </span> <br />
                            </div>
                      </div>
                      <!--End Rachana-->
                       <!--Rachana-->
                      <div class='col-lg-1 circleDiv'>
                           <span>Royal Textiles ERP</span><hr class='hrClass'>
                            <div style="font-size:14px;">
                                <span>ASP.NET 3.5 with C#, SQL Server 2008</span><br />
                                <span>Managing everyday finance, product data and labour data. </span> <br />
                            </div>
                      </div>
                      <!--End Rachana-->
                      <!--CGS-->
                      <div class='col-lg-1 circleDiv'>
                           <span>Career Guidance System</span><hr class='hrClass'>
                            <div class='hrClass' style="font-size:14px;">
                                <span>HTML, ASP.NET 3.5 Framework with C#, SQL Server 2008</span><br />
                                <span>A website for counseling students about choosing career opportunities.  </span> <br />
                            </div>
                      </div>
                      <!--End CGS-->
                  </div>
            </div>
            <!--End Projects-->

        </section>
<hr>
        <!--Skills-->
       <section id="skills" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border">
           <h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center font2em border">Skills</h3>
         
          <!--Skills-->
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 height100'>
                <div class='col-lg-12  col-md-12 col-sm-12 col-xs-12  marginTop5' style="margin-left:5%;">
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(255, 87, 34);' >HTML</div></a>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(244, 67, 54);'>CSS</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(156, 39, 176);'>Javascript</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(103, 58, 183);'>Bootstrap</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(33, 150, 200);'>MDL</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(3, 169, 244);'>C</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(63, 81, 181);'>C++</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(233, 30, 99);'>Java</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(0, 188, 212);'>C#</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(0, 150, 136);'>Python</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(76, 175, 80);'>SQL</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(139, 195, 74);'>ASP.NET</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(205, 220, 57);'>JSP</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(255, 200, 59);'>Unity</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(255, 193, 7);'>Autodesk Maya</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(255, 152, 0);'>Oculus Rift</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(121, 85, 72);'>Servlets</div>
                    <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 circleSkills' style='background-color:rgb(96, 125, 139);'>AI coming soon..</div>
                  </div>
            </div>
            <!--End Skills-->

        </section>

        <footer>
          
        </footer>
        <!--Contact me
        <section id="contact" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 border height100">
          <h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center font2em border">Contact</h3>
         
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 height100">
            <input class="form-control marginTop5" placeholder="Name" name="name"/>
            <input class="form-control marginTop5"  placeholder="Email" name="email"/>
            <input class="form-control marginTop5"  placeholder="Subject" name="subject"/>
            <textarea class="form-control marginTop5" placeholder="Message" name="message" rows="4"></textarea>
            <button class="btn btn-primary text-center center-block marginTop5">Send</button>
          </div>
        </section>
        -->
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
    </div>
  </body>
</html>
