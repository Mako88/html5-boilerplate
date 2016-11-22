<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Blog' clonable='1' commentable='1' dynamic_folders='1'>
    <cms:editable name='blog_content' type='richtext' label='Blog Content' />
    
    <cms:editable name='blog_image' label='Image' type='image' />
</cms:template>
<cms:embed 'header1.html' />

    <title>
        <cms:if k_is_list >
            Blog 
        <cms:else />
            <cms:show k_page_title />
        </cms:if>
        | <cms:get_custom_field 'site_name' masterpage='globals.php' />
    </title>
    <meta name="description" content="Our Blog" />

<cms:embed 'header2.html' />
            
<div id="content">
    <h1>Our Blog</h1>
    <cms:if k_is_list >
        <cms:pages paginate='1' limit='5'>
            <div id="<cms:show k_page_name />">
                <div class="title"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></div>
                <div class="date">
                    <cms:if k_page_foldertitle >
                        <cms:show k_page_foldertitle />
                    <cms:else />
                        Uncategorised 
                    </cms:if>
                     &bull; Posted on <cms:date k_page_date format='F j, Y' /> 
                    <cms:if k_comments_count >
                        &bull; <a href="<cms:show k_page_link />#commentlist"><cms:show k_comments_count /> Comments</a>
                    </cms:if>
                </div>
                <hr />
                <cms:if "<cms:not_empty blog_image />">
                    <img src="<cms:show blog_image />" id="blogimage" />
                </cms:if>
                <p class="text"><cms:excerpt count='55'><cms:show blog_content /></cms:excerpt></p>
            </div>
            <cms:paginator />
        </cms:pages>
    <cms:else />
        <div class="title blogtitle"><cms:show k_page_title /></div>
        <div class="date">
            <cms:if k_page_foldertitle >
                <cms:show k_page_foldertitle />
            <cms:else />
                Uncategorised 
            </cms:if>
             &bull; Posted on <cms:date k_page_date format='F j, Y' /> 
            <cms:if k_comments_count >
                &bull; <a href="<cms:show k_page_link />#commentlist"><cms:show k_comments_count /> Comments</a>
            </cms:if>
        </div>
        <hr />
        <cms:if "<cms:not_empty blog_image />">
            <img src="<cms:show blog_image />" class="blogimage" />
        </cms:if>
        <div class="text">
            <cms:show blog_content />
        </div>
        <hr />
        <a href="<cms:show k_site_link />#<cms:show k_page_name />">Back</a>
        <cms:embed 'commentlist.html' />
        <cms:embed 'commentform.html' />
    </cms:if>
</div>

<cms:embed 'footer.html' />
<?php COUCH::invoke(); ?>
