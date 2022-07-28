<!DOCTYPE html>
<html lang="en">
  <head>
    <title>404 Not Found</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{asset('admin/assets/media/logos/favicon.ico')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script>
      (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != 'dataLayer' ? '&amp;l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
  </head>
  <body data-kt-name="metronic" id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <script>
      if (document.documentElement) {
        const defaultThemeMode = "system";
        const name = document.body.getAttribute("data-kt-name");
        let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value");
        if (themeMode === null) {
          if (defaultThemeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
          } else {
            themeMode = defaultThemeMode;
          }
        }
        document.documentElement.setAttribute("data-theme", themeMode);
      }
    </script>
    <noscript>
      <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
      <style>
        body {
          background-image: url("{{asset('admin/assets/media/auth/bg1.jpeg')}}");
        }

        [data-theme="dark"] body {
          background-image: url("{{asset('admin/assets/media/auth/bg1-dark.jpeg')}}");
        }
      </style>
      <div class="d-flex flex-column flex-center flex-column-fluid">
        <div class="d-flex flex-column flex-center text-center p-10">
          <div class="card card-flush w-lg-650px py-5">
            <div class="card-body py-15 py-lg-20">
              <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">Oops!</h1>
              <div class="fw-semibold fs-6 text-gray-500 mb-7">We can't find that page.</div>
              <div class="mb-3">
                <img src="{{asset('admin/assets/media/auth/404-error.png')}}" class="mw-100 mh-300px theme-light-show" alt="">
                <img src="{{asset('admin/assets/media/auth/404-error-dark.png')}}" class="mw-100 mh-300px theme-dark-show" alt="">
              </div>
              <div class="mb-0">
                <a href="{{route("dashboard")}}" class="btn btn-sm btn-primary">Quay về trang chủ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/app/js/main.js')}}"></script>
  </body>
</html>