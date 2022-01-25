// route 
var rProsesSplitPenggajian = server + "app/penggajian/split/proses";
// vue object 
var appGaji = new Vue({
    el : '#divPenggajian',
    data : {
        idPengurus : '',
        gajiPokok : 0,
        tunjangan : 0,
        potongan : 0,
        totalDibayar : 0
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
        },
        pilihPengurusAtc : function(dataPengurus)
        {
            let pengurusEx = dataPengurus.split("|");
            document.querySelector("#txtNamaPengurus").value = pengurusEx[1];
            appGaji.idPengurus = pengurusEx[0];
        },
        prosesSplitBillAtc : function()
        {
            let tgl = document.querySelector("#txtTanggalPembayaran").value;
            let idPengurus = appGaji.idPengurus;
            let gp = appGaji.gajiPokok;
            let tun = appGaji.tunjangan;
            let pot = appGaji.potongan;
            let capTun = document.querySelector("#txtCapTunjangan").value;
            let capPot = document.querySelector("#txtCapPotongan").value;
            let ds = {'idPengurus':idPengurus, 'tgl':tgl, 'gp':gp, 'tun':tun, 'pot':pot, 'capTun':capTun, 'capPot':capPot}
            axios.post(rProsesSplitPenggajian, ds).then(function(res){
                let obj = res.data;
                let token = obj.token;
                confirmQuest("success", "Sukses", "Berhasil memproses spill penggajian, cetak slip gaji? ..",  function (x) {cetakSlipGaji(token)});
                load_page(rPenggajian, "Penggajian Pengurus Tahfiz");
            });
        }
    }
});
// inisialisasi 
$("#tblPenggajian").dataTable();
$("#tblDataPengurus").dataTable();

function cetakSlipGaji(token)
{
    let rCetak = server + "app/penggajian/"+token+"/cetak";
    window.open(rCetak);
}

function setGaji()
{
    gp = appGaji.gajiPokok;
    tun = appGaji.tunjangan;
    pot = appGaji.potongan;
    let totalDibayar = parseInt(gp) + parseInt(tun) - parseInt(pot);
    appGaji.totalDibayar = totalDibayar;
}