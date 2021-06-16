export function openDrawer() {
    let openDrawerBtn = document.querySelector(".drawer_toggle");

    let drawer = document.querySelector(".drawer");
    let drawerWidth = drawer.getBoundingClientRect().width;

    function openDrawerfn() {
        // document.body.style.position = "fixed";
        // document.body.style.top = `-${window.scrollY}px`;

        gsap.to(drawer, {
            x: 403,

            force3D: true,
            duration: 0.5,
            // boxShadow: "10px 3px 5px 0px rgba(0,0,0,0.4)",
            // ease: "power2.out",
        });
    }

    openDrawerBtn.addEventListener("click", openDrawerfn);
}
