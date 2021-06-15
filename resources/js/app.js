require("./bootstrap");

import {openDrawer} from "./views/components/navbar.blade";
import {closeDrawer} from "./views/components/drawer.blade";
import {AnimateCarousel, grabModalConsulterPanier} from "./views/pages/lab/gsap.blade";

window.onload = function () {
    openDrawer();
    closeDrawer()
    AnimateCarousel();
    grabModalConsulterPanier();
};
