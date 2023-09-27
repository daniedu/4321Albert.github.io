//? Modal Habitaciones Logica
// contenido de la modal
const rooms = [
  {
    name: "Habitación individual",
    description: "La mejor opción para disfrutar de tus momentos.",
    price: 100,
  },
  {
    name: "Cama Doble",
    description: "Disfruta la mejor comodidad con la mejor compañía.",
    price: 200,
  },
  {
    name: "Lujo",
    description: "La mejor comodidad con un diseño increíble.",
    price: 300,
  },
  {
    name: "VIP",
    description: "Disfruta de la prioridad que te damos.",
    price: 500,
  },
  // Extra Habitaciones
  {
    name: "Suite Familiar",
    description:
      "Espacio perfecto para familias que desean comodidad y estilo.",
    price: 400,
  },
  {
    name: "Habitación Ejecutiva",
    description:
      "Ideal para viajeros de negocios que buscan un espacio elegante.",
    price: 250,
  },
  {
    name: "Habitación con Vista al Mar",
    description:
      "Disfruta de vistas panorámicas al océano desde tu habitación.",
    price: 600,
  },
  {
    name: "Suite de Luna de Miel",
    description: "Una experiencia romántica para parejas recién casadas.",
    price: 700,
  },
];

let roomDetailsModal = document.getElementById("room-details-modal");
let roomDetailsHeader = document.getElementById("room-modal-heading");
let roomDetails = document.getElementById("room-modal-description");
let closeRoomDetailsBtn = document.getElementsByClassName("close-span");
let reserveButton = document.getElementById("reserve-button");
let numberOfNightsInput = document.getElementById("number-of-nights");
let roomPriceSpan = document.getElementById("room-price");
let totalCostSpan = document.getElementById("total-cost");
// Botones
const minusButton = document.querySelector(".minus-btn");
const plusButton = document.querySelector(".plus-btn");
// Logica
function updateTotalCost() {
  const numberOfNights = parseInt(numberOfNightsInput.value);
  const roomPrice = 100.0;
  const totalCost = (numberOfNights * roomPrice).toFixed(2);
  totalCostSpan.textContent = totalCost;
}

minusButton.addEventListener("click", () => {
  let currentValue = parseInt(numberOfNightsInput.value);
  if (currentValue > 1) {
    numberOfNightsInput.value = currentValue - 1;
    updateTotalCost();
  }
});

plusButton.addEventListener("click", () => {
  let currentValue = parseInt(numberOfNightsInput.value);
  numberOfNightsInput.value = currentValue + 1;
  updateTotalCost();
});

function showRoomDetails(roomIndex) {
  let room = rooms[roomIndex];
  roomPriceSpan.textContent = room.price;
  roomDetailsModal.style.display = "flex";
  roomDetails.textContent = room.description;
  roomDetailsHeader.textContent = room.name;
  numberOfNightsInput.addEventListener("input", function () {
    let numberOfNights = parseInt(numberOfNightsInput.value) || 1;
    totalCostSpan.textContent = room.price * numberOfNights;
  });

  reserveButton.onclick = function () {
    alert("Reservado por " + numberOfNightsInput.value + " noches!");
    roomDetailsModal.style.display = "none";
  };
}

let roomCards = document.querySelectorAll(".room-card");
for (let i = 0; i < roomCards.length; i++) {
  roomCards[i].addEventListener("click", showRoomDetails.bind(null, i));
}

closeRoomDetailsBtn.onclick = function () {
  roomDetailsModal.style.display = "none";
};
// Mostrar mas y menos
const showAllRoomsButton = document.getElementById("show-all-rooms");

const roomContainer = document.querySelector(".room-container");

showAllRoomsButton.addEventListener("click", function () {
  if (
    roomContainer.style.display === "none" ||
    roomContainer.style.display === ""
  ) {
    roomContainer.style.display = "block";
    showAllRoomsButton.textContent = "Mostrar menos habitaciones";
  } else {
    roomContainer.style.display = "none";
    showAllRoomsButton.textContent = "Ver todas las habitaciones";
  }
});

//? Modal Historia Logica
let historyModal = document.getElementById("history-modal");
let showHistoryModalButton = document.getElementById("show-history-modal");
let closeHistoryModal = document.getElementById("close-history-span");

showHistoryModalButton.addEventListener("click", function () {
  historyModal.style.display = "block";
});

closeHistoryModal.addEventListener("click", function () {
  historyModal.style.display = "none";
});

window.addEventListener("click", function (event) {
  if (event.target == historyModal) {
    historyModal.style.display = "none";
  }
});

//? Modal Menus Logica
const menuModal = document.getElementById("menu-modal");

const menuList = document.getElementById("menu-list");

const showSpanishMenuButton = document.getElementById("show-spanish-menu");
const showColombianMenuButton = document.getElementById("show-colombian-menu");
const showAsianMenuButton = document.getElementById("show-asian-menu");

showSpanishMenuButton.addEventListener("click", () => {
  mostrarMenuEspanol();
});

showColombianMenuButton.addEventListener("click", () => {
  mostrarMenuColombiano();
});

showAsianMenuButton.addEventListener("click", () => {
  mostrarMenuAsiatico();
});

function renderizarMenu(menu) {
  menuList.innerHTML = "";

  menu.forEach((plato) => {
    const listItem = document.createElement("li");
    listItem.classList.add("menu-item");

    function crearElementoClase(clase, texto) {
      const elemento = document.createElement("span");
      elemento.classList.add(clase);
      elemento.textContent = texto;
      return elemento;
    }

    const itemName = crearElementoClase("item-name", plato.nombre);
    const itemPrice = crearElementoClase("item-price", plato.precio);
    const itemPortions = crearElementoClase("item-portions", plato.porciones);

    listItem.appendChild(itemName);
    listItem.appendChild(itemPrice);
    listItem.appendChild(itemPortions);

    menuList.appendChild(listItem);
  });

  menuModal.style.display = "block";
}

function mostrarMenuEspanol() {
  const platosEspanol = [
    { nombre: "Paella Valenciana", precio: "$19.99", porciones: "2 porciones" },
    { nombre: "Tortilla Española", precio: "$10.99", porciones: "1 porción" },
    { nombre: "Gazpacho Andaluz", precio: "$8.99", porciones: "1 porción" },
    { nombre: "Pulpo a la Gallega", precio: "$15.99", porciones: "1 porción" },
    { nombre: "Cordero Asado", precio: "$22.99", porciones: "2 porciones" },
    { nombre: "Sopa de Mariscos", precio: "$18.99", porciones: "2 porciones" },
    { nombre: "Churros con Chocolate", precio: "$7.99", porciones: "6 piezas" },
    { nombre: "Ensalada de la Casa", precio: "$9.99", porciones: "1 porción" },
    { nombre: "Tarta de Santiago", precio: "$12.99", porciones: "1 porción" },
    { nombre: "Flan de Caramelo", precio: "$6.99", porciones: "1 porción" },
  ];

  renderizarMenu(platosEspanol);
}

function mostrarMenuColombiano() {
  const platosColombianos = [
    { nombre: "Bandeja Paisa", precio: "$18.99", porciones: "2 porciones" },
    { nombre: "Ajiaco", precio: "$12.99", porciones: "1 porción" },
    { nombre: "Arepa", precio: "$6.99", porciones: "1 porción" },
    { nombre: "Sancocho", precio: "$14.99", porciones: "2 porciones" },
    { nombre: "Empanadas", precio: "$9.99", porciones: "3 porciones" },
    { nombre: "Pandebono", precio: "$5.99", porciones: "1 porción" },
    { nombre: "Lechona", precio: "$22.99", porciones: "3 porciones" },
    { nombre: "Chicharrón", precio: "$8.99", porciones: "2 porciones" },
    { nombre: "Arroz con Coco", precio: "$11.99", porciones: "2 porciones" },
    {
      nombre: "Cazuela de Mariscos",
      precio: "$24.99",
      porciones: "2 porciones",
    },
  ];
  renderizarMenu(platosColombianos);
}

function mostrarMenuAsiatico() {
  const platosAsiatico = [
    { nombre: "Sushi", precio: "$20.99", porciones: "16 piezas" },
    { nombre: "Tempura", precio: "$15.99", porciones: "10 piezas" },
    { nombre: "Dim Sum", precio: "$14.99", porciones: "8 piezas" },
    { nombre: "Curry", precio: "$16.99", porciones: "2 porciones" },
    { nombre: "Bibimbap", precio: "$18.99", porciones: "1 porción" },
    { nombre: "Pho", precio: "$12.99", porciones: "1 porción" },
    { nombre: "Sashimi", precio: "$22.99", porciones: "12 piezas" },
    { nombre: "Ramen", precio: "$13.99", porciones: "1 porción" },
    { nombre: "Pad Thai", precio: "$16.99", porciones: "1 porción" },
    { nombre: "Spring Rolls", precio: "$9.99", porciones: "6 piezas" },
  ];

  renderizarMenu(platosAsiatico);
}

const closeButton = document.querySelector(".close-span");
closeButton.addEventListener("click", () => {
  menuModal.style.display = "none";
});

window.addEventListener("click", (event) => {
  if (event.target === menuModal) {
    menuModal.style.display = "none";
  }
});
// Modal Eventos
const eventos = [
  {
    nombre: "Caridad y Amor",
    descripcion: "Una noche llena de caridad y amor.",
    fecha: "Junio 10, 2024",
    lugar: "Sala de conferencias",
    imagen: "img/event-1.jpeg",
  },
  {
    nombre: "Sena Navideña",
    descripcion: "Celebra la Navidad con nosotros en una noche mágica.",
    fecha: "Diciembre 24, 2024",
    lugar: "Sala de Eventos de Sweet Dreams",
    imagen: "img/event-2.jpeg",
  },
];
const eventCards = document.querySelectorAll(".event-card");
const eventModal = document.getElementById("eventModal");
const eventModalTitle = document.getElementById("eventModalTitle");
const eventModalDescription = document.getElementById("eventModalDescription");
const eventModalDate = document.getElementById("eventModalDate");
const eventModalVenue = document.getElementById("eventModalVenue");
const closeEventModal = document.getElementById("closeEventModal");

eventCards.forEach((eventCard, index) => {
  const eventCardBtn = eventCard.querySelector(".event-card-btn");

  eventCardBtn.addEventListener("click", () => {
    const eventData = eventos[index];
    eventModalTitle.textContent = eventData.nombre;
    eventModalDescription.textContent = eventData.descripcion;
    eventModalDate.textContent = "Fecha: " + eventData.fecha;
    eventModalVenue.textContent = "Lugar: " + eventData.lugar;

    eventModal.style.display = "block";
  });
});

closeEventModal.addEventListener("click", () => {
  eventModal.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target == eventModal) {
    eventModal.style.display = "none";
  }
});

//* Cerrar modal al hacer click por fuera
window.onclick = function (event) {
  if (event.target === roomDetailsModal) {
    roomDetailsModal.style.display = "none";
  }
  if (event.target === historyModal) {
    historyModal.style.display = "none";
  }
  if (event.target === menuModal) {
    menuModal.style.display = "none";
  }
  if (event.target === eventModal) {
    eventModal.style.display = "none";
  }
};
function apuntarseAlEvento() {
  alert("Te has apuntado al evento. ¡Gracias!");
  eventModal.style.display = "none";
}
