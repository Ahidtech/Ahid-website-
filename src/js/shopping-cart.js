var select = document.getElementById("selector")
function checker() {
    
    if(select.checked) {
        set_all(true)
    }else{
        set_all(false)
    }
}

function set_all(type) {
    var elements = document.querySelectorAll(".product-check")
    elements.forEach(elem => {
        if(type) {
            elem.setAttribute("checked", "true")
        }else{
            elem.removeAttribute("checked")
        }
    })
}