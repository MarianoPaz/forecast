<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />            
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('AMCOR::SISTEMA FORECAST'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->css(array('stylesheets', 'styling'));
        echo $this->Html->script(array(
            'plugins/jquery/jquery-1.9.1.min.js',
            'plugins/jquery/jquery-ui-1.10.1.custom.min',
            'plugins/jquery/jquery-migrate-1.1.1.min',
            'plugins/jquery/globalize',
            'plugins/other/excanvas',
            'plugins/other/jquery.mousewheel.min',
            'plugins/bootstrap/bootstrap.min',
            'plugins/cookies/jquery.cookies.2.2.0.min',
            'plugins/jflot/jquery.flot',
            'plugins/jflot/jquery.flot.stack',
            'plugins/jflot/jquery.flot.pie',
            'plugins/jflot/jquery.flot.resize',
            'plugins/epiechart/jquery.easy-pie-chart',
            'plugins/sparklines/jquery.sparkline.min',
            'plugins/mcustomscrollbar/jquery.mCustomScrollbar.min',
            'plugins/uniform/jquery.uniform.min',
            'plugins/fullcalendar/fullcalendar.min',
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
	<div id="loader">
		<?php echo $this->Html->image('loader.gif', array('alt' => 'cargando')); ?>
	</div>
<div class="wrapper">
		<?php
            echo $this->element('layout/sideBar');
		?>
	<div class="body">
		<?php
            echo $this->element('layout/navigation');
		?>
	<div id="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
	<div class="dialog" id="source" style="display: none;" title="Source"></div>
    
    <div id="fcAddEvent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="fcAddEventLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="fcAddEventLabel">Add new event</h3>
        </div>
        <div class="modal-body">
            <div class="row-fluid">
                <div class="span3">Title:</div>
                <div class="span9"><input type="text" id="fcAddEventTitle"/></div>
            </div>
        </div>
        <div class="modal-footer">            
            <button class="btn btn-primary" id="fcAddEventButton">Add</button>            
        </div>
    </div>    
</div>
</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
