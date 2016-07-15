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
      <button class="btn btn-primary pull" name="button" id="addSubthread" role="link">Add subthread</button>
         </ul>  
       </div>
     </div> 
    </div>

  <div class="container" id="media">
    
      <div class="row">
       <!-- user picture -->
      <div class="col-lg-2">
        <a href="#"><img src="/recordbreakers/review/img/image-bg.jpg" class="img img-circle images"></a>    
      </div>
    <!-- Thread title-->
      <div class="page-header col-sm-8">
        <h4 id="title">Title of thread</h4>   
      </div>
    
    </div>
     <!-- thread description-->
    <div class="col-sm-10">
     <div class="page-body" id="body">
      <div class="panel panel-default panel">
        <div class="panel-body">
          <p class="thread-body" id="threadBody">Benny and Frank liked engr Azubuike</p> 
        </div>
      </div>
    </div>
   </div>
  </div>
    <!-- this div holds the subthreads-->
 <div class="container subthreads">
    <nav id="subthreads">
      <a href="#" class="subthread1" id="subthreadLink">
          <p class="subparagraph1" id="subthread1">This is subthread number one</p>
      </a>
      <a href="#" class="subthread2"><p class="subparagraph2">This is subthread number two</p></a>
      <a href="#" class="subthread3"><p class="subparagraph3">This is subthread number three</p></a>
      <a href="#" class="subthread4"><p class="subparagraph4">This is subthread number four</p></a>
    </nav>
      
 </div>

    <div class="navbar navbar-default navbar-fixed-bottom botnav">
      
    </div>

     <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/javascript"></script>
     <script src="js/review.js" type="text/javascript"></script>
  </body>
</html>