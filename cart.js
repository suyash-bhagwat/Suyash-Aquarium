function get(id){
    console.log(id);
    var e = document.getElementById("selectElementID");
    var strUser = e.options[e.selectedIndex].text;
    console.log(strUser);
    
}
