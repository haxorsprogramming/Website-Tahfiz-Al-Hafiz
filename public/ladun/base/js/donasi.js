// route 
var rProsesTambahDonasi = server + "app/donasi/tambah/proses";
var rProsesHapusDonasi = server + "app/donasi/hapus/proses";
// vue object 
var appDonasi = new Vue({
    el : '#divDonasi',
    data : {

    },
    methods : {
        tambahDonasiAtc : function()
        {
            $("#divDataDonasi").hide();
            $("#divTambahDonasi").show();
            document.querySelector("#txtNamaDonatur").focus();
        },
        prosesTambahDonasiAtc : function()
        {
            let nama = document.querySelector("#txtNamaDonatur").value;
            let detail = document.querySelector("#txtDetail").value;
            let tipe = document.querySelector("#txtTipe").value;
            let nominal = document.querySelector("#txtNominal").value;
            let tgl = document.querySelector("#txtTanggalDonasi").value;
            let ds = {'nama':nama, 'detail':detail, 'tipe':tipe, 'nominal':nominal, 'tgl':tgl}
            axios.post(rProsesTambahDonasi, ds).then(function(res){
                pesanUmumApp('success', 'Sukses', 'Berhasil menambahkan data donasi ...');
                load_page(rDonasi, "Donasi");
            });
        },
        hapusAtc : function(token)
        {
            confirmQuest('warning', 'Konfirmasi', 'Hapus data donasi ...?', function (x) {konfirmasiHapus(token)});
        }
    }
});
// inisialisasi 
$("#tblDonasi").dataTable();

function konfirmasiHapus(token)
{
    let ds = {'token':token}
    axios.post(rProsesHapusDonasi, ds).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Berhasil menghapus data donasi ...');
        load_page(rDonasi, "Donasi");
    });
}