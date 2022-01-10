<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - {{ env('APP_NAME') }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" , shrink-to-fit="no">
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('ladun') }}/stisla/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('ladun') }}/stisla/vendors/base/vendor.bundle.base.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@700&family=Nunito:wght@600&display=swap" rel="stylesheet">
    <!-- endinject -->
    <link rel="stylesheet" href="{{ asset('ladun') }}/stisla/css/style.css">
    <!-- endinject -->
</head>

<body style="font-family: 'Nunito', sans-serif;">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="main-panel" id="appLogin">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5" id='login-app'>
                                <div class="brand-logo" style='text-align:center;'>
                                    <img src="{{ asset('ladun') }}/stisla/img/al-hafiz.png" alt="logo" style='width:150px; '>
                                    <h3 style="font-weight:bold;margin-top:40px;">Sistem Manajemen Rumah Tahfiz Al - Haziq</h3>
                                </div>
                                <div style='text-align:center;'>
                                    <h6 class="font-weight-light">Harap masuk untuk melanjutkan.</h6>
                                    <div>
                                        <div class="pt-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="txtUsername" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="password" id="txtPassword" placeholder="Password">
                                            </div>
                                            <div id="capNotifLogin">

                                            </div>
                                            <div class="mt-3">
                                                <a id="btnMasuk" @click="loginAtc()" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="javascript:void(0)">Masuk</a>
                                            </div>
                                            <div class="mt-2">
                                                <div style="padding-top:12px;">
                                                    <h5 class="font-weight-light">Copyright @ 2020 - <a href="{{ env('APP_URL') }}" target='new'>Tahfiz Al Haziq</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id='divWorker'></div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- base:js -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="{{ asset('ladun') }}/stisla/vendors/base/vendor.bundle.base.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('ladun') }}/stisla/js/template.js"></script>
    <!-- endinject -->
    <script>
        const server = "{{ url('/') }}/";
    </script>
    <script src="{{ asset('ladun') }}/base/js/login.js"></script>
</body>

</html>