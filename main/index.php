<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home' />
<cms:embed 'header1.html' />

    <title><cms:get_custom_field 'site_name' masterpage='globals.php' /> - <cms:get_custom_field 'site_desc' masterpage='globals.php' /></title>
    <meta name="description" content="<cms:get_custom_field 'site_desc' masterpage='globals.php' />" />

<cms:embed 'header2.html' />

<div class="content">
    <h1><cms:get_custom_field 'site_name' masterpage='globals.php' /></h1>
    <h3><cms:get_custom_field 'site_desc' masterpage='globals.php' /></h3>
    <cms:editable name='main_content' type='richtext' label='Main Content'>
        <p>Hello world!</p>
    </cms:editable>
</div>

<cms:embed 'footer.html' />  
<?php COUCH::invoke(); ?>
