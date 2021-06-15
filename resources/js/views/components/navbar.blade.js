export function openDrawer() {
    let openDrawerBtn = document.querySelector(".drawer_toggle");
    let drawer = document.querySelector(".drawer");
    let drawerWidth = drawer.getBoundingClientRect().width;

    function openDrawerfn() {
        gsap.to(drawer, {
            x: drawerWidth,
            force3D: true,
            duration: 0.91,
            boxShadow: "10px 3px 5px 0px rgba(0,0,0,0.4)",
            ease: "power2.out",
        });
    }

    openDrawerBtn.addEventListener("click", openDrawerfn);
}
