<!--BEGIN Pop-up Windows Script------------------------------------------>
<!--
// Copyright 1999 - 2002 by Ray Stott, Pop-up Windows Script ver 2.0
// OK to use if this copyright is included
// Script is available at http://www.crays.com/jsc          

var popWin = null    // use this when referring to pop-up window
var winCount = 0
var winName = "popWin"
function openPopWin(winURL, winWidth, winHeight, winFeatures, winLeft, winTop){
  var d_winLeft = 10  // default, pixels from screen left to window left
  var d_winTop = 10   // default, pixels from screen top to window top
  winName = "popWin" + winCount++ //unique name for each pop-up window
  //closePopWin()           // close any previously opened pop-up window
  if (openPopWin.arguments.length >= 4)  // any additional features? 
    winFeatures = "," + winFeatures
  else 
    winFeatures = "" 
  if (openPopWin.arguments.length == 6)  // location specified
    winFeatures += getLocation(winWidth, winHeight, winLeft, winTop)
  else
    winFeatures += getLocation(winWidth, winHeight, d_winLeft, d_winTop)
  popWin = window.open(winURL, winName, "width=" + winWidth 
           + ",height=" + winHeight + winFeatures)
  }
function closePopWin(){    // close pop-up window if it is open 
  if (navigator.appName != "Microsoft Internet Explorer" 
      || parseInt(navigator.appVersion) >=4) //do not close if early IE
    if(popWin != null) if(!popWin.closed) popWin.close() 
  }
function getLocation(winWidth, winHeight, winLeft, winTop){
  return ""
  }
//-->
