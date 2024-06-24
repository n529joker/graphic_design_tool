<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="180x180" href="assets/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/fav/favicon-16x16.png">
  <link rel="manifest" href="assets/fav/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="assets/css/font.css">

  <title>BuilderJS · Home</title>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="/dist/css/tailwind.css">
  <link rel="stylesheet" href="assets/css/sample.css">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .item-desc a {
      color: #555;
    }

    .card img {
      -webkit-transition: opacity 0.5s ease-in-out;
      -moz-transition: opacity 0.5s ease-in-out;
      -ms-transition: opacity 0.5s ease-in-out;
      -o-transition: opacity 0.5s ease-in-out;
      transition: opacity 0.5s ease-in-out;
    }

    .btn-primary {
      color: #fff;
      background-color: #e76916;
      border-color: #e76916;
    }

    .btn-primary:hover {
      color: #fff;
      background-color: #ff7d28;
      border-color: #ff7d28;
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active,
    .show>.btn-primary.dropdown-toggle {
      color: #fff;
      background-color: #ff7d28;
      border-color: #ff7d28;
    }

    .btn-primary.focus,
    .btn-primary:focus {
      color: #fff;
      background-color: #ff7d28;
      border-color: #ff7d28;
      box-shadow: 0 0 0 0.2rem rgba(255, 166, 38, 0.5);
    }

    .card img:hover {
      opacity: 0.8;
    }

    .shadow-sm {
      box-shadow: 0 .125rem .5rem rgba(0, 0, 0, .2) !important;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    h5 {
      font-size: 1.2rem;
    }

    .card {
      overflow: hidden;
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="assets/css/album.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="relative flex flex-wrap items-center content-between py-3 px-4 text-white bg-gray-900 shadow-sm">
      <div class="container mx-auto sm:px-4 flex justify-between">
        <a class="inline-block pt-1 pb-1 mr-4 text-lg whitespace-no-wrap" href="#">
          <span class="flex items-center">
            <img class="mr-3" src="assets/image/builderjs_color_logo.png" width="30" height="30" alt="Builder JS"
              role="presentation">
            <span class="logo__HiddenText-s1uxqgbl-1 logo-1">
              <span class="flex items-center logo-1-inner">
                <span class="font-weight-light">Builder</span>
                <span class="logo-1-js">JS</span>
              </span>
            </span>
          </span>
        </a>
        <form class="flex items-center mt-2 md:mt-0">
          <button onclick="alert('Can not upload template from DEMO site!');"
            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 my-2 sm:my-0"
            type="submit">Upload Template</button>
        </form>
      </div>
    </div>

    <script>
      $(document).ready(function () {
        $('.scroll-to').click(function (e) {
          e.preventDefault();
          var target = $($(this).attr('href'));

          $('html, body').animate({
            scrollTop: target.offset().top
          }, 500);
        });
      });
    </script>
  </header>

  <main role="main">

    <section class="py-8 px-4 md:py-16 md:px-8 mb-8 bg-gray-200 rounded">
      <div class="hover"></div>
      <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap ">
          <div class="md:w-1/2 pr-4 pl-4 py-5 mt-4">
            <h1 class="my-4 pt-4" style="font-size:24px">Welcome to <br /><span
                class="font-family-comf">Builder</span><span class="js-2">JS</span></h1>
            <p class="text-xl font-light">The fully-featured and comprehensive design platform for emails and web pages.
              Visually design your beautiful emails or HTML pages the joyful way with an advanced Drag & Drop editor.
            </p>
            <p class="my-4">
              <a href="#example"
                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 my-2 mr-2 scroll-to">Start
                Designing</a>
              <a href="https://codecanyon.net/item/builderjs-html-email-page-builder/27146783"
                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-600 text-white hover:bg-gray-700 my-2">Buy
                &amp; Download</a>
            </p>
          </div>
          <div class="md:w-1/2 pr-4 pl-4">
            <img src="assets/image/builder.svg" />
          </div>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-gray-100" id="example">
      <div class="container mx-auto sm:px-4">
        <div class="text-center mb-5">
          <h2 class="font-normal font-size-40">Getting started with a template</h2>
          <p class="text-gray-700">
            Start your design by choosing one of available layout templates that come with BuilderJS.
          </p>
        </div>
        <div class="flex flex-wrap ">
          <?php
          $dir = __DIR__ . DIRECTORY_SEPARATOR . "/templates/featured/";
          $templateUrl = array_diff(scandir($dir), array('..', '.'));
          foreach ($templateUrl as $name) {
            $path = __DIR__ . DIRECTORY_SEPARATOR . "templates/featured/" . $name;
            $files = glob($path . "/index.html");
            if (count($files) && $name != '0_3_form_builder') {
              $content = file_get_contents($files[0]);
              $preg_matchs = preg_match_all('/(<title\>([^<]*)\<\/title\>)/i', $content, $m);
              $title = $m[2][0];

              $thumb = 'templates/featured/' . $name . '/thumb.svg';
              if (!file_exists($thumb)) {
                $thumb = 'templates/featured/' . $name . '/thumb.png';
              }

              $id = $name; ?>
              <div class="md:w-1/4 pr-4 pl-4">
                <div
                  class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-4 shadow-sm">
                  <a target="_blank" href="design.php?id=<?php echo $id ?>&type=featured">
                    <img width="100%" height="100%" class="_1xvs1" src="<?php echo $thumb ?>" title="<?php echo $title ?>"
                      alt="<?php echo $title ?>">
                  </a>
                  <div class="flex-auto p-6">
                    <h5><?php echo $title ?></h5>
                    <div class="JHf2a mb-4 text-xs text-gray-700 item-desc"><i> by </i><a class="R8zaM"
                        href="javascript:;">BuilderJS</a><span> at </span><a class="R8zaM"
                        href="javascript:;">SorrentoCorp</a></div>
                    <div class="flex justify-between items-center">
                      <div class="relative inline-flex align-middle">
                        <a target="_blank" href="design.php?id=<?php echo $id ?>&type=featured"
                          class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-blue-600 text-white hover:bg-blue-600">Design</a>
                      </div>
                      <small class="text-gray-700">Featured</small>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          } ?>
        </div>
      </div>
    </div>

    <div class="album py-5 bg-gray-100" id="example">
      <div class="container mx-auto sm:px-4">
        <div class="text-center mb-5">
          <h2 class="font-normal font-size-40">Basic layouts</h2>
          <p class="text-gray-700">
            Start your design by choosing one of available layout templates that come with BuilderJS.
          </p>
        </div>
        <div class="flex flex-wrap ">
          <?php
          $dir = __DIR__ . DIRECTORY_SEPARATOR . "/templates/default/";
          $templateUrl = array_diff(scandir($dir), array('..', '.'));
          foreach ($templateUrl as $name) {
            $path = __DIR__ . DIRECTORY_SEPARATOR . "templates/default/" . $name;
            $files = glob($path . "/index.html");
            if (count($files) && $name != '0_3_form_builder') {
              $content = file_get_contents($files[0]);
              $preg_matchs = preg_match_all('/(<title\>([^<]*)\<\/title\>)/i', $content, $m);
              $title = $m[2][0];

              $thumb = 'templates/default/' . $name . '/thumb.svg';
              if (!file_exists($thumb)) {
                $thumb = 'templates/default/' . $name . '/thumb.png';
              }

              $id = $name; ?>
              <div class="md:w-1/4 pr-4 pl-4">
                <div
                  class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-4 shadow-sm">
                  <a target="_blank" href="design.php?id=<?php echo $id ?>&type=default">
                    <img width="100%" height="100%" class="_1xvs1" src="<?php echo $thumb ?>" title="<?php echo $title ?>"
                      alt="<?php echo $title ?>">
                  </a>
                  <div class="flex-auto p-6">
                    <h5 class="fs-5"><?php echo $title ?></h5>
                    <div class="JHf2a mb-4 text-xs text-gray-700 item-desc"><i> by </i><a class="R8zaM"
                        href="javascript:;">BuilderJS</a><span> at </span><a class="R8zaM"
                        href="javascript:;">SorrentoCorp</a></div>
                    <div class="flex justify-between items-center">
                      <div class="relative inline-flex align-middle">
                        <a target="_blank" href="design.php?id=<?php echo $id ?>&type=default"
                          class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-blue-600 text-white hover:bg-blue-600">Design</a>
                      </div>
                      <small class="text-gray-700">Layout</small>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          } ?>
        </div>
      </div>
    </div>

    <div class="album py-5 bg-gray-100">
      <div class="container mx-auto sm:px-4">
        <div class="text-center mb-5">
          <h2 class="font-normal font-size-40">Or upload your template and edit</h2>
          <p class="text-gray-700">
            If you already have an email or page template, just load it to the editor and start editing...
          </p>
        </div>

        <div class="flex flex-wrap ">
          <?php
          $dir = __DIR__ . DIRECTORY_SEPARATOR . "/templates/custom/";
          $directories = array_diff(scandir($dir), array('..', '.'));
          foreach ($directories as $name) {
            $path = __DIR__ . DIRECTORY_SEPARATOR . "templates/custom/" . $name;
            $files = glob($path . "/index.html");
            if (count($files)) {
              $content = file_get_contents($files[0]);
              $preg_matchs = preg_match_all('/(<title\>([^<]*)\<\/title\>)/i', $content, $m);
              $title = $m[2][0];

              $thumb = 'templates/custom/' . $name . '/thumb.svg';
              if (!file_exists($thumb)) {
                $thumb = 'templates/custom/' . $name . '/thumb.png';
              }

              $id = $name; ?>
              <div class="md:w-1/4 pr-4 pl-4">
                <div
                  class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 mb-4 shadow-sm">
                  <a target="_blank" href="design.php?id=<?php echo $id ?>&type=custom">
                    <img width="100%" height="100%" class="_1xvs1" src="<?php echo $thumb ?>" title="<?php echo $title ?>"
                      alt="<?php echo $title ?>">
                  </a>
                  <div class="flex-auto p-6">
                    <h6 class="h6-title" title="<?php echo $title ?>"><?php echo $title ?></h6>
                    <div class="JHf2a mb-4 text-xs text-gray-700 item-desc"><i> by </i><a class="R8zaM"
                        href="javascript:;">BuilderJS</a><span> at </span><a class="R8zaM"
                        href="javascript:;">SorrentoCorp</a></div>
                    <div class="flex justify-between items-center">
                      <div class="relative inline-flex align-middle">
                        <a target="_blank" href="design.php?id=<?php echo $id ?>&type=custom"
                          class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-blue-600 text-white hover:bg-blue-600">Design</a>
                      </div>
                      <small class="text-gray-700">Layout</small>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          } ?>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-gray-700">
    <div class="container mx-auto sm:px-4">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <p>© 2022 Sorrento Corp. Trademarks and brands are the property of their respective owners.</p>
    </div>
  </footer>

</html>