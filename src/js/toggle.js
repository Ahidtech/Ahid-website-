function toggle(self) {
    var element = document.querySelector(".element-to-toggle")
    var see_more = document.querySelector(".see-more")

    if(self.textContent.length <= 83) {
        self.textContent = element.textContent
        see_more.textContent = "see less"
    }else{
        self.textContent = strip_whitespace(element.textContent)[0].slice(0, 80) + "..."
        see_more.textContent = "see more"
    }
}