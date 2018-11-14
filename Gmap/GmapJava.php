  <!-- you can use tables or divs for the overall layout -->
    <table border=0>
      <tr>
        <td valign="top">
           <div id="map" style="width: 1200px; height: 900px" ></div>
        </td>
        <td width = 590 valign="top" style="text-decoration: underline; color: #4444ff;">
        <small>  <small>   <div id="side_bar"></div></small></small>
        </td>
      </tr>
    </table>


    <noscript><b>JavaScript must be enabled in order for you to use Google Maps.</b> 
      However, it seems JavaScript is either disabled or not supported by your browser. 
      To view Google Maps, enable JavaScript by changing your browser options, and then 
      try again.
    </noscript>



    <script src="elabel.js" type="text/javascript"></script>

    <script type="text/javascript" >
    //<![CDATA[

 // Global Variables
    // set map variable
    var map = "";
    //set up array of locations
    var aLocations = new Array;
    // Storage for sidebar list
    var listNodeContent = "";

    // Create MabBuilder's "tiny" red marker icon
    var iconsm = new GIcon();
    iconsm.image = "http://labs.google.com/ridefinder/images/mm_20_red.png";
    iconsm.shadow = "http://labs.google.com/ridefinder/images/mm_20_shadow.png";
    iconsm.iconSize = new GSize(12, 20);
    iconsm.shadowSize = new GSize(20, 18);
    iconsm.iconAnchor = new GPoint(6, 20);
    iconsm.infoWindowAnchor = new GPoint(5, 1);

    // Create MabBuilder's "big" marker icon
    var iconbig = new GIcon();
    iconbig.image = "http://www.google.com/mapfiles/marker.png";
    iconbig.shadow = "http://www.google.com/mapfiles/shadow50.png";
    iconbig.iconSize = new GSize(20, 34);
    iconbig.shadowSize = new GSize(37, 34);
    iconbig.iconAnchor = new GPoint(6, 34);
    iconbig.infoWindowAnchor = new GPoint(5, 1);


    if (GBrowserIsCompatible()) {
      
      // this variable will collect the html which will eventually be placed in the side_bar
      var side_bar_html = "";
    
      // arrays to hold copies of the markers and html used by the side_bar
      // because the function closure trick doesnt work there
      var gmarkers = [];


      // A function to create the marker and set up the event window
      function createMarker(point,name,html,iconbig) {
          var marker = new GMarker(point,{icon:iconbig});
        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        // save the info we need to use later for the side_bar
        gmarkers.push(marker);
        // add a line to the side_bar html
        side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a><br>';
         return marker;
      }


      // This function picks up the click and opens the corresponding info window
      function myclick(i) {
        GEvent.trigger(gmarkers[i], "click");
      }
     


    function createMarkerP(point,html,iconbig) {
//iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
        var marker = new GMarker(point,{icon:iconbig});
        return marker;
      }

      function createMarkerL(point,html) {
        var markerL = new GMarker(point);
        GEvent.addListener(markerL, "click", function() {
          markerL.openInfoWindowHtml(html);
         last_marker = markerL;
        });
        return markerL;
      }


 // ==================================================
      // A function to create a tabbed marker and set up the event window
      // This version accepts a variable number of tabs, passed in the arrays htmls[] and labels[]
      function createTabbedMarker(point,htmls,labels) {
        var markerT = new GMarker(point);
        GEvent.addListener(markerT, "click", function() {
          // adjust the width so that the info window is large enough for this many tabs
          if (htmls.length > 2) {
            htmls[0] = '<div style="width:'+htmls.length*88+'px">' + htmls[0] + '<\/div>';
          }
          var tabs = [];
          for (var i=0; i<htmls.length; i++) {
            tabs.push(new GInfoWindowTab(labels[i],htmls[i]));
          }
          markerT.openInfoWindowTabsHtml(tabs);
        });
        return markerT;
      }
      // ==================================================
      

      // This function picks up the click and opens the corresponding info window
      function myclick(i) {
        GEvent.trigger(gmarkers[i], "click");
      }


      // create the map
      var map = new GMap2(document.getElementById("map"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng(47.3,19.7),8);


