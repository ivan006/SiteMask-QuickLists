<?php 

// $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$prefix = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$actual_link = "$_SERVER[REQUEST_URI]";
// echo $actual_link;
$thing_link = "https://capetownhikingspots.pory.app" . $actual_link;
// echo $thing_link;

if($actual_link !== "/sitemap.xml"){
    
    echo file_get_contents($thing_link);
    
    if("old"=="!old"){
        echo str_replace("</body></html>","",file_get_contents($thing_link));
    
        ?>
        
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-STFQ7D6PF9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-STFQ7D6PF9');
    </script>
    </body></html>
        <?php
    }
} else {
    echo str_replace("https://capetownhikingspots.pory.app",$prefix,file_get_contents($thing_link));
    
}



?>

