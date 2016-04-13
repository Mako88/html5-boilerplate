<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Template Page' />
<cms:embed 'header1.html' />

    <title>Under Construction | <cms:get_custom_field 'site_name' masterpage='globals.php' /></title>
    <meta name="description" content="Under Construction" />

<cms:embed 'header2.html' />
            
<div id="content">
    <h1>Under Construction</h1>
    <cms:editable name='main_content' type='richtext' label='Main Content'>
        <p>We're sorry, but this page is currently under construction. Please check back later.</p>
    </cms:editable>
</div>

<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>
