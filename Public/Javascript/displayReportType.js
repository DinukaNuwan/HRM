function f(report_type) {
    document.getElementById("content").style.opacity = 0;
    document.getElementById("content").style.display = "block";
    switch (report_type) {
        case "employee":
            document.getElementById("employee").style.display = "block";
            document.getElementById("leave").style.display = "none";
            break;
        case "leave":
            document.getElementById("leave").style.display = "block";
            document.getElementById("employee").style.display = "none";
            break;
        default:
            break;
    }
    var intervalId = setInterval(function() {
        if (document.getElementById("content").style.opacity >= 1) {
            clearInterval(intervalId);
        } else {
            document.getElementById("content").style.opacity = parseFloat(document.getElementById("content").style.opacity) + 0.1;
        }
    }, 100);
}