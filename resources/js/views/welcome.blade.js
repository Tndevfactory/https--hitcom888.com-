export function welcomeOverlay() {
    // CSSPlugin.defaultForce3D = true;

    // gsap.defaults({ ease: "none", force3D: true });
    let boxWelcome = document.querySelectorAll(".box_welcome");
    let overlayWelcomeTl1 = gsap.timeline({ ease: "none" });
    let overlayWelcomeTl2 = gsap.timeline({ ease: "none" });

    boxWelcome.forEach((item) => {
        let overlayWelcome = item.children[1];
        let detailWelcome = overlayWelcome.children[0];
        let commanderWelcome = overlayWelcome.children[1];

        function anim() {
            gsap.set(detailWelcome, { x: 0 });
            gsap.set(commanderWelcome, { x: 0 });
            overlayWelcomeTl1
                .from(detailWelcome, { x: -40, autoAlpha: 1, duration: 0.4205 })
                .from(
                    commanderWelcome,
                    { x: 40, autoAlpha: 1, duration: 0.4205 },
                    "<"
                );
        }

        function deAnim() {
            overlayWelcomeTl2
                .to(detailWelcome, { x: -40, autoAlpha: 0, duration: 0.5 }, "<")
                .to(
                    commanderWelcome,
                    { x: 40, autoAlpha: 0, duration: 0.5 },
                    "<"
                );
        }

        item.addEventListener("mouseenter", (e) => {
            anim();

            detailWelcome.addEventListener("click", (e) => {
                console.log("details clicked");
            });

            commanderWelcome.addEventListener("click", (e) => {
                console.log("commander clicked");
            });
        });
        item.removeEventListener("mouseenter", (e) => {
            console.log("");
        });

        item.addEventListener("mouseleave", (e) => {
            deAnim();
        });
        item.removeEventListener("mouseleave", (e) => {
            console.log("");
        });
    });
}
