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

          <h3>Documentation</h3><br />

          <p>It's a fact that one of the biggest problems with today's software is lack of good documentation, or any
          documentation for that matter. Programmers generally don't have a lot of time to document their work, and the things
          they do document are usually oriented towards other programmers. While we can appreciate the programmers point of view,
          we feel it's necessary to cater to a larger audience (i.e our users) by providing clear, concise information on how to
          use our software. The sections below will bring all of these pieces of information together for you.</p>

          <p>Before you get started with Window Maker, you need to have an understanding of how to make use of the documentation
          that comes with the source distribution. The main objective to using documentation is to <strong>understand</strong>
          it, which coincidentally requires that you <strong>read</strong> it. A common mistake is for new or novice users to
          overlook this information, leading them to frustration and a bad first impression. Please take a moment to peruse the
          sections below, which should make the experience of learning Window Maker a more pleasant one.</p>

	<ul>
            <li><a href="installation.php">Installation Basics</a></li>
            <li><a href="wmaker_install.php">Window Maker Compilation and Installation</a></li>
            <li><a href="wmaker_i18n.php">Window Maker Internationalisation</a></li>
            <li><a href="guidedtour/index.html">Guided Tour</a></li>
            <li><a href="guide_toc.php">User Guide</a></li>
<!--            <li><a href="desktop.php">Desktop/X Integration</a></li> -->

            <li><a href="FAQ.php">FAQ</a></li>

            <li><a href="wings.php">WINGs</a></li>
          </ul>

	<h3>Very frequently asked question </h3>


	<h2> Can I easily mount my external drives or connect to the internet with Window Maker?</h2>
	<p> Yes, you can. Mounting external media is not the problem of a window manager to solve, but
	a tipical Window Maker user can mount external media just as easily as any other desktop user.
	If you use a dockapp like <a href="https://github.com/raorn/wmvolman">wmvolman</a> or
	<a href="http://sourceforge.net/projects/wmudmount">wmudmount</a> you are just a click away from
	having your external media mounted on /media/VOLUME_LABEL.</p>

       	<p> And you can just as easily manage your network connections using the standard <code>nm-applet</code> running
	in a system tray like <a href="http://sourceforge.net/projects/wmsystemtray">wmsystemtray</a> on your dock.</p>

	<div align="center"><img src="essential_dockapps.png" alt="Essential dockapps" width="66" height="135" /><div>wmvolman and wmsystemtray with nm-applet</div></div>


        </td>
      </tr>
    </table>

  <?php include("footer.php"); ?>

</body>
</html>
