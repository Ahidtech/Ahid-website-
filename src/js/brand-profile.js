var summary = document.querySelector(".summary")
var visible_summary = document.querySelector(".visible-summary")
var see_more = document.querySelector(".see-more")
var summary_text = strip_whitespace(summary.textContent)[0]

if(summary.textContent.length > 80) {
    visible_summary.textContent = summary_text.slice(0, 80) + "..."
    see_more.style.display = "inline"
}else{
    visible_summary.textContent = summary_text
    see_more.style.display = "none"
}