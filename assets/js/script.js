const buttonClose = document.querySelector("#closeMobile");

const buttonOpen = document.querySelector("#openMobile");
const boxMenuMobile = document.querySelector("#box-menu-mobile");

buttonOpen.addEventListener("click", () => {
  if (boxMenuMobile.style.display === "none") {
    boxMenuMobile.style.display = "flex";
  }
});

buttonClose.addEventListener("click", () => {
  if (boxMenuMobile.style.display === "flex") {
    boxMenuMobile.style.display = "none";
  }
});
