// route
var rProcessAddSantri = server + "app/santri/add";
var rProcessDeleteSantri = server + "app/santri/delete";
var rGetDataEdit = server + "app/santri/get-data";
var rProcessUpdateSantri = "app/santri/update";
// vue object
var santriApp = new Vue({
    el : '#divSantri',
    data : {

    },
    methods : {
        tambahSantriAtc : function()
        {
            $("#divTambahSantri").show();
            $("#divDataSantri").hide();
            document.querySelector("#txtNamaSantri").focus();
        },
        kembaliAtc : function()
        {
            load_page(rSantri, "Santri");
        },
        prosesTambahSantriAtc : async function()
        {
            let nama = document.querySelector("#txtNamaSantri").value;
            let jk = document.querySelector("#txtJk").value;
            let tglLhr = document.querySelector("#txtTanggalLahir").value;
            let tmptLhr = document.querySelector("#txtTempatLahir").value;
            let hp = document.querySelector("#txtNoHp").value;
            let email = document.querySelector("#txtEmail").value;
            let kafilah = document.querySelector("#txtKafilah").value;
            let alamat = document.querySelector("#txtAlamat").value;
            let ortu = document.querySelector("#txtStatusOrtu").value;
            let kelas = document.querySelector("#txtKelas").value;
            let namaOrtu = document.querySelector("#txtNamaOrangTua").value;

            if(nama === "" || jk === "none" || alamat === "" || kafilah === "none" || kelas === "none" || namaOrtu === ""){
              pesanUmumApp('warning', 'Isi field !!!', 'Harap isi nama, jk, alamat, & kafilah');
            }else{
                let ds = {'nama':nama, 'jk':jk, 'tgl':tglLhr, 'tmpt':tmptLhr, 'hp':hp, 'email':email, 'kafilah':kafilah, 'alamat':alamat, 'ortu':ortu, 'kelas':kelas, 'namaOrtu':namaOrtu}
                confirmQuest('info', 'Konfirmasi', 'Tambah data santri ...?', function (x) {addConfirm(ds)});
            }
        },
        hapusAtc : function(idSantri)
        {
            confirmQuest('info', 'Konfirmasi', 'Hapus data santri ...?', function (x) {deleteConfirm(idSantri)});
        },
        editAtc : function(idSantri)
        {
          // $("#modalEditSantri").modal("show");
          let ds = {'idSantri':idSantri}
          axios.post(rGetDataEdit, ds).then(function(res){
            console.log(res.data);
            document.querySelector("#txtIdSantriEdit").value = res.data.dataSantri.id_santri;
            document.querySelector("#txtAlamatEdit").value = res.data.dataSantri.alamat;
            document.querySelector("#txtTglLahirEdit").value = res.data.dataSantri.tanggal_lahir;
            document.querySelector("#txtNamaSantriEdit").value = res.data.dataSantri.nama;
            document.querySelector("#txtKafilahEdit").value = res.data.dataSantri.id_kafilah;
            document.querySelector("#txtKelasEdit").value = res.data.dataSantri.kelas;
            $('#modalEditSantri').appendTo("body").modal('show');
          });

        },
        prosesUpdateDataSantri : function()
        {
            let idSantri = document.querySelector("#txtIdSantriEdit").value;
            let nama = document.querySelector("#txtNamaSantriEdit").value;
            let alamat = document.querySelector("#txtAlamatEdit").value;
            let jk = document.querySelector("#txtJkEdit").value;
            let tglLahir = document.querySelector("#txtTglLahirEdit").value;
            let kelas = document.querySelector("#txtKelasEdit").value;
            let kafilah = document.querySelector("#txtKafilahEdit").value;

            if(nama === "" || alamat === ""){
                pesanUmumApp('warning', 'Isi field !!!', 'Harap lengkapi field !!!');
            }else{
                let ds = {'nama':nama, 'alamat':alamat, 'jk':jk, 'tglLahir':tglLahir, 'kelas':kelas, 'kafilah':kafilah, 'idSantri':idSantri}
                // console.log(ds);
                confirmQuest('info', 'Konfirmasi', 'Update data santri ...?', function (x) {editConfirm(ds)});
            }


        }
    }
});
// inisialisasi
$("#tblSantri").dataTable();

function  editConfirm(ds)
{

    axios.post(rProcessUpdateSantri, ds).then(function (res){
        $('#modalEditSantri').modal("hide");
        setTimeout(function (){
            pesanUmumApp('success', 'Sukses', 'Berhasil mengupdate data santri');
            load_page(rSantri, "Santri");
        }, 300);
    });
}

function addConfirm(ds)
{
    axios.post(rProcessAddSantri, ds).then(function(res){
        pesanUmumApp('success', 'Sukses', 'Berhasil menambahkan data santri');
        load_page(rSantri, "Santri");
    });
}

function deleteConfirm(idSantri)
{
  let ds = {'idSantri':idSantri}
    axios.post(rProcessDeleteSantri, ds).then(function(res){
      pesanUmumApp('success', 'Sukses', 'Berhasil menghapus data santri');
      load_page(rSantri, "Santri");
    });
}
