if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}
else{
    ready()
}

function ready(){
    var removeCartItemButton = document.getElementsByClassName('btn-danger')
    console.log(removeCartItemButton)
    for (var i = 0; i < removeCartItemButton.length; i++) {
        var button = removeCartItemButton[i]
        button.addEventListener('click', function(event){
            var buttonclicked = event.target
            buttonclicked.parentElement.parentElement.remove()
            updatCartTotal()
    })
}
}

function updatCartTotal(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    console.log(cartItemContainer)
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    console.log(cartRows)
    for (var i = 0; i < cartRows.length; i++)
    {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName("cart-price")[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        console.log(priceElement, quantityElement)

    
}
}