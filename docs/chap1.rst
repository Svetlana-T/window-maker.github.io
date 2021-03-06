<!DOCTYPE html>
<html>
  <head>
    <title>Window Maker: User Guide - Introduction</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/style.css" media="screen">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport"
      content="width=device-width, minimumscale=1.0, maximum-scale=1.0">
  </head>
  <body>
    <div id="wrapper">
      <header>
        <h1>
          <a href="/">
            <span class="first">Window</span><span class="second">Maker</span>
          </a>
        </h1>
      </header>
      <aside>
        <nav class="menu">
          <ul>
            <li id="dock">
            <a href="#"></a>
            </li>
            <li id="home" title="Home">
              <a href="/">Home</a>
            </li>
            <li id="news" title="News">
              <a href="/news">News</a>
            </li>
            <li id="docs" title="Documentation">
              <a href="/docs">Documentation</a>
            </li>
            <li id="mail" title="Mailing lists">
              <a href="/lists">Mailing</a>
            </li>
            <li id="devel" title="Development">
              <a href="/dev">Development</a>
            </li>
            <li id="screenshots" title="Screenshots">
              <a href="/screenshots">Screenshots</a>
            </li>
            <li id="themes" title="Themes">
              <a href="/themes">Themes</a>
            </li>
            <li id="links" title="Links">
              <a href="/links">Links</a>
            </li>
          </ul>
        </nav>
      </aside>
      <article>
        Introduction
============

This manual describes the usage and configuration of the Window Maker window
manager. It is intended for both users who never used the X Window System and
for users who have experience with other window managers.

How to Read this guide If you never have used a X window manager, you should
read all of this guide, as it contains detailed instructions for new users.

Text in sans serif font, indicate instructions you must follow to accomplish a
given task. If you're out of time (or patience), you should at least read text
in these parts.

You can ignore the text in Extra Bindings boxes while you're getting familiar
with Window Maker. Once you've got familiar with it, you can read the text in
these boxes to learn more ways to accomplish tasks.

What is a window manager?
-------------------------

If you come from the Windows or MacOS world, you might be confused about all
these things like window managers, X windows etc.

In the Unix world, the task of providing a graphical user interface (GUI) is
normally divided by 3 different components:

the window server; the window manager and the user interface toolkit. The
window server is standard and is usually the X Window System or some vendor
provided compatible version of it. The X Window System, or X for short, is a
window server. It's function is to provide a portable and high-level access to
devices like keyboard, mouse and video display.  It allows applications to show
graphical information on the display through rectangular areas called windows.

Most user interface objects, like buttons, menus and scrollers are made of
windows. The top level windows displayed by applications are named windows as
well. These objects are not provided by the window server. These must be made
by the application program or by the user interface toolkit.

For more information, read the manual page for X(1) and the documentation for
Xlib.

The primary function of the window manager is to control the layout of top
level windows on screen. Window Maker is a window manager. It provides a
titlebar and a resizebar to change window layout, application menus to launch
applications and execute special commands, application icons, miniwindows and
an application dock. They will be explained in more detail in the following
chapters.

The user interface toolkit is a library or collection of libraries that provide
an API for application developers to program the interfaces for their
applications. Toolkits generally provide controls like buttons, menus,
radio-buttons etc to be used for program interaction. There are currently many
of these toolkits available for X. Motif, OpenLook, and Athena are examples of
toolkits.

All other features normally found in other operating systems, like file
managers, are implemented as separate programs and are not directly related to
the window manager.

      </article>
      <div id="titlebar">
        <div id="minimize"></div>
        <div id="titlebar-inner">Window Maker: User Guide - Introduction</div>
        <div id="close"></div>
      </div>
      <div id="resizebar">
        <div id="resizel"></div>
        <div id="resizebar-inner">
        </div>
        <div id="resizer"></div>
      </div>
    </div>
  </body>
</html>
