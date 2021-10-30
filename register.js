function mailvalidation() {
    var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (!filter.test(email.value)) {
          alert('Please provide a valid email address');
          email.focus;
          document.getElementById('email').value = '';
          return false;
      }
    }

function passvalidation(){
    var pw = document.getElementById("pass").value;  
    if(pw.length < 8 || pw.length > 15) {  
        alert('Password length must be in between 8 to 15 characters');
        document.getElementById('pass').value = '';
        return false;  
     }  
   }  

function numbervalidation(){
    var num = document.getElementById("phone").value;
    if(num.length < 10 ){
        alert("Please enter the correct contact number!! ");
        document.getElementById('phone').value = '';
        return false;
    }
}
function username(){
    var name = document.getElementById('uname').value;
    if(name.length < 4){
    alert("Username length must be greater than 4!! ");
    document.getElementById('uname').value = '';
    return false;
    }
}
