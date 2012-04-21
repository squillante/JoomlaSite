<?php
/**
 * @package devtecMain 
 * @filesource index.php
 * @version 1.0 April 2012
 * @author devtec.com.br
 * @copyright Copyright (C) 2012
 * @license Commercial
 */

// no direct access
defined('_JEXEC') or die ('Restricted access');

?>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" 
      xml:lang="<?php echo $this->language;?>"
      lang="<?php echo $this->language;?>   ">

<html>
    <head>
        <jdoc:include type="head"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" media="screen"
                href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template?>/css/reset.css"/>        
        
        <link rel="stylesheet" type="text/css" media="screen"
                href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template?>/css/960_24_col.css"/>        
             
        <link rel="stylesheet" type="text/css" media="screen"
                href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template?>/css/template.css"/>        
             
        <link rel="shortcut icon" 
              href="<?php echo "$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/favicon.ico"; ?>"/>
        
    </head>
    <body>
               
        <div class="container_24" id="wrapper">
            
            <div class="grid_7" id="toolbar">
                <jdoc:include type="modules" name="toolbar"/>
            </div>
            
            <div class="grid_7" id="user1">
                <jdoc:include type="modules" name="user1"/>
            </div>
            
            <div class="grid_7" id="search">
                <jdoc:include type="modules" name="search"/>
            </div>
            
            <div class="clear"></div>
            
            <div class="grid_24" id="inset">
                <jdoc:include type="modules" name="inset"/>
            </div>
            
            <div class="clear"></div>
            
            <div class="grid_24" id="mainnav">
                <jdoc:include type="modules" name="mainnav"/>
            </div>
            
            <div class="clear"></div>
            
            <?php if($this->countModules('user2')): ?>
            <div class="grid_12" id="user2">
                <jdoc:include type="modules" name="user2"/>
            </div>
            <?php endif;?>
            
            <?php if($this->countModules('user3')): ?>
            <div class="grid_8" id="user3">
                <jdoc:include type="modules" name="user3"/>
            </div>
            <?php endif; ?>
            
            <?php if($this->countModules('user4')): ?>
            <div class="grid_4" id="user4">
                <div><jdoc:include type="modules" name="user4"/></div>
                <div><jdoc:include type="modules" name="user5"/></div>                
            </div>
            <?php endif; ?>
                                    
            <div class="clear"></div>
            
            <div class="grid_24" id="component">
                <jdoc:include type="component"/>
            </div>
            
            <div class="clear"></div>
            
            <div class="grid_24" id="footer">
                <jdoc:include type="modules" name="footer"/>
            </div>
            
            <div class="clear"></div>
            
            <div class="grid_24" id="copyright">
                <jdoc:include type="modules" name="copyright"/>
            </div>
            
            
        </div>
    </body>
</html>