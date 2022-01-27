var d = new Date();
var tahun = d.getFullYear();

var rDashboard = server + "app/dashboard";
var rSantri = server + "app/santri";
var rPengurus = server + "app/pengurus";
var rPembayaranSpp = server + "app/pembayaran-spp";
var rAbsensi = server + "app/absensi";
var rPenggajian = server + "app/penggajian";
var rPengeluaran = server + "app/pengeluaran";
var rDonasi = server + "app/donasi";
var rCashFlow = server + "app/cash-flow";
var rLaporanKeuangan = server + "app/laporan-keuangan/"+tahun;
var rRekapAbsensi = server + "app/rekap-absensi";
// vue object 
var menuApp = new Vue({
    el : '#divMenu',
    data : {

    },
    methods : {
        dashboardAtc : function()
        {
            load_page(rDashboard, "Dashboard");
        },
        santriAtc : function()
        {
            load_page(rSantri, "Santri");
        },
        pengurusAtc : function()
        {
            load_page(rPengurus, "Pengurus");
        },
        pembayaranSppAtc : function()
        {
            load_page(rPembayaranSpp, "Pembayaran SPP");
        },
        absensiAtc : function()
        {
            load_page(rAbsensi, "Absensi Santri");
        },
        penggajianAtc : function()
        {
            load_page(rPenggajian, "Penggajian Pengurus Tahfiz");
        },
        pengeluaranAtc : function()
        {
            load_page(rPengeluaran, "Pengeluaran Tahfiz");
        },
        donasiAtc : function()
        {
            load_page(rDonasi, "Donasi");
        },
        cashFlowAtc : function()
        {
            load_page(rCashFlow, "Cash Flow");
        },
        laporanKeuanganAtc : function()
        {
            load_page(rLaporanKeuangan, "Laporan Keuangan");
        },
        rekapAbsensi : function()
        {
            load_page(rRekapAbsensi, "Rekap Absensi");
        }
    }
});
var mainApp = new Vue({
    el : '#divMain',
    data : {
        titleSection : "Dashboard"
    }
});
// inisialisasi 
load_page(rDashboard, "Dashboard");

async function load_page(page, page_title, el_div="#divUtama")
{
    NProgress.start();
    document.querySelector(el_div).innerHTML = "<div style='text-align:center;width:100%;margin-top:40px;font-size:20px;'>Loading page ...</div>";
    mainApp.titleSection = page_title;
    await tidur_bentar(1000);
    $(el_div).load(page);
    NProgress.done();
}

function tidur_bentar(ms){
    return new Promise(resolve => { setTimeout(resolve, ms) });
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

function confirmQuest(icon, title, text, x)
{
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    }).then((result) => {
        if (result.value) {
            x();
        }
    });
}