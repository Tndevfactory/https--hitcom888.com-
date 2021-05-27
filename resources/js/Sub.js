export default function Animate() {
    const mynav = document.querySelector("#logo");
    console.log(mynav);
    gsap.to(mynav, { duration: 1, y: 100 });
}
