<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8"/> 
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <?php
     include 'library.php';
     $lib=new bootstrap;
     $lib->lib();
     ?>
  </head>
  <body>
    <!-- top navbar-->
    <div class="navbar navbar-fixed-top navbar-default navcolor">
     <div class="container">
       <div class="navbar-header">
         <div class="navbar-brand">  
          <a href="#" class="brand">Students Review</a>
         </div> 
       </div>
       <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
       </button>
       <div class="collapse navbar-collapse navHeaderCollapse">
         <ul class="nav navbar-nav navbar-right navbar-justified">
         </ul>  
       </div>
     </div> 
    </div>
    <div class="container">
     <form class="form-horizontal" method="post" id="form">
        <div class="panel panel-default pan">
          <div class="panel-heading"><marquee><h4 class="come">Make your comment Please!</h4></marquee></div>
          
           <div class="panel-body">
            <div class="form-group" role="form">
             <textarea class="text" cols="60" rows="10" name="comment" id="comment" placeholder="Write your comment here"></textarea> 
           </div>  
             <a href="#" class="badges">Like <span class="badge">1</span></a>
           </div>
          <div class="panel-footer"> 
            <div class="form-group">
             <button class="btn btn-primary btnlarge2" type="submit" id="comment-submit">Comment</button>
            </div> 
          </div>
         
        </div>
     </form>
   </div>
    <div class="navbar navbar-default navbar-fixed-bottom botnav">
      
    </div>

     <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
     <script src="js/review.js" type="text/javascript"></script>
  </body>
</html>