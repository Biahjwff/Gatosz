// Seleciona todos os links que começam com #
const links = document.querySelectorAll('a[href^="#"]');

links.forEach((link) => {
    link.addEventListener("click", function (e) {
        // Previne o comportamento padrão (pulo instantâneo)
        e.preventDefault();

        // Pega o destino baseado no href
        const targetId = this.getAttribute("href");
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
            // Rola suavemente até o elemento
            targetSection.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    });
});
