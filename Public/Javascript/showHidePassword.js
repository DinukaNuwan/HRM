function togglePwView(x) {

    var pw = document.getElementById("password");
    x.classList.toggle("fa-eye-slash");
    if (pw.type === "password") {
        pw.type = "text";
    } else {
        pw.type = "password";
    }
}