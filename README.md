ViQa-Kissu - An expanded lightweight and full featured PHP imageboard.
========================================================

## This repo is a working directory and not intended for reuse. It's missing a good majority of files.
### If interested in using this software for your own imageboard, a version should be around sometime between Christmas and early January on a release/master branch and tag.

About
------------
ViQa-Kissu is an expansion on top of the free light-weight, fast, highly configurable and user-friendly
imageboard software package, ViChan. ViQa is written in PHP and has few dependencies. It aims to expand upon the current structure of ViChan to provide expanded functionality with a focus on more democratic and powerful system of moderation to beat spam while staying liked by your users.

On December 2018, ECHibiki started this repo to expose the source of /qa/'s Kissu.moe

In November 2017, Marcin Łabanowski (@czaks) retired as maintainer for personal reasons. His retirement may be temporary, but in his absence, Fredrick Brennan (@ctrlcctrlv), co-maintainer since 2013, and #3 in terms of number of commits, took his place as interim sole maintianer and point of contact. (See [issue #266](https://github.com/vichan-devel/vichan/issues/266))

*Security problems can be reported to Fredrick Brennan at his email: COPYPASTE \<AT\> KITTENS \<DOT\> PH.*
	
History
------------
vichan is a fork of (now defunc'd) [Tinyboard](http://github.com/savetheinternet/Tinyboard),
a great imageboard package, actively building on it and adding a lot of features and other
improvements.

Support and announcements: https://engine.vichan.net/

Requirements
------------
1.	PHP >= PHP 7.2.
2.	MySQL/MariaDB server
3.	[mbstring](http://www.php.net/manual/en/mbstring.installation.php) 
4.	[PHP GD](http://www.php.net/manual/en/intro.image.php)
5.	[PHP PDO](http://www.php.net/manual/en/intro.pdo.php)
6.	A Unix-like OS, preferrably FreeBSD or Linux. 
Notes. ViQa was developed on Windows7 with an Ubuntu18.04 VPS Server

We try to make sure vichan is compatible with all major web servers. vichan does not include an Apache ```.htaccess``` file nor does it need one.

### Recommended
1.	MySQL/MariaDB server >= 5.5.3
2.	ImageMagick (command-line ImageMagick or GraphicsMagick preferred).
3.	[APC (Alternative PHP Cache)](http://php.net/manual/en/book.apc.php),
	[XCache](http://xcache.lighttpd.net/) or
	[Memcached](http://www.php.net/manual/en/intro.memcached.php)

Contributing
------------
You can contribute to vichan by:
*	Developing patches/improvements/translations and using GitHub to submit pull requests
*	Providing feedback and suggestions
*	Writing/editing documentation

If you need help developing a patch, please join our IRC channel.

Installation
-------------
1.	Download and extract vichan to your web directory or get the latest
	development version with:

        git clone git://github.com/vichan-devel/vichan.git
	
2.	Navigate to ```install.php``` in your web browser and follow the
	prompts.
3.	vichan should now be installed. Log in to ```mod.php``` with the
	default username and password combination: **admin / password**.

Please remember to change the administrator account password.

See also: [Configuration Basics](https://web.archive.org/web/20121003095922/http://tinyboard.org/docs/?p=Config).

Upgrade
-------
To upgrade from any version of Tinyboard or vichan:

Either run ```git pull``` to update your files, if you used git, or
backup your ```inc/instance-config.php```, replace all your files in place
(don't remove boards etc.), then put ```inc/instance-config.php``` back and
finally run ```install.php```.

To migrate from a Kusaba X board, use http://github.com/vichan-devel/Tinyboard-Migration

Support
--------
vichan is still beta software -- there are bound to be bugs. If you find a
bug, please report it.

If you need assistance with installing, configuring, or using vichan, you may
find support from a variety of sources:

*	If you're unsure about how to enable or configure certain features, make
	sure you have read the comments in ```inc/config.php```.
*	Check out an [official vichan board](http://int.vichan.net/devel/).
*	You can join vichan's IRC channel for support
	[irc.6irc.net #vichan-devel](irc://irc.6irc.net/vichan-devel)

### Tinyboard support
vichan is based on a Tinyboard, so both engines have very much in common. These
links may be helpful for you as well: 

*	Tinyboard documentation can be found [here](https://web.archive.org/web/20121016074303/http://tinyboard.org/docs/?p=Main_Page).

CLI tools
-----------------
There are a few command line interface tools, based on Tinyboard-Tools. These need
to be launched from a Unix shell account (SSH, or something). They are located in a ```tools/```
directory.

You actually don't need these tools for your imageboard functioning, they are aimed
at the power users. You won't be able to run these from shared hosting accounts
(i.e. all free web servers).

Localisation
------------
Wanting to have vichan in your language? You can contribute your translations at this URL:

https://www.transifex.com/projects/p/tinyboard-vichan-devel/

Oekaki
------
vichan makes use of [wPaint](https://github.com/websanova/wPaint) for oekaki. After you pull the repository, however, you will need to download wPaint separately using git's `submodule` feature. Use the following commands:

```
git submodule init
git submodule update
```

To enable oekaki, add all the scripts listed in `js/wpaint.js` to your `instance-config.php`.

WebM support
------------
Read `inc/lib/webm/README.md` for information about enabling webm.

vichan API
----------
vichan provides by default a 4chan-compatible JSON API. For documentation on this, see:
https://github.com/vichan-devel/vichan-API/ .

License
--------
See [LICENSE.md](http://github.com/vichan-devel/vichan/blob/master/LICENSE.md).

