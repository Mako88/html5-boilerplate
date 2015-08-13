<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='403 Page' />

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Error 403 | <cms:get_custom_field 'site_name' masterpage='globals.php' /></title>
        <meta name="description" content="There has been an Error 403: Access Denied.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/styles.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <!--[if lt IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <cms:embed 'header.html' />
            
            <div id="content">
                <h1>Error 403: Access Denied</h1>
                <cms:editable name='main_content' type='richtext'>
                    <p>We're sorry, it looks like you tried to go somewhere that you're not allowed to access. Please use the menu to navigate to a different page. If you believe this shouldn't have happened, please contact us, and we'll do our best to fix it ASAP.</p>
                </cms:editable>
            </div>

            <cms:embed 'footer.html' />
            
        </div>
    </body>
</html>
<?php COUCH::invoke(); ?>