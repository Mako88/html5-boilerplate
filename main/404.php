<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='404 Page' hidden='1' />
<cms:embed 'header1.html' />

    <title>Error 404 | <cms:get_custom_field 'site_name' masterpage='globals.php' /></title>
    <meta name="description" content="There has been an Error 404: File Not Found." />

<cms:embed 'header2.html' />
            
<div id="content">
    <h1>Error 404: File Not Found</h1>
    <cms:editable name='main_content' type='richtext' label='Main Content'>
        <p>We're sorry, it looks like you tried to go somewhere that doesn't exist. Please use the menu to navigate to a different page. If you believe this shouldn't have happened, please contact us, and we'll do our best to fix it ASAP.</p>
    </cms:editable>
</div>

<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>