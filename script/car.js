const cars = [
  {
    name: "Baleno",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "1197 cc",
    img: "../assests/cars/Hatchback/tata-baleno.jpg",
    rentifyId: "14110001",
    model: 2020,
    price: 1568,
    rating: 4.4,
  },
  {
    name: "Altroz",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Manual",
    fuelType: "Diesel",
    Engine: "1199 to 1497 cc",
    img: "../assests/cars/Hatchback/tata-altroz.jpeg",
    rentifyId: "14110002",
    model: 2018,
    price: 1200,
    rating: 3.9,
  },
  {
    name: "i20",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Automatic",
    fuelType: "Petrol & Diesel",
    Engine: "998 to 1493 cc",
    img: "../assests/cars/Hatchback/i20.jpeg",
    rentifyId: "14110003",
    model: 2019,
    price: 1650,
    rating: 4.9,
  },
  {
    name: "Swift",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "1197 cc",
    img: "../assests/cars/Hatchback/swift.jpeg",
    rentifyId: "14110004",
    model: 2016,
    price: 1200,
    rating: 4.0,
  },
  {
    name: "Kwid",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "799 to 999 cc",
    img: "../assests/cars/Hatchback/kwid.jpeg",
    rentifyId: "14110005",
    model: 2017,
    price: 1750,
    rating: 4.9,
  },
  {
    name: "i10-Nios",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Automatic",
    fuelType: "Petrol, CNG & Diesel",
    Engine: "998 to 1197 cc",
    img: "../assests/cars/Hatchback/i10-nios.jpeg",
    rentifyId: "14110006",
    model: 2019,
    price: 1720,
    raintg: 4.6,
  },
  {
    name: "Alto",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "796 cc",
    img: "../assests/cars/Hatchback/Alto.jpg",
    rentifyId: "14110007",
    model: 2012,
    price: 1046,
    rating: 3.5,
  },
  {
    name: "Tiago",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "1199 cc",
    img: "../assests/cars/Hatchback/tiago.jpeg",
    rentifyId: "14110008",
    model: 2012,
    price: 900,
    rating: 4.2,
  },
  {
    name: "Celerio",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "998 cc",
    img: "../assests/cars/Hatchback/celerio.jpeg",
    rentifyId: "14110009",
    model: 2010,
    price: 1000,
    raintg: 3.7,
  },
  {
    name: "Santro",
    type: "hatchback",
    seaters: "5",
    freeKm : "66",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "1086 cc",
    img: "../assests/cars/Hatchback/santro.jpeg",
    rentifyId: "14110010",
    model: 2013,
    price: 1025,
    rating: 4.2,
  },
  {
    name: "Verna",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "998 to 1497 cc",
    img: "../assests/cars/Sedan/verna.jpeg",
    rentifyId: "14110011",
    model: 2020,
    price: 1560,
    rating: 4.9,
  },
  {
    name: "Honda All New City",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "1498 cc",
    img: "../assests/cars/Sedan/Honda-city.jpeg",
    rentifyId: "14110012",
    model: 2018,
    price: 1450,
    rating: 4.8,
  },
  {
    name: "Ciaz",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "1462 cc",
    img: "../assests/cars/Sedan/ciaz.jpeg",
    rentifyId: "14110013",
    model: 2019,
    price: 1600,
    rating: 4.5,
  },
  {
    name: "Rapid",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "999 cc",
    img: "../assests/cars/Sedan/rapid.jpeg",
    rentifyId: "14110014",
    model: 2016,
    price: 1020,
    rating: 4.0,
  },
  {
    name: "BMW",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Automatic",
    fuelType: "Diesel",
    Engine: "1995 to 2998 cc",
    img: "../assests/cars/Sedan/BMW.jpg",
    rentifyId: "14110015",
    model: 2019,
    price: 1900,
    rating: 5,
  },
  {
    name: "Octavia",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "1984 cc",
    img: "../assests/cars/Sedan/octavia.jpeg",
    rentifyId: "141100016",
    model: 2019,
    price: 1600,
    rating: 4.0,
  },
  {
    name: "Honda city",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "1497 cc",
    img: "../assests/cars/Sedan/Honda-city2.jpeg",
    rentifyId: "14110017",
    model: 2015,
    price: 1250,
    rating: 4.2,
  },
  {
    name: "Jaguar XE",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "1997 cc",
    img: "../assests/cars/Sedan/jaguar-xe.jpeg",
    rentifyId: "14110018",
    model: 2016,
    price: 1900,
    rating: 4.9,
  },
  {
    name: "Mercedesbenz",
    type: "Sedan",
    freeKm : "66",
    seaters: "5",
    transmition: "Automatic",
    fuelType: "Diesel",
    Engine: "1332 to 1950 cc",
    img: "../assests/cars/Sedan/mercedesbenz.jpeg",
    rentifyId: "14110019",
    model: 2019,
    price: 1950,
    rating: 4.9,
  },

  {
    name: "XUV700",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Automatic",
    fuelType: "Diesel",
    Engine: "1997 to 2184 cc",
    img: "../assests/cars/SUV/xuv700.jpeg",
    rentifyId: "14110021",
    model: 2010,
    price: 1580,
    rating: 3.9,
  },
  {
    name: "Creta",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Manual",
    fuelType: "Diesel",
    Engine: "1353 to 1497 cc",
    img: "../assests/cars/SUV/creta.jpeg",
    rentifyId: "14110022",
    model: 2018,
    price: 1550,
    rating: 4.2,
  },
  {
    name: "Seltos",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Manual",
    fuelType: "Diesel",
    Engine: "11353 to 1497 cc",
    img: "../assests/cars/SUV/seltos.jpeg",
    rentifyId: "14110023",
    model: 2019,
    price: 1400,
    rating: 4.1,
  },
  {
    name: "Fortuner",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "2694 to 2755 cc",
    img: "../assests/cars/SUV/fortuner.jpeg",
    rentifyId: "14110024",
    model: 2016,
    price: 1520,
    rating: 4.0,
  },
  {
    name: "Astor",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "1349 to 1498 cc",
    img: "../assests/cars/SUV/astor.jpeg",
    rentifyId: "14110025",
    model: 2019,
    price: 1730,
    rating: 4.5,
  },
  {
    name: "Jeep Compass",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Manual",
    fuelType: "Petrol",
    Engine: "1368 to 1956 cc",
    img: "../assests/cars/SUV/compass.jpeg",
    rentifyId: "14110026",
    model: 2019,
    price: 1600,
    rating: 4.0,
  },
  {
    name: "Tata Harrier",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Automatic",
    fuelType: "Diesel",
    Engine: "1956 cc",
    img: "../assests/cars/SUV/tata-harrier.jpeg",
    rentifyId: "14110027",
    model: 2015,
    price: 1250,
    rating: 4.2,
  },
  {
    name: "Mahindra Thar",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "1997 to 2184 cc",
    img: "../assests/cars/SUV/thar.jpeg",
    rentifyId: "14110018",
    model: 2016,
    price: 1670,
    rating: 4.3,
  },
  {
    name: "Volkswagen Taigun",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "999 to 1498 cc",
    img: "../assests/cars/SUV/taigun.jpeg",
    rentifyId: "14110029",
    model: 2019,
    price: 1550,
    rating: 4.0,
  },
  {
    name: "kushaq",
    type: "SUV",
    freeKm : "66",
    seaters :"5",
    transmition: "Automatic",
    fuelType: "Petrol",
    Engine: "999 to 1498 cc",
    img: "../assests/cars/SUV/kushaq-52.jpeg",
    rentifyId: "14110030",
    model: 2015,
    price: 1380,
    rating: 4.0,
  },
];

let filters = {
  freeKm: "66",
  seaters: "5",
  carType: "hatchback",
  transmision: "Manual",
};

const filterCars = () => {

  const carsItems = document.querySelector(".cars-items");

  carsItems.innerHTML = "";

  cars.forEach((car) => {
    if(car.freeKm == filters.freeKm && car.transmition == filters.transmision && car.seaters == filters.seaters && car.type == filters.carType  ){
      const div = document.createElement("div");
      div.classList.add("cars-item");
    
     
    
      div.innerHTML = `<div class="cars-img">
      <img src= ${car.img} alt=${car.type} />
      </div>
      <div class="cars-details">
      <h2>${car.name}</h2>
      <p>Transmition : <span> ${car.transmition}</span></p>
      
      <p>Fuel type : <span>${car.fuelType}</span></p>
      <p><i class="fas fa-star" style="color: goldenrod"></i> ${car.rating}</p>
      
      <!--link it to the form page-->
      </div>
      <div class="cars-price">
      <p class="cars-item-price">₹ <span>${car.price}</span></p>
      
      <a  class="book-btn"
      >book Now</a
      >
      </div>`;
    
      carsItems.appendChild(div);
    }

    
    
  });


 
}

// designing the filter funtionslaity



//   selcting all the options for particular filter

const freeKmOptions = document.querySelectorAll(".free-km .choices span");

freeKmOptions.forEach((item) => {
  item.onclick = (e) => {
    freeKmOptions.forEach((item) => {
      item.classList.remove("active-filter");
    });

    e.target.classList.add("active-filter");
    filters.freeKm = e.target.dataset.value;
    filterCars();
    //   console.log(filters);
  };
});

//   selcting all the options for particular filter

const seatersOptions = document.querySelectorAll(".seaters .choices span");

seatersOptions.forEach((item) => {
  item.onclick = (e) => {
    seatersOptions.forEach((item) => {
      item.classList.remove("active-filter");
    });

    e.target.classList.add("active-filter");
    filters.seaters = e.target.dataset.value;
    filterCars();
    //   console.log(filters);
  };
});

//   selcting all the options for particular filter

const carTypeOptions = document.querySelectorAll(
  ".car-type-filter .choices span"
);

carTypeOptions.forEach((item) => {
  item.onclick = (e) => {
    carTypeOptions.forEach((item) => {
      item.classList.remove("active-filter");
    });

    e.target.classList.add("active-filter");
    filters.carType = e.target.dataset.value;
    filterCars();
    //   console.log(filters);
  };
});

//   selcting all the options for particular filter

const transmitionOptions = document.querySelectorAll(
  ".transmision .choices span"
);

transmitionOptions.forEach((item) => {
  item.onclick = (e) => {
    transmitionOptions.forEach((item) => {
      item.classList.remove("active-filter");
    });

    e.target.classList.add("active-filter");
    filters.transmision = e.target.dataset.value;
    filterCars();
    //   console.log(filters);
  };
});

// CAR DETAILS

cars.forEach((car) => {
  
  const div = document.createElement("div");
  div.classList.add("cars-item");

  const carsItems = document.querySelector(".cars-items");

  div.innerHTML = `<div class="cars-img">
  <img src= ${car.img} alt=${car.type} />
  </div>
  <div class="cars-details">
  <h2>${car.name}</h2>
  <p>Transmition : <span> ${car.transmition}</span></p>
  
  <p>Fuel type : <span>${car.fuelType}</span></p>
  <p><i class="fas fa-star" style="color: goldenrod"></i> ${car.rating}</p>
  
  <!--link it to the form page-->
  </div>
  <div class="cars-price">
  <p class="cars-item-price">₹ <span>${car.price}</span></p>
  
  <a  class="book-btn"
  >book Now</a
  >
  </div>`;

  carsItems.appendChild(div);
});

// const div = document.createElement('div');

// div.classList.add("cars-item");

// console.log(div);

// const carsItems = document.querySelector(".cars-items");

// div.innerHTML = `<div class="cars-img">
// <img src="../assests/cars/Hatachback/santro.jpeg" alt="SEDAN" />
// </div>
// <div class="cars-details">
// <h2>Boleno</h2>
// <p>Transmition: <span>Manual</span></p>

// <p>Fuel type:<span>Petrol</span></p>
// <p><i class="fas fa-star" style="color: goldenrod"></i> 4.4</p>

// <!--link it to the form page-->
// </div>
// <div class="cars-price">
// <p class="cars-item-price">₹ <span>1224</span></p>

// <a  class="book-btn"
// >book Now</a
// >
// </div>`

// carsItems.appendChild(div);
