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
             <!-- button for adding subthread -->
      <a href="commentsForm.php"><button class="btn btn-primary pull" name="button" id="addSubthread" role="link">
        Add Comment                                                            
      </button>
          </a>
         </ul>  
       </div>
     </div> 
    </div>
 >
  <div class="container" id="media">
    
      <div class="row">
       <!-- user picture -->
      <div class="col-lg-2">
        <a href="#"><img src="/recordbreakers/review/img/image-bg.jpg" class="img img-circle images"></a>    
      </div>
    <!-- Thread title-->
      <div class="page-header col-sm-8">
        <h4 id="subtitle">Subthread title</h4>   
      </div>
    
    </div>
     <!-- subthread description-->
    <div class="col-sm-10">
     <div class="subpage-body" id="subBody">
      <div class="panel panel-default subpanel">
        <div class="subpanel-body">
          <p class="subthread-body" id="subThreadBody">Story</p> 
        </div>
      </div>
    </div>
   </div>
  </div>
    <!-- this div holds the subthreads-->
 <div class="container subthreads">
    <nav id="subthreads">
      <a href="#" class="subComment1" id="subCommentLink">
          <p class="comment1" id="subthread1">comment by so so so</p>
      </a>
      <a href="#" class="subComment2"><p class="comment2">comment by bla bla bla</p></a>
  
    </nav>
      
 </div>

    <div class="navbar navbar-default navbar-fixed-bottom botnav">
      
    </div>

     <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
     <script src="js/review.js" type="text/javascript"></script>
  </body>
</html>