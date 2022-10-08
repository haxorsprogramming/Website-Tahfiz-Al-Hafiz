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
                console.log(res.data);
            });
        }
    }
});
// inisialisasi
$("#tblDataSetting").dataTable();
