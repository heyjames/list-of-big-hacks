<!DOCTYPE html>
<?php
  $siteName = "List of Big Hacks";
  $stripSiteName = "listofbighacks";
  $subHeader = "Major companies that had their data stolen";
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $siteName ?></title>
    <style>
      body {
        background-color: #FAFAFA;
        font-family: verdana, helvetica, arial;
        margin: 0;
      }
      
      h1, h5, .footer {
        text-align: center;
      }
      
      h1 {
        margin: 0 0 0 0;
      }
      
      h5 {
        font-weight: normal;
        margin: 0 0 15px 0;
      }
      
      hr {
         height:1px;
         border-width:0;
         width: 600px;
         background-color: lightgray;
      }
      
      #wrapper {
        background-color: #FFFFFF;
        max-width: 980px;
        margin:0 auto 0 auto;
        box-shadow: 0px 0px 10px #C0C0C0;
      }
      
      .table {
        margin: 0px auto;
      }
      
      .footer {
        font-size: 0.8em;
        color: #bcbcbc;
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: #444444;
      }
      
      .table tbody td {
        padding-left: 12px;
        padding-right: 12px;
      }
      
      .table tr {
        height: 26px;
      }
    </style>
  </head>
  <body>
    <div id="wrapper">
      <?php
        echo "<h1>$siteName</h1>";
        echo "<h5>$subHeader</h5>";
        echo "<div class=\"divider\"></div>";
        echo "<hr>";
      ?>
      
      <table class="table">
        <tbody>
          
          <?php
            $incidentsArray = array(
              /*
              array(
                "_Year_", 
                "_Month_", 
                "_Source_URL_", 
                "_Company_Name_", 
                "_People_Affected_", 
              ),
              */
              
              array(
                "2015", 
                "10", 
                "https://www.bostonglobe.com/business/2015/10/01/experian-says-info-from-million-mobile-customers-hacked/9zRR8wRiKP8G4b3ksC8iRJ/story.html", 
                "Experian", 
                "15 million T-Mobile customers affected"
              ),
              
              array(
                "2015", 
                "10", 
                "http://money.cnn.com/2015/10/02/technology/scottrrade-hack", 
                "Scottrade", 
                "4.6 million customers affected"
              ),
              
              array(
                "2015", 
                "09", 
                "http://www.seattletimes.com/nation-world/nation/costco-photo-center-website-hacked-personal-info-stolen", 
                "Costco", 
                "Costco Photo Center customers affected"
              ),
              
              array(
                "2015", 
                "07", 
                "http://krebsonsecurity.com/2015/07/online-cheating-site-ashleymadison-hacked/", 
                "Ashley Madison", 
                "37 million customers affected", 
              ),
              
              array(
                "2015", 
                "02", 
                "http://money.cnn.com/2015/02/04/technology/anthem-insurance-hack-data-security/", 
                "Anthem Inc", 
                "80 million customers affected", 
              ),
              
              array(
                "2014", 
                "11", 
                "http://www.vox.com/2014/12/14/7387945/sony-hack-explained", 
                "Sony Pictures", 
                "Sony Pictures's Corporate Network", 
              ),
              
              array(
                "2013", 
                "12", 
                "http://finance.yahoo.com/news/target-breach-affected-millions-more-184807005.html", 
                "Target", 
                "94 million customers affected", 
              ),
              
              array(
                "2011", 
                "04", 
                "http://www.bbc.com/news/technology-13192359", 
                "PlayStation Network", 
                "77 million customers affected", 
              )
            );
            
            $i = 0;
            foreach($incidentsArray as $incident) {
              // Pass the numbered date of month as argument and returns the 
              // abbreviated name
              $time = mktime(0, 0, 0, $incidentsArray[$i][1]);
              $name = strftime("%b", $time);
              
              $src = "<tr>\n";
              $src .= "<td>" . $incidentsArray[$i][0] . "-" . $name . "</td>\n";
              $src .= "<td><a target=\"_blank\" href=\"" . $incidentsArray[$i][2] 
                  . "\">" . $incidentsArray[$i][3] . "</a></td>\n";
              $src .= "<td>" . $incidentsArray[$i][4] . "</td>\n";
              $src .= "</tr>\n";
              
              echo $src;
              
              $i++;
            } // foreach($incidentsArray as $incident) {
          ?>
        </tbody>

      </table>
      <br>
    <footer class="footer">
      www.<?php echo $stripSiteName  ?>.com &copy; 2015 | <?php echo $stripSiteName  ?>@gmail.com
    </footer>
    </div> <!--wrapper-->
  </body>
</html>
