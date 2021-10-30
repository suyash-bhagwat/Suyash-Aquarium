
function clicked(){
    var username = document.getElementById('user-name').value ;
    document.cookie =  "username=" + username ;
}

function goBack() 
    {   
        window.history.go(-2);
    }

function wrong(){
    alert("Username or Password doesn't match");
    window.open('login.php','_self');
}

function correct(){
    alert("You have logged in successfully");
    goBack();
}
function username(){
    var name = document.getElementById('user-name').value;
    if(name.length < 4){
    alert("Username length must be greater than 4!! ");
    document.getElementById('user-name').value = '';
    return false;
    }
}

function passvalidation(){
    var pw = document.getElementById("user-pass").value;  
    if(pw.length < 8 || pw.length > 15) {  
        alert('Password length must be in between 8 to 15 characters');
        document.getElementById('user-pass').value = '';
        return false;  
     }  
   } 