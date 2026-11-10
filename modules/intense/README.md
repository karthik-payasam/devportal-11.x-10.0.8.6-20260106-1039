## INTRODUCTION

Provides a simple Intense image field formatter. A stand alone javascript
library for viewing images on the full screen. Using the touch/ mouse position
for panning.

All styling of image elements is up to the user, Intense.js only handles the
creation, styling and management of the image viewer and captions.

***
## <a name="first"> </a>FIRST THINGS FIRST!
Read more at:
* [Github](https://git.drupalcode.org/project/blazy/-/blob/3.0.x/docs/README.md#first-things-first)
* [Blazy UI](/admin/help/blazy_ui#first)

## REQUIREMENTS
* Intense library:
  + Download Intense archive from
    [Intense images](https://github.com/tholman/intense-images/)
  + Extract it as is, rename **intense-images-master** to **intense"**, so the
    asset is available at:
    **/libraries/intense/intense.min.js**

* [Blazy 3.x](https://drupal.org/project/blazy)


## INSTALLATION
Install the module as usual, more info can be found on:

[Installing Drupal 8 Modules](https://drupal.org/node/1897420)


## USAGE / CONFIGURATION

* Enable this module and its dependency, core image and Blazy modules.
* At **/admin/config/people/accounts/fields**, or **/admin/structure/types**,
  or any fieldable entity, click **Manage display**.
* Under **Format**, choose blazy-related formatters:
  **Blazy**, **Slick carousel**, etc. for image field.
* Click the **Configure** icon.
* Under **Media switcher**, choose **Image to Intense**. Adjust the rest.
* The same option is also available at Blazy Filter for Blazy 8.x-2.x.


### CUSTOM/ VIEWS GALLERY
Assumes a gallery for multiple nodes/ entities within a Views block/ page.
Use Blazy Grid Views style for easy and responsive grid building.
Use Blazy formatters to take care of things below. Only apply for
non-formatters, and or when Blazy does not fit the needs.

1. Add a class `intense-gallery` to Views container via Views UI:

   **Advanced** > **CSS class**

   If not using Blazy Grid. If using Blazy Grid, be sure to check out Blazy Grid
   docs for better integration.

2. Choose ONE of the options below for images whichever is easier at Views UI:
   1. Add a class `intense` to individual `IMG` with attribute `[data-image]`
      pointing to the original/ largest image. Ignore if using Blazy formatters!
   2. Or wrap each IMG with a link which has a class `intense` with attribute
      `HREF` pointing to the original/ largest image.
   3. Or use Blazy/ Slick formatters, choose **Image to Intense** under
      **Media switcher**. Adjust the rest. Be sure to leave
      **Use field template** under **Style settings**  unchecked. If checked,
      the gallery is locked to a single entity, that is no Views gallery,
      but gallery per field.
   4. Just to be clear: choose ONE of the above, the easiest, not all.

Use **Image URL formatter** with Views custom rewrite as needed if not using
Blazy/ Slick formatters.


## FEATURES
* Has no formatter, instead integrated into **Media switcher** option as seen at
  Blazy/ Slick formatters, including Blazy Views fields for File Entity and
  Media, and also Blazy Filter for inline images.
* Supports for IMG.intense, or IMG|DIV CSS background wrapped in a link.
* Fullscreen video if Media module is installed. Requires Blazy 2.x.
* Next and previous arrows. Disclaimer, this is a module feature, not original
  library implementation. If any issue, use CSS to hide the arrows:

  ````
  body > .intensed__arrow {display: none;}
  ````


## MIGRATION/ UPGRADING FROM 1.x to 2.x
Migration is not supported, yet. Consider 2.x for new sites only.
We haven't provided an upgrade path for now, yet.


## INTENSE 2.x CHANGES
1. Removed Intense formatter. Now Intense is just a Media switcher option at
   blazy-related formatters. Meaning Intense is available for free at Blazy,
   Slick carousel, Views field, including Blazy Filter, Splide Filter, Slick
   Filter for inline images.
2. Removed **theme_intense()** for **theme_blazy()**.


## MAINTAINERS
* [Gaus Surahman](https://drupal.org/user/159062)
* [Contributors](https://www.drupal.org/node/2647200/committers)
* The CHANGELOG.txt for more helpful souls with suggestions, and bug reports.


## READ MORE
See the project page on drupal.org:

[Intense module](https://drupal.org/project/intense)

See the Intense images docs at:

* [Intense at Github](https://github.com/tholman/intense-images/)
* [Intense website](https://tholman.com/intense-images)
