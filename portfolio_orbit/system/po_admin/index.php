<!DOCTYPE html>
<?php
  require_once dirname(__DIR__).'/inc/PO_content.php';
  require_once "../inc/theme-controller.php";
  $content=new content();
?>


<html>
    <head>
        <title>Admin area</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../system/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="menu-bar">
            <?php $content->show_tables(); ?>
        </div>
        <section id="template">
            
        </section>
        <div id="themes">
            <h1>Themes</h1>
            <?php getThemes(); ?>
        </div>
        <div id="themes-details">
            
        </div>
        
    </body>
    <script src="../js/PO_js.js" type="text/javascript"></script>
    <script src="../js/po_AJAX.js" type="text/javascript"></script>
    <script src="../js/themeController.js" type="text/javascript"></script>
</html>




