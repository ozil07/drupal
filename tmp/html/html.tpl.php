<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

<head profile="<?php print $grddl_profile; ?>">
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link rel="stylesheet" type="text/css" href="/sites/all/themes/magaz/public/css/main.css">
  <script src="/sites/all/themes/magaz/src/js/modernizr.custom.js"></script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>


  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>



  <script src="/sites/all/themes/magaz/src/js/jquery.dlmenu.js"></script>
  <script src="/sites/all/themes/magaz/src/js/init.js"></script>




</body>
</html>




