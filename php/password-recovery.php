<?php

?>
<html>
    <head>
        
           <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
           <link rel="stylesheet" type="text/css" href="/recordbreakers/css/font-awesome.min.css">
         <link href="/recordbreakers/bootstrap/css/bootstrap.css" rel="stylesheet"/>
        <link href="/recordbreakers/bootstrap/css/bootstrap-theme.css" rel="stylesheet"/>
        <script src="/recordbreakers/bootstrap/js/bootstrap.min.js"></script>
        <title>
            Password Recovery
        </title>
        
    </head>
    <body>
        <div class="container">
            
          
           
            
            <div class="row">
                <div class="col-sm-4">
                    
                </div>
                
                <div class="col-sm-4" style="padding-top: 10%;">
                         <h1 style="padding-bottom: 25%; color: #7373ff;">
            Recovery Information
        </h1> 
                    <form class="form-horizontal" role="form" action='MAILTO:franko4don@yahoo.com' method="post">
                        
                        <div class="form-group">
                            <label for="text" style="color: #7373ff;">Detail</label><br>
                            <input type="text" name="detail" placeholder="Enter E-mail of Phone Number" style="width: 100%;">
                        </div>
                        
                        <div class="form-group">
                            
                            <label class="radio-inline" style="color: #7373ff"><input type="radio" value="email" name="type" id="email" checked> By Email</label>
                            <label class="radio-inline" style="color: #7373ff"><input type="radio" value="phonenumber" name="type" id="phonenumber" checked> By Phone Number</label>
                        </div>
                    
                        <div class="form-group">
                            <button type="submit"  class="btn btn-primary">Recover</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-sm-4">
                    
                </div>
                
                
            </div>
        </div>
        
        
    </body>
</html>