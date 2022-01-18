var rProsesAbsensi = server + "app/absensi/proses";
var rProsesHapusAbsensi = server + "app/absensi/hapus/proses";
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
        },
        hapusAbsensiAtc : function(token)
        {
            confirmQuest("warning", "Konfirmasi ...", "Hapus absensi? menghapus absensi akan mengembalikan status ketidakhadiran santri ...",  function (x) {konfirmasiHapus(token)});
        },
        kembaliAtc : function()
        {
            load_page(rAbsensi, "Absensi Santri");
        }
    }
});
// inisialisasi 
$("#tblAbsensi").dataTable();
$("#tblDataSantri").dataTable();

function konfirmasiHapus(token)
{
    let dr = {'token':token}
    axios.post(rProsesHapusAbsensi, dr).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Berhasil menghapus data absensi santri ...');
        load_page(rAbsensi, "Absensi Santri");
    });
}