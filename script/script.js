function f(){
    var nom = document.getElementById('name');
    var email = document.getElementById('email');
    var message = document.getElementById('message');
    var error = document.getElementById("error");
    if (nom.value == "" && email.value == "" && message.value == "") {
        error.innerHTML = "<h7> error un des champs est vide </h7>";
    } else {
        error.innerHTML = "<h3> error un des champs est vide </h3>"
    }
}