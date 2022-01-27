// route 

// vue object 
var absen = new Vue({
    el : '#divRekapAbsensi',
    data : {

    },
    methods : {
        pilihWaktuAtc : function()
        {
            $('#modalPilihWaktu').appendTo("body").modal('show');
        },
        modalPilihWaktuAtc : function()
        {
            let bulan = document.querySelector("#txtBulan").value;
            let tahun = document.querySelector("#txtTahun").value;
            let rRekapAbsensi = server + "app/rekap-absensi/set-rekap/"+bulan+"/"+tahun+"";
            load_page(rRekapAbsensi, "Rekap Absensi : " + bulan + " / " + tahun, "#divRawAbsensi");
        }
    }
});
// inisialisasi 
$("#tblAbsensi").dataTable();