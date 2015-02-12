<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Connacht Senior League,Connacht,Soccer,Irish Soccer,Mervue United">
        <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
        <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
        <title>Connacht Senior League</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>
        <link href="css/main-style.css" rel="stylesheet" type='text/css'>
      
    </head>
    <body>
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="heading">
                    <h1>Connacht Senior League</h1>
                    <div class="heading-subtext">A Tribute</div>    
                  </div>
                
                  <nav class="navbar navbar-default" id="csl-navbar" role="navigation">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <!--creates the toggle button that displays the menu in small screen formats-->
                          <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                            <a class="navbar-brand" href="#"></a>
                      </div>
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav" id="accordion" role="tablist" aria-multiselectable="false">
                            <li><a href="#home" value="home">Home</a></li>
                            <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">History<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#eighties" value="eighties">Eighties Seasons</a></li>
            <li><a href="#nineties" value="nineties">Nineties Seasons</a></li>
          </ul>
        </li>
                            <li><a href="#clubs" value="clubs">Clubs</a></li>
                            <li><a href="#champions" value="champions">Champions</a></li>
                            <li><a href="#senior_cup" value="senior_cup">Senior-Cup</a></li>
                         </ul>
    <!-- for the search and go form on the right of navbar-->
                            <form class="navbar-form navbar-right" role="search">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                              </div>
                              <button type="submit" class="btn btn-default">Go</button>
                            </form>
                     </div>
                  </nav>
           
                  <div id="home" class="views">
                    <div class="row">
                     <div class="col-xs-12" id="home_text">
                     </div>
                     <div class="col-xs-12" id="home_image">
                      <img src="images/home_page.png"/>
                     </div>
                     <div class="col-xs-12" id="ina_logo">
                      <img src="images/ina.png" width="20%"/>
                     </div>
                     </div>   
                  </div>
                  
                  <div id="eighties" class="views">
                     <div class="row">
                     <div class="col-xs-12" id="eighties_text">
                     </div>
                     </div>   
                  </div>
                  <div id="nineties" class="views">
                     <div class="row">
                     <div class="col-xs-12" id="nineties_text">
                     </div>
                     </div>   
                  </div>

                  <div id="clubs" class="views">
                     <div class="row">
                     <div class="col-xs-12">
                      <div id="club_info">

                      <div class="modal fade bs-example-modal-lg" id="modalCSL" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-body">
                            ...

                          </div>
                         <div class="modal-footer">

                          </div>
                        </div>
                        </div>
                      </div>
                    </div>

                    </div>
                  </div>
                  </div>

                  <div id="champions" class="views">
                    <div class="row">
                      <div class="col-xs-12">
                        <h1>Champions</h1>
                        <p>The following table lists the League Champions and sides who finished Second. Goal differnece did not count so occassionally Play-offs were needed. An exception is the case of the 94-95 season where the League was split into two groups so a Play-off was mandatory. In 96-97 the season had Two divisions, the table only shows details of the Premier Division with First Division details in the footnotes</p>   
                      <table class="table table-striped" id="senior_champions">
                        <tr>
                         <th>Season</th>
                         <th>Winner</th>
                         <th>Runner-up</th>
                         <th>Play off</th>
                       </tr>
                      </table>
                      <div class="notes"><p><a name="merv_salt" id="merv_salt"></a>R: 2nd Replay after two 2-2 draws</p>
                        <p><a name="straide" id="straide"></a>Gr: League split into 2 groups with group winners meeting in a play-off final. Top 3 teams in each group would go into a Premiership and the rest into a first division</p>
                        <p><a name="prem" id="prem"></a>Pr: This season had a Premiership and a First Division. Ballinasloe Town were First Division Champs.</p>
                     </div>
                   </div>
                   </div>
                  </div>
                  
                  <div id="senior_cup" class="views">
                    <div class="row">
                      <div class="col-xs-12">
                         <h1>Senior Cup</h1>
                        <p>The following table lists details of the Senior Cup Finals. This was the main knockout competition involving the Connacht Senior clubs. However champions from the four junior leagues were also included and they are highlighted with a (J)</p>
                    <table class="table table-striped" id="senior_cup_finals">
                      <tr>
                       <th>Season</th>
                       <th>Winner</th>
                       <th>Score</th>
                       <th>Runner-up</th>
                     </tr>
                    </table>
                    <div class="notes"><p><a name="calry_merv" id="calry_merv"></a>R: Replay after 1-1 draw</p>
                                          <p><a name="salt_calry" id="salt_calry"></a>R-p: Replay won on penalties after 1-1 draw</p>
                                        </div>
                  </div>
                </div>
               </div>
            </div>
        </div>

       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" pause="onload">
         <!--  Wrapper for slides--> 
          <div class="carousel-inner" role="listbox">
            <div class="item active" id="pix1">
        
            </div>
            <div class="item" id="pix2">

            </div>
            <div class="item" id="pix3">

            </div>
            
          </div>

        </div>
</div>

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
<script src="js/csl.js" type="text/javascript"></script>



    </body>
</html>

