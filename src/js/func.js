function strip_whitespace(str) {
    let a = str.replace(/^\s*/, "").replace(/\s*/, "");
    return [a, a.length]
}

function line_br(data) {
    var reg = new RegExp('\r\n|\n|\r', 'gim');
    var elem = data.replace(reg, "<br />");
    return elem
}
