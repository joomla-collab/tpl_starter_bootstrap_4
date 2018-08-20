# Starter Bootstrap 4 Template - tpl_starter_bootstrap_4

This template has no styling.  It simple installs using Bootstrap 4.  It uses a CDN to load it.  

If you want the SCSS to work you will need a plugin, I choose [https://extensions.joomla.org/extension/scss-compiler/](https://extensions.joomla.org/extension/scss-compiler/)

## What now

1. Install the template
2. You will see in the template options you can choose Bootstrap 4 or Foundation 6.  This is an example so in the future I can consider adding other frameworks and make this template very flexible.
3. If you don't know what that means, leave it on Bootstrap 4.

## To use the template

It comes with no styling.  So be prepared for that.  We'll discuss in a minute.

First of all, set up the template to work on a page or pages.  I usually create a single article menu item and assign it to that page only so I can see what I am doing.

Assign some modules to that page.  You will see the names of the module positions in the index.php file.

Open one of the modules you have assigned.  Go to Advanced.  You have an option to set some CSS.

Here are all of the classes in Bootstrap []https://getbootstrap.com/docs/4.0/layout/grid/](https://getbootstrap.com/docs/4.0/layout/grid/)

Use one, for example *col-6* which will make it half the width of the page.

Set up another module with a different Bootstrap column size so you can see the difference.

## Add your own SCSS / CSS

included is a template.css file which you can use if you only like CSS.

If you have taken the above step and installed the plugin you can use SCSS.

Open the /scss/ folder and open template.scss

Insert some SCSS.  Make sure the plugin is activated and it will compile to template.css

I have already given you the Bootstrap4 media queries to get started.  They are in _responsive.scss

#### We encourage Pull requests.  Please make this template better.