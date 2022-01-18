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
        setAbsensiAtc : function()
        {
            
        }
    }
});
// inisialisasi 
$("#tblAbsensi").dataTable();
$("#tblDataSantri").dataTable();