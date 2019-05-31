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
<title>Window Maker Internationalisation 1.0</title>

<meta name="description" content="Window Maker Internationalisation 1.0">
<meta name="keywords" content="Window Maker Internationalisation 1.0">
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
<a name="Window-Maker-Internationalisation"></a>
<h1 class="top">Window Maker Internationalisation</h1>

<p>A guide to enable support for language translations
in <small>WINDOW MAKER</small> and to the contributors
who want to help translating.
</p>
<a name="SEC_Contents"></a>
<h2 class="contents-heading">Table of Contents</h2>

<div class="contents">

<ul class="no-bullet">
  <li><a name="toc-Enabling-Languages-support-1" href="#Enabling-Languages-support">1 Enabling Languages support</a>
  <ul class="no-bullet">
    <li><a name="toc-Getting-the-list-of-supported-languages" href="#Getting-the-list-of-supported-languages">1.1 Getting the list of supported languages</a></li>
    <li><a name="toc-Translations-for-Menus" href="#Translations-for-Menus">1.2 Translations for Menus</a></li>
    <li><a name="toc-Setting-LINGUAS-at-system-level" href="#Setting-LINGUAS-at-system-level">1.3 Setting <code>LINGUAS</code> at system level</a></li>
  </ul></li>
  <li><a name="toc-Choosing-the-Language-1" href="#Choosing-the-Language">2 Choosing the Language</a></li>
  <li><a name="toc-Troubleshooting-1" href="#Troubleshooting">3 Troubleshooting</a></li>
  <li><a name="toc-Contribute-to-Translations-1" href="#Contribute-to-Translations">4 Contribute to Translations</a>
  <ul class="no-bullet">
    <li><a name="toc-Install-the-latest-sources" href="#Install-the-latest-sources">4.1 Install the latest sources</a></li>
    <li><a name="toc-Updating-the-Translations" href="#Updating-the-Translations">4.2 Updating the Translations</a></li>
    <li><a name="toc-Translate-the-Man-Pages" href="#Translate-the-Man-Pages">4.3 Translate the Man Pages</a></li>
    <li><a name="toc-Checking-the-Result" href="#Checking-the-Result">4.4 Checking the Result</a></li>
    <li><a name="toc-Submitting-your-Contribution" href="#Submitting-your-Contribution">4.5 Submitting your Contribution</a></li>
  </ul></li>
</ul>
</div>


<br>
<p>This manual is for Window Maker, version git#next.
</p>



<hr>
<a name="Enabling-Languages-support"></a>
<a name="Enabling-Languages-support-1"></a>
<h2 class="chapter">1 Enabling Languages support</h2>

<p><small>WINDOW MAKER</small> has the possibility to be translated in many languages, but by default none of
them will be installed, and the support for translation will not be compiled.
</p>
<p>To enable the translation capabilities, you have to specify which language(s) you want to be
installed: this is done with the variable <code>LINGUAS</code> when running the <code>configure</code> script.
This variable should contain the space-separated list of languages you want to install.
</p>
<p>You could for instance enable both French (<code>fr</code>) and Dutch (<code>nl</code>) with this:
</p>
<div class="example">
<pre class="example">./configure LINGUAS=&quot;fr nl&quot;
</pre></div>

<p>You can of course add any other option that you want to the <code>configure</code> command.
From the moment you specify the variable, the <code>configure</code> script will check that you have
the appropriate dependencies for this (basically the <code>gettext</code> function and the <code>libintl</code>
library); when you run <code>make</code> to compile the project, it will also compile the translation
(<code>mo</code> files) for the language(s) you asked (if available, of course), and during
<code>make install</code> it will install them in the usual directory.
</p>
<p>The installation directory can be changed with the standard option <samp>--localedir</samp> to the
<code>configure</code> script, the default path being
<samp><em>&lt;prefix&gt;</em>/share/locale/<em>&lt;lang&gt;</em>/LC_MESSAGES</samp>).
</p>

<a name="Getting-the-list-of-supported-languages"></a>
<h3 class="section">1.1 Getting the list of supported languages</h3>

<p>The naming convention for the languages follows the <cite>ISO 639-1</cite> standard,
for which you can find a summary list in the
<a href="https://www.gnu.org/software/gettext/manual/html_node/Usual-Language-Codes.html">GNU gettext manual</a>.
</p>
<p>But as <small>WINDOW MAKER</small> does not support all of them, the <code>configure</code> script will print a
warning for each language you specify that it does not know, and sum up at the end the list of
enabled languages that will be installed.
</p>
<p>There is a non-standard possibility to set <code>LINGUAS</code> to <code>list</code>, in which case the
<code>configure</code> script will provide you the list of languages it supports, and stop:
</p>
<div class="example">
<pre class="example">./configure LINGUAS=&quot;list&quot;
</pre></div>

<p>There is also another non-standard possibility to enable all the languages that <small>WINDOW MAKER</small>
supports by setting <code>LINGUAS</code> to <code>*</code>.
This is an internal trick implemented so the development team can have the command
<code>make distcheck</code> include some checks on translations:
</p>
<div class="example">
<pre class="example">./configure LINGUAS='*'
</pre></div>


<a name="Translations-for-Menus"></a>
<h3 class="section">1.2 Translations for Menus</h3>

<p>In order to propose an <em>Application Menu</em> (also called <em>Root Menu</em>) that is also
translated in the language of the interface, <small>WINDOW MAKER</small> implements two complementary
mechanisms:
</p>
<p>The first, always enabled when i18n support is enabled, is to look for the menu file containing the
name of the locale.
For example, if the file is called <samp>menu</samp> and the language is set as <code>LANG=fr_FR.utf-8</code>,
then <small>WINDOW MAKER</small> will search for, and use the first match found:
</p>
<ul>
<li> <code>menu.fr_FR.utf-8</code>
</li><li> <code>menu.fr_FR</code>
</li><li> <code>menu.fr</code>
</li><li> <code>menu</code>
</li></ul>

<p>The second possibility, which is not enabled by default, is to be able to use a custom <samp>po</samp>
file which contains the translations for the text of the menu.
This feature is enabled at compile time, using the option <samp>--with-menu-textdomain</samp> to the
<code>configure</code> script. For example, if you specify:
</p>
<div class="example">
<pre class="example">./configure --with-menu-textdomain=WMMenu
</pre></div>

<p>then the translations for the menu will be searched in the file <samp>WMMenu.mo</samp> located
at the standard location, the default path being
<samp><em>&lt;prefix&gt;</em>/share/locale/<em>&lt;lang&gt;</em>/LC_MESSAGES/<em>WMMenu</em>.mo</samp>.
</p>
<p>If you do not enable the feature (the default behaviour, or with an explicit
<samp>--without-menu-textdomain</samp>), then <small>WINDOW MAKER</small> will <b>not</b> try to translate the
strings, even using its own domain file (<samp>WindowMaker.mo</samp>).
</p>

<a name="Setting-LINGUAS-at-system-level"></a>
<h3 class="section">1.3 Setting <code>LINGUAS</code> at system level</h3>

<p>As the variable <code>LINGUAS</code> is quite standard, you also have the possibility to set its value in
the <samp>config.site</samp> file for <small>AUTOCONF</small>.
This file can be placed in one of these paths:
</p>
<ul>
<li> <samp><em>&lt;prefix&gt;</em>/share/config.site</samp>
</li><li> <samp><em>&lt;prefix&gt;</em>/etc/config.site</samp>
</li></ul>

<p>This way, the same language list will be used for all the programs that use <small>AUTOCONF</small> that you
would compile.
Please note that if you also specify a value on the command line, it will have precedence over the
value in that file.
</p>

<hr>
<a name="Choosing-the-Language"></a>
<a name="Choosing-the-Language-1"></a>
<h2 class="chapter">2 Choosing the Language</h2>

<p>If you have compiled and installed <small>WINDOW MAKER</small> with support for your language,
the effective translation is done is the very same way as any other application on an <small>UNIX</small>
system, you just have to set the shell variable <code>LANG</code> to your language before <code>wmaker</code>
is started.
In <code>sh</code> type of shell (<small>SH</small>, <small>KSH</small>, <small>BASH</small>, ...), this is done for example with
(<code>fr</code> is for French):
</p>
<div class="example">
<pre class="example">export LANG=fr
</pre></div>


<p>There is also a command line option <samp>--locale</samp> for <small>WINDOW MAKER</small> which may be used to set
the language:
</p>
<div class="example">
<pre class="example">wmaker --locale fr
</pre></div>

<p>When using this option, <small>WINDOW MAKER</small> will use the locale you specified, redefining the
<code>LANG</code> environment variable to this value so all program started from <small>WINDOW MAKER</small> will
inherit its value.
</p>

<p>If your system is using <small>SYSTEMD</small>, you can also configure the locale at system level using the
command:
</p>
<div class="example">
<pre class="example">localectl set-locale LANG=fr
</pre></div>


<p>You can check if the current value is properly supported with the command:
</p>
<div class="example">
<pre class="example">locale
</pre></div>

<p>If this does not work, you may need first to activate the support for your locale in the system;
you can get the list of currently enabled locales with the command:
</p>
<div class="example">
<pre class="example">locale -a
</pre></div>

<p>You should be able to enable a new language support by editing the file <samp>/etc/locale.gen</samp> to
uncomment the locale(s) you need (by removing the <code>#</code> character and space(s) in front of it,
and by running the command <code>locale-gen</code> as root.
</p>
<p>For further information, you may wish to read dedicated documentation, for example from
<a href="http://tldp.org/HOWTO/HOWTO-INDEX/other-lang.html">the Linux Documentation Project</a>
or through pages like
<a href="http://www.shellhacks.com/en/HowTo-Change-Locale-Language-and-Character-Set-in-Linux">Shell Hacks&rsquo; note on Changing Locale</a>.
</p>

<hr>
<a name="Troubleshooting"></a>
<a name="Troubleshooting-1"></a>
<h2 class="chapter">3 Troubleshooting</h2>

<p>If I18N support does not work for you, check these:
</p>
<ul class="no-bullet">
<li>- the <code>LANG</code> environment variable is set to your locale, and
the locale is supported by your OS&rsquo;s locale or X&rsquo;s locale
emulation. you can display all supported locales by
executing &quot;<code>locale -a</code>&quot; command if it is available; you
can check if your locale is supported by X&rsquo;s locale emulation,
see <samp>/usr/share/X11/locale/locale.alias</samp>

</li><li>- check if you are using an appropriate fonts for the locale you
chose. If you&rsquo;re using a font set that has a different
encoding than the one used by <small>XLIB</small> or <small>LIBC</small>, bad things can
happen. Try specifically putting the encoding in the <code>LANG</code>
variable, like <code>ru_RU.KOI8-R</code>. Again, see
<samp>/usr/share/X11/locale/locale.alias</samp>

</li><li>- the fonts you&rsquo;re using support your locale. if your font
setting on <samp>$HOME/GNUstep/Defaults/WindowMaker</samp> is like...

<div class="example">
<pre class="example">   WindowTitleFont = &quot;Trebuchet MS:bold:pixelsize=12&quot;;
   MenuTitleFont   = &quot;Trebuchet MS:bold:pixelsize=12&quot;;
</pre></div>

<p>then you can&rsquo;t display Asian languages (<code>ja</code>, <code>ko</code>, <code>ch</code>, ...) characters using
<code>Trebuchet MS</code>. A font that is guaranteed to work for any language is
<code>sans</code> (or <code>sans-serif</code>). <code>sans</code> is not a font itself, but an alias which
points to multiple fonts and will load the first in that list that
has the ability to show glyphs in your language. If you don&rsquo;t know
a font that is suited for your language you can always set all your
fonts to something like:
</p>
<div class="example">
<pre class="example">   &quot;sans:pixelsize=12&quot;
</pre></div>

<p>However, please note that if your font is something like:
</p>
<div class="example">
<pre class="example">   &quot;Trebuchet MS,sans serif:pixelsize=12&quot;
</pre></div>

<p>this will not be able to display Asian languages if any of the
previous fonts before sans are installed. This is because unlike
the proper font pickup that <code>sans</code> guarantees for your language,
this construct only allows a font fallback mechanism, which tries
all the fonts in the list in order, until it finds one that is
available, even if it doesn&rsquo;t support your language.
</p>
<p>Also you need to change font settings in style files in
the <samp>$HOME/Library/WindowMaker/Style</samp> directory.
</p>
</li><li>- the <code>LC_CTYPE</code> environment variable is unset or it has the correct
value. If you don&rsquo;t know what is the correct value, unset it.

</li></ul>


<hr>
<a name="Contribute-to-Translations"></a>
<a name="Contribute-to-Translations-1"></a>
<h2 class="chapter">4 Contribute to Translations</h2>

<p>You may have noticed that many translations are not up to date, because the code has evolved but the
persons who initially contributed may not have had the time to continue, so any help is welcome.
</p>
<p>Since <small>WINDOW MAKER</small> 0.95.7 there are some targets to <code>make</code> that can help you in that
task.
</p>

<a name="Install-the-latest-sources"></a>
<h3 class="section">4.1 Install the latest sources</h3>

<p>If you want to contribute, the first step is get the development branch of the code;
this is done using <code>git</code>.
If you do not feel confident at all with using <code>git</code>, you may also try to ask for a
<em>snapshot</em> on the developer&rsquo;s mailing list <a href="mailto:wmaker-dev@lists.windowmaker.org">wmaker-dev@lists.windowmaker.org</a>.
With <code>git</code> the procedure is:
</p>
<div class="example">
<pre class="example"># Get your working copy of the sources
git clone git://repo.or.cz/wmaker-crm.git

# Go into that newly created directory
cd wmaker-crm

# Switch to the branch where everything happens
git checkout next

# Generate the configuration script
./autogen.sh
</pre></div>

<p>Now you should have an up-to-date working copy ready to be compiled;
you will not need to go the full way but you should run the <code>configure</code> script, so it will
create the <samp>Makefile</samp>s, and you may want to compile the code once so it will not do it again
automatically later while you are doing something else:
</p>
<div class="example">
<pre class="example"># Setup the build, enabling at least the language you want to work on
./configure LINGUAS=&quot;&lt;list of iso 639 country code&gt;&quot;

# Compile the code once
make
</pre></div>


<a name="Updating-the-Translations"></a>
<h3 class="section">4.2 Updating the Translations</h3>

<p>The typical process for translating one program is:
</p>
<ul>
<li> generate a POT file (PO Template):
this is done with <code>xgettext</code> which searches for all the strings from the sources that can be
translated;

</li><li> update the PO file for your language:
this is done with <code>msgmerge</code> which compares the PO file and aligns it to the latest
template;

</li><li> edit the new PO file:
this is done by you with your favourite editor, to add the missing <code>msgstr</code>, review the
possible <em>fuzzy matches</em>, ...

</li><li> check the PO file:
unfortunately there is no definitive method for this;

</li><li> submit your contribution to the project:
this is done with <code>git</code>.
</li></ul>

<p>In <small>WINDOW MAKER</small>, you have actually 4 <code>po</code> files to take care of:
</p>
<ul class="no-bullet">
<li>- <samp>po/<em>&lt;lang&gt;</em>.po</samp>: for <small>WINDOW MAKER</small> itself
</li><li>- <samp>WPrefs.app/po/<em>&lt;lang&gt;</em>.po</samp>: for the Preference Editor program
</li><li>- <samp>WINGs/po/<em>&lt;lang&gt;</em>.po</samp>: for the graphic toolkit library
</li><li>- <samp>util/po/<em>&lt;lang&gt;</em>.po</samp>: for the command-line tools of <small>WINDOW MAKER</small>
</li></ul>

<p>As stated previously, there is a <code>make</code> target that can help you to automatically generate
the POT and update the PO for these 4 cases:
</p>
<div class="example">
<pre class="example">make update-lang PO=&lt;lang&gt;
</pre></div>

<p>Once run, it will have updated as needed the 4 <code>po</code> files against the latest source code.
You may wish to use the command <code>git gui</code> to view the changes;
you can now edit the files to complete the translation, correct them, remove deprecated stuff, ...
Please note that the encoding should be set to <em>UTF-8</em> as this is now the standard.
</p>
<p>If you think an error message is too obscure, just ask on the developer mailing list
<a href="mailto:wmaker-dev@lists.windowmaker.org">wmaker-dev@lists.windowmaker.org</a>: in addition to clarifications there&rsquo;s even a chance for the original message
to be improved!
</p>
<p>You may find some information on working with <code>po</code> file in the
<a href="https://www.gnu.org/software/gettext/manual/html_node/Editing.html">GNU gettext documentation</a>.
</p>

<a name="Translate-the-Man-Pages"></a>
<h3 class="section">4.3 Translate the Man Pages</h3>

<p>You may want to extend the translation to the documentation that is provided to users in the form
of Unix <i>man pages</i>.
The sources of the man pages are located in the <samp>doc/</samp> directory;
the translation should be placed in the directory <samp>doc/<i>lang</i>/</samp> with the same file name.
</p>
<p>The directory will also need a file <samp>Makefile.am</samp> which provides the list of man pages to be
included in the distribution package and to be installed.
You can probably get inspiration from an existing one from another language;
if you do not feel confident about it do not hesitate to ask on the project&rsquo;s mailing list
(<a href="mailto:wmaker-dev@lists.windowmaker.org">wmaker-dev@lists.windowmaker.org</a>), either for help or to ask someone to make it for you.
</p>
<p>Please note that although most man pages sources are directly in man page format
(<em>nroff</em>, the file extension being a number), a few of them are processed by a script
(those with the <samp>.in</samp> extension, like <samp>wmaker.in</samp>).
This is done because in some case we want the man page to reflect the actual compilation options.
</p>
<p>You may not want to bother with this hassle, in which case you can simply name your translation
file with the <samp>.1</samp> and remove the special <code>@keyword@</code> marks.
If you are sure you want to keep that processing but do not feel confident about hacking the
<samp>Makefile.am</samp> do not hesitate to ask on the project&rsquo;s mailing list (<a href="mailto:wmaker-dev@lists.windowmaker.org">wmaker-dev@lists.windowmaker.org</a>).
</p>

<a name="Checking-the-Result"></a>
<h3 class="section">4.4 Checking the Result</h3>

<p>In the <small>WINDOW MAKER</small> build tree you also have another target that can help you, it is
<code>make check</code>.
</p>
<p>At current time, it does not check much, but if during the <code>make update-lang</code> new <code>po</code>
file have been created you may get some errors, because you have to add these new files to the
variable <var>EXTRA_DIST</var> in the corresponding <samp>Makefile</samp>.
</p>
<p>If you do not feel confident about doing it, do not worry, just tell about it when you submit your
work, and some developer on the mailing list will just be happy to do it for you when integrating
your valuable contribution (we always like when someone helps making <small>WINDOW MAKER</small> better).
</p>

<a name="Submitting-your-Contribution"></a>
<h3 class="section">4.5 Submitting your Contribution</h3>

<p><em>Preliminary Remark</em>: if the update process made changes in a <code>po</code> file but you did not
change any <code>msgstr</code> content, it is probably a good idea to not submit the changes to that
<code>po</code> file because it would just add noise.
</p>
<p>When you feel ready to send your changes, the first step is to prepare them.
This is done with <code>git</code>: if you have not run the <code>git gui</code> previously then it is a
good time to do it now.
This window offers you the possibility to show your changes and to decide what you want to send.
</p>
<p>The window is divided in 4 panes:
</p><ul>
<li> top-right show the current changes you have selected, for review
(and also for cherry-picking stuff if you want to select precisely)

</li><li> top-left (&quot;Unstaged Changes&quot;) the list of files with changes to be send,
 you can click on the name of the file to see the changes,
 you can click on the icon of the file if you want to send all the changes in this file;
an icon in blue shows a file that have been changed and an icon in black shows a file that is new

</li><li> bottom-left (&quot;Staged Changes&quot;) the list of files with changes that you have chosen to send so far,
 you can click on the file name to view these changes,
 you can click on the icon if you want to remove the changes from this file from the list to send

</li><li> bottom-right (&quot;Commit Message&quot;) the message you want to attach to your changes when you submit them
to the development team
</li></ul>

<p>The idea here is to pick your changes to the <code>po</code> files;
for the <em>commit message</em> you may wish to stuck to a simple, single line:
</p>
<blockquote>
<p>&quot;Updated translations for <em>&lt;lang&gt;</em>&quot;
</p></blockquote>

<p>The penultimate step is to click on the button <tt class="key">Sign Off</tt> (it will add a line in the commit
message), and then click on the button <tt class="key">Commit</tt>.
From this time, the commit message will clear itself and the &quot;Staged Changes&quot; also, showing that
your action was done.
</p>
<p>You may now quit the <code>git gui</code>, the final step begins by running this command:
</p>
<div class="example">
<pre class="example">git format-patch HEAD^
</pre></div>

<p>This will generate a file named like <samp>0001-<em>updated-translations-for-XX</em>.patch</samp>
which contains your changes, ready for sending.
The goal will now be to email this file to <a href="mailto:wmaker-dev@lists.windowmaker.org">wmaker-dev@lists.windowmaker.org</a>.
If you feel confident in having <code>git</code> send it for you, you may want to read the file
<samp>The-perfect-Window-Maker-patch.txt</samp> to see how to configure <code>git</code> for mailing, so you
can run:
</p>
<div class="example">
<pre class="example">git send-email 0001-<em>updated-translations-for-XX</em>.patch
</pre></div>


<hr>



</body>
</html>
