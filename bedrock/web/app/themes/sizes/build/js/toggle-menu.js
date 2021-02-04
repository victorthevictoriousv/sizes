function toggleMenu() {
  const menuToggle = document.querySelector("#menuToggle");
  const siteWrapper = document.querySelector("#site");
  const body = document.querySelector("body");

  menuToggle.addEventListener("click", () => {
    siteWrapper.classList.toggle("site--menu-open");
    body.classList.toggle("overflow-hidden");
  });
}

export default toggleMenu;
