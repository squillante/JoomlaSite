<?php  
/*------------------------------------------------------------------------
# author    DEVTEC
# copyright Copyright © 2012 devtec.com.br All rights reserved.
# @license  COMERCIAL
# Website   http://www.devtec.com
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;
$app = JFactory::getApplication();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
</head>
<body>
<?php echo $app->getCfg('sitename');?>
<jdoc:include type="modules" name="top" />
<jdoc:include type="modules" name="left" />
<jdoc:include type="modules" name="breadcrumbs" />
<jdoc:include type="message" />
<jdoc:include type="component" />
<jdoc:include type="modules" name="right" />
<jdoc:include type="modules" name="footer" />
<jdoc:include type="modules" name="debug" />
</body>
</html>