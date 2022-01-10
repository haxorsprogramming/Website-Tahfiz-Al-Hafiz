@include('layout.headerApp')
<!-- Main Content -->
<div class="main-content" id="divMain">
    <section class="section">
        <div class="section-header">
            <h1 id="capUtama"> Manajemen Tahfiz Al Haziq </h1>
        </div>

        <div id="divUtama"></div>
    </section>

</div>
</div>
<footer class="main-footer" id='divFooter'> </footer>
<!-- General JS Scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('ladun') }}/dashboard/stisla/js/popper.js"></script>
<script src="{{ asset('ladun') }}/dashboard/stisla/js/bootstrap.min.js"></script>
<script src="{{ asset('ladun') }}/dashboard/stisla/js/jquery.nicescroll.min.js"></script>
<script src="{{ asset('ladun') }}/dashboard/stisla/js/moment.min.js"></script>
<script src="{{ asset('ladun') }}/dashboard/stisla/js/stisla.js"></script>

<!-- JS Libraries -->
<script src="{{ asset('ladun') }}/dashboard/stisla/js/datatables.min.js"></script>
<script src="{{ asset('ladun') }}/dashboard/stisla/js/iziToast.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{{ asset('ladun') }}/dashboard/stisla/js/scripts.js"></script>

<!-- Page Specific JS File -->
<script>
    const server = "{{ url('/') }}/";
</script>
</body>

</html>