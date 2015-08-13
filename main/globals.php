<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Global Settings' executable='0'>
    <cms:editable name='site_name' label='Your Site\'s Name' type='text'>That Guy Boilerplate</cms:editable>
    <cms:editable name='site_desc' label='Your Site\'s Description' type='text'>
        A boilerplate to kickstart your couch
    </cms:editable>
</cms:template>

<?php COUCH::invoke(); ?>