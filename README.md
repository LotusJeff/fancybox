[![Build Status](https://travis-ci.org/LotusJeff/fancybox.svg?branch=master)](https://travis-ci.org/LotusJeff/fancybox.svg?branch=master)

# Fancybox for phpBB 3.1
# This is an abandon project. You are welcome to fork it.

This extension adds the [Fancybox](http://fancyapps.com/fancybox/) jQuery plugin to phpBB 3.1. The extension will work with the existing thumbnail and image display capabilities of phpBB.  It will turn on a fancybox for displaying the large image of thumbnails.  It defaults as a gallery showing all the attached images on the page.  

## Requirements
* phpBB 3.1.0 or higher

Note: This extension is in development. Installation is only recommended for testing purposes and is not supported on live boards.

## Installation

#### Download Method
- [Download the latest release](https://github.com/LotusJeff/fancybox) and unzip it.
- Unzip the downloaded files and copy it to the `ext` directory of your phpBB board. The directory structure should be **phpBB3/ext/lotusjeff/fancybox**
- Navigate in the ACP to `Customise -> Manage extensions`.
- Look for Fancybox under the Disabled Extensions list, and click `Enable` link.

#### Git Clone Method

```
cd phpBB3  (base forum install)
git clone https://github.com/LotusJeff/fancybox.git ext/lotusjeff/fancybox/
```

## Activate
- Go to ACP -> tab Customise -> Manage extensions -> enable Fancybox

## Configure

- Goto ACP -> Extensions -> Fancybox

## Update

#### Download Installation Used

- Go to ACP -> tab Customise -> Manage extensions -> disable Fancybox
- Delete files in ext/lotusjeff/fancybox
- Download new files. Unzip and copy files to phpBB3/ext/lotusjeff/fancybox
- Go to ACP -> tab Customise -> Manage extensions -> enable Fancybox

#### Git Clone Installation Used

- Go to ACP -> tab Customise -> Manage extensions -> disable Fancybox

```
cd phpBB3/ext/lotusjeff/fancybox
git pull
```

- Go to ACP -> tab Customise -> Manage extensions -> enable Fancybox

## Uninstallation
- Navigate in the ACP to `Customise -> Manage extensions`.
- Click the `Disable` link for Fancybox.
- To permanently uninstall, click `Delete Data`, then delete the `fancybox` folder from `phpBB3/ext/lotusjeff/`.

## Problems
- Check the file structure where you installed the code. It must be in:
```
       <phpBB root folder>/ext/lotusjeff/fancybox
```

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2015 - Jeff Cocking (LotusJeff)
