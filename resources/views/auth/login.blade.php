<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.9
Purchase: https://1.envato.market/Vm7VRE
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <title>Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="
            The most advanced Tailwind CSS & Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo,
            Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions.
            Grab your copy now and get life-time updates for free.
        " />
    <meta name="keywords" content="
            tailwind, tailwindcss, metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js,
            Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates,
            free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button,
            bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon
        " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->



    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('admin')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');

    </script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }

    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }

    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Logo-->
            <a href="{{asset('admin')}}/index.html" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="{{asset('admin')}}/assets/media/logos/default.svg" class="theme-light-show h-25px" />
                <img alt="Logo" src="{{asset('admin')}}/assets/media/logos/default-dark.svg"
                    class="theme-dark-show h-25px" />
            </a>
            <!--end::Logo-->

            <!--begin::Aside-->
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <!--begin::Wrapper-->
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <!--begin::Header-->
                    <div class="d-flex flex-stack py-2">
                        <!--begin::Back link-->
                        <div class="me-2">

                        </div>
                        <!--end::Back link-->

                        <!--begin::Sign Up link-->
                        <div class="m-0">
                            <span class="text-gray-500 fw-bold fs-5 me-2" data-kt-translate="sign-in-head-desc">
                                Not a Member yet?
                            </span>

                            <a href="{{asset('admin')}}/authentication/layouts/fancy/sign-up.html"
                                class="link-primary fw-bold fs-5" data-kt-translate="sign-in-head-link">
                                Sign Up
                            </a>
                        </div>
                        <!--end::Sign Up link--->





                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="border-secondary shadow p-6 rounded">
                        <!--begin::Form-->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!--begin::Body-->
                            <div class="card-body border-1">
                                <!--begin::Heading-->
                                <div class="text-center mb-10">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 mb-3 fs-3x" data-kt-translate="sign-in-title">
                                        Sign In
                                    </h1>
                                    <!--end::Title-->

                                    <!--begin::Text-->
                                    <div class="text-gray-500 fw-semibold fs-6" data-kt-translate="general-desc">
                                        Get unlimited access & earn money
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Input group--->
                                <div class="fv-row mb-8">
                                    <!--begin::userId-->
                                    <label for="userId" class="form-label fw-bold">userId</label>
                                    <input type="text" id="userId" placeholder="userId" name="userId" required autofocus autocomplete="off"
                                        data-kt-translate="sign-in-input-userId"
                                        class="form-control form-control-solid border-secondary" />
                                    <!--end::userId-->
                                </div>

                                <!--end::Input group--->
                                <div class="fv-row mb-7">
                                    <!--begin::Password-->
                                    <label for="password" class="form-label fw-bold">Password</label>
                                    <input type="password" id="password" placeholder="Password" name="password" required autocomplete="current-password"
                                        data-kt-translate="sign-in-input-password"
                                        class="form-control form-control-solid border-secondary" />
                                    <!--end::Password-->
                                </div>
                                <!--end::Input group--->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                                    <div></div>

                                    <!--begin::Link-->
                                    <a href="{{asset('admin')}}/authentication/layouts/fancy/reset-password.html"
                                        class="link-primary" data-kt-translate="sign-in-forgot-password">
                                        Forgot Password?
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Submit-->
                                    <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label" data-kt-translate="sign-in-submit">
                                            Sign In
                                        </span>
                                        <!--end::Indicator label-->

                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">
                                            <span data-kt-translate="general-progress">Please wait...</span>
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                        <!--end::Indicator progress-->
                                    </button>
                                    <!--end::Submit-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--begin::Body-->
                        </form>
                        <!--end::Form-->
                    </div>

                    <!--end::Body-->

                    <!--begin::Footer-->
                    <div class="m-0">

                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->

            <!--begin::Body-->
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
                style="background-image: url({{asset('admin')}}/assets/img/bg11.png)">
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "{{asset('admin')}}/assets/";

    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{asset('admin')}}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{asset('admin')}}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('admin')}}/assets/js/custom/authentication/sign-in/general.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/authentication/sign-in/i18n.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
