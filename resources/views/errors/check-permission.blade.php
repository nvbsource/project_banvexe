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
        <!--begin::Page bg image-->
        <style>body { background-image: url('/metronic8/demo1/assets/media/auth/bg3.jpg'); } [data-theme="dark"] body { background-image: url('/metronic8/demo1/assets/media/auth/bg3-dark.jpg'); }</style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Signup Welcome Message -->
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center text-center p-10">
                <!--begin::Wrapper-->
                <div class="card card-flush w-lg-650px py-5">
                    <div class="card-body py-15 py-lg-20">
                        <!--begin::Logo-->
                        <div class="mb-14">
                            <img alt="Logo" src="{{asset('admin/assets/media/logos/custom-2.svg')}}" class="h-40px">
                        </div>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="fw-bolder text-gray-900 mb-5">Bạn không có quyền truy cập vào trang này</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <!--end::Text-->
                        <!--begin::Link-->
                        <div class="mb-11">
                            <a href="{{route("adminLogin")}}" class="btn btn-sm btn-primary">Trở về trang chủ</a>
                        </div>
                        <!--end::Link-->
                        <!--begin::Illustration-->
                        <div class="mb-0">
                            <img src="/metronic8/demo1/assets/media/auth/membership.png" class="mw-100 mh-300px theme-light-show" alt="">
                            <img src="/metronic8/demo1/assets/media/auth/membership-dark.png" class="mw-100 mh-300px theme-dark-show" alt="">
                        </div>
                        <!--end::Illustration-->
                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Signup Welcome Message-->
    </div>
    <script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
    <script src="{{asset('admin/assets/app/js/main.js')}}"></script>
  </body>
</html>