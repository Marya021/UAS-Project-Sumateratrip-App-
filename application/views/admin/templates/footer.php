<!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-12">
            <div class="copyright text-center text-lg-center text-muted">
              &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">Sumatera Trip</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?= base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?= base_url(); ?>assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/chart.js/dist/Chart.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <!-- Demo JS - remove this in your project -->
  <script src="<?= base_url(); ?>assets/js/demo.min.js"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
</body>

</html>