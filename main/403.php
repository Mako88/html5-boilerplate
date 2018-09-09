<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='403 Page' hidden='1'>
    <cms:editable name='page_title' type='text' label='Page Title' order='0'>Error 403: Access Denied</cms:editable>
</cms:template>
<cms:embed 'header1.html' />

    <title><cms:show page_title /> | <cms:get_custom_field 'site_name' masterpage='globals.php' /></title>
    <meta name="description" content="There has been an Error 403: Access Denied." />

<cms:embed 'header2.html' />
            
<div class="content">
    <h1><cms:show page_title /></h1>
    <cms:editable name='main_content' type='richtext' label='Main Content'>
        <p>We're sorry, it looks like you tried to go somewhere that you're not allowed to access. Please use the menu to navigate to a different page. If you believe this shouldn't have happened, please contact us, and we'll do our best to fix it ASAP.</p>
    </cms:editable>
</div>

<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>