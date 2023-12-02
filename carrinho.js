console.log("amem")
if(document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready)
}else{
ready()
}

function ready(){
    const removeProductButton = document.getElementsByClassName("remove-product-button")
    for(var i = 0; i < removeProductButton.length; i++){
        removeProductButton[i].addEventListener("click", removeProduct)
    }

    const quantityInput = document.getElementsByClassName("product-qtd-input")
    for(var i = 0; i < quantityInput.length; i++){
        quantityInput[i].addEventListener("change", updateTotal)
    }

    const addCardButtons = document.getElementsByClassName("addCard")
    for(var i = 0; i < addCardButtons.length; i++){
        addCardButtons[i].addEventListener("click", addProcutToCart)
    }
}

function addProcutToCart(event){
const button = event.target
console.log(button)
}
    





function removeProduct(event){
    event.target.parentElement.parentElement.remove()
    updateTotal()
}

function updateTotal(){
let totalAmount = 0
const cartProduct = document.getElementsByClassName("cart-product")
for(var i = 0; i<cartProduct.length; i++){
    console.log(cartProduct[i])

    const productPrice = cartProduct[i].getElementsByClassName("cart-product-price")[0].innerHTML.replace("R$", "").replace(",", ".")
    const productQuantity = cartProduct[i].getElementsByClassName("product-qtd-input")[0].value
   
     totalAmount = totalAmount + (productPrice * productQuantity)

}     
totalAmount = totalAmount.toFixed(2)
totalAmount = totalAmount.replace(".", ",")
document.querySelector(".cart-total-container span").innerHTML = "R$" + totalAmount
}
