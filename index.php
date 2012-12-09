<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# 
                  website: http://ogp.me/ns/website#">
    <meta charset="UTF-8" />
    <meta property="og:type" content="blog"> 
    <meta property="og:url" content="http://canileave.com/"> 
    <meta property='og:title' content='Can I leave my home safely? — Weather Report' />
    <meta property='og:site_name' content='Can I leave my home safely? — Weather Report' />
    <meta property='og:description' content='Just a stupid website to check the weather before you leave home. Powered by YQL.' />
    <meta property="og:image" content="http://canileave.com/img/cloud.jpg">
    <title>Can I leave my home safely? — Weather Report</title>
    <link href="css/style.css" rel="stylesheet" media="screen">
  </head>
  <body>
    
    <div class='top-right'>
      a stupid website created by <b>rafaqueque</b> * <a target='_blank' href='http://twitter.com/rafaqueque'>twitter</a> / <a target='_blank' href='http://github.com/rafaqueque'>github</a>
    </div>
    <div style='clear:both'></div>

    <div class='container'>
      
      <form method='get'>
        Hey <input type='text' class='input-big' name='place' placeholder='city...' value='<?php echo $_GET['place']; ?>'>, can I leave my home safely?
      </form>
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://canileave.com" data-text="Can I leave my home safely? — Weather Report —">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

      <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fcanileave.com&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
      <br><br>


      <?php 

        if ($_GET)
        {
            include("lib/simpleweather.class.php");

            $weather = new SimpleWeather(array("place" => $_GET['place'], "degrees" => "c"));

            if ($weather->getResult())
            {
                echo "LOL SURE, can you handle <b class='colored'>".$weather->getResult()->current_condition->temp."ºC</b> and <b class='colored'>".$weather->getResult()->current_condition->text."</b> weather?";
            }
            else
            {
                echo "City not found, stupid!";
            }
        }

      ?>
    </div>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36932606-1']);
      _gaq.push(['_setDomainName', 'canileave.com']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </body>
</html>