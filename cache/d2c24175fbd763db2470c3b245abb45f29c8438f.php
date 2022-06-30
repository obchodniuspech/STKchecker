<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">


<html>
<head>
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,300,700" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>STK Checker</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>
<body>
	
<div class="container-fluid">
	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
	  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
		<span class="fs-4">STK Check</span>
	  </a>

	  <ul class="nav nav-pills">
		<li class="nav-item"><a href="<?php echo e($router->generate('get.car.all')); ?>" class="nav-link">Všechna vozidla</a></li>
	  </ul>
	</header>
  </div>	
	
	<div class="container mt-5">
<?php /**PATH /Users/michalpesat/Documents/GitHub/STKchecker/view/header.blade.php ENDPATH**/ ?>