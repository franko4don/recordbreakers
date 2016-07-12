
<!DOCTYPE.html>
 <html>
     <head>
           <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="/recordbreakers/css/style.css">
           <link rel="stylesheet" type="text/css" href="/recordbreakers/css/font-awesome.min.css">
         <link href="/recordbreakers/bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="/recordbreakers/bootstrap/css/bootstrap-theme.css" rel="stylesheet"/>
        <script src="/recordbreakers/bootstrap/js/bootstrap.min.js"></script>
         <title>
             reference
         </title>
        
         </head>
         <body>
         
<?php
class Views{
function top_view($path){
    
    echo ' 
             <h1>RECORD BREAKERS INTL</h1>
            
             <div class="container-fluid" style=" width: 100%" > 
             <div class="row">
            
                 <div class="row"  style=" background-color: #96bafa;" >
                
                 <div class="navigation-bar">
                  
                     
                         <div class="col-sm-1">
                         <span><a href="/recordbreakers"><i id="menu-icon"  class="fa fa-bars" style="font-size: 24px;" ></i></a></span>
                         </div>
                         <div class="col-sm-1" ></div>
                         <div class="col-sm-1" ></div>
                         <div class="col-sm-1" >
                         <span><a href="/recordbreakers">HOME</a></span>
                         </div>
                         <div class="col-sm-1" >
                         <span><a href='.$path.'waec.php>WAEC</a></span>
                             </div>
                         <div class="col-sm-1" >
                         <span><a href='.$path.'jamb.php>JAMB</a></span>
                             </div>
                         <div class="col-sm-1" >
                         <span><a href='.$path.'network-log-in.php>NETWORK</a></span>
                             </div>
                             
                               <div class="col-sm-1" >
                         <span><a href='.$path.'faq.php>FAQ</a></span>
                             </div>
                             
                             <div class="col-sm-1" >
                         <span><a href='.$path.'contact.php>CONTACT</a></span>
                             </div>
                           
                             <div class="col-sm-1" >
                         <span><a href='.$path.'about.php>ABOUT</a></span>
                             </div>
                             <div class="col-sm-1" ></div>
                             <div class="col-sm-1" ></div>
                        </div>
                
                 
                 </div>';   
}

function left_side_view($path){
    echo '         <div class="row">
        <div class="col-sm-2 col-lg-2 col-xs-2 col-md-2" >
            
            <h2> More Series</h2>
          <div id="otherbooks">
      
             <a href='.$path.'rb-wassce-government.php>RB WASSCE Government</a><br>
             <a href='.$path.'>RB WASSCE English</a><br>
             <a href='.$path.'>RB WASSCE Mathematics</a><br>
             <a href='.$path.'>RB WASSCE Physics</a><br>
             <a href='.$path.'>RB WASSCE Chemistry</a><br>
             <a href='.$path.'>RB WASSCE Literature</a><br>
             <a href='.$path.'>RB WASSCE Economics</a><br>
             <a href='.$path.'>RB WASSCE C.R.S</a><br>
             <a href='.$path.'>RB JAMB Government</a><br>
             <a href='.$path.'>RB JAMB English</a><br>
             <a href="#">RB JAMB Mathematics</a><br>
             <a href="#">RB JAMB Physics</a><br>
             <a href="#">RB JAMB Chemistry</a><br>
             <a href="#">RB JAMB Literature</a><br>
             <a href="#">RB JAMB Economics</a><br>
             <a href="#">RB JAMB C.R.S</a><br>
             <a href="#">RB JAMB Geography</a><br>
             <a href="#">RB Mathematics Syllables</a><br>
             <a href="#">RB English Syllables</a><br>
             <a href="#">RB Physics Syllables</a><br>
             <a href="#">RB Chemistry Syllables</a><br>
             
              
              
              </div>
        </div>  ';
    
}

function middle_view(){
    echo '<div class="col-sm-10 col-lg-10 col-xs-10 col-md-10">     
 ';
}

function down_view(){
    
    echo' <div class="row">
                    <div class="about">
                <hr>
                Record Breakers is a site where students can come for tutorials and learning as it relates to O"Level. It strives to
                impact knowledge on students who are willing to learn and not join the ever growing population in exam malpractice. Its aim is to impact on as many students as possible while
                using the site you agree to have read and accepted our <a href="#">terms of use</a>, <a href="#">cookie and privacy policy.
                </a> Copyright 1999-2016 by records Data. All Rights Reserved.          
                
            </div>  
                </div></div></div></div>';
}



}
?>
            
         </body>
 </html>