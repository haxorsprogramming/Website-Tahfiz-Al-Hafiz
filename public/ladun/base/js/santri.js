// route 
var rProcessAddSantri = server + "app/santri/add/process";
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

        },
        prosesTambahSantriAtc : function()
        {
            let nama = document.querySelector("#txtNamaSantri").value;
            let jk = document.querySelector("#txtJk").value;
            let tglLhr = document.querySelector("#txtTanggalLahir").value;
            let tmptLhr = document.querySelector("#txtTempatLahir").value;
            let hp = document.querySelector("#txtNoHp").value;
            let email = document.querySelector("#txtEmail").value;
            let kafilah = document.querySelector("#txtKafilah").value;
            let alamat = document.querySelector("#txtAlamat").value;
            let ds = {'nama':nama, 'jk':jk, 'tgl':tglLhr, 'tmpt':tmptLhr, 'hp':hp, 'email':email, 'kafilah':kafilah, 'alamat':alamat}
            axios.post(rProcessAddSantri, ds).then(function(res){
                let obj = res.data;
                pesanUmumApp('success', 'Sukses', 'Berhasil menambahkan data santri');
                load_page(rSantri, "Santri");
            });
        }
    }
});
// inisialisasi 
$("#tblSantri").dataTable();