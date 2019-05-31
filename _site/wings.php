<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content="HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" />

  <title>WINGs</title>
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

          <h3>WINGs Is Not GNUstep</h3>

          <p>While GNUstep is our ideal development framework, it's overkill for a window manager like Window Maker. We had a
          need for a quick, lightweight toolkit to handle basic window manager tasks, which is how WINGs was born, and why it has
          become an integral part of Window Maker's core.</p>

          <p>Unlike the general uses of the GNUstep development environment, the WINGs toolkit was designed as a specific
          solution for Window Maker. It is not implemented in an object-oriented language, but was designed with OO schemas in
          mind. It is encapsulated in objects that have various methods (functions), which in turn can be accessed like real
          objects (i.e it's unknown what they contain, and they only have the interface functions to alter their data). As much
          as C will allow, that is. What really matters is that it's functional and small enough for our purposes.</p>

          <p>Surprisingly, there have been several developers who think WINGs is mature and functional enough to write full
          fledged applications with it. For developers who are interested in creating real applications, we would encourage them
          to look at GNUstep instead. GNUstep is written in Objective-C, and anyone with a solid C++ background shouldn't need
          more than an hour to begin programming in Objective-C. For more information on this, please visit the <a href=
          "http://www.gnustep.org/developers/documentation.html">GNUstep Developer Documentation</a> section.</p>

          <p>So, what does WINGs do for us, specifically? It contains many necessary widgets, such as the buttons, file browser,
          color chooser, and text editor dialog that are all used for creating the UI. It is currently missing a few important
          items, such as DnD, treeview, and application menus, but those will be integrated in future releases.</p>

          <p>One of the more important aspects of WINGs is that it now provides proplist functionality. proplist, short for
          <a href="http://en.wikipedia.org/wiki/Property_list">property list</a>, is what Window Maker uses to generate and
          maintain structured configuration files. This data is stored as plain ASCII text under a user's ~/GNUstep directory.
          These files are what make up the menus, the current state and appearance of the desktop, the Dock, the Clip, and the
          values set in WPrefs.</p>

          <p>As an example, here is a short snippet from the proplist version of the default menu:</p>
          <pre>
<code>(
        Applications,
        (
                Info,
                ("Info Panel", INFO_PANEL),
                (Legal, LEGAL_PANEL),
                ("System Console", EXEC, xconsole),
                ("System Load", SHEXEC, "xosview || xload"),
                ("Process List", EXEC, "xterm -e top"),
                ("Manual Browser", EXEC, xman)
        ),
        (Run..., EXEC, "%a(Run,Type command to run:)"),
...
)
</code>
</pre>

          <h3>External sources of information</h3>

          <p>As this section evolves, we will be providing more documentation on the internals of WINGs. For the time being,
          developers interested in WINGs should see Alexey Voinov's <a href=
          "http://voins.program.ru/windowmaker/wingsman.html">WINGsman documentation project</a>. Starters may find <a href=
          "http:///www.quantitativefinanceservices.com/OpenDir/WINGslib/WINGToc.html">this tutorial</a>, which includes a library
          listing based on Voinov's work, useful. We'll try to cover some examples and/or more tutorials on how to program small
          applications in WINGs in the near future. For anyone already using WINGs for a project, please <a href=
          "lists.php">contact us</a>, as we'd like to get an idea of its popularity and practical uses, as well as some
          additional material to place here.</p><br />
          <br />
          <br />
        </td>
      </tr>
    </table>

  <?php include("footer.php"); ?>

</body>
</html>
