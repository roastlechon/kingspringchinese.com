<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>King Spring Chinese Restaurant | Contact</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAArJnOfl4FxJ3UtFoQNDkJvBQkVdk34ApKFZCTShNd0DwytFl-HxRpxPCpu3DSVk_reSGSAEr6oHvhIA"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {

		var map = new GMap2(document.getElementById("map"));
			map.setCenter(new GLatLng(33.860199, -84.516846), 16);
			map.openInfoWindow(map.getCenter(),
            document.createTextNode("King Spring Chinese Restaurant"));
      }
    }

    //]]>
    </script>

</head>

<body onload="load()" onunload="GUnload()">
<div id="container">
	<div id="main">
    	<div id="header"></div>
        <div id="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="foodmenu.php">Menu</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div id="content">
        	<div id="maincontent">
                <h1>
                  <p align="left">Fax: (770) 319-6871<br />
                    Phone: (770) 319-6868<br />
									Address: 3791 South Cobb Drive<br />
									Smyrna, GA 30080 Suite F<br />
                                    
			  </p></h1>
                <div id="map" style="width: 500px; height: 300px"></div>
        	</div>
      </div>
	</div>
</div>
</body>
</html>
