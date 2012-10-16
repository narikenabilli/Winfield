<strong>WINFIELD CHILD THEME</strong>
<a href="http://wpcanada.ca/free-genesis-child-themes/winfield/">http://wpcanada.ca/free-genesis-child-themes/winfield</a>

<strong>INSTALL</strong>
1. Upload the Winfield child theme folder via FTP to your wp-content/themes/ directory. (the Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
 ** OR **
2. Upload the Winfield child theme folder ZIP by navigating to Appearance > Install Themes > Upload
3. Go to your WordPress dashboard and select Appearance.
4. Activate the Winfield theme.
5. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

<strong>HOME PAGE</strong>
The Winfield child themes comes with 2 home page template files:
1. <code>home.php</code>
2. <code>home_loop.php</code>

<strong>HOME PAGE USAGE</strong>
1. <code>home.php</code> == The default homepage uses the <code>home.php</code> template file. This file features 5 widget areas - Home Slider, Home Welcome, Home Left, Home Middle 
and Home Right.

The widgets that are used in these widget areas are:
Home Slider = Genesis Responsive Slider
Home Welcome = Text Widget
Home Left, Home Middle, Home Right = Genesis Featured Page/Posts Widget

Configuring the home page widgets:
i) Home Slider - The default height and width for the <strong>Genesis Responsive Slider</strong> plugin is already set in the theme's <code>functions.php</code> file. You only need to select what you want 
to appear such as posts or pages, how many etc.
ii) Home Welcome - Insert a <strong>text widget</strong> here. It can contain a brief message such as a welcome etc.
iii) Home Left, Home Middle, Home Right - The demo site uses the <strong>Genesis Featured Page</strong> widget. Select page from <strong>Page drop down menu</strong>, check the box <strong>Show Featured Image</strong>, 
from the <strong>Image Size</strong> drop down menu select <strong>home-bottom (290x150)</strong>, from <strong>Image Alignment</strong> select <strong>None</strong>, check the box <strong>Show Page Title</strong>, check the box <strong>Show Page Content</strong>, 
enter the number of characters to display in the <strong>Content Character Limit</strong> field (demo uses 150) and enter appropriate text in <strong>More Text</strong> field.

If no widgets are active the <code>home.php</code> file will display a standard blog format. 

<strong>Important Notes:</strong> 

i) Special styling has been added to facilitate the display of the widgetized home page. If no widgets are present and the standard blog format is used the 
appearance will look odd. To remedy this look in the style sheet for the following ...

<pre>.home #inner {
	margin: 0 auto;
	padding: 0;
}</pre>

... and either comment it out or delete it. <strong>Only do this if you have no plans on using the special widgets on the widgetized home page.</strong>

2. <code>home_loop.php</code> == This template file will display the Genesis Grid Loop. If you would like to use it instead of the default <code>home.php</code> follow these steps:
i) Rename the default <code>home.php</code> file to something like <code>home_old.php</code>
ii) Rename <code>home_loop.php</code> to <code>home.php</code>
The Winfield child theme will now use the Genesis Grid Loop as the default layout for the home page. To revert back simply rename the 2 files. There are several items that can be configured 
by editing the <code>home_loop.php</code> template file such as number of featured posts, featured image size, featured content limit etc.

<strong>FEATURED IMAGES</strong>
By default WordPress will create a default thumbnail image for each image you upload and the size can be specified in your dashboard under Settings > Media. In addition, the Winfield 
child theme creates the following thumbnail images you'll see below, which are defined (and can be modified) in the <code>functions.php file</code>. These are the recommended
thumbnail sizes that are used on the Winfield child theme demo site: 

blogpage (120x120)
grid-thumbnail (280x100)
home-bottom (290x150)
slider (960x300)

You may have to resize your images. If so, we recommend the very excellent Regenerate Thumbnails plugin.
<a href="http://wordpress.org/extend/plugins/regenerate-thumbnails">http://wordpress.org/extend/plugins/regenerate-thumbnails</a>

<strong>SPECIAL FEATURES</strong>
The Winfield child theme comes with the following:
1. Your choice of 3 homepage layouts.
2. 6 different content box styles.
3. Pullquotes.
4. Post Formats.
5. Genesis Box
6. Widgetized 404 error page.

<strong>Custom Content Boxes</strong>
The custom content boxes make use of DIV classes. For example, &lt;div class="content-box-blue"&gt;some random text&lt;/div&gt;
There are 6 styles to choose from.

<strong>Pullquotes</strong>
Pullquotes are added to posts or pages by assigning a div class to the text you want to quote. Their are 2 options you can use, left-aligned and right-aligned.

For example, to use a left-aligned pullquote do this ...
&lt;div class="pullquote-left"&gt;This is a left-aligned pullquote.&lt;/div&gt;

and to use a right-aligned pullquote do this ...
&lt;div class="pullquote-right"&gt;This is a right-aligned pullquote.&lt;/div&gt;

In previous versions of this theme I added the pullquotes as a class to the blockquote but have now changed that for a couple of reasons:
1. This method avoids any potential conflicts with blockquotes.
2. The CSS is cleaner. At least I think so.

<strong>Genesis Box</strong>
The Genesis Box is disabled by default. To enable it, open Winfield's <code>functions.php</code> file and uncomment the function. Specifically, look for this ...

<code>/** Add Genesis Box on Single Posts */
//add_action( 'genesis_after_post_content', 'include_genesis_box', 11 );
//function include_genesis_box() {
    //if ( is_single() )
    //require( CHILD_DIR.'/genesis-box.php' );
//}</code>

... and remove all of the //

<strong>Widgetized 404 error page</strong>
Winfield comes with a cool widgetized 404 error page. This means that you can add whatever content you want to the 404 error page via widgets rather than directly 
editing the template file. You could insert a Recent Posts widget, an Archive widget, search widget, text widget or any combination of. Use your imagination! You 
can see an example of it in action by visiting the demo site and typing in a nonsense URL like demo.wpcanada.ca/winfield/blah

<strong>Plugins</strong>
Genesis Responsive Slider - <a href="http://wordpress.org/extend/plugins/genesis-responsive-slider/">http://wordpress.org/extend/plugins/genesis-responsive-slider/</a>
Regenerate Thumbnails - <a href="http://wordpress.org/extend/plugins/regenerate-thumbnails/">http://wordpress.org/extend/plugins/regenerate-thumbnails/</a>

<strong>CREDIT</strong>
1. Post Format icons courtesy StudioPress &ndash; http://www.studiopress.com/graphics/post-format-icons
2. Icon Set for Bloggers courtesy StudioPress &ndash; http://www.studiopress.com/graphics/icon-set-bloggers
3. Content Boxes by Brian Gardner &ndash; http://www.briangardner.com/genesis-content-boxes/
4. Widgetized 404 Error Page by David Decker &ndash; http://genesisthemes.de/en/2011-08/tutorial-widgetized-404-error-page-in-genesis/ 

<strong>FURTHER</strong>
1. Theme release page &ndash; http://wpcanada.ca/our-themes/winfield/
2. Theme Demo &ndash; http://demo.wpcanada.ca/winfield/
3. Theme download page &ndash; http://code.google.com/p/winfield-theme/

<strong>BUG REPORTS</strong>
Bug reports can be filed at http://code.google.com/p/winfield-theme/

Enjoy!

