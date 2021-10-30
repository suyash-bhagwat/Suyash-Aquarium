
    let s = [];
    let all = [];
    let count = 0;
    var c = document.cookie ;
    console.log(c);
    function test(id, category, price){
    if(document.cookie.split(';').some((item) => item.trim().startsWith('username='))){
    var all = JSON.parse(localStorage.getItem("cart"));
    let s1 = {
        "productid": id ,
        "category": category,
        "Quantity": 1 ,
        "Price": price
    }
    if(all == null) { all = []; }
    s.push(s1);
    alert("Added to cart successfully ..............");
    let s2 = JSON.stringify(s);
    localStorage.setItem("xd",s2);

    all.push(s[count]);
    localStorage.setItem("cart",JSON.stringify(all));
    count+= 1;

}
else{
    alert("Please Login first and then add item to the cart");
    window.localStorage.clear();
    window.open('login.php','_self');
}
}