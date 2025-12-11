import { document } from "postcss";
import "./bootstrap";

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

//Biblioteca de animações
import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();

//Biblioteca de ícones
import "@fortawesome/fontawesome-free/css/all.css";

//Biblioteca de select
import TomSelect from "tom-select";
window.TomSelect = TomSelect; 

