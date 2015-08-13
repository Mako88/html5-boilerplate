# That Guy Boilerplate

That Guy Boilerplate is a modified version of [HTML5 Boilerplate](http://html5boilerplate.com) which implements [Couch CMS](http://couchcms.com).


## Getting Started

1. Download the master as a zip file [here](https://github.com/Mako88/thatguy-boilerplate/archive/master.zip).
2. Open up the 'main' folder and copy its contents to your server
3. Download couch from [here](http://couchcms.com), unzip it, and copy the "couch" folder to your server (it will need to be merged with the one already present).
4. Follow the instructions in the tutorial [here](http://docs.couchcms.com/tutorials/portfolio-site/building-a-real-world-site.html) to connect to your database and get Couch setup. Also set K_REMOVE_FOOTER_LINK to '1' in the config.php file since it is included in That Guy Boilerplate by default.

## Notes

1. That Guy Boilerplate makes use of SASS for its CSS. To find out how to use it, go [here](http://sass-lang.com/).
2. You will need to visit index.php, globals.php, 404.php and 403.php in your web browser before you can edit them from within Couch.
3. That Guy Boilerplate comes with a .htaccess file. When you generate a .htaccess file after enabling pretty URLs you will need to do the following:
  1. Add the line `<IfModule mod_rewrite.c>` to the bottom of the existing .htaccess file.
  2. Copy everything beneath the `#DO NOT EDIT BELOW THIS` line in the generated .htaccess to the bottom of the existing .htaccess (beneath the line you added above).

## Contributing

Let me know if you have any suggestions, comments, or bug reports!
