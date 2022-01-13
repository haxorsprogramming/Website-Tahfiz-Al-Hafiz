// vue object 
var appSpp = new Vue({
    el : '#divSpp',
    data : {

    },
    methods : {
        tambahPembayaranSppAtc : function()
        {
            $("#divDataSpp").hide();
            $("#divAddPembayaran").show();
        },
        showModalSantriAtc : function()
        {
        }
    }
});
// inisialisasi 
$("#tblSpp").dataTable();

// function bukaModal()
// {
//     $("#modalSantri").modal("show");
// }