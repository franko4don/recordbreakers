<?php
if(isset($_GET['logout'])){
    if($_COOKIE[session_name()]){
        setcookie(session_name(), '', time()-45363);
    }
    session_destroy();
    header('location: /recordbreakers/php/network-log-in.php');
}
?>

<!DOCTYPE.html>
<html>
     <head>
           <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="/recordbreakers/css/dashboard.css">
         <link rel="stylesheet" type="text/css" href="/recordbreakers/css/font-awesome.min.css">
         <link href="/recordbreakers/bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="/recordbreakers/bootstrap/css/bootstrap-theme.css" rel="stylesheet"/>
        <script src="/recordbreakers/bootstrap/js/bootstrap.min.js"></script>
         <title>
             Dashboard
         </title>
        
         </head>
         <body>
             <h1>Welcome </h1>
             <div class="container-fluid" style="width: 100%;">
                   <div class="alert alert-info" id="well-nav" >             
                 <div class="row"  id="details">
                      
                     <div class="col-sm-4" style="text-align: left;">
                         Record Breakers int'l
                     </div>
                     <div class="col-sm-2">
                         <i class="fa fa-line-chart"></i>
                      View Progress   
                     </div>
                     <div class="col-sm-2">
                         <i class="fa fa-file-image-o"></i>
                         Profile
                     </div>
                     <div class="col-sm-2">
                         <i class="fa fa-envelope-o"></i>
                         Messages
                     </div>
                     <div class="col-sm-2">
                         <i class="fa fa-camera"></i><span> <a href="/recordbreakers/php/network-dash-board.php?logout=1">  logout</a></span>
                     </div>
             </div>
             </div>
                 
                 <div class="row">
                       
                     <div class="col-sm-3" >
                         <div class="alert alert-info" id="news"  style="height: 100%;">
                             <?php
                             for($i=0; $i<60; $i++){
                         echo'Latest Updates on the company<br>';
                             }
                             ?>
                         
                     </div>
                      </div>
                     <div class="col-sm-9">


                     </div>
                      </div>
                 
            
                 </div>
         </body>
</html>





