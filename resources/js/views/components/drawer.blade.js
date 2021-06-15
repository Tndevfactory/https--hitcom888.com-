export function closeDrawer() {
    let closeDrawerBtn = document.querySelector(".close_drawer");
    let drawer = document.querySelector(".drawer");
    let drawerWidth = drawer.getBoundingClientRect().width;

    function closeDrawerfn() {
        gsap.to(drawer, {
            x: -drawerWidth,
            force3D: true,
            boxShadow: "none",
            ease: "power2.in",
            duration: 0.81,
        });
    }

    closeDrawerBtn.addEventListener("click", closeDrawerfn);

    window.onscroll = () => closeDrawerfn();
    // window.onclick = (e) => {
    //     if (!e.target.className.includes("drawer")) {
    //         closeDrawerfn();
    //     }
    // };
}
