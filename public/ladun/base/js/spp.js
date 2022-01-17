// route 
var rProsesPembayaranSpp = server + "app/pembayaran-spp/add/proses";
// vue object 
var appSpp = new Vue({
    el : '#divSpp',
    data : {
        idSantri : '',
        namaSantri : ''
    },
    methods : {
        tambahPembayaranSppAtc : function()
        {
            $("#divDataSpp").hide();
            $("#divAddPembayaran").show();
        },
        showModalSantriAtc : function()
        {
            $('#modalSantri').appendTo("body").modal('show');
        },
        pilihSantriAtc : function(dataSantri)
        {
            let santriEx = dataSantri.split("|");
            document.querySelector("#txtNamaSantri").value = santriEx[1];
            appSpp.idSantri = santriEx[0];
        },
        prosesPembayaranSppAtc : function()
        {
            let idSantri = appSpp.idSantri;
            let tahun = document.querySelector("#txtTahun").value;
            let bulan = document.querySelector("#txtBulan").value;
            let total = document.querySelector("#txtTotalPembayaran").value;
            let ds = {'idSantri':idSantri, 'tahun':tahun, 'bulan':bulan, 'total':total}
            axios.post(rProsesPembayaranSpp, ds).then(function(res){
                console.log(res.data); 
            });
        }
    }
});
// inisialisasi 
$("#tblSpp").dataTable();
$("#tblDataSantri").dataTable();
