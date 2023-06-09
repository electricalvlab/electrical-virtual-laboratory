<?php
  require('connection.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
  <title>ELECTRICAL VLAB</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
  <link rel="stylesheet" href="src/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js'></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="js/script.js"></script>
  <script src="js/lab-section.js"></script>
  <script src="assets\EXPT-4\script.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body> 
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav_bar">
      <div class="container-fluid">
        <div href="#" class="navbar-brand">
          <img src="src\nav-logo.png" width="70" alt="" class="d-inline-block align-middle">
          <a class="text font-weight-bold" id="items-1" href="#">eV LAB</a>
          <a class="text-uppercase font-weight-bold" id="items" href="index.php#about-us">ABOUT US</a>
        </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav navbar-float" id="nav-items">
          <li class="nav-item" id="nav-home"><a class="nav-link" href="index.php">HOME</a></li> 
          <li class="nav-item" id="nav-labs"><a class="nav-link" href="be.php">eV&nbsp;LABS</a></li>

          <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
              // echo "Welcome, $_SESSION[name] - <a href='logout.php'>LOGOUT</a>";\
              echo "<li class='nav-item' id='nav-log'><a class='nav-link profile_btn' href='profile.php'>PROFILE</a></li>
              <li class='nav-item' id='nav-sign'><a class='nav-link logout_btn' href='logout.php'>LOGOUT</a></li>";
            }
            else{
              echo "<li class='nav-item' id='nav-log'><a class='nav-link' id='cust_btn'>LOG&nbsp;IN</a></li>
              <li class='nav-item' id='nav-sign'><a class='nav-link' id='cust_btn1'>SIGN&nbsp;UP</a></li>";
            }
          ?>
          <script src="js\login_register.js"></script>
          <!-- <li class="nav-item" id="nav-log"><a class="nav-link" id="cust_btn">LOG&nbsp;IN</a></li>
          <li class="nav-item" id="nav-sign"><a class="nav-link" id="cust_btn1">SIGN&nbsp;UP</a></li> -->
        </ul>


        <!-- <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Log In
          </a>
        
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div> -->
      </div>
      </div>
    </nav>
  </header>
    <div class="exp-bg" style="overflow:hidden;">
        <h1 class="exp-heading">Verification of Thevenin's Theorem</h1>
    </div>

    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-body">
            <div class="off-canvas-close">
                <button id="close-btn" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="btn-group-vertical" id="theory-btn1">
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_intro_body()">INTRODUCTION</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_ob_body()">OBJECTIVE</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_app_body()">APPARATUS</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_pre_body()">PRE-LAB</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_theory_body()">THEORY</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_pr_body()">PROCEDURE</button>
                    <button class="btn btn-secondary" id="side-btn"onclick="exp_sim_body()">SIMULATOR</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_post_body()">POST-LAB</button>
                    <button class="btn btn-secondary" id="side-btn"onclick="exp_vd_body()">VIDEO LECTURE</button>
                    <button class="btn btn-secondary" id="side-btn" onclick="exp_load_body()">DOWNLOAD</button>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="theory-cont" style="overflow:hidden;">
            <div id="toolbox" class="justify-content-center">
                <div class="btn-group-vertical" id="theory-btn">
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_intro_body()">INTRODUCTION</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_ob_body()">OBJECTIVE</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_app_body()">APPARATUS</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_pre_body()">PRE-LAB</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_theory_body()">THEORY</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_pr_body()">PROCEDURE</button>
                        <button class="btn btn-secondary" id="side-btn"onclick="exp_sim_body()">SIMULATOR</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_post_body()">POST-LAB</button>
                        <button class="btn btn-secondary" id="side-btn"onclick="exp_vd_body()">VIDEO LECTURE</button>
                        <button class="btn btn-secondary" id="side-btn" onclick="exp_load_body()">DOWNLOAD</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9" id="side-cont">
            <div class="hidden-btn1"><span class="material-symbols-outlined" id="hidden-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                menu
                </span>
            </div>
<!-----------INTRODUCTION--------------->            
<div id="diagram">
    <h4 class="exp-head">INTRODUCTION</h4>
    <hr>
    <div class = "container-fluid">
        <div class = "row row-height">
          <div class = "col left1">
            Thevenin's theorem is a fundamental concept in electrical circuit analysis that states any 
            linear electrical network can be replaced with an equivalent circuit consisting of a single 
            voltage source and a single series resistor. The voltage source, known as the Thevenin voltage, 
            is equal to the open-circuit voltage at the terminals of the network, while the series resistor, 
            known as the Thevenin resistance, is equal to the ratio of the open-circuit voltage to the short-circuit 
            current at the terminals of the network. This equivalent circuit can be used to analyze the behavior of the 
            original network in various operating conditions. Thevenin's theorem is widely used in electronic design and 
            troubleshooting, and is an important tool for understanding the behavior of complex circuits.
        </div>
        </div>
    </div>
</div>
<!----------------------OBJECTIVE----------------------->            
            <div id="diagram1">
                <h4 class="exp-head">OBJECTIVE</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left2" style="text-align:justify">
                        To verify Thevenin's Theorem
                      </div>
                    </div>
                </div>
            </div>
<!--------------------APPARATUS----------------------->            
            <div id="diagram2">
              <h4 class="exp-head">APPARATUS REQUIRED</h4>
              <hr>
              <div id="table-mob" class = "container-fluid">
                  <div class = "row row-height">
                    <div class = "col left3" style="text-align:justify">
                      <table>
                        <tr>
                            <th>SL.NO</th>
                            <th>EQUIPMENTS</th>
                            <th>RANGE</th>
                            <th>TYPE</th>
                            <th>QUANTITY</th>
                            <th>3D VIEWER</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Resistor</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <button class="btn btn-primary"><a href="https://resistor-one.vercel.app/" style="text-decoration: none; color: white;">Click Here</button> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>DC Power Supply</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <button class="btn btn-primary"><a href="https://dc-power-supply.vercel.app/" style="text-decoration: none; color: white;">Click Here</button> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Voltmeter</td>
                            <td>(0-600)V</td>
                            <td>MC</td>
                            <td></td>
                            <td> <button class="btn btn-primary"><a href="https://voltmeter.vercel.app/" style="text-decoration: none; color: white;">Click Here</button> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ammeter</td>
                            <td>(0-10A)</td>
                            <td>MI</td>
                            <td></td>
                            <td> <button class="btn btn-primary"><a href="https://ammeter.vercel.app/" style="text-decoration: none; color: white;">Click Here</button> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Wires</td>
                            <td></td>
                            <td>Copper</td>
                            <td></td>
                            <td> <button class="btn btn-primary"><a href="https://wire-xi.vercel.app/" style="text-decoration: none; color: white;">Click Here</button> </td>
                        </tr>
                    </table>
                    </div>
                  </div>
              </div>
            </div>
<!-----------PRE-LAB--------------->            
            <div id="diagram3">
                <h4 class="exp-head">PRE-LAB</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left4"style="text-align:justify">
                        <p>Read the lab over and answer the following questions. <b>(Refer to theory for circuit diagrams)</b></p>
                        <b><ol>
                            <li>The output of the circuits in Figures 1.1 and 2.1 is predicted in equations 1.1, 1.2, 1.3, 1.4, 2.1, 2.2, 2.3, 2.4, and 2.5 respectively.</li>
                            <ul>
                                <li>Calculate the load current 'I<sub>L</sub>' in Figure 1.1 in the same format or students can use any circuit analysis method.</li>
                                <li>Calculate the load current 'I<sub>L</sub>' in Figure 2.1 in the same format or students can use any circuit analysis method.</li>
                            </ul>
                        </ol></b>
                      </div>
                    </div>
                </div>
            </div>
<!-----------THEORY--------------->            
            <div id="diagram4">
                <h4 class="exp-head">THEORY</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left5" style="text-align:justify">
                        <h1>Thevenin Theorem: :</h1>
                        <p>According to Thevenin's theorem any linear<span style="color:red;">*</span> bilateral<span style="color:red;">*</span> network irrespective of its complexity, can be simplified into a Thevenin's equivalent circuit consisting of a Thevenin's Voltage V<sub>Th</sub> in series with the Thevenin's equivalent resistance R<sub>Th</sub> connected to a load resistor R<sub>L</sub>.</p>
                        <br>
                        <div class="container-fluid">
                            <div class="row" style="display: flex; flex-direction: row;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th1.png">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Thevenin_s Theory.png" style="margin-top: -1.5vw;">
                            </div>
                          </div>
                        <h4>Steps to solve :</h4>
                        <ol>
                            <li>Identify the load resistor R<sub>L</sub>.</li>
                            <li>
                                <ul>
                                    <li>Remove the load resistor and replace all the active sources by their internal resistances.</li>
                                    <li>Calculate the equivalent resistance across the open ends. This will be the equivalent resistance R<sub>th</sub>.</li>
                                </ul>
                            </li>
                            <li>Again Remove the load resistor and calculate the open circuit potential across two open ends. This will be thevenin's voltage V<sub>th</sub>.</li>
                            <li>
                                <ul>
                                    <li>Draw the Thevenin's equivalent circuit for given network.</li>
                                    <li>Calculate the load current I<sub>L</sub> by using the formula
                                        <br>
                                        $${I_{L=}\frac{V_{Th}}{R_{Th}+R_L}}$$
                                    </li>
                                </ul>
                            </li>
                        </ol>
<!----------------TEST SYSTEM-1----------------------->                        
                        <div>
                          <h1>Test System-1</h1>
                          <br>
                          <h5><b>Thevenin's theorem with dependent source :-</b></h5>
                          <br>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th2.png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.1.1: Circuit diagram for Thevenin's circuit]</p>
                          <br>
                          <br>
                          <p><b>Step 1:</b> calculate the load current I<sub>L</sub> from the main circuit.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th3.png">
                            </div>
                          </div>
                          <br>
                          <p style="text-align: center;">[Fig.1.2: Circuit with source V<sub>s</sub> and load R<sub>L</sub>]</p>
                          <br>
                          <span style="font-size: 1rem;">
                              <p style="float:right;">(1.1)</p>
                              $$ {I_L= \frac{V_S-V_X}{R_3+R_L}} $$                             
                          </span>
                          <br>
                          <br>
                          <p><b>Step 2:</b> Calculate R<sub>Th</sub> by replacing Voltage source V<sub>s</sub> by short circuit, removing R<sub>L</sub> and connecting V<sub>DC</sub> and finding its corresponding I<sub>DC</sub> and dependent source remains as it is.</p>                            
                          <br>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th4.png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.1.3: Circuit with V<sub>s</sub> and R<sub>L</sub> removed.]</p>
                          <br>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(1.2)</p>
                            $$ {R_{Th}= \frac{V_{DC}}{I_{DC}}} $$                             
                          </span>
                          <p><b>Step 3:</b> Calculate V<sub>Th</sub> by removing load resistance R<sub>L</sub> with an open circuit.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th5.png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.1.4: Circuit with R<sub>L</sub> removed]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(1.3)</p>
                            $$ {V_{Th}=V_S-V_X} $$
                          </span>
                          <br>
                          <br>
                          <p><b>Step 4:</b> Redraw circuit as per Thevenin's Equivalent Circuit.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th6.png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.1.5: Thevenin's Equivalent Circuit]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(1.4)</p>
                            $$ {I_{L=}\frac{V_{Th}}{R_{Th}+R_L}} $$                             
                          </span>
                          <br>
                        </div>
<!----------------TEST SYSTEM-2----------------------->                        
                        <div>
                          <h1>Test System-2</h1>
                          <br>
                          <h5><b>Thevenin's theorem without dependent source :-</b></h5>
                          <br>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th7.png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig. 2.1: Circuit diagram for Thevenin's Theorem]</p>
                          <br>
                          <br>
                          <p><b>Step 1:</b> Calculate the load current I<sub>L</sub> from the main circuit.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th8.png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.2.2: Circuit with source V<sub>s</sub> and load R<sub>L</sub>]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(2.1)</p>
                            $$ {I_L= \frac{V_S\times R_2}{R_1R_2+(R_3+R_L)(R_1+R_2)}} $$
                          </span>
                          <br>
                          <br>
                          <p><b>Step 2:</b>  Calculate R<sub>Th</sub> by replacing Voltage source  V<sub>s</sub> by short circuit, removing R<sub>L</sub> and connecting a constant 1v voltage source and finding its corresponding I<sub>DC</sub>.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th9.png">
                            </div>
                          </div>
                          <br>
                          <br>
                          <p style="text-align: center;">[Fig.2.3: Circuit with V<sub>s</sub> and R<sub>L</sub> removed.]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(2.2)</p>
                            $$ {I_{DC\ }=\ \frac{R_1+R_2}{R_1R_2+R_2R_3+R_1R_3}} $$                   
                          </span>
                          <br>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(2.3)</p>
                            $$ {R_{Th}= \frac{R_1R_2+R_2R_3+R_1R_3}{R_1{+R}_2}} $$                   
                          </span>
                          <br>
                          <br>
                          <p><b>Step 3:</b> Calculate V<sub>Th</sub> by removing load resistance R<sub>L</sub> with an open circuit.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th10.png">
                            </div>
                          </div>
                          <br>
                          <br> 
                          <p style="text-align: center;">[Fig.2.4: circuit diagram with R<sub>L</sub> removed]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            <p style="float:right;">(2.4)</p>
                            $$ {V_{Th}=\frac{V_S\times R_2}{R_1+R_2}} $$                          
                          </span>
                          <br>
                          <br>
                          <p><b>Step 4:</b>Redraw circuit as per Thevenin's Equivalent Circuit.</p>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th11.png">
                            </div>
                          </div>
                          <br>
                          <br> 
                          <p style="text-align: center;">[Fig.2.5: Thevenin's Equivalent Circuit]</p>
                          <br>
                          <span style="font-size: 1rem;">
                            $$ {I_{L=}\frac{V_{Th}}{R_{Th}+R_L}} $$                             
                          </span>
                        </div>
                          <br>
                          <br>

<!-----------------------NOTE--------------------->
                          <div class="note">
                            <h2>Note :</h2>
                            <p>A <span style="color:red;">linear circuit</span> is that whose output is linearly related (or directly proportional) to its input.</p>
                            <p>A <span style="color:red;">bilateral circuit</span> is that which exhibits its properties equally in either direction.</p>
                            <p>A <span style="color:red;">short circuit</span> is a circuit element with resistance approaching zero.</p>
                            <p>An <span style="color:red;">open circuit</span> is a current element with resistance approaching infinity.</p>
                          </div>
                          <br>
                          <br>
                        </div>
                    </div>
                </div>
            </div>
<!-----------PROCEDURE--------------->            
            <div id="diagram5">
                <h4 class="exp-head">PROCEDURE</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left6" style="text-align:justify">
                        <p>Read the procedures given below before performing this virtual experiment. 
                          Don't Switch of the power supply throughout the experiment, otherwise the 
                          performed simulation data will be lost. It is mandatory to submit the attendance 
                          form after performing the experiment to keep the track of the experiments performed.
                        </p>
                        <ol>
                            <li>Switch on the power supply switch on the control panel.</li>
                            <li>Click Stage 1 to Find Load Current (I<sub>L</sub>) across load resistance (R<sub>L</sub>).</li>

                            <li>Enter the source voltage (V<sub>S</sub>), Resistance 1 (R<sub>1</sub>), Resistance 2 (R<sub>2</sub>), Resistance 3 (R<sub>3</sub>) and Load Resistance (R<sub>L</sub>).</li>

                            <li>Click the simulate button to simulate stage 1.
                              <br>
                              (<b>NB :-</b> The values of R<sub>1</sub>, R<sub>2</sub> & R<sub>3</sub> will get fixed after clicking simulate button on stage 1. These values will remain same throughout the experiment. This fields can be edited after clicking the reset button present in the control panel.)</li>

                            <li>After clicking the simulate button on stage 1, the value of I<sub>L</sub> across R<sub>L</sub> will be displayed on the ammeter and at the same time the values will also get reflected in the tabulation section.</li>

                            <li>Next, click on stage 2 to find Thevenin Resistance (R<sub>TH</sub>).</li>

                            <li>Click simulate button to simulate stage 2.</li>

                            <li>After clicking the simulate button on stage 2, the value of R<sub>TH</sub> will be displayed on the ammeter and at the same time the value will also get reflected in the tabulation section.</li>

                            <li>Next, click on stage 3 to find Thevenin Voltage (V<sub>TH</sub>).</li>

                            <li>Click simulate button to simulate stage 3.</li>

                            <li>After clicking the simulate button on stage 3, the value of V<sub>TH</sub> will be displayed on the voltmeter and at the same time the value will also get reflected in the tabulation section.</li>

                            <li>Next, click on stage 4 to find Load Current (I<sub>L</sub>) from Thevenin's equivalent circuit.</li>

                            <li>Click simulate button to simulate stage 4.</li>

                            <li>After clicking the simulate button on stage 4, the value of I<sub>L</sub> will be displayed on the ammeter and at the same time the values will also get reflected in the tabulation section.
                              <br>
                              If the value of I<sub>L</sub> from stage 4 is found to be identical with the value of I<sub>L</sub> from stage 1, then Thevenin's theorem is verified.
                            </li>

                            <li>Go back to stage 1, change the values of V<sub>S</sub> and R<sub>L</sub> and then repeat step 4 to step 14 upto 5 times to activate stage 5.
                            <br>
                            (<b>NB :-</b> Take different values of V<sub>S</sub> and R<sub>L</sub> all the 5 times during simulation for proper result.)
                            </li>

                            <li>After activation of stage 5, click plot button on stage 5 to plot the source voltage (V<sub>S</sub>) versus Thevenin voltage (V<sub>TH</sub>) characteristics.</li>

                            <li>After clicking plot button, the output will be displayed on the plot area present in the simulator.</li>

                            <li>After plotting, click next button present in the bottom of the simulator to fill the attendance form and to download the results of the experiment performed along with lab manual in portable document format.</li>
                        </ol>
                      </div>
                    </div>
                </div>
            </div>
<!-----------------SIMULATOR----------------->            
            <div id="diagram6">
                <h4 class="exp-head">SIMULATOR</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left7">
                        <h4>Test System-1</h4>
                      <p>Verification of Thevenin's Theorem using Dependent source</p>
                    <a href="simulator\THEVENIN\EXPT-4_2\index.html" target="blank"><button class="btn btn-primary">Click Here</button></a>
                    <br>
                    <br>
                    <h4>Test System-2</h4>
                    <p>Verification of Thevenin's Theorem using Independent source</p>
                    <a href="simulator\THEVENIN\EXPT-4_1\index.html" target="blank"><button class="btn btn-primary">Click Here</button></a>
                </div>
                </div>
                </div>
            </div>
<!-----------POST-LAB--------------->            
            <div id="diagram7">
                <h4 class="exp-head">POST-LAB</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left8" style="text-align:justify">

                        <ol style="font-weight: bold;">
                        <!------Ques 1------->  
                          <li>What is linearity and what are two properties it describes?</li>
                          <div id="answer-area">
                            <div class="form-group blue-border-focus">
                              <textarea class="form-control" id="thtext-area1" rows="5"></textarea>
                            </div>
                          </div>
                          <div class="container-fluid" id="thans1">
                            <div class="form-group blue-border-focus">
                            <p><b>Ans:</b> A linear circuit is one whose output is linear relates (or directly proportional) to its input.</p>
                            <ul>
                              <li>The property is a combination is a combination of both homogeneity (scaling) property and Additive property.</li>
                              <li>Homogeneity property says if input is multiplied by a constant, then the output is multiplied by the same constant.</li>
                              <li>Additive property says that response to a sum of input is the sum of responses to each input applied separately.</li>
                            </ul>
                          </div>
                          </div>
                        <!------Ques 2------->
                          <li>Why in the calculation of thevenin's resistance all the independent sources are turned off?</li>
                          <div id="answer-area">
                            <div class="form-group blue-border-focus">
                              <textarea class="form-control" id="thtext-area2" rows="5"></textarea>
                            </div>
                          </div>
                          <div class="container-fluid" id="thans2">
                            <div class="form-group blue-border-focus">
                            <p>Ans: 	In order to prove the equivalent circuit and original circuit as equal, the independent sources are turned off, so that exact calculations of R<sub>th</sub> is possible.</p>
                          </div>
                          </div>
                        <!------Ques 3------->
                          <li>In circuit consisting dependent as well as independent source, why dependent source are not turned off in calculation of R<sub>TH</sub> ?</li>
                          <div id="answer-area">
                            <div class="form-group blue-border-focus">
                              <textarea class="form-control" id="thtext-area3" rows="5"></textarea>
                            </div>
                          </div>
                          <div id="answer-area">
                            <div class="form-group blue-border-focus">
                              <textarea class="form-control" id="thans3" rows="5" readonly></textarea>
                            </div>
                          </div>
                        <!------Ques 4------->
                          <li>When and why the values of R<sub>TH</sub> is negative? What is the significance of it?</li>
                          <div id="answer-area">
                            <div class="form-group blue-border-focus">
                              <textarea class="form-control" id="thtext-area4" rows="5"></textarea>
                            </div>
                          </div>
                          <div class="container-fluid" id="thans4">
                            <div class="form-group blue-border-focus">
                            <p>Ans: Circuit containing only dependent sources, the value of R<sub>Th</sub> is negative.
                              The negative value of R<sub>Th</sub> conveys us that the circuit is supplying power i.e. the dependent source supplies the power as resistor is a passive element.
                            </p>
                          </div>
                          </div>
                        <!------Ques 5------->
                          <li>What is the main advantage of using thevenin's theorem?</li>
                          <div id="answer-area">
                            <div class="form-group blue-border-focus">
                              <textarea class="form-control" id="thtext-area5" rows="5"></textarea>
                            </div>
                          </div>
                          <div id="answer-area">
                            <div class="form-group blue-border-focus">
                              <textarea class="form-control" id="thans5" rows="5" readonly></textarea>
                            </div>
                          </div>
                        <!------Ques 6------->
                          <li>The Norton resistance R<sub>N</sub> is exactly equal to the thevenin resistance  R<sub>TH</sub> ?</li>
                          <div id="options">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="thqs6" id="thqs6_op1">
                              <label class="form-check-label" for="thqs6_op1">
                                True
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="thqs6" id="thqs6_op2">
                              <label class="form-check-label" for="thqs6_op2">
                                False
                              </label>
                            </div>
                          </div>

                          <div class="container-fluid" id="thans6_op1">
                            <div class="form-group blue-border-focus">
                            <p>Ans: Yes,it is correct.The single resistor is called the Norton resistance (R<sub>N</sub>) and is equal to the Thevenin resistance in the Thevenin equivalent circuit.
                            </p>
                          </div>
                          </div>

                          <div class="container-fluid" id="thans6_op2">
                            <div class="form-group blue-border-focus">
                            <p>Ans: No,it is not correct.The single resistor is called the Norton resistance (R<sub>N</sub>) and is equal to the Thevenin resistance in the Thevenin equivalent circuit.
                            </p>
                          </div>
                          </div>
                        <!------Ques 7------->
                        <li>Which pairs of circuit are equivalent?</li>
                        <div id="options">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs7" id="thqs7_op1">
                            <label class="form-check-label" for="thqs7_op1">
                              a & b
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs7" id="thqs7_op2">
                            <label class="form-check-label" for="thqs7_op2">
                              b & c
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs7" id="thqs7_op3">
                            <label class="form-check-label" for="thqs7_op3">
                              a & c
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs7" id="thqs7_op4">
                            <label class="form-check-label" for="thqs7_op4">
                              b & d
                            </label>
                          </div>

                          <div class="container-fluid">
                            <div class="col" style="display: flex; flex-direction: row;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\th-qstn7.png">
                            </div>
                          </div>

                        
                          <div class="container-fluid" id="thans7">
                            <div class="form-group blue-border-focus">
                            <p>Ans: </p>
                            <span style="font-size: 1rem;">
                              $$ {I_N= I_{SC}} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {R_{Th}= R_N} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {V_{Th}= V_{OC}} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {V_{Th}= 25Ω} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {R_{Th}= 5Ω} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {I_N=\frac{25}{5}  = 5A} $$          
                            </span>
                          </div>
                          </div>
                        </div>

                        <!------Ques 8------->
                        <li>When and why V<sub>Th</sub>=0?</li>
                        <div id="answer-area">
                          <div class="form-group blue-border-focus">
                            <textarea class="form-control" id="thtext-area4" rows="5"></textarea>
                          </div>
                        </div>
                        <div class="container-fluid" id="thans8">
                          <div class="form-group blue-border-focus">
                          <p>Ans: As V<sub>Th</sub> is a function of independent sources so, V<sub>Th</sub>=0 is valid in a circuit where no independent sources are present.
                          </p>
                        </div>
                        </div>

                        <!------Ques-9------>
                        <li>Find the thevenin equivalent circuit of the following Figure?
                          <br>
                          <div class="container-fluid">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\qstn-9.png">
                            </div>
                          </div>
                          <p style="text-align: center;">[fig.1]</p>
                        </li>
                        <div id="options">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs9" id="thqs9_op1">
                            <label class="form-check-label" for="thqs9_op1">
                              a
                              <div class="container-fluid">
                                <div class="col" style="display: flex; flex-direction: row;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Qstn 9 (a).png">
                                </div>
                              </div>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs9" id="thqs9_op2">
                            <label class="form-check-label" for="thqs9_op2">
                              b
                              <div class="container-fluid">
                                <div class="col" style="display: flex; flex-direction: row;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\qstn-9b.png">
                                </div>
                              </div>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs9" id="thqs9_op3">
                            <label class="form-check-label" for="thqs9_op3">
                              c
                              <div class="container-fluid">
                                <div class="col" style="display: flex; flex-direction: row;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Qstn (c).png">
                                </div>
                              </div>
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs9" id="thqs9_op4">
                            <label class="form-check-label" for="thqs9_op4">
                              d
                              <div class="container-fluid">
                                <div class="col" style="display: flex; flex-direction: row;">
                                  <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\9(d).png">
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>
                          <div class="container-fluid" id="thans9">
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\qstn-9.png">
                            </div>
                            <p>Calculation of R<sub>Th</sub> ( Independent sources are turned off)</p>
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\qstn-9ans1.png">
                            </div>
                            <span style="font-size: 1rem;">
                              $$ {{\ R}_{th} = 12 || 4} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {\frac{4\times12}{16}  = 3Ω} $$          
                            </span>
                            <p>Calculation of V<sub>Th</sub></p>
                            <div class="row" style="justify-content: center;">
                              <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Thevenin quest.png">
                            </div>
                            <p>Applying KCL at node 'x', we get</p>
                            <span style="font-size: 1rem;">
                              $$ {\frac{V_x-12}{6}\ +\frac{V_x-V_{th}}{6}-2 = 0} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {⇒ V_x-12 + V_x-V_{th}-12=0} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              <p style="float:right;">(1)</p>
                              $$ {⇒ 2V_x-V_{th}=2} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              <p>Also from fig.</p>$$ {\frac{V_x-V_{th}}{6}=\ \frac{V_{th}}{4}} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {⇒ 4V_x-4=6V_{th}} $$</p>          
                            </span>
                            <span style="font-size: 1rem;">
                              <p style="float:right;">(2)</p>
                              $$ {⇒ 10V_{th}-4V_x=0 } $$          
                            </span>
                            <p>Solving equation (1) and (2), we get</p>
                            <span style="font-size: 1rem;">
                              $$ {2V_x-V_{th}=24} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {-2V_x+5V_{th}=0} $$     
                              <p style="text-align: center;">------------------------</p>     
                            </span>
                            
                            <span style="font-size: 1rem;">
                              $$ {4V_{th}=24} $$          
                            </span>
                            <span style="font-size: 1rem;">
                              $$ {V_{th}=6V} $$          
                            </span>
                            <p>So, equivalent circuit is,</p>
                            <div class="container-fluid">
                              <div class="row" style="justify-content: center;">
                                <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Qstn (c).png">
                              </div>
                            </div>
                            </div>
                            <!------Ques-10------>
                        <li>Find equivalent resistance R<sub>Th</sub> ?</li>
                        <div class="container-fluid">
                          <div class="row" style="justify-content: center;">
                            <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Thevenin_s quiz question 10.png">
                          </div>
                        </div>
                        <div id="options">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs10" id="thqs10_op1">
                            <label class="form-check-label" for="thqs10_op1">
                              1Ω
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs10" id="thqs10_op2">
                            <label class="form-check-label" for="thqs10_op2">
                              3Ω
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs10" id="thqs10_op3">
                            <label class="form-check-label" for="thqs10_op3">
                              2Ω
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="thqs10" id="thqs10_op4">
                            <label class="form-check-label" for="thqs10_op4">
                              4Ω
                            </label>
                          </div>
                        </div>

                        <div class="container-fluid" id="thans10">
                          <p>Solving the two parallel pairs of 4Ω first.</p>
                          <div class="row" style="justify-content: center;">
                            <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Qstn 10a.png">
                          </div>
                            <span style="font-size: 1rem;">
                              $$ {Now, 0 || 4Ω = \frac{0\times4}{0+4}=0Ω} $$          
                            </span>
                          <div class="row" style="justify-content: center;">
                            <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Qstn no 10b.png">
                          </div>
                          <p>Hence, finally</p>
                          <div class="row" style="justify-content: center;">
                            <img class="img-fluid" id="exp-3-img" src="assets\EXPT-4\Qstn no 10 (c).png">
                          </div>
                          <span style="font-size: 1rem;">
                            $$ {R_{th}=2||2=\frac{2\times2}{2+2}=\frac{4}{4}=1Ω} $$          
                          </span>
                      </ol>
                      </div>
                      </div>
                      <input class="btn btn-primary" type="submit" value="Submit" id="post-submit" onclick="thpostlabsubmit()">
                    </div>
            </div>
<!-----------VIDEO-LECTURE--------------->            
            <div id="diagram8">
                <h4 class="exp-head">VIDEO-LECTURE</h4>
                <hr>
                <div class = "container-fluid">
                    <div class = "row row-height">
                      <div class = "col left9" style="text-align:justify">
                      </div>
                    </div>
                </div>
            </div>
<!------------DOMWNLOAD---------------------->
            <div id="diagram9">
              <h4 class="exp-head">DOWNLOAD</h4>
              <hr>
              <div class = "container-fluid">
                  <div class = "row row-height">
                  <p>To download the lab manual <button class="btn btn-primary"><a href="assets\EXPT-3\LAB - 3.pdf" type="button" style="text-decoration: none; color:white;">Click Here</a><button></p>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>