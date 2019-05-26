[![phpBB](https://www.phpbb.com/theme/images/logos/blue/160x52.png)](http://www.phpbb.com)
# [3.2][RC] Slideshow for Header v1.0.0
- This Extension give a Slider Carousel effect for jQuery in the header of the prosilver >= 3.2.5, we_universal >= 2.5.6, X-Creamy >= 1.0.9, Orange_BBEs >= 2.0.6, flat-style >= 1.0.6, elegance >= 3.2.3, Carbon >= 1.1.8, CleanSilver >= 1.0.1, Maxthon >= 2.0.3, Rock'n Roll >= 2.0.4, Black-Silver >= 1.1.9 (& Slim-Split), prosilver_se >= 3.2.5, cubes >= 1.0.2 and ne-blackgreen >= 3.6 templates replacing the existing banner.
- Supports up to 60 images to which an external link URL can optionally be associated.
- In order not to alter the initial design of the style, the recommended size of the images must be 2570px x 465px. 
- All image types supported by the <img> HTML image element, are supported. 
- The delay time for the transition is configurable, as well as the activation / deactivation of the extension. 
- The loading images is done randomly. 
- Slider effect and fade effect are included.
- All options are configurable from the ACP.

### Warning
In case there exist an older version of this extension installed on the `/ext/Picaron/SlideWeUni` route, it is necessary to eliminate it completely by clearing/deleting all the saved data prior to the installation of this version.


## Install
1. Download the latest release.
2. In the `ext` directory of your phpBB board, copy the `pikaron/slideweuni` folder. It must be so: `/ext/pikaron/slideweuni`
4. Navigate in the ACP to `Customise -> Manage extensions`.
5. Look for `Slideshow for Header` under the Disabled Extensions list, and click its `Enable` link.

## Uninstall
1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Slideshow for Header` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/pikaron/slideweuni` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
