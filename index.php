<?php
  $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
?>
<!DOCTYPE html>
<html lang="en">
  <head do_action( 'wp_head' )>
    <meta charset="utf-8" />
    <link rel="icon" href="/wordpress/wp-content/themes/spa/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="/wordpress/wp-content/themes/spa/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="/wordpress/wp-content/themes/spa/manifest.json" />
    <!--
      Notice the use of /wordpress/wp-content/themes/spa in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "/wordpress/wp-content/themes/spa/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <title>Spa</title>


    <link rel="icon" type="image/png" href="<?php echo $TEMPLATE_PATH; ?>../src/assets/img/site-logo.png">

    <!-- Iconic fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATE_PATH; ?>../src/assets/css/font-awesome.min.css">

    <!-- slick slider Assets -->
    <link href="../src/assets/css/slick-theme.css" rel="stylesheet">
    <link href="../src/assets/css/slick.css" rel="stylesheet">


    <!-- for responsive navigation  -->
    <link rel="stylesheet" type="text/css" href="assets/css/meanmenu.css">

    <!-- main style for site -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css?family=Marcellus&display=swap" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

  <link href="/wordpress/wp-content/themes/spa/static/css/main.chunk.css?c281fad98fff0180dd34" rel="stylesheet"></head>
  <body>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    <!--
      This HTML file is a template.
      If you open it directly in the browser, you will see an empty page.

      You can add webfonts, meta tags, or analytics to this file.
      The build step will place the bundled scripts into the <body> tag.

      To begin the development, run `npm start` or `yarn start`.
      To create a production bundle, use `npm run build` or `yarn build`.
    -->

    <!-- jQuery library  -->
    <script src="assets/js/jquery.js"></script>

    <!-- slick  jquery plguin -->
    <script src="assets/js/slick.js"></script>

    <!-- jquery.meanmenu for responsive menu -->
    <script src="assets/js/jquery.meanmenu.js"></script>

    <!--ResizeSensor for to support sticky sidebar-->
    <script src="assets/js/ResizeSensor.js"></script>

    <!--theia-sticky-sidebar for sticky sidebar-->
    <script src="assets/js/theia-sticky-sidebar.js"></script>
    <script src="assets/js/jquery.countdown.js"></script>

    <!-- Custom script -->
    <script src="assets/js/custom.js"></script>


  <script src="/wordpress/wp-content/themes/spa/static/js/bundle.js?c281fad98fff0180dd34"></script><script src="/wordpress/wp-content/themes/spa/static/js/0.chunk.js?c281fad98fff0180dd34"></script><script src="/wordpress/wp-content/themes/spa/static/js/main.chunk.js?c281fad98fff0180dd34"></script></body>
</html>
