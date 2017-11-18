<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://simbyone.com/_assets/favicon.ico">
<title>Simbyone Newsletter Builder</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="_css/Icomoon/style.css" rel="stylesheet" type="text/css" />
<link href="_css/newsletter-builder.css" rel="stylesheet" type="text/css" />
<link href="_css/newsletter.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/jquery-2.1.4.min.js" type="text/javascript"></script>

<script type="text/javascript" src="_scripts/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="_scripts/newsletter-builder.js"></script>
<script src="../ckeditor/ckeditor.js" type="text/javascript"></script>

</head>
<body>

    <div class="container-fluid">
        <div class="row">
                        <div class="col-md-3">
                            <div id="newsletter-builder-sidebar">
    <div id="newsletter-builder-sidebar-logo"><img src="http://simbyone.com/demo/drag-and-drop-newsletter-builder-using-jquery/_assets/logo.png" width="150" height="150" /></div>
    <div id="newsletter-builder-sidebar-buttons">
      
      <div id="newsletter-builder-sidebar-buttons-bbutton">Export</div>
    </div>
  </div>
    
    
 <div id="newsletter-preloaded-export"></div>
                        </div>
            <div class="col-md-9">
                
            
            <?php include './template-insert.php';?>
            <?php include './edit_template.php';?>

            <?php include './template.php';?>
        </div>
            </div>
    </div>



 

</body>
</html>
