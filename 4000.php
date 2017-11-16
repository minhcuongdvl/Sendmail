<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="css/normalize-min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4000.less', 'css/4000.css');
        ?> 
        <link href="css/4000.css" rel="stylesheet" type="text/css"/>
        <script src="js/js-4000.js" type="text/javascript"></script>
        <script src="ckeditor/ckeditor.js" type="text/javascript"></script>

    </head>
    
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <iframe id="preview-template" src="newsle/template.php" name="send" frameborder="1" onload="onPreviewLoad();" style="height: 2700px; min-height: 178px;width: 100%" scrolling="yes"></iframe>
                </div>
                <div class="col-md-6">
                     <form    method="POST"  action=""id="form_sendmail"class="form-horizontal form-material">
              <textarea id="editor1" name="editor1" cols="80" rows="10" style="margin-left: 100px;margin-top: 100px;">
      
   </textarea>
    <script>
 
           CKEDITOR.replace( 'editor1' );
 
       </script>   
        <button class="btn btn-success" type="submit">Send Mail</button>
        </form>
                </div>
            </div>
        </div> 
        
      

            
    </body>
</html>
