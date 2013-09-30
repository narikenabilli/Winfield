# Winfield child Theme

## Installation

1. Upload the Winfield child theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)

2. Go to your WordPress dashboard and select Appearance.

3. Activate the Winfield child theme.

4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## Note

After you download and unarchive the theme from GitHub, rename the Winfield-master folder to Winfield.

## Widgets

The homepage features 5 custom widget areas:

1. Home Slider. For use with the Genesis Responsive Slider plugin.

2. Home Welcome. Use a text widget to display a brief message.

3. Home Left. For use with the Genesis Featured Page widget. May substitute Genesis Featured Posts widget.

4. Home Center. For use with the Genesis Featured Page widget. May substitute Genesis Featured Posts widget.

5. Home Right. For use with the Genesis Featured Page widget. May substitute Genesis Featured Posts widget.

An aditional widget area called After Post Block appears after a post on all single post pages. Use a text widget or even the Genesis eNews Extended widget here.

## Widget Page Template

Winfield comes with a widget Page Template. To use it, publish an empty page, select the Widget Page Template from the drop down menu then start adding widgets
to it. Refer to the Demo site for an example.

## Configuring the widgets as seen on the Demo site

Genesis Responsive Slider:

1. Maximum Slider Width = 1180.

2. Maximum Slider Height = 400.

3. Check Display Next / Previous Arrows in Slider?

4. Check Display Pagination in Slider?

5. Check Display Post/Page Title in Slider?

6. Check Display Content in Slider?

7. Select Display post content from drop menu.

8. Enter 150 into Limit content to text field.

9. Slider Excerpt Width = 75.

10. Excerpt Location vertical = Bottom.

11. Excerpt Location horizontal = Left.


Home Left / Home Center / Home Right - Genesis Featured Page

1. Check Show Featured Image.

2. Choose home-middle (340 x 150) for Image Size.

3. Choose None for Image Alignment.

4. Check Show Post Title.

5. Check Show Page Content

6. Select Show Content Limit from drop down menu and enter number of characters. Demo site uses 150.

If using Genesis Featured Posts widget here:

1. Select Category from drop down menu.

2. Choose 1 for Number of Posts to Show.

3. Check Show Featured Image.

4. Choose either square(120x120) thumbnail(150x150) or mini(80x80).

5. Choose Left or Right for Image Alignment.

6. Check Show Post Title. Do not check Show Post Info.

## Responsive Menus

Winfield comes with built-in responsive support for the Primary, Secondary and Header navigation menus. They will kick in at the 768px breakpoint.

IMPORTANT!! If you are placing a menu in the header widget area and want it to be responsive make sure it is called Header Navigation. That is the name the javascript file is looking for. If you call it anything else it won't work. Don't place an existing custom menu in that location. Create a NEW custom menu, call it Header Navigation then use that menu in the header right widget area.

## Content Boxes:

The custom content boxes make use of DIV classes. For example ...

<code>&lt;div class="content-box-blue"&gt;some random text&lt;/div&gt;</code>

There are 7 styles to choose from. Refer to the style sheet for details.

## Gradient Buttons:

Each button has a unique class. For example ...

<code>&lt;a class="button-green" href="#"&gt;Link Text&lt;/a&gt;</code> 

The above will render the Green button. There are 11 styles to choose from. Refer to the style sheet for details.

## Recommended Plugins

1. [Genesis Responsive Slider](http://wordpress.org/extend/plugins/genesis-responsive-slider)

2. [Genesis eNews Extended](http://wordpress.org/extend/plugins/genesis-enews-extended/)

3. [Genesis Widgetized Archive](http://wordpress.org/plugins/genesis-widgetized-archive/)

4. [Genesis Widgetized Not Found & 404](http://wordpress.org/plugins/genesis-widgetized-notfound/)

5. [Genesis Box](http://wordpress.org/plugins/wp-genesis-box/)

6. [Regenerate Thumbnails](http://wordpress.org/extend/plugins/regenerate-thumbnails/)

## Credit

1. [Content Boxes by Brian Gardner](http://www.briangardner.com/genesis-content-boxes/)

2. [Gradient Buttons by Brian Gardner](http://www.briangardner.com/social-media-buttons/)

3. [Icons for eNews and Search input fields by iconmonstr](http://iconmonstr.com/)

4. [Responsive Menus by Brad Potter](http://bradpotter.com/)


## Further

1. [Theme Release Page](http://wpcanada.ca/our-themes/winfield/)

2. [Theme Demo](http://demo.wpcanada.ca/winfield/)

3. Download from [Google](http://code.google.com/p/winfield-theme/)

4. Download from [GitHub](https://github.com/lenkutchma/Winfield)

## Bug Reports

1. [Google](http://code.google.com/p/winfield-theme/issues/list)

2. [GitHub](https://github.com/lenkutchma/Winfield/issues)

## Support

The Winfield child theme is offered without support and is intended for users who are knowledgeable with WordPress and the Genesis Framework.

Enjoy!