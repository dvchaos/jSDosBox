<HTML>
<HEAD>
<TITLE>BrettHQ.com</TITLE>

<!-- loading windows 3.11 via a web browser! (using jsDos https://js-dos.com/) -->

<style>
body {
    background-image: url("https://nostalgiaware.com/background.jpg");
}
</style>

  <script src="https://js-dos.com/6.22/current/js-dos.js"></script>
  <style>
    canvas {
      width: 700px;
      height: 500px;
    }
  </style>

</HEAD>
<BODY>

<canvas id="jsdos"></canvas>
  <script>
    Dos(document.getElementById("jsdos"), { 
        wdosboxUrl: "https://js-dos.com/6.22/current/wdosbox.js" 
    }).ready((fs, main) => {
      fs.extract("https://www.nostalgiaware.com/win311/windows.zip").then(() => {
        main(["-c", "runme"])
      });
    });
  </script>

<!-- 

windows.zip is where you load the archive remotely

This case it's contains installed windows 3.11

runme is the name of the executable you wish 
to execute from within the remote archive (windows.zip)
in your browser.

canvas id is where the emulator window will be displayed.
including width and height dimensions via style css script

if the fs.extract archive location is https://
then you have to load this php file from https:// as well
otherwise it will not work right.


The rendering of windows 3.11 is buggy
I think it's to do with jsDos incompatibilities




-->

</BODY>
</HTML>


