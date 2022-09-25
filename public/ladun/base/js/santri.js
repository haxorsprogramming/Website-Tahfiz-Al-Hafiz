// route 
var rProcessAddSantri = server + "app/santri/add/process";
var rProcessDeleteSantri = server + "app/santri/delete/process";
var rGetDataEdit = server + "app/santri/edit/data";
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

            if(nama === "" || jk === "none" || alamat === "" || kafilah === "none"){
              pesanUmumApp('warning', 'Isi field !!!', 'Harap isi nama, jk, alamat, & kafilah');
            }else{
              let ds = {'nama':nama, 'jk':jk, 'tgl':tglLhr, 'tmpt':tmptLhr, 'hp':hp, 'email':email, 'kafilah':kafilah, 'alamat':alamat, 'ortu':ortu}

              axios.post(rProcessAddSantri, ds).then(function(res){
                pesanUmumApp('success', 'Sukses', 'Berhasil menambahkan data santri');
                load_page(rSantri, "Santri");
              });
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
            document.querySelector("#txtKafilahEdit").value = res.data.kafilah.nama;
            $('#modalEditSantri').appendTo("body").modal('show');
          });
          
        },
        prosesUpdateDataSantri : function()
        {

        }
    }
});
// inisialisasi 
$("#tblSantri").dataTable();

function deleteConfirm(idSantri)
{
  let ds = {'idSantri':idSantri}
    axios.post(rProcessDeleteSantri, ds).then(function(res){
      pesanUmumApp('success', 'Sukses', 'Berhasil menghapus data santri');
      load_page(rSantri, "Santri");
    });
}