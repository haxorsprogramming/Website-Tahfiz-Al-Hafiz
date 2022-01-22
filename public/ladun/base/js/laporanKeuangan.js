// vue object 
var lapKeu = new Vue({
    el : '#divLaporanKeuangan',
    data : {

    },
    methods : {
        pilihTahunAtc : function()
        {
            $('#modalTahun').appendTo("body").modal('show');
        },
        pilihTahunModalAtc : function(tahun)
        {
            var sLaporanKeuangan = server + "app/laporan-keuangan/"+tahun;
            load_page(sLaporanKeuangan, "Laporan Keuangan");
        }
    }
});
// inisialisasi 
$("#tblLapkeu").dataTable();