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
            if(file_exists(K_SITE_DIR . $link)) {
                $ver = '.' . filemtime(K_SITE_DIR . $link) . '.';
            }
            else {
                $ver = '.';
            }
            
            $pos = strrpos($path['basename'], '.');
            
            if($pos !== false)
            {
                $result = substr_replace($path['basename'], $ver, $pos, 1);
            }
            else {
                die("ERROR: The path provided in tag \"".$node->name."\" does not contain a '.' character.");
            }
            
            return K_SITE_URL . $path['dirname'] . '/' . $result;
        }
    }
    
    $FUNCS->register_tag( 'cache_buster', array('CacheBuster', 'cache_buster_handler') );
