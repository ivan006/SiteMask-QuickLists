<?php



// $url = "https://example.com/";
// $copiedxpath = "/html/body/div/p[2]/a";

// http://places.capetownlists.co.za/?url=https%3A%2F%2Fwww.artefacts.co.za%2Fmain%2FBuildings%2Fbldgframes.php%3Fbldgid%3D16088%26user%3D1&xpath=%2Fhtml%2Fbody%2Ftable%5B1%5D%2Ftr%2Ftd%5B4%5D
// https://www.artefacts.co.za/main/Buildings/bldgframes.php?bldgid=16088&user=1
// /html/body/table[1]/tr/td[4]
$url = urldecode($_GET["url"]);
$copiedxpath = "/html/body/p/table[1]/tbody/tr/td[4]";
$copiedxpath = urldecode($_GET["xpath"]);
// echo $copiedxpath;


// echo "hello!\r\n";
$html = new DOMDocument();




ob_start();

?>

    <html>
   <head>
      <LINK REL='SHORTCUT ICON' HREF='http://www.artefacts.co.za/favicon.ico'>
      <title>2 Double-storeyed dwellings for E Morgan details</title>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-plugins/3.0.3/control/Permalink.min.js" integrity="sha256-fJOBktFkvheDaGxagOcgNU+745zyvIDOkHioVJDXujc=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-plugins/3.0.3/control/Permalink.Layer.min.js" integrity="sha256-IR3dLMDgW61PPbrjYPe8eD7ou3RBAaVyoD4CNcq+8tw=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-plugins/3.0.3/control/Permalink.Overlay.min.js" integrity="sha256-xoP/txAKIYDr3MjZh1f2qtNn8lEa6zmhhkPxoejGgQM=" crossorigin="anonymous"></script>
      <link rel=stylesheet type='text/css' href='../../css/master.css'>
      <style>
         #myBtn {
         display: none;
         position: fixed;
         bottom: 20px;
         right: 30px;
         z-index: 99;
         font-size: 18px;
         border: none;
         outline: none;
         background-color: #3366cc;
         color: white;
         cursor: pointer;
         padding: 15px;
         border-radius: 4px;
         }
         #myBtn:hover {
         background-color: #555;
         }
      </style>
      <script type='text/javascript'>
         // When the user scrolls down 20px from the top of the document, show the button
         window.onscroll = function() {scrollFunction()};
         
         function scrollFunction() {
             if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                 document.getElementById("myBtn").style.display = "block";
             } else {
                 document.getElementById("myBtn").style.display = "none";
             }
         }
         
         // When the user clicks on the button, scroll to the top of the document
         function topFunction() {
             document.body.scrollTop = 0;
             document.documentElement.scrollTop = 0;
         }
      </script>
   </head>
   <body>
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <script>
         // When the user scrolls down 20px from the top of the document, show the button
         window.onscroll = function() {scrollFunction()};
         
         function scrollFunction() {
             if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                 document.getElementById("myBtn").style.display = "block";
             } else {
                 document.getElementById("myBtn").style.display = "none";
             }
         }
         
         // When the user clicks on the button, scroll to the top of the document
         function topFunction() {
             document.body.scrollTop = 0;
             document.documentElement.scrollTop = 0;
         }
         
             var _gaq = _gaq || [];
         
         _gaq.push(['_setAccount', 'UA-23794095-1']);
         
         _gaq.push(['_trackPageview']);
         
         
         
         (function() {
         
             var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         
             ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         
             var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
         
         })();
         
             <meta charset="utf-8" />
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             
             <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
         
             <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
             <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin="">
      </script>
      </script>		
      <p align='center'>
      <table border=0 class='gentext' width='900'>
         <tr>
            <td valign='top' width='200'>
               <a href='contact.php' class='navbar' target='_top'><img src='../../images/logo-250.jpg' border='none' width='170'></a><br><br>
               <p><a href="mailto:contact@artefacts.co.za?subject=2 Double-storeyed dwellings for E Morgan, Cape Town&body=Please do not change the subject line of this email as we need it as reference to be able to help you." class='blueg'>Contact Artefacts</A><br>please if you have any comments or more information regarding this record.</p>
            </td>
            <td width='100' bgcolor='f6f3ec' class='navbartop' valign='center'>
               <!-- <a href='../../index.html' class='navbar' target='_top'>Home</a><br>
                  <a href='contact.php' class='navbar' target='_top'>Upfront</a><br>
                  <a href='upframes.php' class='navbar' target='_top'>Now Up</a><br>
                  <a href='book_list_bib.php?initial=A' class='navbar' target='_top'>Books</a><br>
                  <a href='townlistframes.php?initial=A' class='navbar' target='_top'>Towns</a><br> -->
               <form action='upframes.php' method='post' target='top' style='display: inline'><input type='submit' value='Now Up' style='background-color: f6f3ec; border:none; color:blue' /></form>
               <br>
               <form action='contact.php' method='post' target='top' style='display: inline'><input type='submit' value='Upfront' style='background-color: f6f3ec; border:none; color:blue' /></form>
               <br>
               <form action='townlistframes.php' method='post' target='top' style='display: inline'><input type='hidden' name='initial' value='A' /><input type='submit' value='Towns' style='background-color: f6f3ec; border:none; color:blue' /></form>
               <br>
               <form action='bldglistframes.php' method='post' target='top' style='display: inline'><input type='hidden' name='initial' value='A' /><input type='submit' value='Structures' style='background-color: f6f3ec; border:none; color:blue'/></form>
               <br>
               <form action='archlistframes.php' method='post' target='top' style='display: inline' bgcolor='f6f3ec'><input type='hidden' name='initial' value='A' /><input type='submit' value='People'  style='background-color: f6f3ec; border:none; color:blue'/></form>
               <br>
               <form action='archplistframes.php' method='post' target='top' style='display: inline' bgcolor='f6f3ec'><input type='hidden' name='initial' value='A' /><input type='submit' value='Firms'  style='background-color: f6f3ec; border:none; color:blue'/></form>
               <br>
               <form action='book_list_bib.php' method='post' target='top' style='display: inline' bgcolor='f6f3ec'><input type='hidden' name='initial' value='A' /><input type='submit' value='Books'  style='background-color: f6f3ec; border:none; color:blue'/></form>
               <br>
               <form action='lexframes.php' method='post' target='top' style='display: inline' bgcolor='f6f3ec'><input type='hidden' name='initial' value='A' /><input type='submit' value='Lexicon'  style='background-color: f6f3ec; border:none; color:blue'/></form>
               <!-- <a href='bldglistframes.php?initial=A' class='navbar' target='_top'>Structures</a><br>
                  <a href='archlistframes.php?orderby=Surname&initial=A' class='navbar' target='_top'>People</a><br>
                  <a href='archplistframes.php?initial=A' class='navbar' target='_top'>Firms</a><br>
                  <a href='lexframes.php?initial=A' class='navbar' target='_top'>Lexicon</a><br> -->
               <!-- <a href='search_form.php' class='navbar' target='_top'>Search</a><br> --><br><br><br>
            </td>
            <td width='10'></td>
            <td valign='top'>
               <p class='heading'>2 Double-storeyed dwellings for E Morgan<br><SPAN class='text'>Woodstock, <a href='towndetframes.php?townid=334&lim_start=0' class='general' target='_blank'>Cape Town</a>, Western Cape</span></p>
               <a href='archframes.php?archid=1408' class='general' target='_blank'>Robert MacBeth ROBERTSON</a>: Architect <br>
            </td>
         </tr>
      </table>
      <table border = 0 class='gentext' width=900>
         <tr>
            <td valign='top' width=190>
               <table class='gentext'>
                  <tr>
                     <td><b>Date</b>:</td>
                     <td>1898</td>
                  </tr>
                  <tr>
                     <td><b>Client</b>:</td>
                     <td>E Morgan</td>
                  </tr>
                  <td><b valign='top'>Type</b>:</td>
                  <td><a href='type_det.php?typeid=30' target='_blank' class='general'>Homestead</a></td>
                  </tr>
                  <tr>
                  <tr>
                     <td><b>Status</b>:</td>
                     <td>Unknown </td>
                  </tr>
                  <tr>
                     <td valign='top'><b>Street</b>:</td>
                     <td>Duke Road (Walmer Estate)</td>
                  </tr>
                  </tr>
               </table>
            </td>
            <td width=10></td>
            <td valign='top' width=600>
               <p>(Price Lewis list item 10716)</p>
            </td>
         </tr>
      </table>
    
<?php

?>

<?php



$ob_get_contents = ob_get_contents();
// $html = $html->loadHTML($ob_get_contents);

ob_end_clean();



@$html->loadHTMLFile($url);	


// $dom->loadXML($content);

// $xpath = new DOMXPath($dom);

$xpath = new DOMXPath($html);
$nodelist = $xpath->query($copiedxpath);

foreach ($nodelist as $n) {
    echo $n->nodeValue . "\n";
}
?>