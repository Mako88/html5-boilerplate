<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Menu Labels' executable='0'>
    <cms:editable type='text' name='home' label='Home Label'>Home</cms:editable>
    <cms:editable type='text' name='blog' label='Blog Label'>Blog</cms:editable>
    <cms:editable type='text' name='contact' label='Contact Label'>Contact</cms:editable>
</cms:template>

<?php COUCH::invoke(); ?>