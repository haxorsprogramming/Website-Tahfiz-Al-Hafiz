// route 
var rProsesPengeluaran = "app/pengeluaran/tambah/proses";
var rProsesHapusPengeluaran = "app/pengeluaran/hapus/proses";
// vue object 
var appExpend = new Vue({
    el : '#divPengeluaran',
    data : {

    },
    methods : {
        tambahPengeluaranAtc : function()
        {
            $("#divDataPengeluaran").hide();
            $("#divAddPengeluaran").show();
        },
        prosesPengeluaranAtc : function()
        {
            let nama = document.querySelector("#txtNama").value;
            let deks = document.querySelector("#txtDeks").value;
            let kategori = document.querySelector("#txtKategori").value;
            let nominal = document.querySelector("#txtNominal").value;
            let tgl = document.querySelector("#txtTanggalPengeluaran").value;
            let ds = {'nama':nama, 'deks':deks, 'kategori':kategori, 'nominal':nominal, 'tgl':tgl}
            axios.post(rProsesPengeluaran, ds).then(function(res){
                pesanUmumApp('success', 'Sukses', 'Berhasil menambah pengeluaran');
                load_page(rPengeluaran, "Pengeluaran Tahfiz");
            });
        },
        kembaliAtc : function()
        {
            load_page(rPengeluaran, "Pengeluaran Tahfiz");
        },
        hapusAtc : function(token)
        {
            confirmQuest('warning', 'Konfirmasi', 'Hapus data pengeluaran ...?', function (x) {konfirmasiHapus(token)});
        }
    }
});

// inisialisasi 
$("#tblPengeluaran").dataTable();

function konfirmasiHapus(token)
{
    let ds = {'token':token}
    axios.post(rProsesHapusPengeluaran, ds).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Berhasil menghaps pengeluaran');
        load_page(rPengeluaran, "Pengeluaran Tahfiz");
    });
}