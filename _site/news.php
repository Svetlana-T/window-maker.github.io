<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />

  <title>Window Maker: News</title>
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <link href="title.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php include("dock.php");  ?>
  <?php include("header.php"); ?>

  <div>
    <table class="inner" border="0" cellpadding="1" cellspacing="1">
      <tr>
        <td content="content" colspan="2" valign="top">

	<h3>Version 0.95.8 released</h3>
	  <p> Window Maker 0.95.8 was released on March 11th 2017.</p>
	<ul>
	<li>
	<p> See the 
<a href="http://repo.or.cz/wmaker-crm.git/blob/HEAD:/NEWS"> NEWS </a>file and/or the git logs for an overview of 
	the changes.
	</p>
	</li>
	</ul>


	<h3>Version 0.95.7 released</h3>
	  <p> Window Maker 0.95.7 was released on August 2nd 2015.</p>

	<ul>
	<li>
	<p> Window <a href="http://repo.or.cz/w/wmaker-crm.git/commit/df4906186525c25781320c58a4d22168eae0c39c"> snapping </a> feature has
 	been added, which allows one to "snap" a window to one side of the screen by
    	dragging it to that side (Doug Torrance).
	</p>
	</li>

	<li>
	<p> New mouse actions configuration were
<a href="http://repo.or.cz/w/wmaker-crm.git/commit/0d0169a41376cf667fb0b10c4ced46ecba6e08cf"> added </a> to WPrefs
(David Maciejak).</p>
	</li>

	<li>
	<p> New button and wheel mouse
<a href="http://repo.or.cz/w/wmaker-crm.git/commit/f40095ac9e6e1c27b9d50d4a05a2e08d44758f48"> actions </a>
(David Maciejak).</p>
	</li>

	<li>
	<p> Many code cleanups and refactoring by Christophe Curris.</p>
	</li>

	</ul>


	<h3>Version 0.95.6 released</h3>
	  <p> Window Maker 0.95.6 was released on August 30th 2014.</p>

	<ul>
	<li>
         <p> Window Maker can now load WebP images and support ImageMagick library to support even more
	     formats like SVG, BMP, TGA, ... (David Maciejak)
	</p>
	</li>

	<li>
	<p> Add mini-window <a href="http://repo.or.cz/w/wmaker-crm.git/commit/c6c7652e240f3bc49fb23939bc49eb042aff85ad"> apercu </a>, a small preview of
            window contents (David Maciejak)
	</li>

	<li>
	<p> Support for up to 9-buttons mouse added (David Maciejak)
	</li>

	<li>
	<p> Many configuration options added to WPrefs.app (Doug Torrance)
	</li>

	<li>
	<p> Add wmiv, an image viewer application (David Maciejak)
	</li>

	<li>
	<p>  Bug fixes and code cleanups by various people.</p<
	</li>


	</ul>

	<h3>Version 0.95.5 released</h3>
	  <p> Window Maker 0.95.5 was released on August 29th 2013.</p>

	<ul>
	<li>
         <p>Window Maker can now maximize windows to the top/bottom halves of
 	the screen as well as to the corners (top left, top right etc). The keyboard shortcuts to do that can be configured via WPrefs (Renan Traba).
	</p>
	</li>

	<li>
	<p> Support for <a href="http://www.dechelotte.com/en/wmaker.php"> drawers</a> in the dock has been added (Daniel Dechelotte).</p>
	</li>

	<li>
	<p> Keyboard shortcuts to move windows between workspaces (Iain Patterson).</p>
	</li>

	<li>
	<p> Window border colours and width are now configurable (Iain Patterson).</p>
	</li>

	<li>
	<p> The menu is now able to parse command-generated <a href="http://repo.or.cz/w/wmaker-crm.git/commit/c21ae6b580889d247408123a5c624abf6d784232"> proplist style menus</a>.
	WPrefs support for this has been added too (Andreas Bierfert).</p>
	</li>

	<li>
	<p> Plus a few other new features and a lot of bug fixes and code cleanups by various people.</p<
	</li>


	</ul>

	<h3>Version 0.95.4 released</h3>
	  <p> Window Maker 0.95.4 was released on January 3rd 2013. There was a major code cleanup related to icons, some changes
	      in WPrefs, the addition of a new "Center" placement strategy, support for _NET_FRAME_EXTENTS, the removal of CPP
	      dependency to process menu files and small fixes and improvements all around.</p>

	<h3>Version 0.95.3 released</h3>
	  <p> Window Maker 0.95.3 was released on May 16th 2012. This release fixes a regression
	  which would cause more than one instance of an application to start (under some circunstances) when using menu
	  shortcuts. The window maximization procedures now have a more intuitive behavior with respect to remembering
          the old geometry and going back to it. Furthermore, there are some other small fixes and cleanups.</p>

	  <h3>Version 0.95.2 released</h3>
	  <p> Window Maker 0.95.2 was released on February 14th 2012, and it contains just a few
	  commits on top of 0.95.1. They were necessary to fix a few issues like 'make dist' not compiling.
	  Furthermore a few more code cleanups slipped in.</p>


          <h3>Version 0.95.1 released</h3>

          <p>Window Maker 0.95.1 was released on January 29th 2012.</p>

          <p>The last official Window Maker release was version 0.92.0 from 2005, and version 0.95.1 contains many bug fixes and
          also a few new features.</p>

          <h3>New features and highlights</h3>

          <p>The following list is incomplete, but should give a first-order approximation to the new features in this release.
          For the truly curious among you, reading through <code>git log</code> is the only complete source of information.</p>

          <ul>
            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/6924454836b3a9432def2749f093ea060ac82e97">Left Half / Right
              Half Maximize</a>.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/cf62d1591f5aef1e6760a8c0881a6de97ae26e92">Maximus: tiled
              maximization</a>. Maximizes a window such that it occupies the largest area without overlapping others.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/a063338175511c4e6af211cef9f2c8a555d7cb44">New mouse-resizing
              functionality</a>. Windows can now be resized vertically (horizontally) using MOD+Wheel (CTRL+Wheel).</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/05720d97076ffc1569e50d904b998ec99c3d3d4e">History and TAB
              completion in dialogs</a>. To use this new functionality in your old WMRootMenu, replace %a by %A in the relevant
              entry. It will look like this <code>(Run..., SHEXEC, "%A(Run, Type command:)")</code>. Or use
              <code>wmgenmenu</code> to generate a new menu.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/a257e16593bb471662ce46f65d489c2ba6d87813">Bouncing appicon
              effect</a>.</p>
            </li>

            <li>
              <p>New applications (<a href=
              "http://repo.or.cz/w/wmaker-crm.git/commit/1861880239634774bf898175a3155b7c7cd9b59c">wmgenmenu</a> and wmmenugen)
              to generate the root menu automatically by looking which applications you have on your $PATH. Translations to
              German, <a href="http://repo.or.cz/w/wmaker-crm.git/commit/077a2eaa71623421eaffc234c30e6d40a52f0220">Spanish and
              French</a> of menus generated by wmgenmenu.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/56d856878743ec2d3b8d98ab6a0b61a6b2c99129">Automatic detection
              of configuration changes</a>. Linux users whose kernel supports the <a href=
              "http://en.wikipedia.org/wiki/Inotify">inotify</a> mechanism have their configuration changes detected
              automatically without polling, reducing the number of CPU wakeups.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/9318a7f42870753bd6b8c306573936369aa819f4">Improved dockapp
              recognition.</a></p>
            </li>

            <li>
              <p>And many trivial things which reduce little annoyances one might have. For example, an option was added to
              control whether or not Window Maker should do <a href=
              "http://repo.or.cz/w/wmaker-crm.git/commit/d6c134f420bfa1cd6b6a9474d01548933b559901">automatic workspace
              switching</a> to satisfy a focus request from a window located in another workspace.</p>
            </li>

            <li>
              <p>(For developers). The <a href=
              "http://repo.or.cz/w/wmaker-crm.git/commit/442e3876c6e5a78c6ed385ec204647553f45c168">addition</a> of a debian/
              folder which allows the creation of a debian package for wmaker using the git sources.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/b6689a0108fd06ba4d7bf22b789b3de531c2ad70">Added keyboard
              shortcut to uncover/cover the dock</a>.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/18408fff93468c533bf4aef3ce6c9808b415adde">Mac OS X-style
              window cycling</a>.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/c201e1612c1798106ccc2f806669a90b0bbb7a19">Preliminary XRandR
              support</a> (needs a bit more work to be bug-free; not compiled in by default. Use --enable-xrandr if you want to
              test it).</p>
            </li>
          </ul>

          <h3>Bug fixes</h3>

          <p>Window Maker 0.92.0 was already very stable, but many bugs were fixed in this release. A <strong>very</strong>
          incomplete list is given below, and as time permits it will be updated (including links to the commits) in the future.
          But the message now is that if you don't like bugs, use version 0.95.1.</p>

          <ul>
            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/37829a7c60ca09eb47d4d82b00070f6f6c0fb277">Fix loading saved
              states on 64-bit systems</a></p>
            </li>

            <li>
              <p>Fix to avoid a segfault when creating more than 81 workspaces, as reported on youtube <a href=
              "http://www.youtube.com/watch?v=fkNJZvKwmhE">here</a>.</p>
            </li>

            <li>
              <p><a href="http://repo.or.cz/w/wmaker-crm.git/commit/c91bb1ba1360006c568db37438779e525868cf17">Periodic focus
              bug</a>.</p>
            </li>
          </ul>

          <h3>Summary of changes</h3>

          <p>A lot of effort was put into cleaning up the code, with lots of code removal and tidying things up. The following
          output should give you an idea of the development in the last cycle:</p>
          <pre>
git diff --shortstat wmaker-0.92.0+..wmaker-0.95.1
 592 files changed, 118361 insertions(+), 133342 deletions(-)
git diff --shortstat 688a56e8ab67b..wmaker-0.95.1
 566 files changed, 37676 insertions(+), 41817 deletions(-)
</pre>The first shortstat is really everything, including the (huge) patch generated in this <a href=
"http://repo.or.cz/w/wmaker-crm.git/commit/688a56e8ab67b56550e2874d9d7423f0d435bfd9">commit</a> from 2009, which changed the old
sources to the linux kernel coding style. The second shortstat contains the summary of development afterwards -- but included is
the addition of a debian folder with files summing around ~20k lines. The full diffstat for the second command can be seen
<a href="fulldiffstat.php">here</a>.

          <p><br /></p>

          <div align="center"><img src="v0_95_1.png" alt="Info v0.95.1" width="382" height="257" /></div>
        </td>
      </tr>
    </table>

  <?php include("footer.php"); ?>

</body>
</html>
