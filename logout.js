function goBack() 
            {
                window.history.go(-1);
            }

function logout(){
    alert('You have logged out successfully....');
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/project;" ;
    goBack();
}  