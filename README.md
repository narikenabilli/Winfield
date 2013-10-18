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

IMPORTANT!! Make sure to call your menus Primary Navigation, Secondary Navigation and Header Navigation as those are the names the javascript file is looking for. It doesn't matter where you place them but they have to use those names.

While this child theme is internationalized if you wish to translate the output of the responsive menus you'll need to do so manually. This is because the output is not generated from the javascript file but rather from the style sheet using the content property. I currently know of no way to automatically translate CSS generated content.

At the 768px breakpoint you'll see that the menu output looks like this => HEADER MENU, PRIMARY MENU, SECONDARY MENU. To change this output open the child theme's style.css file and scroll toward the bottom. The section you are looking for is this ...

<code>/*
18 Media Queries
---------------------------------------------------- */</code>

Continue scrolling down a bit until you find this ...

<code>/* Menu Icon properties */</code>

There are 3 blocks that will need to be manually changed.

FIRST BLOCK:

	#header-menu-icon::before {
		content: "HEADER MENU \25BC";
	}

	#primary-menu-icon::before {
		content: 'PRIMARY MENU \25BC';
	}

	#secondary-menu-icon::before {
		content: 'SECONDARY MENU \25BC';
	}
	
SECOND BLOCK:

	#header-menu-icon:hover::before {
		content: "HEADER MENU \25BC";
	}

	#primary-menu-icon:hover::before {
		content: 'PRIMARY MENU \25BC';
	}

	#secondary-menu-icon:hover::before {
		content: 'SECONDARY MENU \25BC';
	}
	
THIRD BLOCK:

	#header-menu-icon:active::before {
		content: "HEADER MENU \25BC";
	}

	#primary-menu-icon:active::before {
		content: 'PRIMARY MENU \25BC';
	}

	#secondary-menu-icon:active::before {
		content: 'SECONDARY MENU \25BC';
	}
	
The First Block deals with the output of the menus normal state, the Second Block deals with the output of the menus hover state and the Third Block deals with the output of the menus active (or onclick) state.

This is CSS generated content. Using header-menu for example, you see HEADER MENU on a mobile or when you re-size your desktop browser window because of this line ... <code>content: "HEADER MENU \25BC";</code>

You may change HEADER MENU to whatever you want. The 25BC is a unicode which translates to an upside down triangle. Change the terms HEADER MENU, PRIMARY MENU and SECONDARY MENU to whatever you'd like. Do so in ALL 3 instances as referenced above.

Let's use a real life example. Let's assume you operate a Dutch language website. You've translated the child theme using the included .POT file. Now you want to change the phrase PRIMARY MENU. Swap out PRIMARY MENU for Hoofdmenu. It should now look like this ...

	#header-menu-icon::before {
	content: "Hoofdmenu \25BC";
	}
	
Do so for all 3 instances.

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