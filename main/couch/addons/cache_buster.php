<?php
    
    if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly
    
    class CacheBuster{
        
        function cache_buster_handler( $params, $node ){
            global $FUNCS, $CTX;
            if( count($node->children) ) {die("ERROR: Tag \"".$node->name."\" is a self closing tag.");}
            
            extract( $FUNCS->get_named_vars(
                array(
                       'link'=>'', /* field to test */
                      ),
                $params)
            );
            
            $url = trim( $link );
            if( !strlen($url) ) {die("ERROR: Tag \"".$node->name."\" is empty.");}
            
            $path = pathinfo($url);
            $ver = '.' . filemtime(K_SITE_DIR . $link) . '.';
            if( $ver == '..' ) { $ver = '.'; }
            return K_SITE_URL . $path['dirname'] . '/' . str_replace('.', $ver, $path['basename']);
        }
    }
    
    $FUNCS->register_tag( 'cache_buster', array('CacheBuster', 'cache_buster_handler') );