<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('AMCOR::SISTEMA FORECAST'); ?>
		<?php echo $title_for_layout; ?>
	</title>

    <!--[if lt IE 10]>
        <link href="/forecast/css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->           
    <!--[if lte IE 7]>
        <script type='text/javascript' src='/forecast/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->css(array('stylesheets'));
        echo $this->Html->script(array(
            'plugins/jquery/jquery-1.9.1.min.js',
            'plugins/jquery/jquery-ui-1.10.1.custom.min',
            'plugins/jquery/jquery-migrate-1.1.1.min',
            'plugins/jquery/globalize',
            'plugins/other/excanvas',
            'plugins/other/jquery.mousewheel.min',
            'plugins/bootstrap/bootstrap.min',
            'plugins/uniform/jquery.uniform.min',
            'plugins/shbrush/XRegExp',
            'plugins/shbrush/shCore',
            'plugins/shbrush/shBrushXml',
            'plugins/shbrush/shBrushJScript',
            'plugins/shbrush/shBrushCss',
            'plugins',
            'charts',
            'actions'
            ));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        echo $this->Js->writeBuffer(array('cache' => TRUE, 'clear' => TRUE));
	?>
</head>
<body>
	<div id="loader"><?php echo $this->Html->image('loader.gif', array('alt' => 'cargando')); ?></div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
	
</body>
</html>
