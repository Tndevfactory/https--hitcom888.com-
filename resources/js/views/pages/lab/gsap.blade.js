export default function Animate() {
    gsap.defaults({ duration: 35, ease: "none" });

    var box = document.querySelector(".box");
    // 10 for the gap
    var boxWidth = box.getBoundingClientRect().width + 10;
    var noBoxes = document.querySelectorAll(".box").length;
    var totalWidth = boxWidth * noBoxes;
    var dirFromLeft = "+=" + totalWidth;

    //console.log(boxWidth, noBoxes, totalWidth, dirFromLeft);

    gsap.set(".box", { x: (i) => i * boxWidth });

    const tl = gsap.timeline({ ease: "none", repeat: -1 });
    tl.to(".box", {
        x: dirFromLeft,
        modifiers: { x: gsap.utils.unitize((x) => parseFloat(x) % totalWidth) },
    });
    const oneBox = document.querySelectorAll(".box");
    oneBox.forEach((item) => {
        item.addEventListener("mouseenter", (e) => tl.pause());
        item.addEventListener("mouseleave", (e) => tl.play());
    });
}
