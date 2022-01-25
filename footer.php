<footer class="footer_v2">
  <div class="wrapper">


    <div class="f-nav-box">
      <div class="f-nav-box-column copyright-box">
        <a href="https://www.sahibweb.xyz/"><img src="https://1.bp.blogspot.com/-eu1LZUr3yNk/X1oZsAAo7_I/AAAAAAAABQo/d4j6yoAHkj0FS7TQ8zTOGYSy1F9CIAesACK4BGAYYCw/w800/logo.png" width="167"></a>
        <p class="copyright" dir="ltr">© 2020</p>
      </div>
      <div class="f-nav-box-column f-nav-container">
        <nav class="f-nav">
          <div class="f-nav-column f-nav-articles">
            <P><strong><h4 style="text-decoration: underline;">
Download Videos From:</h4></strong></P>
            <ul >
              <li><a href="https://www.sahibweb.xyz/" class="active" >YouTube</a></li>
              <li><a href="https://www.sahibweb.xyz/" class="active">Facebook</a></li>
              <li><a href="https://soundcloud.com" >SoundCloud</a></li>
              <li><a href="https://www.sahibweb.xyz/" class="active" >Vimeo</a></li>
              <li><a href="https://instagram.com" >Instagram</a></li>
              <li><a href="https://vk.com" >VK</a></li>
              <li><a href="https://twitter.com" >Twitter</a></li>
              <li><a href="https://tiktok.com" >Tik Tok</a></li>

            </ul>
          </div>
          <div class="f-nav-column f-nav-pages">
            <ul class="">
              <?php include 'ads-descargar.php';?>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</footer>



<script>
  $(function(){
    // menu
    $('body').on('click', 'header .menu-btn', function(){
      $('#nav_top').toggleClass('active');
    });

    var thumbnail_rel = [];
    $('a.thumbnail').each(function(){
      var rel = $(this).attr('rel');
      if(rel && !thumbnail_rel[rel])
      {
        thumbnail_rel[rel] = 1;
        $("a[rel='" + rel + "']").fancybox();
      }
    });

    $('body').on('click', 'img.thumbnail', function(){
      this.src = this.src.replace(/(\w\w)\.([a-z]{3,4})(?:\?|$)/i, function(s, p1, p2){
        if(p1 == '_t')
          return '.' + p2;

        return p1 + '_t.' + p2;
      });
    });

    var clipboard = new Clipboard('.clipboard-btn');
    clipboard.on('success', function(e){
      e.clearSelection();
      jAlert('Copiado');
    });
    clipboard.on('error',function(e){
      jAlertErr('No se pudo copiar');
    });
  });

  $('.spoiler-box:not(.open)').hide();
</script>

<script>
  (function(){
    if (_sf && _sf.stats) {
      _sf.stats.yaMetrikaOptions = _sf.stats.yaMetrikaOptions || {};
      _sf.stats.yaMetrikaOptions.webvisor = false;
    }
  })();
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  function yandexMetrika() {
    if (_sf && _sf.stats && _sf.stats.yaMetrikaEnabled === false) {
      if(top == self) {
        return;
      }

      if (!document.referrer || document.referrer.search(
        /^https?:\/\/(metrika.yandex.ru\/|webvisor\.com\/)/i) !== 0) {
        return;
    }
  }

  if (_sf.stats.yaMetrikaStart) {
    return;
  }

  _sf.stats.yaMetrikaStart = true;

  var options = {
    id: 10041220,
    webvisor: true,
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true
  };

  if (_sf.stats.yaMetrikaOptions && typeof _sf.stats.yaMetrikaOptions == 'object') {
    for (var i in _sf.stats.yaMetrikaOptions) {
      if (i != 'id' && _sf.stats.yaMetrikaOptions.hasOwnProperty(i)) {
        options[i] = _sf.stats.yaMetrikaOptions[i];
      }
    }
  }


  (function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
      try {
        w.yaCounter10041220 = new Ya.Metrika(options);
      } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
    s = d.createElement("script"),
    f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
  })(document, window, "yandex_metrika_callbacks");
}
yandexMetrika();
</script>
<noscript><div><img src="//mc.yandex.ru/watch/10041220" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



<script>
  $('body').on('click sendstats', 'a.ga_track_events', function(event){
    gaHandler.trackNode(this);
  });
</script>

</body>
</html>
<script>
  (function() {
    if (!_sf.app || typeof sfApp === 'undefined') {
      return;
    }

    $('#sf_form').append($('<input type="hidden" name="app"/>').val(_sf.app));
    $('body').addClass('sfApp').on('click', '.link.link-download', function(e){
      var url = $(this).attr('href');
      if(!url || url.search(/^https?:\/\//i) == -1)
        url = this.getAttribute('data-copy');

      var fileName = this.getAttribute('download') || '';
      if (sfApp.download(url, fileName)) {
        e.preventDefault();
      }
    });

    $(function(){
      var firstrunKey = _sf.app + '-firstrun';
      if (!localStorage.getItem(firstrunKey)) {
        localStorage.setItem(firstrunKey, '1');
        if (window.gaHandler) {
          window.gaHandler.track('send;event;firstrun;' + _sf.app + ';' + sfApp.version());
        }
      }
    });
  })();
</script>
<script type="text/javascript">
  var infolinks_pid = 3278045;
  var infolinks_wsid = 0;
</script>
<script type="text/javascript" src="//resources.infolinks.com/js/infolinks_main.js"></script>

</body>
</html>