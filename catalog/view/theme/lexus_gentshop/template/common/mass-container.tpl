
<?php if( isset($breadcrumbs) ) { ?>
<div id="breadcrumb"><div class="container">
	<h1><?php echo $heading_title; ?></h1>
	<ul class="breadcrumb">
	<?php foreach ($breadcrumbs as $breadcrumb) { ?>
	<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
	<?php } ?>
	</ul>
</div></div>
<?php } ?>