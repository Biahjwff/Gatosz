//Mostrar e ocultar a senha
document.addEventListener("DOMContentLoaded", function () {
    const cliqueIcone = document.getElementById("cliqueIcone");
    const inputSenha = document.getElementById("password");
    const iconeSenha = document.querySelector(".icone-senha");

    if (cliqueIcone) {
        cliqueIcone.addEventListener("click", function () {
            if (inputSenha.type === "password") {
                inputSenha.type = "text";
                iconeSenha.classList.remove("fa-eye-slash");
                iconeSenha.classList.add("fa-eye");
            } else {
                inputSenha.type = "password";
                iconeSenha.classList.remove("fa-eye");
                iconeSenha.classList.add("fa-eye-slash");
            }
        });
    }
});
