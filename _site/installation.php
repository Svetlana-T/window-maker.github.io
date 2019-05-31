<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />

  <title>Window Maker: Documentation</title>
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
          <br />
          <br />

          <h3>Installation Basics</h3>

          <h3>Downloading and Extracting</h3>

          <p>The first necessary step is to <a href="http://windowmaker.org/pub/source/release/WindowMaker-0.95.5.tar.gz">download</a>
	  the Window Maker source distribution. From this point on, we'll assume it has
          been retrieved and is residing on the local hard disk. The next step is to extract it, and change into the source
          directory.</p>
          <pre>
<code># cd /path/to/your/download
# gunzip WindowMaker-0.xx.xx.tar.gz
# tar -xf WindowMaker-0.xx.xx.tar
# cd WindowMaker-0.xx.xx
</code>
</pre>

          <p>Now that things are extracted, it's time to look at the relevant pieces of documentation. Most UNIX oriented free
          software packages come with a README file, and Window Maker is no exception. The README file contains a summary
          overview of what the distribution is, what the various directories contain, and other general information.</p>

          <p>Moving along, we have the NEWS file. For now, we just want to point out its existence. It will become more useful to
          novice users over time. Veteran Window Maker users will find it handy for keeping their configuration files up to date,
          and learning about various changes which affect Window Maker's behavior.</p>

          <p>The two remaining files we need to look at are INSTALL and BUGS. The INSTALL file provides additional information
          that is necessary to install Window Maker successfully. The BUGS file contains a list of known Window Maker bugs. If a
          user feels they've found a bug in Window Maker, they should consult the BUGS file first. If the bug isn't listed,
          proceed to the Bug Tracker and see if its there.</p>

          <h3>Compiling</h3>

          <p>After extracting the latest version of Window Maker using the previous instructions, the next step is to compile it.
          First of all, the configure script should be run. It will test to make sure all the necessary libraries, compilers and
          build tools are available on the local system. The configure script allows for various arguments to be passed to it
          which relate to Window Maker's installation. For a complete list of all configurable settings, enter:</p>
          <pre>
<code>$ ./configure --help
</code>
</pre>

          <p>Commonly used configuration options are:</p>
          <pre>
<code>--prefix=DIR --enable-modelock --enable-xinerama --enable-silent-rules
</code>
</pre>

          <p>The first configuration option lets Window Maker be installed into a non-default installation directory (e.g if
          Window Maker cannot be installed system wide for some reason, a user can specify a path under his/her home directory).
          The default installation directory is /usr/local/bin. Note that root access
          will be needed later on during the installation process if the defaults were used.</p>

          <p>So if a user johndoe would like to install the wmaker binary into /home/johndoe/wmaker/bin instead of the default
          /usr/local/bin, the following argument would be passed to the configure script:</p>
          <pre>
<code> $ ./configure --prefix=/home/johndoe/wmaker
</code>
</pre>

          <p>After the configure script has been successfully executed, Window Maker can now be compiled with the make command;
          simply enter:</p>
          <pre>
<code>$ make
</code>
</pre>

          <p>The final step is to install the binaries and other support files. This is accomplished by entering: # make install</p>

          <p>Note that this is the step that needs to be performed by root if the default installation directory was used, or if
          a directory was specified that the running user cannot write to. If the installing user has root access, they should
          first become root by issuing <code>su - root</code>. Otherwise, reconfigure and recompile Window Maker by specifying a
          different installation directory, or kindly ask the local system administator to install it system wide.</p>

          <p>Once Window Maker is installed system-wide, a default configuration can be installed on a per-user basis, through
          the bundled installation script, <code>wmaker.inst</code>. Enter <code>wmaker.inst</code> in a terminal emulator to
          configure Window Maker for your user.</p>

          <p>This script copies the default Window Maker configuration to your user's home directory and sets Window Maker as the
          default window manager. It is recommended to create ~/GNUstep before executing the script.</p>

	<h3> Final tweaks</h3>

	<p> Edit your ~/.xinitrc to load your newly installed Window Maker using the line 
	<code> exec /usr/local/bin/wmaker</code>.</p>

	<p> Generate a new root menu (accessible with F12) with <code>wmgenmenu</code>, for example
	<pre>
	<code> $ wmgenmenu > $HOME/GNUstep/Defaults/WMRootMenu </code>
	</pre>
       

	<p> Another recommended step is to install a few dockapps like wmvolman, wmmixer and wmsystemtray which allow one to
	easily mount external media on /media among other things. Visit <a href="http://www.dockapps.net">dockapps</a>
	for many more choices.</p>

	<br><br><br>
        </td>
      </tr>
    </table>

  <?php include("footer.php"); ?>


</body>
</html>
