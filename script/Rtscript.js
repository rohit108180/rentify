

const modalClose = document.querySelector(".modal-close");
const modalWindow = document.querySelector(".modal-window");
const modalBackground = document.querySelector(".background");
// modalClose.addEventListener('click' , ()=>{
//     console.log("hello");

// })


modalClose.onclick = () => {
  modalWindow.classList.add("hidden");
  
};
modalBackground.onclick = () => {
  modalWindow.classList.add("hidden");
  
};

// slider

let carTypeNo = 0;

const leftSlider = document.querySelector(".left-slider");
const rightSlider = document.querySelector(".right-slider");
const carType = document.querySelectorAll(".car-type");

rightSlider.onclick = () => {
  if (carTypeNo < carType.length - 1) {
    console.log(carTypeNo, carType.length);

    carType[carTypeNo].classList.remove("active");
    carTypeNo++;
    carType[carTypeNo].classList.add("active");
  }
};
leftSlider.onclick = () => {
  if (carTypeNo > 0) {
    console.log(carTypeNo, carType.length);

    carType[carTypeNo].classList.remove("active");
    carTypeNo--;
    carType[carTypeNo].classList.add("active");
  }
};
