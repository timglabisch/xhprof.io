<?php
namespace ay\xhprof;
?>
<html>
<head>
	<link rel="stylesheet" href="<?=$template['base_path']['css']?>frontend.css" type="text/css" charset="utf-8">
	
	<script type="text/javascript" src="<?=$template['base_path']['js']?>jquery-1.8.3.min.js"></script>
	
	<script type="text/javascript" src="<?=$template['base_path']['js']?>jquery.ay-toggle-element.js"></script>
	<script type="text/javascript" src="<?=$template['base_path']['js']?>jquery.ay-table-sort.js"></script>
	<script type="text/javascript" src="<?=$template['base_path']['js']?>jquery.ay-table-sticky.js"></script>
	
	<script type="text/javascript" src="<?=$template['base_path']['js']?>d3.v2.js"></script>
	<script type="text/javascript" src="<?=$template['base_path']['js']?>crossfilter.v1.js"></script>
	<script type="text/javascript" src="<?=$template['base_path']['js']?>d3.crossfilter.ay-histogram.js"></script>
	<script type="text/javascript" src="<?=$template['base_path']['js']?>d3.ay-pie-chart.js"></script>
	
	<script type="text/javascript" src="<?=$template['base_path']['js']?>frontend.js"></script>
	
	<title>XHProf.io</title>
</head>
<body class="template-<?=$template['file']?>">
	<?php require __DIR__ . '/header.inc.tpl.php';?>
	
	<?=\ay\display_messages()?>
	
	<?=$template['body']?>
	
	<?php require __DIR__ . '/footer.inc.tpl.php';?>
</body>
</html>