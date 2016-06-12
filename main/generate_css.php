<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Generate CSS' executable='0' />

<cms:php>
    $css = file_get_contents("<cms:show k_site_link />css/show_generated_css.php");
    $css = substr($css, 0, strpos($css, "<!--"));
    file_put_contents('<cms:show k_site_path />css/generated.css', $css);
    
    echo '<h1>CSS Generated!</h1>';
</cms:php>
<?php COUCH::invoke(); ?>