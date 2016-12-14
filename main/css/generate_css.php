<?php require_once( '../couch/cms.php' ); ?>
<cms:abort>
    <cms:content_type 'text/css' />
    <cms:template title="CSS Generator" hidden='1' />

    <cms:embed '../../css/normalize.css' />
    <cms:embed '../../css/defaults.css' />
    <cms:embed '../../css/fonts.css' />
    <cms:embed '../../css/menu.css' />
    <cms:embed '../../css/form.css' />
    <cms:embed '../../css/blog.css' />
    <cms:embed '../../css/styles.css' />
    <cms:embed '../../css/responsive.css' />

</cms:abort>
<?php COUCH::invoke(); ?>
