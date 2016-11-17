<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Stools Framework   
# ---------------------------------------------------------------
# Author - joomlatd http://www.joomlatd.com
# Copyright (C) 2008 - 2014 joomlatd.com. All Rights Reserved.
# Websites: http://www.joomlatd.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/frame.php');
$jversion = new JVersion;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$stools->loadHead();
$stools->addCSS('template.css,joomla.css,menu.css,override.css,modules.css');
if ($stools->isRTL()) $stools->addCSS('template_rtl.css');
?>

</head>
<?php $stools->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $stools->direction . ' ' . $stools->style ?> clearfix">
<div class="ju-base">	
<?php 
$stools->addFeatures('colors');//Template colors
$stools->addModules('bookmarks');//bookmarks
?>

<div id="header" class="clearfix">
<div class="ju-base clearfix">
<?php 
$stools->addFeatures('logo');//Logo
?>
<div class="clr"></div>
<?php 
$stools->addModules("mainmenu"); //position mainmenu
?>
</div>	
</div>
<?php if ($stools->showSlideItem()): ?>
<div id="slides">
<?php include 'slider/slider.php'; ?> 
</div>
<?php endif; ?>
<?php if ($this->countModules('header')): ?>
<div id="slides">
<?php 
$stools->addModules("header"); //position header
?>
</div>
<?php endif; ?>
<div class="ju-base main-bg clearfix">	
<div class="ju-boxed">
<div id="tops">
<?php
$stools->addModules('top1, top2, top3, top4, top5, top6', 'ju_block', 'ju-userpos'); //positions top1-top6 
?>
</div>
<?php 
$stools->addModules("breadcrumbs"); //breadcrumbs
?>
<div class="clearfix">	
<?php $stools->loadLayout(); //mainbody ?>
</div>
<?php
$stools->addModules('bottom', 'ju_xhtml'); //bottom 
?>
</div>
</div>
<?php
$stools->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'ju_block', 'ju-bottom', '', false, true); //positions bottom1-bottom6 
?>
</div>
<!--Start Footer-->
<div class="ju-base">
<div id="ju-footer" class="clearfix">
<div class="cp">
<?php $stools->addFeatures('copyright,designed')  ?>					
</div>
<div class="clearfix">
</div>
<?php 
$stools->addFeatures('gotop');			
$stools->addModules("footer-nav"); 
?>
</div>
</div>
<!--End Footer-->

<?php 
$stools->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />
</body>
</html>