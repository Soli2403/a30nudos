<?php
/**
 * @subpackage  Meembo Red v1.2 HM04J1.7
 * @copyright  Copyright (C) 2010-2012 Hurricane Media - All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined( '_JEXEC' ) or die( 'Restricted access' );

$LeftMenuOn = ($this->countModules('position-4') or $this->countModules('position-5') or $this->countModules('position-7'));
$RightMenuOn = ($this->countModules('position-6') or $this->countModules('position-8'));

$conf =& JFactory::getConfig();
$sitename = $conf->getValue('config.sitename');

$logopath = $this->baseurl . '/templates/' . $this->template . '/images/logo.jpg';
$logo = $this->params->get('logo', $logopath);
$logoimage = $this->params->get('logoimage');

$sitetitle = $this->params->get('sitetitle');
$sitedescription = $this->params->get('sitedescription');

$slides = $this->params->get('slides');
$slideseffect = $this->params->get('slideseffect');
$slidesimage1 = $this->params->get('slidesimage1');
$slidesimage2 = $this->params->get('slidesimage2');
$slidesimage3 = $this->params->get('slidesimage3');
$slidesimage4 = $this->params->get('slidesimage4');
$slidesimage5 = $this->params->get('slidesimage5');
$slidesimage6 = $this->params->get('slidesimage6');

if ($slidesimage1 || $slidesimage2 || $slidesimage3 || $slidesimage4 || $slidesimage5 || $slidesimage6) {
  // use images from template manager
} else {
  // use default images
  $slidesimage1 = $this->baseurl . '/templates/' . $this->template . '/images/slide1.jpg';
  $slidesimage2 = $this->baseurl . '/templates/' . $this->template . '/images/slide2.jpg';
}

$slideslink1 = $this->params->get('slideslink1');
$slideslink2 = $this->params->get('slideslink2');
$slideslink3 = $this->params->get('slideslink3');
$slideslink4 = $this->params->get('slideslink4');
$slideslink5 = $this->params->get('slideslink5');
$slideslink6 = $this->params->get('slideslink6');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
  <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/sfhover.js"></script>
  <?php if (($this->countModules('position-15') && $slides == 2) || ($slides == 1)): ?>
  <!-- Slides Scripts -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/slides.min.jquery.js"></script>
  <script type="text/javascript">
    $(function(){
      $('#slides').slides({
        preload: true,
        preloadImage: 'templates/<?php echo $this->template; ?>/images/slides_loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: true<?php if ($slideseffect == 1): ?>,
        effect: 'fade',
        crossfade: true,
        fadeSpeed: 500<?php endif; ?>
      });
    });
    
    $(document).ready(function() {
      $("#slides").hover(function() {
          $(".slides_nav").css("display", "block");
        },
          function() {
          $(".slides_nav").css("display", "none");
        });

    });
  
  </script>
  <?php endif; ?>
</head>
<body>

<div id="wrapper">


  <div id="header">


    <!-- Logo -->
    <div id="logo">

      <?php if ($logo && $logoimage == 1): ?>
        <a href="<?php echo $this->baseurl ?>"><img src="<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo $sitename; ?>" /></a>
      <?php endif; ?>
      <?php if (!$logo || $logoimage == 0): ?>

        <?php if ($sitetitle): ?>
          <a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($sitetitle); ?></a><br/>
        <?php endif; ?>

        <?php if ($sitedescription): ?>
          <div class="sitedescription"><?php echo htmlspecialchars($sitedescription); ?></div>
        <?php endif; ?>

      <?php endif; ?>

      </div>

    <!-- TopNav -->
    <?php if($this->countModules('position-13')): ?>
    <div id="topnav">
      <jdoc:include type="modules" name="position-13" style="xhtml" />
    </div>
    <?php endif; ?>

    <!-- Search -->
    <div id="search">    
      <jdoc:include type="modules" name="position-0" />
    </div>

  </div>

  <!-- Topmenu -->
  <div id="topmenu">
    <jdoc:include type="modules" name="position-1" />
  </div>  


  <!-- Slides -->
  <?php if (($this->countModules('position-15') && $slides == 2) || ($slides == 1)): ?>
  <div id="slideshow">
    <div id="slides"><div class="slides_container"><?php if ($slidesimage1): ?><?php if ($slideslink1): ?><a href="<?php echo $slideslink1; ?>"><?php endif;?><img src="<?php echo $slidesimage1; ?>" alt="<?php echo $slidescaption1; ?>" /><?php if ($slideslink1): ?></a><?php endif;?><?php endif;?><?php if ($slidesimage2): ?><?php if ($slideslink2): ?><a href="<?php echo $slideslink2; ?>"><?php endif;?><img src="<?php echo $slidesimage2; ?>" alt="<?php echo $slidescaption2; ?>" /><?php if ($slideslink2): ?></a><?php endif;?><?php endif;?><?php if ($slidesimage3): ?><?php if ($slideslink3): ?><a href="<?php echo $slideslink3; ?>"><?php endif;?><img src="<?php echo $slidesimage3; ?>" alt="<?php echo $slidescaption3; ?>" /><?php if ($slideslink3): ?></a><?php endif;?><?php endif;?><?php if ($slidesimage4): ?><?php if ($slideslink4): ?><a href="<?php echo $slideslink4; ?>"><?php endif;?><img src="<?php echo $slidesimage4; ?>" alt="<?php echo $slidescaption4; ?>" /><?php if ($slideslink4): ?></a><?php endif;?><?php endif;?><?php if ($slidesimage5): ?><?php if ($slideslink5): ?><a href="<?php echo $slideslink5; ?>"><?php endif;?><img src="<?php echo $slidesimage5; ?>" alt="<?php echo $slidescaption5; ?>" /><?php if ($slideslink5): ?></a><?php endif;?><?php endif;?><?php if ($slidesimage6): ?><?php if ($slideslink6): ?><a href="<?php echo $slideslink6; ?>"><?php endif;?><img src="<?php echo $slidesimage6; ?>" alt="<?php echo $slidescaption6; ?>" /><?php if ($slideslink6): ?></a><?php endif;?><?php endif;?></div>
      <div class="slides_nav">
        <a href="#" class="prev"></a>
        <a href="#" class="next"></a>
      </div>
    </div>
  </div>
  <?php endif; ?>  
  


  <!-- No Slides -->
  <?php if ($this->countModules('position-15') && $slides == 0): ?>
  <div id="slideshow">
    <div id="slides">
      <jdoc:include type="modules" name="position-15" />
    </div>
  </div>
  <?php endif; ?>
  


  <!-- Content/Menu Wrap -->
  <div id="content-menu_wrap">
    

    <?php if($LeftMenuOn == True AND $RightMenuOn == False): ?>
    <!-- 2 Columns (Left Menu) ########################### -->
      
      <div id="container-leftmenu-content">
        <div id="container-leftmenu-left">
          
          <!-- Left Menu -->
          <div id="leftmenu">
            <jdoc:include type="modules" name="position-7" style="xhtml" />
            <jdoc:include type="modules" name="position-4" style="xhtml" />
            <jdoc:include type="modules" name="position-5" style="xhtml" />
          </div>
          
          <!-- Contents -->
          <div id="content-leftmenu">  
            <?php if ($this->countModules('position-12')): ?>
            <div id="content-top">
              <jdoc:include type="modules" name="position-12" />
            </div>
            <?php endif; ?>
            <!-- Breadcrumbs -->
            <?php if ($this->countModules('position-2')): ?>
            <div id="breadcrumbs">
              <jdoc:include type="modules" name="position-2" />
            </div>
            <?php endif; ?>
            <jdoc:include type="message" />
            <jdoc:include type="component" />
          </div>
          
        </div>  
      </div>  
      

    <?php elseif($LeftMenuOn == False AND $RightMenuOn == True): ?>
    <!-- 2 Columns (Right Menu) ########################### -->

      <div id="container-rightmenu-right">
        <div id="container-rightmenu-content">
          
          <!-- Contents -->
          <div id="content-rightmenu">  
            <?php if ($this->countModules('position-12')): ?>
            <div id="content-top">
              <jdoc:include type="modules" name="position-12" />
            </div>
            <?php endif; ?>
            <!-- Breadcrumbs -->
            <?php if ($this->countModules('position-2')): ?>
            <div id="breadcrumbs">
              <jdoc:include type="modules" name="position-2" />
            </div>
            <?php endif; ?>
            <jdoc:include type="message" />
            <jdoc:include type="component" />
          </div>

          <!-- Right Menu -->
          <div id="rightmenu">
            <jdoc:include type="modules" name="position-6" style="xhtml" />
            <jdoc:include type="modules" name="position-8" style="xhtml" />
            <jdoc:include type="modules" name="position-3" style="xhtml" />
          </div>
          
        </div>  
      </div>  
      

    <?php elseif($LeftMenuOn AND $RightMenuOn): ?>
    <!-- 3 Columns ########################### -->

      <div id="container-3columns-right">
        <div id="container-3columns-content">
          <div id="container-3columns-left">
          
            <!-- Left Menu -->
            <div id="leftmenu-3columns">
              <jdoc:include type="modules" name="position-7" style="xhtml" />
              <jdoc:include type="modules" name="position-4" style="xhtml" />
              <jdoc:include type="modules" name="position-5" style="xhtml" />
            </div>

            <!-- Contents -->
            <div id="content-3columns">  
              <?php if ($this->countModules('position-12')): ?>
              <div id="content-top">
                <jdoc:include type="modules" name="position-12" />
              </div>
              <?php endif; ?>
              <!-- Breadcrumbs -->
              <?php if ($this->countModules('position-2')): ?>
              <div id="breadcrumbs">
                <jdoc:include type="modules" name="position-2" />
              </div>
              <?php endif; ?>
              <jdoc:include type="message" />
              <jdoc:include type="component" />
            </div>

            <!-- Right Menu -->
            <div id="rightmenu-3columns">
              <jdoc:include type="modules" name="position-6" style="xhtml" />
              <jdoc:include type="modules" name="position-8" style="xhtml" />
              <jdoc:include type="modules" name="position-3" style="xhtml" />
            </div>
              
          </div>  
        </div>  
      </div>  

    
    <?php else: ?>
    <!-- 1 Column (No Menus) ########################### -->

      <div id="container-1columns1">

        <!-- Contents -->
        <div id="content-1column">  
          <?php if ($this->countModules('position-12')): ?>
            <div id="content-top">
              <jdoc:include type="modules" name="position-12" />
            </div>
          <?php endif; ?>
          <jdoc:include type="message" />
          <jdoc:include type="component" />
        </div>
      </div>
      
    
    <?php endif; ?>


  </div>


  <!-- Footer -->
  <?php if ($this->countModules('position-14')): ?>
  <div id="footer">
    <jdoc:include type="modules" name="position-14" />
  </div>
  <?php endif; ?>

  
  <!-- Banner/Links -->
  <?php if ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11')): ?>
  <div id="box_placeholder">
    <div id="box1"><jdoc:include type="modules" name="position-9" style="xhtml" /></div>
    <div id="box2"><jdoc:include type="modules" name="position-10" style="xhtml" /></div>
    <div id="box3"><jdoc:include type="modules" name="position-11" style="xhtml" /></div>
  </div>
  <?php endif; ?>
  
  
  
  
  <!-- Page End -->
  
  
  


  
  
  
  
  <div id="copyright">
    &copy;<?php echo date('Y'); ?> <?php echo $sitename; ?>  <a href="http://www.A30nudos.com"></a><a href="http://www.children.as"></a><a href="http://www.legogspil.eu"></a><br/>
  </div>

</div>

<div class="copy2"><img src="templates/<?php echo $this->template; ?>/images/cpright3.jpg" alt="Copyright" /></div>

</body>
</html>