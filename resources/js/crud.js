//Mostrar e ocultar a senha
document.addEventListener("DOMContentLoaded", function () {
    const cliqueIcone = document.getElementById("cliqueIcone");
    const inputSenha = document.querySelector(".input-senha");
    const iconeSenha = document.querySelector(".icone-senha");

    const cliqueIcone2 = document.getElementById("cliqueIcone2");
    const inputSenha2 = document.querySelector(".confirmar-input-senha");
    const iconeSenha2 = document.querySelector(".icone-senha2");

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

    if (cliqueIcone2) {
        cliqueIcone2.addEventListener("click", function () {
            if (inputSenha2.type === "password") {
                inputSenha2.type = "text";
                iconeSenha2.classList.remove("fa-eye-slash");
                iconeSenha2.classList.add("fa-eye");
            } else {
                inputSenha2.type = "password";
                iconeSenha2.classList.remove("fa-eye");
                iconeSenha2.classList.add("fa-eye-slash");
            }
        });
    }
});

new TomSelect("#select-categorias", {
    plugins: ["remove_button"],
    create: false,
});