[![phpBB](https://www.phpbb-es.com/foro/styles/flat-style/theme/images/logo_new_small.png)](https://www.phpbb-es.com/foro/viewtopic.php?f=147&t=42139)
# [3.3] Slideshow for Header Extension 3.3.0

## Description
- This Extension give a Slider Carousel effect for jQuery in the header of the prosilver >= 3.3.0, we_universal >= 2.6.3, X-Creamy >= 1.2.3, Orange_BBEs >= 3.0.0, flat-style >= 1.1.0, elegance >= 3.3.0, Carbon >= 1.3.3, CleanSilver >= 1.1.0, Maxthon >= 2.1.0, Rock'n Roll >= 3.0.0, Black-Silver >= 1.3.3 (& Slim-Split), prosilver_se >= 3.3.0, cubes >= 1.0.3, proflat >= 1.3.0, pro_ubuntu_lucid >= 3.0.0, ne-blackgreen >= 4.0, rain_forest >= 1.1.3 and PS4 Pro >= 2.1.0 templates replacing the existing banner.

- Supports up to 60 images to which an external link URL can optionally be associated.
- In order not to alter the initial design of the style, the recommended size of the images must be 2570px x 465px. 
- All image types supported by the <img> HTML image element, are supported. 
- The delay time for the transition is configurable, as well as the activation / deactivation of the extension. 
- The loading images is done randomly. 
- Slider effect and fade effect are included.
- All options are configurable from the ACP.

### Warning
In case there exist an older version of this extension installed on the `/ext/Picaron/SlideWeUni` route, it is necessary to eliminate it completely by clearing/deleting all the saved data prior to the installation of this version.

## Requirements
* phpBB >= 3.3.0
* PHP >= 7.1.0

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
