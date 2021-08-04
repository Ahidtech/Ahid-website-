function toggle_search(self) {
    var parent = self.closest(".sub")
    var parent_name = parent.getAttribute("data-name");
    parent.style.display = "none"
    if(parent_name == "main") {
        document.querySelector(".search").style.display = "block"
        document.getElementById("search-bar").focus()
    }else if(parent_name == "search") {
        document.querySelector(".main").style.display = "inline-flex"
    }
}