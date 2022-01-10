// route 
var rProcessLogin = server + "auth/login/process";
var rMainApp = server + "app";
// vue object 
var appLogin = new Vue({
  el : '#appLogin',
  data : {},
  methods : {
    loginAtc : function()
    {
      let username = document.querySelector("#txtUsername").value;
      let password = document.querySelector("#txtPassword").value;
      let ds = {'username':username, 'password':password}
      axios.post(rProcessLogin, ds).then(function(res){
        let obj = res.data;
        if(obj.status === 'ACCESS_GRANTED'){
          window.location.assign(rMainApp);
        }else if(obj.status === 'WRONG_PASSWORD'){
          pesanUmumApp('warning', 'Kesalahan autentifikasi', 'Kesalahan login, periksa username & password !!!');
        }else{
          pesanUmumApp('warning', 'Tidak ada user', 'Tidak ada user yang terdaftar !!!');
        }
      });
    }
  }
});
// inisialisasi 
document.querySelector("#txtUsername").focus();

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}