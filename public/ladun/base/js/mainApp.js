var rDashboard = server + "app/dashboard";
var rSantri = server + "app/santri";
var rPengurus = server + "app/pengurus";
// vue object 
var menuApp = new Vue({
    el : '#divMenu',
    data : {

    },
    methods : {
        dashboardAtc : function()
        {
            load_page(rDashboard, "Dashboard");
        },
        santriAtc : function()
        {
            load_page(rSantri, "Santri");
        },
        pengurusAtc : function()
        {
            load_page(rPengurus, "Pengurus");
        }
    }
});
var mainApp = new Vue({
    el : '#divMain',
    data : {
        titleSection : "Dashboard"
    }
});
// inisialisasi 
load_page(rDashboard, "Dashboard");

async function load_page(page, page_title)
{
    NProgress.start();
    document.querySelector("#divUtama").innerHTML = "<div style='text-align:center;width:100%;margin-top:40px;font-size:20px;'>Loading page ...</div>";
    mainApp.titleSection = page_title;
    await tidur_bentar(1000);
    $("#divUtama").load(page);
    NProgress.done();
}

function tidur_bentar(ms){
    return new Promise(resolve => { setTimeout(resolve, ms) });
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

function confirmQuest(icon, title, text, x)
{
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    }).then((result) => {
        if (result.value) {
            x();
        }
    });
}