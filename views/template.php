<!DOCTYPE html>
<html>
<head>
	<title>Titulo do Site</title>
<!--	<script type="text/javascript" src="assets/"></script>-->
<link href="<?php echo BASE_URL; ?>/assets/css/style.css" rel="stylesheet"/>

</head>
<body>    
	<h1>Topo do site</h1>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<h1>Rodape do site</h1>
</body>
</html>
