// route 
var rProcessLogin = server + "auth/login/process";
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
        console.log(obj);
      });
    }
  }
});
// inisialisasi 
document.querySelector("#txtUsername").focus();