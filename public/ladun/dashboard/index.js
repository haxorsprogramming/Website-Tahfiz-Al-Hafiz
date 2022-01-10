// vue object 
var divMenu = new Vue({
    el : '#divMenu',
    data : {

    },
    methods : {
        beranda_atc : function()
        {
            divMain.titleApps = "Beranda";
            renderMenu("dashboard/beranda");
        },
        manajemen_proyek_atc : function()
        {
            divMain.titleApps = "Manajemen Proyek";
            renderMenu("dashboard/manajemen-proyek/data");
        },
        kegiatan_atc : function()
        {
          divMain.titleApps = "Kegiatan";
          renderMenu("dashboard/kegiatan/data");
        },
        sub_kegiatan_atc : function()
        {
          divMain.titleApps = "Sub Kegiatan";
          renderMenu("dashboard/sub-kegiatan/data");
        },
        manajemen_kegiatan_atc : function()
        {
          divMain.titleApps = "Manejemen Kegiatan";
          renderMenu("dashboard/manajemen-kegiatan/data");
        },
        laporan_proyek_atc : function()
        {
          divMain.titleApps = "Laporan Proyek";
          renderMenu("dashboard/laporan-proyek/laporan");
        },
        manajemen_user_atc : function()
        {
          divMain.titleApps = "Manajemen User";
          renderMenu("dashboard/manajemen-user/data");
        }
    }
});

var divMain = new Vue({
    el : '#divMain',
    data : {
        titleApps : 'Beranda'
    },
    methods : {

    }
});


// inisialisasi
divMenu.beranda_atc();

function renderMenu(halaman){
    progStart();
    $('#divUtama').html("Memuat halaman ..");
    $('#divUtama').load(server+halaman);
    progStop();
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });

}

function progStart()
{
  NProgress.start();
}

function progStop()
{
  NProgress.done();
}