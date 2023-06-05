export function mostraSenha() {
    var x = document.getElementById("senha");
    if (x.type === "password") x.type = "text";
    else x.type = "password";
}