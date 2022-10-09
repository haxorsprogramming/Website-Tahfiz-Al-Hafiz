// route
var rGetDataSetting = server + "app/setting/get-data";
var rProsesUpdateSetting = server + "app/setting/update";
// vue object
var appSetting = new Vue({
    el : "#divDataSetting",
    data : {

    },
    methods : {
        editAtc : function (id)
        {
            let ds = {'id':id}
            axios.post(rGetDataSetting, ds).then(function(res){
                document.querySelector("#txtNamaSetting").value = res.data.dataSetting.nama_setting;
                document.querySelector("#txtNilaiSetting").value = res.data.dataSetting.value;
                $("#divDataSetting").hide();
                $("#divEditDataSetting").show();
                document.querySelector("#txtNilaiSetting").focus();
            });
        }
    }
});
// inisialisasi
$("#tblDataSetting").dataTable();

function updateProsesAtc()
{
    let nama = document.querySelector("#txtNamaSetting").value;
    let nilai = document.querySelector("#txtNilaiSetting").value;

    if(nama === "" || nilai === ""){
        pesanUmumApp('warning', 'Isi field !!!', 'Harap isi feild !!!');
    }else{
        let ds = {'nama':nama, 'nilai':nilai}
        confirmQuest('info', 'Konfirmasi', 'Tambah data santri ...?', function (x) {updateConfirm(ds)});
    }

}

function updateConfirm(ds)
{
    axios.post(rProsesUpdateSetting, ds).then(function (res){
        pesanUmumApp('success', 'Sukses', 'Berhasil mengupdate data setting');
        load_page(rSetting, "Setting");
    });
}
