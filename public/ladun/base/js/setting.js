// route
var rGetDataSetting = server + "app/setting/get-data";
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
    console.log("ready to update");
}
