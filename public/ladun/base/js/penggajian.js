// vue object 
var appGaji = new Vue({
    el : '#divPenggajian',
    data : {

    },
    methods : {
        buatSpillAtc : function()
        {
            $("#divDataPenggajian").hide();
            $("#divBuatSpill").show();
        },
        kembaliAtc : function()
        {
            load_page(rPenggajian, "Penggajian Pengurus Tahfiz");
        },
        showModalPengurus : function()
        {
            $('#modalPengurus').appendTo("body").modal('show');
        }
    }
});
// inisialisasi 
$("#tblPenggajian").dataTable();
$("#tblDataPengurus").dataTable();