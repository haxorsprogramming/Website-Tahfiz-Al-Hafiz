// inisialisasi
$("#tblPendaftaran").dataTable();

var rGetDataPendaftaranSantri = server + "app/pendaftaran/get-data";

function editAtc(kdPendaftaran)
{
    let ds = {"kd":kdPendaftaran}
    axios.post(rGetDataPendaftaranSantri, ds).then(function (res){
       console.log(res.data);
       document.querySelector("#txtKdPendaftaran").innerHTML = res.data.data.id_pendaftaran;
       document.querySelector("#txtNamaSantri").innerHTML = res.data.data.nama_santri;
       document.querySelector("#txtJenisKelamin").innerHTML = res.data.data.jk;
       document.querySelector("#txtTanggalLahir").innerHTML = res.data.data.tanggal_lahir;
       document.querySelector("#txtAlamat").innerHTML = res.data.data.alamat;
       document.querySelector("#txtNamaOrangtua").innerHTML = res.data.data.nama_ortu;
       document.querySelector("#txtKelas").innerHTML = res.data.data.kelas;
       document.querySelector("#txtNomorHandphone").innerHTML = res.data.data.no_hp;
       document.querySelector("#txtHarapan").innerHTML = res.data.data.harapan;
       $("#modalDetailPendaftaranSantri").appendTo("body").modal("show");
    });
}
