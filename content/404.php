<!doctype html>
<html lang="en">
  <head>
    <title>New Lands Survival | 404</title>
    <meta name="robots" content="noindex" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <style>
      h3 {
        font-weight: 100;
        text-align: center;
      }
      @media (max-width: 700px) {
        h3 {
          font-size: 1em;
        }
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 300px;">
        <h1>404</h1>
        <h3>Page not found.</h3>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
      if(window.innerWidth > 950) {
        var video = document.getElementById('landing-title-video');
        video.setAttribute('src', video.getAttribute('hidden-src'));
      }
    </script>
  </body>
</html>
