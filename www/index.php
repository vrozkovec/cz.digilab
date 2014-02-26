<?php
require 'system/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.ico">

<title>DigiLab</title>

<link href="system/client/fineuploader-4.3.1.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Custom styles for this template -->
<link href="css/jumbotron-narrow.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
</head>

<body>
	<div class="container">
		<div class="header">
			<!--         <ul class="nav nav-pills pull-right"> -->
			<!--           <li class="active"><a href="#">Home</a></li> -->
			<!--           <li><a href="#">About</a></li> -->
			<!--           <li><a href="#">Contact</a></li> -->
			<!--         </ul> -->
			<h3 class="text-muted">DigiLab</h3>
		</div>

		<div class="jumbotron">
			<!-- 			<h1>Vyberte fotografie</h1> -->
			<!--         <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p> -->
			<!--         <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p> -->
			<div class="row">
				<div class="col-sm-6">
					<div id="upload-button" class="btn btn-lg btn-default btn-block">
						<i class="glyphicon glyphicon-hand-down"></i> Vyberte fotografie
					</div>
				</div>
				<div class="col-sm-6">
					<div id="triggerUpload" class="btn btn-primary btn-lg btn-block">
						<i class="glyphicon glyphicon-upload"></i> Nahrajte fotografie
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div id="dirname-wrap" style="display: none;">
						<p class="lead" style="margin-top: 20px;">
							Identifikátor vaší zakázky<br />
						</p>
						<h4>
							<strong><span id="dirname" class="page-header"></span></strong>
						</h4>
						<p style="margin-top: 20px;">
							<small>Sdělte jej, prosím, naší obsluze.</small>
						</p>
					</div>
				</div>
			</div>
			<!-- 			<div class="row"> -->
			<!-- 				<div class="col-sm-12"> 
				<p class="lead" style="margin-top: 20px; margin-bottom: 0;">
-->
			<!-- 					Počet souborů připravených knahrání: <span id="files-submitted-count"></span> -->
			<!-- 					</p> -->
			<!-- 				</div> -->
			<!-- 			</div> -->
		</div>
		<div id="bootstrapped-fine-uploader"></div>

		<!-- 		<div class="row marketing"> -->
		<!-- 			<div class="col-lg-12"></div> -->

		<!-- 			<div class="col-lg-6"> -->
		<!-- 				<h4>Subheading</h4> -->
		<!-- 				<p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p> -->
		<!-- 			</div> -->
		<!-- 		</div> -->
		
		<div class="footer">
        <p>&copy; DigiLab 2014 <span class="pull-right">Program distribuován na základě licence GPL v3 </span></p>
        <div class="clearfix"></div>
      </div>
	</div>

	<!-- Fine Uploader DOM Element
====================================================================== -->

	<!-- Fine Uploader template
====================================================================== -->
	<!-- 						
						-->
	<script type="text/template" id="qq-template-bootstrap"> 
<div class="qq-uploader-selector qq-uploader span12">
    <div class="qq-upload-drop-area-selector qq-upload-drop-area span12" qq-hide-dropzone>
      <span>Drop files here to upload</span>
    </div>
    <div class="qq-upload-button-selector qq-upload-button btn btn-success" style="width: auto;">
      <div><i class="icon-upload icon-white"></i> Test me now and upload a file</div>
    </div>
    <span class="qq-drop-processing-selector qq-drop-processing">
      <span>Processing dropped files...</span>
      <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
    </span>
    <ul class="qq-upload-list-selector qq-upload-list" style="margin-top: 10px; text-align: center;">
      <li>
        <div class="qq-progress-bar-container-selector">
          <div class="qq-progress-bar-selector qq-progress-bar"></div>
        </div>
        <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
        <span class="qq-upload-file-selector qq-upload-file"></span>
        <span class="qq-upload-size-selector qq-upload-size"></span>
        <a class="qq-upload-cancel-selector qq-upload-cancel" href="#">Zrušit</a>
        <span class="qq-upload-status-text-selector qq-upload-status-text"></span>
      </li>
    </ul>
  </div>					
						</script>
	<!-- 	
						<div class="qq-uploader-selector qq-uploader span12">
							<div
								class="qq-upload-drop-area-selector qq-upload-drop-area span12"
								qq-hide-dropzone>
								<span>Přetáhněte soubory k nahrání do tohoto prostoru</span>
							</div>
	<h2>1. krok</h2>
							<div
								class="qq-upload-button-selector qq-upload-button btn btn-lg btn-default"
								style="width: auto;">
								<div>
										
								</div>
							</div>
							<span class="qq-drop-processing-selector qq-drop-processing"> <span>Zpravovávám
									předané soubory...</span> <span
								class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
							</span>
							<ul class="qq-upload-list-selector qq-upload-list"
								style="margin-top: 10px; text-align: center; max-height: 300px; overflow: auto;">
								<li>
<div  class="alert alert-success">
									<div class="qq-progress-bar-container-selector">
										<div class="qq-progress-bar-selector qq-progress-bar"></div>
									</div>
									<div class="container-fluid">
									<div class="row">
										<div class="col-xs-3 image">
<p>
											<img class="img-responsive thumbnail qq-thumbnail-selector"
												qq-max-size="50" qq-server-scale>
</p>
										</div>
										<div class="col-xs-7">
											<span class="qq-upload-file-selector qq-upload-file"></span>
											<span class="qq-upload-file-selector qq-upload-file"></span>
											<span class="qq-upload-size-selector qq-upload-size"></span>
											<span class="qq-upload-status-text-selector qq-upload-status-text"></span>
											<span class="qq-upload-spinner-selector qq-upload-spinner"></span>
										</div>
										<div class="col-xs-2">
											<a class="qq-upload-cancel-selector btn btn-warning" href="#">Zrušit</a>
											<a class="qq-upload-retry-selector btn btn-info" href="#">Opakovat</a>
											<a class="qq-upload-delete-selector btn btn-danger" href="#">Smazat</a>
										</div>
									</div>
									</div>
									</div>
								</li>
							</ul>
						</div>
						 -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="system/client/jquery.fineuploader-4.3.1.min.js"></script>
	<script src="js/init.js"></script>
</body>
</html>
