# That Guy Boilerplate

That Guy Boilerplate is a modified version of [HTML5 Boilerplate](http://html5boilerplate.com) which implements [Couch CMS](http://couchcms.com).


## Getting Started

1. Download the master as a zip file [here](https://github.com/Mako88/thatguy-boilerplate/archive/master.zip).
2. Open up the 'main' folder and copy its contents to your server
3. Download couch from [here](http://couchcms.com), unzip it, and copy the "couch" folder to your server (it will need to be merged with the one already present).
4. Follow the instructions in the tutorial [here](http://docs.couchcms.com/tutorials/portfolio-site/building-a-real-world-site.html) to connect to your database and get Couch setup.

## Notes

* After you have installed Couch (and while logged in as Super-Admin), visit each .php file in your browser (`404.php`, `403.php`, `globals.php`, `index.php`, `contact.php`, `blog.php`, `menu.php`, and `css/generate_css.php`).
* The CSS won't work until you edit a .css file.
* That Guy Boilerplate comes with a .htaccess file. Couch has an option to enable pretty URLs, which works through a generated .htaccess. If you would like to enable pretty urls, you will need to copy some of the settings from the Couch generated .htaccess to the one included with That Guy Boilerplate. You will need to:
  * Add the line `<IfModule mod_rewrite.c>` to the bottom of the That Guy Boilerplate .htaccess file.
  * Copy everything beneath the `#DO NOT EDIT BELOW THIS` line in the Couch generated .htaccess to the bottom of the That Guy Boilerplate .htaccess (beneath the `<IfModule mod_rewrite.c>` line you added above).
* I have included tim's "Too Many URLs" addon (Credit [here](http://www.couchcms.com/forum/viewtopic.php?p=21365#p21365)) It checks the number of URL's in the contact form message and only allows the number that you set (default is 1).
* That Guy Boilerplate uses caching by default and includes a cache buster. All linked images or scripts should be linked using the `<cms:cache_buster />` tag. This tag accepts one parameter: a link relative to the root of the site. I.E. `<cms:cache_buster 'path/to/file.css' />`. This tag should be used for any images linked inside CSS files (You can also use any couch tag from within .css files, not just `<cms:cache_buster />`).
* If you need to add another .css file for any reason, you must include it in the `css/generate_css.php` file in the same way the others are. The CSS is generated in the order that the files are included inside that file. Any time a .css file changes, they are all automatically concatenated, minified, and outputted to `css/generated.css` the first time any page is visited.


## Other Projects

That Guy Boilerplate makes use of the following projects:
* [h5bp](https://github.com/h5bp/html5-boilerplate)
* [CouchCMS](https://github.com/CouchCMS/CouchCMS)
* [minify](https://github.com/matthiasmullie/minify)
* [normalize.css](https://github.com/necolas/normalize.css/)
* [jquery](https://github.com/jquery/jquery)

## Contributing

Let me know if you have any suggestions, comments, or bug reports!
