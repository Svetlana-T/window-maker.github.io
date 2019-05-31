<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<!-- This manual is for WINDOW MAKER window manager, version git#next.

Copyright (C) 2015 The Window Maker Team.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program, see file COPYING for details. -->
<!-- Created by GNU Texinfo 6.1, http://www.gnu.org/software/texinfo/ -->
<head>
<title>Window Maker Compilation and Installation 1.0</title>

<meta name="description" content="Window Maker Compilation and Installation 1.0">
<meta name="keywords" content="Window Maker Compilation and Installation 1.0">
<meta name="resource-type" content="document">
<meta name="distribution" content="global">
<meta name="Generator" content="makeinfo">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="#Top" rel="start" title="Top">
<link href="#SEC_Contents" rel="contents" title="Table of Contents">
<link href="dir.html#Top" rel="up" title="(dir)">
<link href="title.css" rel="stylesheet" type="text/css" />
</head>

<body lang="en">

  <?php include("dock.php");  ?>
  <?php include("header.php"); ?>

<a name="Top"></a>
<a name="Window-Maker-Compilation-and-Installation"></a>
<h1 class="top">Window Maker Compilation and Installation</h1>

<p>A guide to configure, compile and install
<small>WINDOW MAKER</small> from sources.
</p>
<a name="SEC_Contents"></a>
<h2 class="contents-heading">Table of Contents</h2>

<div class="contents">

<ul class="no-bullet">
  <li><a name="toc-Prerequisites-1" href="#Prerequisites">1 Prerequisites</a>
  <ul class="no-bullet">
    <li><a name="toc-Supported-Platforms" href="#Supported-Platforms">1.1 Supported Platforms</a></li>
    <li><a name="toc-Software-Dependencies-1" href="#Software-Dependencies-1">1.2 Software Dependencies</a></li>
    <li><a name="toc-Special-Dependencies-1" href="#Special-Dependencies-1">1.3 Special Dependencies</a></li>
    <li><a name="toc-Optional-Dependencies-1" href="#Optional-Dependencies-1">1.4 Optional Dependencies</a></li>
  </ul></li>
  <li><a name="toc-Building-WINDOW-MAKER" href="#Building-Window-Maker">2 Building <small>WINDOW MAKER</small></a>
  <ul class="no-bullet">
    <li><a name="toc-Getting-the-Sources" href="#Getting-the-Sources">2.1 Getting the Sources</a></li>
    <li><a name="toc-Build-and-Install" href="#Build-and-Install">2.2 Build and Install</a></li>
    <li><a name="toc-User-specific-configuration" href="#User-specific-configuration">2.3 User specific configuration</a></li>
    <li><a name="toc-Locales_002fInternationalisation" href="#Locales_002fInternationalisation">2.4 Locales/Internationalisation</a></li>
    <li><a name="toc-Configure-Options-1" href="#Configure-Options-1">2.5 Configure Options</a>
    <ul class="no-bullet">
      <li><a name="toc-Installation-Directory" href="#Installation-Directory">2.5.1 Installation Directory</a></li>
      <li><a name="toc-External-Libraries" href="#External-Libraries">2.5.2 External Libraries</a></li>
      <li><a name="toc-X11-and-Extensions" href="#X11-and-Extensions">2.5.3 X11 and Extensions</a></li>
      <li><a name="toc-Feature-Selection" href="#Feature-Selection">2.5.4 Feature Selection</a></li>
      <li><a name="toc-Developer-Stuff" href="#Developer-Stuff">2.5.5 Developer Stuff</a></li>
    </ul></li>
  </ul></li>
  <li><a name="toc-Miscellaneous-1" href="#Miscellaneous">3 Miscellaneous</a>
  <ul class="no-bullet">
    <li><a name="toc-Platform-Specific-Notes" href="#Platform-Specific-Notes">3.1 Platform Specific Notes</a></li>
    <li><a name="toc-I-don_0027t-have-the-root-password-_003a_0028" href="#I-don_0027t-have-the-root-password-_003a_0028">3.2 I don&rsquo;t have the <em>root</em> password :(</a></li>
    <li><a name="toc-Upgrading" href="#Upgrading">3.3 Upgrading</a></li>
  </ul></li>
  <li><a name="toc-Troubleshooting-1" href="#Troubleshooting">4 Troubleshooting</a>
  <ul class="no-bullet">
    <li><a name="toc-Error-with-loading-fonts_002c-even-if-they-exist" href="#Error-with-loading-fonts_002c-even-if-they-exist">4.1 Error with loading fonts, even if they exist</a></li>
    <li><a name="toc-configure-doesn_0027t-detect-libtiff_002c-or-other-graphic-libraries" href="#configure-doesn_0027t-detect-libtiff_002c-or-other-graphic-libraries">4.2 configure doesn&rsquo;t detect <em>libtiff</em>, or other graphic libraries</a></li>
    <li><a name="toc-configure-doesn_0027t-detect-libXpm" href="#configure-doesn_0027t-detect-libXpm">4.3 configure doesn&rsquo;t detect <em>libXpm</em></a></li>
    <li><a name="toc-Segmentation-fault-on-startup" href="#Segmentation-fault-on-startup">4.4 Segmentation fault on startup</a></li>
    <li><a name="toc-_0022_002e_002e_002e_003a-your-machine-is-misconfigured_002e-gethostname_0028_0029-returned-_0028none_0029_0022" href="#g_t_0022_002e_002e_002e_003a-your-machine-is-misconfigured_002e-gethostname_0028_0029-returned-_0028none_0029_0022">4.5 &quot;...: your machine is misconfigured. gethostname() returned (none)&quot;</a></li>
    <li><a name="toc-The-root-menu-contains-only-2-entries_002e-_0028_0022XTerm_0022-and-_0022Exit_002e_002e_002e_0022_0029" href="#The-root-menu-contains-only-2-entries_002e-_0028_0022XTerm_0022-and-_0022Exit_002e_002e_002e_0022_0029">4.6 The root menu contains only 2 entries. (&quot;XTerm&quot; and &quot;Exit...&quot;)</a></li>
  </ul></li>
</ul>
</div>


<br>
<p>This manual is for Window Maker, version git#next.
</p>


<hr>
<a name="Prerequisites"></a>
<a name="Prerequisites-1"></a>
<h2 class="chapter">1 Prerequisites</h2>

<a name="Supported-Platforms"></a>
<h3 class="section">1.1 Supported Platforms</h3>

<ul class="no-bullet">
<li>- Intel GNU/Linux Systems in general, <tt>ix86</tt> and <tt>x86_64</tt> but other architectures should work
</li><li>- BSD systems
</li><li>- Solaris, at least on release 10 and 11
</li></ul>

<p>Patches to make it work on other platforms are welcome.
</p>

<a name="Software-Dependencies-1"></a>
<h3 class="section">1.2 Software Dependencies</h3>
<a name="Software-Dependencies"></a>
<p>The following software is required to use <small>WINDOW MAKER</small>:
</p><ul class="no-bullet">
<li>- X11R6.x

<p>Window Maker can be compiled in older versions of <em>X</em>, like <em>X11R5</em> (<em>Solaris</em>)
or <em>X11R4</em> (<em>OpenWindows</em>) but it will not work 100% correctly.
In such servers there will not be application icons and you&rsquo;ll have trouble using the dock.
Upgrading the client libraries (<em>Xlib</em>, <em>Xt</em>, etc.) will help if you can&rsquo;t upgrade
the server.
</p></li></ul>

<p>The following is required to build <small>WINDOW MAKER</small>:
</p><ul class="no-bullet">
<li>- Basic obvious stuff

<ul>
<li> <em>gcc</em> (or some other ANSI C compiler, supporting some C99 extensions)
</li><li> <em>glibc</em> development files (usually <samp>glibc-devel</samp> in Linux distributions)
</li><li> <em>X</em> development files (<samp>XFree86-devel</samp> or something similar)
</li></ul>

</li><li>- <em>Xft2</em> and its dependencies

<p>Dependencies include <em>freetype2</em> and <em>fontconfig</em>.
You will also need the development files for them (<samp>xft2-devel</samp>).
Sources are available at: <a href="http://www.freedesktop.org/wiki/Software/Xft/">http://www.freedesktop.org/wiki/Software/Xft/</a>
</p>
</li></ul>

<p><b>Note</b>:
<small>WINDOW MAKER</small> is known to compile with <em>gcc</em> and <em>clang</em>;
the code source is mostly ANSI C (also known as C89 and C90) but is uses very few of the C99
novelties;
it also uses a few attributes introduced in the C11 standard but those are detected automatically,
so most compilers should work.
</p>

<a name="Special-Dependencies-1"></a>
<h3 class="section">1.3 Special Dependencies</h3>
<a name="Special-Dependencies"></a>

<p>If you want to compile using the sources from the git repository instead of the distribution
package, you will also need:
</p><ul>
<li> <em>git</em>
</li><li> <em>autoconf</em> 2.69
</li><li> <em>automake</em> 1.12
</li><li> <em>libtool</em> 1.4.2
</li></ul>


<a name="Optional-Dependencies-1"></a>
<h3 class="section">1.4 Optional Dependencies</h3>
<a name="Optional-Dependencies"></a>
<p>These libraries are not required to make <small>WINDOW MAKER</small> work, but they are supported in case you
want to use them. Version numbers are indicative, but other versions might work too.
</p>
<ul class="no-bullet">
<li>- <em>libXPM</em> 4.7 or newer

<p>Older versions may not work!
</p>
<p>Available from <a href="http://xlibs.freedesktop.org/release/">http://xlibs.freedesktop.org/release/</a>
</p>
<p>There is built-in support for <em>XPM</em> files, but it will not
load images in some uncommon encodings.
</p>
</li><li>- <em>libpng</em> 0.96 or newer and <em>zlib</em>

<p>For <em>PNG</em> image support,
<a href="http://www.libpng.org/pub/png/libpng.html">http://www.libpng.org/pub/png/libpng.html</a>
</p>
</li><li>- <em>libtiff</em> 3.4 or newer

<p>For <em>TIFF</em> image support,
<a href="http://www.libtiff.org/">http://www.libtiff.org/</a>
</p>
</li><li>- <em>libjpeg</em> 6.0.1 or newer

<p>For <em>JPEG</em> image support,
<a href="http://www.ijg.org/">http://www.ijg.org/</a>
</p>
<p>Note that if you don&rsquo;t have it, <code>configure</code> will issue a big warning in the end,
this is because JPEG images are often used in themes and for background images
so you probably want this format supported.
</p>
</li><li>- <em>libgif</em> 2.2 or <em>libungif</em>

<p>For <em>GIF</em> image support,
<a href="http://giflib.sourceforge.net/">http://giflib.sourceforge.net/</a>
</p>
</li><li>- <em>WebP</em> 0.4.1 or newer

<p>The reference library from <em>Google</em> for their image format,
<a href="https://developers.google.com/speed/webp/download">https://developers.google.com/speed/webp/download</a>
</p>
</li><li>- <em>GNU xgettext</em>

<p>If you want to use translated messages, you will need <em>GNU gettext</em>.
Other versions of <em>gettext</em> are not compatible and will not work.
Get the <em>GNU</em> version from <a href="http://www.gnu.org/software/gettext/">http://www.gnu.org/software/gettext/</a>
</p>
</li><li>- <em>Pango</em> 1.36.8 or newer

<p>This library can be used by the <em>WINGs</em> toolkit to improve support for <em>UTF-8</em> and for
languages written in right-to-left direction, in some widgets.
You have to explicitly ask for its support through (see <a href="#Configure-Options">Configure Options</a>).
You can get it from <a href="http://www.pango.org/Download">http://www.pango.org/Download</a>
</p>
</li><li>- <em>libbsd</em>

<p>This library can be used by the <em>WINGs</em> utility library to make use of <code>strlcat</code> and
<code>strlcpy</code> instead of using built-in functions if your system does not provide them in its
core <em>libc</em>.
You should let <small>WINDOW MAKER</small>&rsquo;s <code>configure</code> detect this for you.
You can get it from <a href="http://libbsd.freedesktop.org/wiki/">http://libbsd.freedesktop.org/wiki/</a>
</p>
</li><li>- <em>Inotify</em>

<p>If you have Linux&rsquo;s <em>inotify</em> support, <small>WINDOW MAKER</small> will use it to check for configuration
updates instead of polling regularly the file.
The needed header comes with the kernel, typical packages names include:
</p><ul>
<li> <samp>kernel-headers</samp> for <em>Slackware</em> and <em>Fedora</em>
</li><li> <samp>linux-userspace-headers</samp> for <em>Mageia</em>
</li><li> <samp>linux-libc-dev</samp> for <em>Debian</em> and <em>Ubuntu</em>
</li><li> <samp>linux-glibc-devel</samp> for <em>OpenSuSE</em>
</li></ul>

</li><li>- <em>MagickWand</em> 6.8.9-9 or newer

<p>If found, then the library <em>WRaster</em> can use the <em>ImageMagick</em> library to let
<small>WINDOW MAKER</small> support more image formats, like <em>SVG</em>, <em>BMP</em>, <em>TGA</em>, ...
You can get it from <a href="http://www.imagemagick.org/">http://www.imagemagick.org/</a>
</p>
</li><li>- <em>Boehm GC</em>

<p>This library can be used by the <em>WINGs</em> utility toolkit to use a
<cite>Boehm-Demers-Weiser Garbage Collector</cite> instead of the traditional
<code>malloc</code>/<code>free</code> functions from the <em>libc</em>.
You have to explicitly ask for its support though (see <a href="#Configure-Options">Configure Options</a>).
You can get it from <a href="http://www.hboehm.info/gc/">http://www.hboehm.info/gc/</a>
</p>
</li></ul>


<hr>
<a name="Building-Window-Maker"></a>
<a name="Building-WINDOW-MAKER"></a>
<h2 class="chapter">2 Building <small>WINDOW MAKER</small></h2>

<a name="Getting-the-Sources"></a>
<h3 class="section">2.1 Getting the Sources</h3>

<p>The latest version of <small>WINDOW MAKER</small> (<tt>-crm</tt>) can be downloaded from
<a href="http://www.windowmaker.org/">http://www.windowmaker.org/</a>
</p>
<p>Alternatively, the development branch, called <tt>#next</tt> is in the <em>git</em> repository at
<a href="http://repo.or.cz/w/wmaker-crm.git">http://repo.or.cz/w/wmaker-crm.git</a>
</p>
<p>If you want to use the <em>git</em> versions, you can get it with:
</p><div class="example">
<pre class="example">git clone -b next git://repo.or.cz/wmaker-crm.git
</pre></div>
<p>then, assuming you have the dependencies listed in <a href="#Special-Dependencies">Special Dependencies</a>, you have to
type:
</p><div class="example">
<pre class="example">./autogen.sh
</pre></div>
<p>to generate the configuration script.
</p>

<a name="Build-and-Install"></a>
<h3 class="section">2.2 Build and Install</h3>

<p>For a quick start, type the following in your shell prompt:
</p>
<div class="example">
<pre class="example">./configure
make
</pre></div>

<p>then, login as <em>root</em> and type:
</p>
<div class="example">
<pre class="example">make install
ldconfig
</pre></div>

<p>or if you want to strip the debugging symbols from the binaries to make them smaller,
you can type instead:
</p>
<div class="example">
<pre class="example">make install-strip
ldconfig
</pre></div>

<p>This will build and install <small>WINDOW MAKER</small> with default parameters.
</p>
<p>If you want to customise some compile-time options, you can do the following:
</p>
<ol>
<li> (optional) Look at the <a href="#Configure-Options">Configure Options</a>, for the options available.
Also run:
<div class="example">
<pre class="example">./configure --help
</pre></div>

<p>to get a complete list of options that are available.
</p>
</li><li> Run configure with the options you want.
For example, if you want to use the <samp>--enable-modelock</samp> option, type:
<div class="example">
<pre class="example">./configure --enable-modelock
</pre></div>

</li><li> (optional) Edit <samp>src/wconfig.h</samp> with your favourite text editor and browse through it for some
options you might want to change.

</li><li> Compile. Just type:
<div class="example">
<pre class="example">make
</pre></div>

</li><li> Login as root (if you can&rsquo;t do that, read the <a href="#No-Root-Password">I don&rsquo;t have the <em>root</em> password</a>)
and install <small>WINDOW MAKER</small> in your system:
<div class="example">
<pre class="example">su root
make install
</pre></div>

</li></ol>


<a name="User-specific-configuration"></a>
<h3 class="section">2.3 User specific configuration</h3>

<p>These instructions do not need to be followed when upgrading <small>WINDOW MAKER</small>
from an older version, unless stated differently in the <cite>NEWS</cite> file.
</p>
<p>Every user on your system that wishes to run <small>WINDOW MAKER</small> must do the
following:
</p>
<ol>
<li> Install Window Maker configuration files in your home directory.
Type:
<div class="example">
<pre class="example">wmaker.inst
</pre></div>

<p><code>wmaker.inst</code> will install <small>WINDOW MAKER</small> configuration files and will
setup X to automatically launch <small>WINDOW MAKER</small> at startup.
</p>
</li></ol>

<p>That&rsquo;s it!
</p>
<p>You can type <code>man wmaker</code> to get some general help for configuration
and other stuff.
</p>
<p>Read the <cite>User Guide</cite> for a more in-depth explanation of <small>WINDOW MAKER</small>.
</p>
<p>You might want to take a look at the <cite>FAQ</cite> too.
</p>

<a name="Locales_002fInternationalisation"></a>
<h3 class="section">2.4 Locales/Internationalisation</h3>

<p><small>WINDOW MAKER</small> has national language support. The procedure to enable national
language support is described in the dedicated
<a href="wmaker_i18n.html#Enabling-Languages-support">Enabling Languages support</a> in <cite><samp>README.i18n</samp></cite>.
</p>

<a name="Configure-Options-1"></a>
<h3 class="section">2.5 Configure Options</h3>
<a name="Configure-Options"></a>
<p>These options can be passed to the configure script to enable/disable
some <small>WINDOW MAKER</small> features. Example:
</p><div class="example">
<pre class="example">./configure --enable-modelock --disable-gif
</pre></div>
<p>will configure <small>WINDOW MAKER</small> with <em>modelock</em> supported and disable <em>gif</em> support.
Normally, you won&rsquo;t need any of them.
</p>
<p>To get the list of all options, run <code>./configure --help</code>
</p>

<a name="Installation-Directory"></a>
<h4 class="subsection">2.5.1 Installation Directory</h4>

<p>The default installation path will be in the <samp>/usr/local</samp> hierarchy;
a number of option can customise this:
</p>
<dl compact="compact">
<dt><samp>--prefix=<i>PREFIX</i></samp></dt>
<dt><samp>--exec-prefix=<i>EPREFIX</i></samp></dt>
<dt><samp>--bindir=<i>DIR</i></samp></dt>
<dt><samp>--sysconfdir=<i>DIR</i></samp></dt>
<dt><samp>--libdir=<i>DIR</i></samp></dt>
<dt><samp>--includedir=<i>DIR</i></samp></dt>
<dt><samp>--datarootdir=<i>DIR</i></samp></dt>
<dt><samp>--datadir=<i>DIR</i></samp></dt>
<dt><samp>--localedir=<i>DIR</i></samp></dt>
<dt><samp>--mandir=<i>DIR</i></samp></dt>
<dd><p>Standard options from <em>autoconf</em> to define target paths,
you probably want to read <a href="INSTALL.html#Installation-Names">Installation Names</a> in <cite><samp>INSTALL</samp></cite>.
</p>
</dd>
<dt><samp>--sbindir=<i>DIR</i></samp></dt>
<dt><samp>--libexecdir=<i>DIR</i></samp></dt>
<dt><samp>--sharedstatedir=<i>DIR</i></samp></dt>
<dt><samp>--localstatedir=<i>DIR</i></samp></dt>
<dt><samp>--oldincludedir=<i>DIR</i></samp></dt>
<dt><samp>--infodir=<i>DIR</i></samp></dt>
<dt><samp>--docdir=<i>DIR</i></samp></dt>
<dt><samp>--htmldir=<i>DIR</i></samp></dt>
<dt><samp>--dvidir=<i>DIR</i></samp></dt>
<dt><samp>--pdfdir=<i>DIR</i></samp></dt>
<dt><samp>--psdir=<i>DIR</i></samp></dt>
<dd><p>More standard options from <em>autoconf</em>, today these are not used by <small>WINDOW MAKER</small>;
they are provided automatically by <em>autoconf</em> for consistency.
</p>
</dd>
<dt><samp>--with-gnustepdir=<i>PATH</i></samp></dt>
<dd><p>Specific to <small>WINDOW MAKER</small>, defines the directory where <samp>WPrefs.app</samp> will be installed,
if you want to install it like a <em>GNUstep</em> applications.
If not specified, it will be installed like usual programs.
</p>
</dd>
<dt><samp>--with-pixmapdir=<i>DIR</i></samp></dt>
<dd><p>Specific to <small>WINDOW MAKER</small>, this option defines an additional path where <em>pixmaps</em> will be
searched. Nothing will be installed there; the default path taken is <samp><em>DATADIR</em>/pixmaps</samp>,
where <var>DATADIR</var> is the path defined from <samp>--datadir</samp>.
</p>
</dd>
<dt><samp>--with-defsdatadir=<i>DIR</i></samp></dt>
<dd><p>Specific to <small>WINDOW MAKER</small>, defines the directory where system configuration
files, e.g., <samp>WindowMaker</samp>, <samp>WMRootMenu</samp>, etc., are installed.  The
default value is <samp><em>SYSCONFDIR</em>/WindowMaker</samp>, where <var>SYSCONFDIR</var> is
the path defined from <samp>--sysconfdir</samp>.
</p>
</dd>
</dl>


<a name="External-Libraries"></a>
<h4 class="subsection">2.5.2 External Libraries</h4>

<p>Unless specifically written, <code>configure</code> will try to detect automatically for the libraries;
if you explicitly provide <samp>--enable-<em>FEATURE</em></samp> then it will break with an error message
if the library cannot be linked;
if you specify <samp>--disable-<em>FEATURE</em></samp> then it will not try to search for the library.
You can find more information about the libraries in the
<a href="#Optional-Dependencies">Optional Dependencies</a>.
</p>
<dl compact="compact">
<dt><samp>--enable-boehm-gc</samp></dt>
<dd><p>Never enabled by default, use Boehm GC instead of the default <em>libc</em> <code>malloc()</code>
</p>
</dd>
<dt><samp>--disable-gif</samp></dt>
<dd><p>Disable GIF support in <em>WRaster</em> library; when enabled use <samp>libgif</samp> or <samp>libungif</samp>.
</p>
</dd>
<dt><samp>--disable-jpeg</samp></dt>
<dd><p>Disable JPEG support in <em>WRaster</em> library; when enabled use <samp>libjpeg</samp>.
</p>
</dd>
<dt><samp>--without-libbsd</samp></dt>
<dd><p>Refuse use of the <samp>libbsd</samp> compatibility library in <em>WINGs</em> utility library,
even if your system provides it.
</p>
</dd>
<dt><samp>--disable-magick</samp></dt>
<dd><p>Disable <em>ImageMagick&rsquo;s MagickWand</em> support in <em>WRaster</em>, used to support for image formats.
</p>
</dd>
<dt><samp>--enable-pango</samp></dt>
<dd><p>Disabled by default, enable <em>Pango</em> text layout support in <em>WINGs</em>.
</p>
</dd>
<dt><samp>--disable-png</samp></dt>
<dd><p>Disable PNG support in <em>WRaster</em>; when enabled use <samp>libpng</samp>.
</p>
</dd>
<dt><samp>--disable-tiff</samp></dt>
<dd><p>Disable TIFF support in <em>WRaster</em>. when enabled use <samp>libtiff</samp>.
</p>
</dd>
<dt><samp>--disable-webp</samp></dt>
<dd><p>Disable WEBP support in <em>WRaster</em>. when enabled use <samp>libwebp</samp>.
</p>
</dd>
<dt><samp>--disable-xpm</samp></dt>
<dd><p>Disable use of <samp>libXpm</samp> for XPM support in <em>WRaster</em>, use internal code instead.
</p>
</dd>
</dl>

<p>The following options can be used to tell <code>configure</code> about extra paths that needs to be
used when compiling against libraries:
</p>
<dl compact="compact">
<dt><samp>--with-libs-from</samp></dt>
<dd><p>specify additional paths for libraries to be searched.
The <samp>-L</samp> flag must precede each path, like:
</p><div class="example">
<pre class="example">--with-libs-from=&quot;-L/opt/libs -L/usr/local/lib&quot;
</pre></div>

</dd>
<dt><samp>--with-incs-from</samp></dt>
<dd><p>specify additional paths for header files to be searched.
The <samp>-I</samp> flag must precede each paths, like:
</p><div class="example">
<pre class="example">--with-incs-from=&quot;-I/opt/headers -I/usr/local/include&quot;
</pre></div>

</dd>
</dl>


<a name="X11-and-Extensions"></a>
<h4 class="subsection">2.5.3 X11 and Extensions</h4>

<p><code>configure</code> will try to detect automatically the compilation paths for X11 headers and
libraries, and which X Extensions support can be enabled.
if you explicitly provide <samp>--enable-<em>FEATURE</em></samp> then it will break with an error message
if the extension cannot be used;
if you specify <samp>--disable-<em>FEATURE</em></samp> then it will not check for the extension.
</p>
<dl compact="compact">
<dt><samp>--x-includes=<i>DIR</i></samp></dt>
<dt><samp>--x-libraries=<i>DIR</i></samp></dt>
<dd><p><em>Autoconf</em>&rsquo;s option to specify search paths for <em>X11</em>,
for the case were it would not have been able to detect it automatically.
</p>
</dd>
<dt><samp>--disable-xlocale</samp></dt>
<dd><p>If you activated support for Native Languages, then <em>X11</em> may use a hack to also configure its
locale support when the program configure the locale for itself.
The <code>configure</code> script detects if the <em>Xlib</em> supports this or not;
this options explicitly disable this initialisation mechanism.
</p>
</dd>
<dt><samp>--enable-modelock</samp></dt>
<dd><p>XKB language status lock support. If you don&rsquo;t know what it is you probably don&rsquo;t need it.
The default is to not enable it.
</p>
</dd>
<dt><samp>--disable-shm</samp></dt>
<dd><p>Disable use of the <em>MIT shared memory</em> extension.
This will slow down texture generation a little bit, but in some cases it seems to be necessary due
to a bug that manifests as messed icons and textures.
</p>
</dd>
<dt><samp>--disable-shape</samp></dt>
<dd><p>Disables support for <em>shaped</em> windows (for <code>oclock</code>, <code>xeyes</code>, etc.).
</p>
</dd>
<dt><samp>--enable-xinerama</samp></dt>
<dd><p>The <em>Xinerama</em> extension provides information about the different screens connected when
running a multi-head setting (if you plug more than one monitor).
</p>
</dd>
<dt><samp>--enable-randr</samp></dt>
<dd><p>The <em>RandR</em> extension provides feedback when changing the multiple-monitor configuration in X11
and allows to re-configure how screens are organised.
</p>
<p>At current time, it is not enabled by default because it is NOT recommended (buggy);
<small>WINDOW MAKER</small> only restart itself when the configuration change, to take into account the new
screen size.
</p>
</dd>
</dl>


<a name="Feature-Selection"></a>
<h4 class="subsection">2.5.4 Feature Selection</h4>

<dl compact="compact">
<dt><samp>--disable-animations</samp></dt>
<dd><p>Disable animations permanently, by not compiling the corresponding code into <small>WINDOW MAKER</small>.
When enabled (the default), you still have a run-time configuration option in <em>WPrefs</em>.
</p>
</dd>
<dt><samp>--disable-mwm-hints</samp></dt>
<dd><p>Disable support for Motif&rsquo;s MWM Window Manager hints.
These attributes were introduced by the Motif toolkit to ask for special window appearance requests.
Nowadays this is covered by the NetWM/EWMH specification, but there are still applications that rely on MWM Hints.
</p>
</dd>
<dt><samp>--enable-wmreplace</samp></dt>
<dd><p>Add support for the <em>ICCCM</em> protocol for cooperative window manager replacement.
This feature is disabled by default because you probably don&rsquo;t need to switch seamlessly the window manager;
if you are making a package for a distribution you&rsquo;d probably want to enable this because it allows users to give
a try to different window managers without restarting everything for an extra cost that is not really big.
</p>
</dd>
<dt><samp>--disable-xdnd</samp></dt>
<dd><p>Disable support for dragging and dropping files on the dock, which launches a user-specified command
with that file.
Starting from version 0.65.6 this feature is enabled by default.
</p>
</dd>
<dt><samp>--enable-ld-version-script</samp></dt>
<dd><p>This feature is auto-detected, and you should not use this option.
When compiling a library (<samp>wrlib</samp>, ...), <em>gcc</em> has the possibility to filter the list of
functions that will be visible, to keep only the public API, because it helps running programs
faster.
</p>
<p>The <code>configure</code> script checks if this feature is available;
if you specify this option it will not check anymore and blindly trust you that it is supposed to
work, which is not a good idea as you may encounter problems later when compiling.
</p>
</dd>
<dt><samp>--enable-usermenu</samp></dt>
<dd><p>This feature, disabled by default, allows to add a user-defined custom menu to applications;
when choosing an entry of the menu it will send the key combination defined by the user to that
application. See <a href="NEWS.html#Application-User-Menu">Application User Menu</a> in <cite><samp>NEWS</samp></cite> for more information.
</p>
</dd>
<dt><samp>--with-menu-textdomain=<i>DOMAIN</i></samp></dt>
<dd><p>Selection of the domain used for translation of the menus;
see <a href="wmaker_i18n.html#Translations-for-Menus">Translations for Menus</a> in <cite><samp>README.i18n</samp></cite>.
</p>
</dd>
</dl>


<a name="Developer-Stuff"></a>
<h4 class="subsection">2.5.5 Developer Stuff</h4>

<p>These options are disabled by default:
</p>
<dl compact="compact">
<dt><samp>--config-cache</samp></dt>
<dd><p>If you intend to re-run the <code>configure</code> script often, you probably want to include this
option, so it will save and re-use the status of what have been detected in the file
<samp>config.cache</samp>.
</p>
</dd>
<dt><samp>--enable-debug</samp></dt>
<dd><p>Enable debugging features (debug symbol, some extra verbosity and checks) and add a number of
check flags (warnings) for the compiler (in <em>gcc</em> fashion).
</p>
</dd>
<dt><samp>--enable-lcov=<i>DIRECTORY</i></samp></dt>
<dd><p>Enable generation of code coverage and profiling data;
if the <samp><i>DIRECTORY</i></samp> is not specified, use <samp>coverage-report</samp>.
</p>
<p>This option was meant to be use with <em>gcc</em>;
it was not used recently so it is probable that is does not work anymore;
the <code>configure</code> script will not even check that your compiling environment has the
appropriate requirements and works with this.
Despite all this, if you think there&rsquo;s a use for it and feel in the mood to help, do not hesitate to
discuss on the mailing list <a href="mailto:wmaker-dev@lists.windowmaker.org">wmaker-dev@lists.windowmaker.org</a> to get it working.
</p>
</dd>
</dl>


<hr>
<a name="Miscellaneous"></a>
<a name="Miscellaneous-1"></a>
<h2 class="chapter">3 Miscellaneous</h2>

<a name="Platform-Specific-Notes"></a>
<h3 class="section">3.1 Platform Specific Notes</h3>

<ul class="no-bullet">
<li>- <em>GNU/Linux</em> in general

<p>Make sure you have <samp>/usr/local/lib</samp> in <samp>/etc/ld.so.conf</samp> and that you
run <code>ldconfig</code> after installing.
Uninstall any packaged version of <small>WINDOW MAKER</small> before installing a new version.
</p>
</li><li>- <em>RedHat GNU/Linux</em>

<p><em>RedHat</em> systems have several annoying problems.
If you use it, be sure to follow the steps below or <small>WINDOW MAKER</small> will not work:
</p>
<ul>
<li> if you installed the <small>WINDOW MAKER</small> that comes with <em>RedHat</em>, uninstall it before upgrading;

</li><li> make sure you have <samp>/usr/local/bin</samp> in your <code>PATH</code> environment variable;

</li><li> make sure you have <samp>/usr/local/lib</samp> in <samp>/etc/ld.so.conf</samp> before running <code>ldconfig</code>;
</li></ul>

</li><li>- <em>PowerPC MkLinux</em>

<p>You will need to have the latest version of <em>Xpmac</em>.
Older versions seem to have bugs that cause the system to hang.
</p>
</li><li>- <em>Debian GNU/Linux</em>

<p>If you want <em>JPEG</em> and <em>TIFF</em> support, make sure you have <samp>libtiff-dev</samp>
and <samp>libjpeg-dev</samp> installed.
</p>
</li><li>- <em>SuSE GNU/Linux</em>

<p>If you installed the <small>WINDOW MAKER</small> package from <em>SuSE</em>, uninstall it before trying to
compile <em>Window Maker</em> or you might have problems.
</p>
</li><li>- <em>MetroX</em> (unknown version)

<p><em>MetroX</em> has a bug that corrupts pixmaps that are set as window backgrounds.
If you use <em>MetroX</em> and have weird problems with textures, do not use textures in title bars.
Or use a different X server.
</p>
</li></ul>


<a name="I-don_0027t-have-the-root-password-_003a_0028"></a>
<h3 class="section">3.2 I don&rsquo;t have the <em>root</em> password :(</h3>
<a name="No-Root-Password"></a>
<p>If you can&rsquo;t get superuser privileges (can&rsquo;t be <i>root</i>) you can install <em>Window Maker</em> in your own
home directory.
For that, supply the <samp>--prefix</samp> option when running configure in step 2 of building
<small>WINDOW MAKER</small>.
You will also need to supply the <samp>--with-gnustepdir</samp> option, to specify the path for
<code>WPrefs.app</code>.
Example:
</p>
<div class="example">
<pre class="example">./configure --prefix=/home/jshmoe --with-gnustepdir=/home/jshmoe/GNUstep/Applications
</pre></div>

<p>Then make <samp>/home/jshmoe/bin</samp> be included in your search <code>PATH</code>, add <samp>/home/jshmoe/lib</samp>
to your <code>LD_LIBRARY_PATH</code> environment variable and run <code>bin/wmaker.inst</code>
</p>
<p>Of course, <samp>/home/jshmoe</samp> is supposed to be replaced by your actual home directory path.
</p>

<a name="Upgrading"></a>
<h3 class="section">3.3 Upgrading</h3>

<p>If you are upgrading from an older version of <small>WINDOW MAKER</small>:
</p>
<ol>
<li> Configure and build <small>WINDOW MAKER</small> as always
</li><li> Install <small>WINDOW MAKER</small> (but do not run <code>wmaker.inst</code>)
</li><li> Read the <cite>NEWS</cite> file and update your configuration files if necessary.
</li></ol>


<hr>
<a name="Troubleshooting"></a>
<a name="Troubleshooting-1"></a>
<h2 class="chapter">4 Troubleshooting</h2>

<p>When you have some trouble during configuration (while running configure), like not being able to
use a graphic format library you think you have installed, look at the <samp>config.log</samp> file for
clues of the problem.
</p>

<a name="Error-with-loading-fonts_002c-even-if-they-exist"></a>
<h3 class="section">4.1 Error with loading fonts, even if they exist</h3>

<p>This is probably a problem with NLS (Native Language Support), you probably want to look at the
<a href="wmaker_i18n.html#Troubleshooting">Troubleshooting</a> in <cite><samp>README.i18n</samp></cite>
or try rebuilding without NLS support, which is done with:
</p><div class="example">
<pre class="example">./configure LINGUAS=&quot;&quot;
</pre></div>


<a name="configure-doesn_0027t-detect-libtiff_002c-or-other-graphic-libraries"></a>
<h3 class="section">4.2 configure doesn&rsquo;t detect <em>libtiff</em>, or other graphic libraries</h3>

<p>Delete <samp>config.cache</samp>, then rerun configure adding the following options to <code>configure</code>
(among the other options you use):
</p><div class="example">
<pre class="example">--with-libs-from=&quot;-L/usr/local/lib&quot;
--with-incs-from=&quot;-I/usr/local/include -I/usr/local/include/tiff&quot;
</pre></div>
<p>Put the paths where your graphic libs and their corresponding header files are located.
You can put multiple paths in any of these options, as the example of <samp>--with-incs-from</samp> shows.
Just put a space between them.
</p>

<a name="configure-doesn_0027t-detect-libXpm"></a>
<h3 class="section">4.3 configure doesn&rsquo;t detect <em>libXpm</em></h3>

<p>Check if you have a symbolic link from <samp>libXpm.so.4.9</samp> to <samp>libXpm.so</samp>
</p>

<a name="Segmentation-fault-on-startup"></a>
<h3 class="section">4.4 Segmentation fault on startup</h3>

<ul>
<li> Check if the version of <em>libXPM</em> you have is at least 4.7

</li><li> Check if you have an updated version of <samp>~/GNUstep/Defaults/WindowMaker</samp>
</li></ul>

<p>If you&rsquo;re not sure, try renaming <samp>~/GNUstep</samp> to <samp>~/GNUtmp</samp>
and then run <code>wmaker.inst</code>
</p>

<a name="g_t_0022_002e_002e_002e_003a-your-machine-is-misconfigured_002e-gethostname_0028_0029-returned-_0028none_0029_0022"></a>
<h3 class="section">4.5 &quot;...: your machine is misconfigured. gethostname() returned (none)&quot;</h3>

<p>the host name of your machine is set to something invalid, that starts with a parenthesis.
Do a <code>man hostname</code> for info about how to set it.
</p>

<a name="The-root-menu-contains-only-2-entries_002e-_0028_0022XTerm_0022-and-_0022Exit_002e_002e_002e_0022_0029"></a>
<h3 class="section">4.6 The root menu contains only 2 entries. (&quot;XTerm&quot; and &quot;Exit...&quot;)</h3>

<p><small>WINDOW MAKER</small> could not read your menu definition file.
You should check the output of <code>wmaker</code> for an error, it may be visible in the console or in the
<samp>.xsession-errors</samp> file.
</p>

<hr>



</body>
</html>
