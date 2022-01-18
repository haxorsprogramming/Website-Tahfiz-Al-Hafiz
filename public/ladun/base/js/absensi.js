var rProsesAbsensi = server + "app/absensi/proses";
// vue object 
var appAbsensi = new Vue({
    el : "#divAbsensi",
    data : {

    },
    methods : {
        tambahAbsensiAtc : function()
        {
            $("#divDataAbsensi").hide();
            $("#divTambahAbsensi").show();
        },
        setAbsensiAtc : function(dataSantri)
        {
            let santriEx = dataSantri.split("|");
            let ds = {'idSantri':santriEx[0]}
            axios.post(rProsesAbsensi, ds).then(function(res){
                let obj = res.data;
                console.log(obj);
                iziToast.success({
                    title: 'Sukses',
                    message: 'Berhasil memproses absensi santri ('+santriEx[1]+')',
                    position: 'topRight'
                });
            });
        }
    }
});
// inisialisasi 
$("#tblAbsensi").dataTable();
$("#tblDataSantri").dataTable();
