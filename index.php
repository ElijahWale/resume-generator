<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <title>Resume</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container-fluid">
        
        <div class="row d-flex">
            <div class="col-md-4 side-nav">
                    <div class="logo">
                            <img src="images/hng.png" alt="hng logo" class="logo_image">
                            <div class="links">
                                
                                <a href="https://zuri.team">https://zuri.team</a><br>
                                <a href="https://internship.zuri.team">https://internship.zuri.team</a><br>
                                <a href="https://training.zuri.team">https://training.zuri.team</a>
                
                            </div>
                    </div>
                  <div class="section my-4">
                    <div class="picture">
                        <img src="images/pic.jpg" alt="" class="img-resume">
                    </div>
                    <div class="details">
                        <h1 class="text-white bold py-3">Esan Olawale Elijah</h1>
                        <p class="details-info">Php Backend Developer</p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-signs"></i>
                                </div>
                                <div class="data">
                                    <h5>21 Irepodun Avenue Ijeshatedo Lagos</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="data">
                                <h5>+2348145536799</h5>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="data">
                                <h5>walexy730@gmail.com</h5>
                                </div>
                            </li>
                           
                        </ul>
                        <hr>
                        <div class="skills my-3">
                            <h1>Skills</h1>
                            <h4>HTML</h4>
                            <h4>CSS</h4>
                            <h4>JAVASCRIPT</h4>
                            <h4>VUEJS</h4>
                            <h4>PHP</h4>
                            <h4>LARAVEL</h4>
                            <h4>MYSQL</h4>
                        </div>
                    </div>
                  </div>  
            </div>
            <div class="col-md-8 main">
            <div class="section">
                        <div class="about">
                            <h2 class="bold">About Us</h2>
                            <p>Olawale is an enthusiastic and highly motivated individual who has a clear understanding of the role and responsibilities associated with being part of a team. I possess a broad range of technical, personal effectiveness and leadership skills.</p>
                        </div>
                        <hr class="main-div my-4">
                        <div class="experience">
                            <h2 class="bold">WORK EPERIENCE</h2>
                            <div class="resume_item resume_work">
                                <ul>
                                    <li>
                                    
                                    <div class="info">
                                            <p class="semi-bold">The Leadership Factory</p>
                                            <span class="small date">Aug 2020 - December 2020</span> 
                                        <p>improving existing website which was an e-learning platform.</p>
                                        <p>Meet with client to discuss project requirements and goals</p>
                                        </div>
                                    </li>
                                    <li>
                                        
                                        <div class="info">
                                            <p class="semi-bold">Wejapa Internship</p>
                                            <span class=" small date">July 2020 - Sept 2020</span>  
                                        <p>Maintaining an organized workflow using a project management tool(trello)</p>
                                        <p>Creating websites that are user-friendly, effective and appealing</p>
                                        </div>
                                    </li>
                                    <li>
                                    
                                    <div class="info">
                                            <p class="semi-bold">Hng Internship</p> <span class="small date">Sept 2019 - November 2019</span>
                                        <p>Leveraging Responsive web frameworks to complete deliverable ahead of time.</p>
                                        <p>Collaborating with designers to ensure designs were efficient and technically implemented</p>
                                        </div>
                                    </li>
                                    
                                </ul>
                        </div>
                        <hr class="main-div my-4">
                        <div class="resume_item resume_education">
                            <div class="title">
                                <p class="bold">Education</p>
                            </div>
                            <ul>
                                <li>
                                
                                <div class="info">
                                        <p class="semi-bold">Bachelor of Agriculture: Horticulture</p> <span class="small date">2013 - 2021</span>
                                    <p>Federal University of Agriculture Abeokuta, Nigeria</p>
                                    </div>
                                
                                </li>
                                <li>
                                     
                                    <div class="info">
                                        <p class="semi-bold">West Africa Senior School Certificate Examination</p><span class="small date">2010 - 2013</span> 
                                    <p>Newton College</p>
                                    </div>
                                </li>
                                
                                
                            </ul>
                        </div>
                        <hr class="main-div my-4">
                        <div class="resume_item resume_education">
                            <div class="title">
                                <p class="bold">Projects Completed & Achievements</p>
                            </div>
                            <ul>
                                <li>
                                    <p>Github Repository - Projects completed and collaboration with other team players are hosted on thsi platform</p>
                                    <i><a href="https://github.com/elijahwale">https://github.com/elijahwale</a></i>
                                </li>
                                <li>
                                
                            </ul>
                        </div>
                        
                    </div>
            </div>
            <hr class="main-div my-4">
            <div class="contact-form">
                <h3 class="text-center text-primary"><i>Feel Free to reach out to me Here😇</i>   </h3>
                <?php
                    // display error message
      
                        if(isset($_SESSION['error']) &&  !empty($_SESSION['error'])){
                            echo $_SESSION["error"];
                            unset($_SESSION["error"]);
                        }

                    //display success message

                        if(isset($_SESSION['success']) &&  !empty($_SESSION['success'])){
                            echo $_SESSION["success"];
                            unset($_SESSION["success"]);
                        }



                ?>
                <form action="formaction.php" method="POST">
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="fullname" placeholder="Enter your full Name">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email Address">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subject</label>
                    <input type="text" class="form-control" name="subject" id="exampleFormControlInput1" placeholder="Enter subject">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Message here..."></textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>
            
        </div>
        
       
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>