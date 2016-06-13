# That Guy Boilerplate

That Guy Boilerplate is a modified version of [HTML5 Boilerplate](http://html5boilerplate.com) which implements [Couch CMS](http://couchcms.com).


## Getting Started

1. Download the master as a zip file [here](https://github.com/Mako88/thatguy-boilerplate/archive/master.zip).
2. Open up the 'main' folder and copy its contents to your server
3. Download couch from [here](http://couchcms.com), unzip it, and copy the "couch" folder to your server (it will need to be merged with the one already present).
4. Follow the instructions in the tutorial [here](http://docs.couchcms.com/tutorials/portfolio-site/building-a-real-world-site.html) to connect to your database and get Couch setup.

## Notes

1. You will need to visit all of the .php files in your web browser before you can edit them from within Couch.
2. That Guy Boilerplate comes with a .htaccess file. When you generate a .htaccess file after enabling pretty URLs you will need to do the following:
  1. Add the line `<IfModule mod_rewrite.c>` to the bottom of the existing .htaccess file.
  2. Copy everything beneath the `#DO NOT EDIT BELOW THIS` line in the generated .htaccess to the bottom of the existing .htaccess (beneath the line you added above).
3. I have included tim's "Too Many URLs" addon (Credit [here](http://www.couchcms.com/forum/viewtopic.php?p=21365#p21365)) It checks the number of URL's in the contact form message and only allows the number that you set (default is 1).
4. That Guy Boilerplate now uses caching by default and includes a cache buster. All linked images or scripts should be linked using the `<cms:cache_buster />` tag. This tag accepts one parameter: a relative link. I.E. `<cms:cache_buster 'path/to/file.css' />`. 
5. You may now use CouchCMS tags inside the CSS files (useful for setting variables such as color codes, or using the cache_buster tag mentioned above). The CSS file will be auto-generated whenever a file changes but you will have to visit the `css/generate_css.php` file once on initial setup (while logged in as Super-Admin).

## Contributing

Let me know if you have any suggestions, comments, or bug reports!
