var rProsesDaftar = server + "auth/daftar/proses";
var rCheckDataSantri = server + "check-data-santri";
var statusBtnSetor = true;
function checkDataSantriAtc()
{
    let nHandphone = document.querySelector("#txtNomorHandphoneSantriSetorSpp").value;

    if(nHandphone.length === 0){
        pesanUmumApp('warning', '300', 'Harap masukkan nomor handphone ...');
    }else{
        if(statusBtnSetor === true){
            statusBtnSetor = false;
            let ds = {'hp':nHandphone}
            axios.post(rCheckDataSantri, ds).then(function (res){
                if(res.data.success === true){
                    pesanUmumApp('success', '400', 'Data santri ditemukan ...');
                    $("#divBothSantriData").show();
                    document.querySelector('#rNamaSantri').innerHTML = res.data.id_santri;
                    document.querySelector('#rIdSantri').innerHTML = res.data.nama_santri;
                    document.querySelector('#rNamaOrangTua').innerHTML = res.data.nama_orang_tua;
                    document.querySelector('#rKelas').innerHTML = res.data.kelas;
                }else{
                    pesanUmumApp('error', '200', 'Data santri tidak ditemukan!!!, periksa kembali nomor handphone atau hubungi pengurus tahfiz ...');
                    $("#divBothSantriData").hide();
                }
                statusBtnSetor = true;
            });
        }else{
            pesanUmumApp('warning', '300', 'Proses pengecekan sedang berlangsung, harap menunggu ...');
        }
    }

}

function prosesPendaftaran() {
    let isiForm = document.getElementsByClassName("form-control");
    let statusForm = true;

    for (let i = 0; i < isiForm.length; i++) {
        let valForm = isiForm[i].value;
        if (valForm === "") {
            statusForm = false;
        }
    }

    if (statusForm === false) {
        pesanUmumApp("warning", "Lengkapi form", "Harap lengkapi form");
    } else {
        Swal.fire({
            title: "Konfirmasi",
            text: "Proses pendaftaran santri?",
            icon: "info",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.value) {
                let nama = document.querySelector("#txtNama").value;
                let email = document.querySelector("#txtEmail").value;
                let hp = document.querySelector("#txtHp").value;
                let jk = document.querySelector("#txtJk").value;
                let kelas = document.querySelector("#txtKelas").value;
                let alamat = document.querySelector("#txtAlamat").value;
                let harapan = document.querySelector("#txtHarapan").value;
                let tgl = document.querySelector("#txtTgl").value;
                let tmpt = document.querySelector("#txtTmpt").value;
                let ortu = document.querySelector("#txtOrangTua").value;
                let ds = {'nama':nama, 'email':email, 'hp':hp, 'jk':jk, 'kelas':kelas, 'alamat':alamat, 'harapan':harapan, 'tgl':tgl, 'tmpt':tmpt, 'ortu':ortu}
                document.querySelector("#btnProses").innerHTML = "Memproses pendaftaran ...<i class='mdi mdi-telegram ml-2'></i>";
                document.querySelector("#btnProses").classList.add("disabled");
                setTimeout(function(){
                    axios.post(rProsesDaftar, ds).then(function(res){
                        let obj = res.data;
                        let token = obj.token;
                        pesanUmumApp('success', 'Sukses', 'Pendaftaran berhasil, anda akan diarahkan ke halaman bukti pendaftaran dalam beberapa saat, jangan tutup halaman ini ..');
                        setTimeout(function(){
                            let rCetakBukti = server + "auth/daftar/"+token+"/cetak";
                            window.open(rCetakBukti);
                            window.location.assign(server);
                        }, 2000);
                    });
                }, 1000);
            }
        });
    }
}

function pesanUmumApp(icon, title, text) {
    Swal.fire({
        icon: icon,
        title: title,
        text: text,
    });
}
