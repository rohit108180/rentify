const modalWindowMsg = document.querySelector(".modal-window");
const modalBackgroundMsg = document.querySelector(".background");
const modalCloseMsg = document.querySelector("#close");

console.log(modalWindow);

modalBackgroundMsg.onclick = () => {
  window.open("http://localhost/rentify/rentify/","_self");
  modalWindowMsg.classList.add("hidden");
};

modalCloseMsg.onclick = () => {
  window.open("http://localhost/rentify/rentify/","_self");
  modalWindowMsg.classList.add("hidden");
};
