<!DOCTYPE html>
<html>
    <head>
        <title>YourUserAgent.com</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73395905-1', 'auto');
  ga('send', 'pageview');

</script>	
	{!! Html::style('css/app.css') !!}
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                /*display: table-cell;*/
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                font-weight: 700;
            }

            h2 {
                text-align: left;
                font-weight: bold;
            }

            #user_agent {
                border-style: dashed;
                border-width: 2px;
                border-color: #f1b8e7;
                padding: 20px;
            }
            
            .data_block {
                border-style: dashed;
                border-width: 1px;
                border-color: black;
                padding: 5px;
		font-size: 20px;
		font-style: normal;
            }
	
	    h1 {
		font-size:  96px;
		font-weight: 700;
		font-weight: bold;
            }

	    .ua_content {
		padding-left: 5em;
	        text-align: justify;
		padding-right: 5em;
		font-size: 18px;
	     }

	    #content_title {
		padding-left: 20px;
	    }
        </style>
	
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>YourUserAgent.com</h1>
                <div id="user_agent">
                    <h2>Your IP Address Is:  </h2>
                    <p class="data_block">
                        <?php
                        $ip = getenv('HTTP_CLIENT_IP')?:
                                getenv('HTTP_X_FORWARDED_FOR')?:
                                getenv('HTTP_X_FORWARDED')?:
                                getenv('HTTP_FORWARDED_FOR')?:
                                getenv('HTTP_FORWARDED')?:
                                getenv('REMOTE_ADDR');

                        echo($ip);?>
                    </p>
                    <h2>Your User Agent Is:  </h2>
                    <p class="data_block">
                        <?php echo (getallheaders()['User-Agent']); ?>
                    </p>

                </div>
		<div id="ua_about">
		    <h2 id="content_title">What is a User Agent String?</h2>
		    <div class="ua_content">
			User Agent strings allow servers to identify incoming requests.  When browsing a website on a standard web browser such as Safari, Google Chrome, Mozilla Firefox, or Microsoft Internet Explorer, your browser sends a particular User Agent to the website’s server.  Based on the User Agent string received, the web server would be able to identify and serve content based on the capabilities of the known client software.  One such example would be mobile versus tablet versus desktop.  Each has their own respective User Agent string which identifies the platform being used.   
		    </div>
		</div>
            </div>
	<div>
	</div>
        </div>

    </body>
</html>
