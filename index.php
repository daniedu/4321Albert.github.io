<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sweet Dreams</title>
    <link rel="shortcut icon" type="image/png" href="img/sweet.png" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
    <div class="navbar">
      <input type="checkbox" class="checkbox" id="click" hidden />

      <div class="sidebar">
        <label for="click">
          <div class="menu-icon">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
          </div>
        </label>

        <ul class="social-icons-list">
          <li>
            <a href="#" class="social-link"
              ><i class="fab fa-facebook-f"></i
            ></a>
          </li>
          <li>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
          </li>
          <li>
            <a href="#" class="social-link"
              ><i class="fab fa-google-plus-g"></i
            ></a>
          </li>
          <li>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>

        <div class="year">
          <p>2023</p>
        </div>
      </div>

      <nav class="navigation">
        <div class="navigation-header">
          <h1 class="navigation-heading">Sweet Dreams</h1>

          <form class="navigation-search">
            <input
              type="text"
              class="navigation-search-input"
              placeholder="Search..."
            />
            <button class="navigation-search-btn">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>

        <ul class="navigation-list">
          <li class="navigation-item">
            <a href="#home-section" class="navigation-link">home</a>
          </li>
          <li class="navigation-item">
            <a href="#sobre-nosotros-section" class="navigation-link"
              >Sobre Nosotros</a
            >
          </li>
          <li class="navigation-item">
            <a href="#habitaciones-section" class="navigation-link"
              >Habitaciones y Ofertas</a
            >
          </li>
          <li class="navigation-item">
            <a href="#proximos-eventos-section" class="navigation-link"
              >Proximos Eventos</a
            >
          </li>
          <li class="navigation-item">
            <a href="#restaurante-section" class="navigation-link"
              >Restaurante y Gastronomia</a
            >
          </li>
          <li class="navigation-item">
            <a href="#clientes-section" class="navigation-link">Clientes</a>
          </li>
          <li class="navigation-item">
            <a href="db/cotizacion.php" class="navigation-link" id="cotizar-link" target="_blank">Cotiza tu reserva</a>
          </li>
          </li>
          <li class="navigation-item">
            <a href="db/descuentos.php" class="navigation-link" id="descuentos-link"
              >Descubre Descuentos</a
            >
          </li>
          <li class="navigation-item">
        </ul>

        <div class="copyright">
          <p>&copy; 2023. Luis Alberto</p>
        </div>
      </nav>
    </div>

    <section id="home-section">
      <header class="header">
        <div class="brand">
          <div>
            <img src="img/sweet.png" width="80" />
          </div>
          <h3 class="hotel-heading">Sweet Dreams</h3>
        </div>

        <div class="banner">
          <h1 class="banner-heading">Bienvenido a Sweet Dreams</h1>
          <p class="banner-paragraph">Haz que se cumplan tus sueños</p>
          <button class="banner-button">Ver</button>
        </div>
      </header>
    </section>

    <section id="sobre-nosotros-section">
      <section class="about-us">
        <div class="about-us-content">
          <h1 class="about-us-heading">Sobre nosotros</h1>
          <div class="underline">
            <div class="small-underline"></div>
            <div class="big-underline"></div>
          </div>
          <h3 class="sub-heading">Sweet Dreams</h3>
          <p class="about-us-paragraph">
            Descubre la rica historia de nuestro hotel que se remonta a más de
            50 años. Hace muchos años, en la tranquila ciudad de Padua, había un
            hombre llamado Eduardo. Eduardo era conocido por su amabilidad y
            hospitalidad. Siempre soñó con tener un lugar donde pudiera recibir
            a los viajeros y proporcionarles un descanso cómodo y tranquilo. Hoy
            en día, aunque Eduardo ya no está, su legado vive en el Hotel Sweet
            Dreams. Cada huésped que entra por sus puertas puede sentir la
            pasión y el amor que Eduardo puso en cada rincón del hotel. Y así,
            cada noche, los huéspedes se duermen con dulces sueños, tal como
            Eduardo siempre soñó.
          </p>
          <button id="show-history-modal" class="about-us-btn">
            Leer Mas
            <i class="fas fa-angle-double-right btn-arrow"></i>
          </button>
        </div>

        <div class="about-us-images">
          <img src="img/about-us-img-1.jpeg" class="image image-1" />
          <img src="img/about-us-img-2.jpeg" class="image image-2" />
          <img src="img/about-us-img-3.jpeg" class="image image-3" />
          <img src="img/about-us-img-4.jpeg" class="image image-4" />
        </div>
      </section>
    </section>

    <section id="habitaciones-section">
      <section class="rooms">
        <div class="common-header">
          <h1 class="common-heading">Habitaciones y Ofertas</h1>
          <div class="underline">
            <div class="small-underline"></div>
            <div class="big-underline"></div>
          </div>
        </div>

        <div class="rooms-cards-wrapper">
          <div class="room-card">
            <img src="img/single-room.jpeg" class="room-img" />
            <div class="room-card-content">
              <h4 class="room-card-heading">Habitación individual</h4>
              <p class="room-card-paragraph">
                Lamejor obcion para disfrutar de tus momentos.
              </p>
              <p class="room-price">$00.00</p>
              <button class="room-card-btn" onclick="showRoomDetails(0)">
                Reservar
                <i class="fas fa-angle-double-right btn-arrow"></i>
              </button>
            </div>
          </div>

          <div class="room-card">
            <img src="img/double-room.jpeg" class="room-img" />
            <div class="room-card-content">
              <h4 class="room-card-heading">Cama Doble</h4>
              <p class="room-card-paragraph">
                Disfruta la mejor comodidad con la mejor compañia.
              </p>
              <p class="room-price">$000.00</p>
              <button class="room-card-btn" onclick="showRoomDetails(1)">
                Reservar
                <i class="fas fa-angle-double-right btn-arrow"></i>
              </button>
            </div>
          </div>

          <div class="room-card">
            <img src="img/lux.jpeg" class="room-img" />
            <div class="room-card-content">
              <h4 class="room-card-heading">Lujo</h4>
              <p class="room-card-paragraph">
                La mejor comodidad con un diseño increible.
              </p>
              <p class="room-price">$000.00</p>
              <button class="room-card-btn" onclick="showRoomDetails(2)">
                Reservar
                <i class="fas fa-angle-double-right btn-arrow"></i>
              </button>
            </div>
          </div>
          <div class="room-card">
            <img src="img/vip.jpeg" class="room-img" />
            <div class="room-card-content">
              <h4 class="room-card-heading">VIP</h4>
              <p class="room-card-paragraph">
                Disfruta de la prioridad que te damos.
              </p>
              <p class="room-price">$000.00</p>
              <button class="room-card-btn" onclick="showRoomDetails(3)">
                Reservar
                <i class="fas fa-angle-double-right btn-arrow"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- Suite Familiar -->
        <div class="room-container">
          <div class="room-card">
            <img src="img/suite-familiar.jpg" class="room-img" />
            <div class="room-card-content">
              <h4 class="room-card-heading">Suite Familiar</h4>
              <p class="room-card-paragraph">
                Espacio perfecto para familias que desean comodidad y estilo.
              </p>
              <p class="room-price">$400.00</p>
              <button class="room-card-btn" onclick="showRoomDetails(4)">
                Reservar
                <i class="fas fa-angle-double-right btn-arrow"></i>
              </button>
            </div>
          </div>
          <!-- Habitación Ejecutiva -->
          <div class="room-card">
            <img src="img/habitacion-ejecutiva.jpeg" class="room-img" />
            <div class="room-card-content">
              <h4 class="room-card-heading">Habitación Ejecutiva</h4>
              <p class="room-card-paragraph">
                Ideal para viajeros de negocios que buscan un espacio elegante.
              </p>
              <p class="room-price">$250.00</p>
              <button class="room-card-btn" onclick="showRoomDetails(5)">
                Reservar
                <i class="fas fa-angle-double-right btn-arrow"></i>
              </button>
            </div>
          </div>
          <!-- Habitación con Vista al Mar -->
          <div class="room-card">
            <img src="img/habitacion-vista-mar.jpg" class="room-img" />
            <div class="room-card-content">
              <h4 class="room-card-heading">Habitación con Vista al Mar</h4>
              <p class="room-card-paragraph">
                Disfruta de vistas panorámicas al océano desde tu habitación.
              </p>
              <p class="room-price">$600.00</p>
              <button class="room-card-btn" onclick="showRoomDetails(6)">
                Reservar
                <i class="fas fa-angle-double-right btn-arrow"></i>
              </button>
            </div>
          </div>

          <!-- Suite de Luna de Miel -->
          <div class="room-card">
            <img src="img/suite-luna-miel.jpg" class="room-img" />
            <div class="room-card-content">
              <h4 class="room-card-heading">Suite de Luna de Miel</h4>
              <p class="room-card-paragraph">
                Una experiencia romántica para parejas recién casadas.
              </p>
              <p class="room-price">$700.00</p>
              <button class="room-card-btn" onclick="showRoomDetails(7)">
                Reservar
                <i class="fas fa-angle-double-right btn-arrow"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="rooms-btn-wrapper">
          <button id="show-all-rooms" class="rooms-btn">
            Ver todas las habitaciones
          </button>
        </div>
      </section>
    </section>

    <section id="proximos-eventos-section"></section>

    <section class="events">
      <div class="common-header">
        <h1 class="common-heading">Próximos Eventos</h1>
        <div class="underline">
          <div class="small-underline"></div>
          <div class="big-underline"></div>
        </div>
      </div>

      <div class="event-cards-wrapper">
        <div class="event-card">
          <img src="img/event-1.jpeg" class="event-img" />
          <div class="event-card-content">
            <h4 class="room-card-heading">Caridad y Amor</h4>
            <p class="event-card-date">Fecha: Junio 10, 2024</p>
            <p class="event-card-venue">Lugar: Sala de conferencias</p>
            <button class="event-card-btn">
              Ir Al Evento
              <i class="fas fa-angle-double-right btn-arrow"></i>
            </button>
          </div>
        </div>
        <div class="event-card">
          <img src="img/event-2.jpeg" class="event-img" />
          <div class="event-card-content">
            <h4 class="room-card-heading">Sena Navideña</h4>
            <p class="event-card-date">fecha: Diciembre 24, 2024</p>
            <p class="event-card-venue">
              Lugar: Sala de Eventos de Sweet Dreams
            </p>
            <button class="event-card-btn">
              Ir Al Evento
              <i class="fas fa-angle-double-right btn-arrow"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="events-btn-wrapper">
        <button class="rooms-btn">Ver todos los eventos</button>
      </div>
    </section>

    <section id="restaurante-section">
      <section class="restaurant-section">
        <div class="restaurant-header">
          <h1 class="common-heading">Nuestro Delicioso Restaurante</h1>
          <p class="restaurant-description">
            ¡Descubre la exquisitez en cada plato!
          </p>
        </div>

        <div class="restaurant-cards-container">
          <div class="restaurant-card">
            <img src="img/plato1.jpeg" alt="Plato 1" class="restaurant-image" />
            <div class="restaurant-card-content">
              <h2 class="room-card-heading">Bandeja Paisa</h2>
              <p class="restaurant-card-details">
                La bandeja paisa es un plato típico de la región de Antioquia en
                Colombia y es conocida por ser muy abundante y variada. .
              </p>
              <p class="restaurant-card-details">Precio: $00.00</p>
              <button id="show-colombian-menu" class="restaurant-button">
                Ver Menú Colombiano
              </button>
            </div>
          </div>

          <div class="restaurant-card">
            <img src="img/plato-2.png" alt="Plato 2" class="restaurant-image" />
            <div class="restaurant-card-content">
              <h2 class="room-card-heading">Shushi</h2>
              <p class="restaurant-card-details">
                El sushi es un plato japonés que generalmente consiste en arroz
                sazonado con vinagre de arroz, acompañado de pescado crudo,
                mariscos, vegetales u otros ingredientes..
              </p>
              <p class="restaurant-card-details">Precio: $00.00</p>
              <button id="show-asian-menu" class="restaurant-button">
                Ver Menú Asiatico
              </button>
            </div>
          </div>

          <div class="restaurant-card">
            <img src="img/plato-3.jpg" alt="Plato 3" class="restaurant-image" />
            <div class="restaurant-card-content">
              <h2 class="room-card-heading">Paella</h2>
              <p class="restaurant-card-details">
                Paella es un plato español originario de Valencia que suele
                incluir arroz, azafrán y una variedad de ingredientes como
                mariscos, pollo, conejo, pimientos y guisantes..
              </p>
              <p class="restaurant-card-details">Precio: $00.00</p>
              <button id="show-spanish-menu" class="restaurant-button">
                Ver Menú Español
              </button>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="clientes-section">
      <section class="customers">
        <div class="common-header">
          <h1 class="restaurant-heading">Nuestros clientes</h1>
          <div class="underline">
            <div class="small-underline"></div>
            <div class="big-underline"></div>
          </div>
        </div>

        <p class="customers-paragraph">
          En Sweet Dreams, creemos que nuestros clientes son la esencia misma de
          nuestro éxito. Esta página está dedicada a todos ustedes, nuestros
          valiosos clientes, quienes nos han confiado su apoyo, confianza y
          lealtad a lo largo de los años.
        </p>

        <div class="customers-card-wrapper">
          <div class="customer-card">
            <div class="customer-image-wrapper">
              <img src="img/costumer-1.jpeg" class="customer-image" />
            </div>
            <div class="customer-info">
              <h3 class="customer-fullname">Luis Lopez</h3>
              <p class="customer-paragraph-1">Cliente feliz</p>
              <p class="customer-paragraph-2">
                "Hace poco tuve el placer de utilizar los servicios del hotel
                Sweet Dreams y no puedo estar más satisfecho con la experiencia.
                Desde el momento en que ingresé al hotel, me quedé impresionado
                por su sistema web limpio y fácil de navegar. La atención al
                cliente fue excepcional desde el primer contacto hasta el
                último."
              </p>
            </div>
          </div>
          <div class="customer-card">
            <div class="customer-image-wrapper">
              <img src="img/toretto.jpeg" class="customer-image" />
            </div>
            <div class="customer-info">
              <h3 class="customer-fullname">Toreto</h3>
              <p class="customer-paragraph-1">Cliente feliz</p>
              <p class="customer-paragraph-2">
                ""Hace poco tuve el placer de utilizar los servicios del hotel
                Sweet Dreams y no puedo estar más satisfecho con la experiencia.
                Desde el momento en que ingresé al hotel, me quedé impresionado
                por su sistema web limpio y fácil de navegar. La atención al
                cliente fue excepcional desde el primer contacto hasta el
                último."
              </p>
            </div>
          </div>
        </div>
      </section>

      <footer class="footer">
        <div class="main-part">
          <div class="footer-list-wrapper">
            <h3 class="footer-heading">Sweet Dreams</h3>
            <ul class="footer-list">
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> albert9419 </a>
              </li>
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> 000000000 </a>
              </li>
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> Tel: +000 000 000 </a>
              </li>
            </ul>
          </div>

          <div class="footer-list-wrapper">
            <h3 class="footer-heading">Explorar</h3>
            <ul class="footer-list">
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> Home </a>
              </li>
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> Sobre Nosotros </a>
              </li>
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> Habitaciones </a>
              </li>
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> Eventos </a>
              </li>
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> Clientes </a>
              </li>
              <li class="footer-list-item">
                <a href="#" class="footer-list-link"> Contacto </a>
              </li>
            </ul>
          </div>

          <div class="contact">
            <h3 class="footer-heading">Contacto</h3>
            <p>Regístrate para recibir noticias</p>
            <form class="footer-form">
              <input
                type="text"
                class="footer-input"
                placeholder="Your email..."
              />
              <button class="footer-btn">Inscribirse</button>
            </form>
          </div>

          <div class="gallery">
            <h3 class="footer-heading">Galeria</h3>
            <div class="gallery-images">
              <div class="image-wrapper">
                <img src="img/gallery-img-1.jpeg" class="footer-image" />
              </div>
              <div class="image-wrapper">
                <img src="img/gallery-img-2.jpeg" class="footer-image" />
              </div>
              <div class="image-wrapper">
                <img src="img/gallery-img-3.jpeg" class="footer-image" />
              </div>
              <div class="image-wrapper">
                <img src="img/gallery-img-4.jpeg" class="footer-image" />
              </div>
              <div class="image-wrapper">
                <img src="img/gallery-img-5.jpeg" class="footer-image" />
              </div>
              <div class="image-wrapper">
                <img src="img/gallery-img-6.jpeg" class="footer-image" />
              </div>
            </div>
          </div>
        </div>

        <div class="creator-part">
          <div class="copyright-text">
            <p>Copyright &copy; 2023. Luis Alberto</p>
          </div>

          <div class="text-right">
            <p>Hecho Por <span>luis alberto</span></p>
          </div>
        </div>
      </footer>

      <!-- Contacto Modal -->
      <div id="contact-modal" class="modal">
        <div class="modal-content">
          <span class="close-span">&times;</span>
        </div>
      </div>
      <!-- Habitaciones Modales -->
      <div id="room-details-modal" class="modal">
        <div class="modal-content">
          <span class="close-span">&times;</span>
          <h2 id="room-modal-heading" class="room-modal-heading">
            Detalles de la Reserva
          </h2>
          <p id="room-modal-description" class="room-modal-description"></p>
          <p class="room-modal-price">
            Precio: $<span id="room-price">0</span>
          </p>
          <label for="number-of-nights">Numero de Noches:</label>
          <div class="number-input">
            <button class="minus-btn">-</button>
            <input type="number" id="number-of-nights" min="1" value="1" />
            <button class="plus-btn">+</button>
          </div>
          <p class="room-modal-total">Total: $<span id="total-cost">0</span></p>
          <button id="reserve-button" class="room-card-btn">Reservar</button>
        </div>
      </div>
      <!-- Menus Habitaciones -->
      <div id="menu-modal" class="modal">
        <div class="modal-content">
          <span class="close-span">&times;</span>
          <h2>Menú</h2>
          <ul id="menu-list">
            <!-- Aquí se mostrarán los platos del menú -->
          </ul>
        </div>
      </div>
      <!-- Modal Eventos -->
      <div id="eventModal" class="modal">
        <div class="modal-content event-modal-content">
          <span class="close-span" id="closeEventModal">&times;</span>
          <h2 id="eventModalTitle">Título del Evento</h2>
          <p id="eventModalDescription">Descripción detallada del evento.</p>
          <p id="eventModalDate">Fecha: [Fecha del Evento]</p>
          <p id="eventModalVenue">Lugar: [Lugar del Evento]</p>
          <button
            class="event-card-btn"
            id="event-modal-register-btn"
            onclick="apuntarseAlEvento()"
          >
            Apuntarse al Evento
          </button>
        </div>
      </div>
      <!-- Historia Modal -->
      <div id="history-modal" class="modal">
        <div class="modal-content">
          <span id="close-history-span" class="close-span">&times;</span>
          <h2>Historia de Sweet Dreams</h2>
          <p class="about-us-paragraph">
            Sweet Dreams es un refugio de tranquilidad y hospitalidad que ha
            sido un faro de comodidad durante más de medio siglo. Nuestra
            historia se remonta a una época en la que la ciudad de Padua era un
            rincón apacible donde la vida transcurría a un ritmo pausado. Fue en
            este contexto que un hombre excepcional llamado Eduardo soñó con un
            lugar donde los viajeros pudieran encontrar descanso y bienestar.
          </p>

          <p class="about-us-paragraph">
            Eduardo era conocido por su amabilidad innata y su deseo
            inquebrantable de brindar hospitalidad a quienes cruzaran su camino.
            Pasó años imaginando un espacio donde los huéspedes pudieran
            sentirse como en casa lejos de casa. Y así, nació Sweet Dreams. Cada
            detalle del hotel lleva impreso el amor y la pasión de Eduardo,
            desde la decoración hasta la atención al cliente.
          </p>

          <p class="about-us-paragraph">
            A pesar de que Eduardo ya no está entre nosotros, su espíritu
            perdura en cada rincón de Sweet Dreams. Aquí, cada huésped puede
            sentir la calidez y la dedicación que él puso en cada aspecto del
            hotel. Durante las noches, cuando nuestros huéspedes se sumergen en
            un sueño reparador, están experimentando la realización del sueño de
            Eduardo.
          </p>

          <p class="about-us-paragraph">
            A lo largo de los años, Sweet Dreams ha evolucionado y crecido, pero
            siempre manteniendo viva la visión de su fundador. Hemos acogido a
            viajeros de todo el mundo, brindándoles un lugar de descanso y
            rejuvenecimiento. Nuestra dedicación a la hospitalidad y la
            excelencia en el servicio nos ha convertido en un destino de
            elección para aquellos que buscan experiencias memorables.
          </p>

          <p class="about-us-paragraph">
            En Sweet Dreams, la tradición de la hospitalidad perdura. Nuestro
            equipo se esfuerza por seguir el ejemplo de Eduardo, asegurándose de
            que cada estancia sea inolvidable. Desde las cómodas habitaciones
            hasta la deliciosa gastronomía en nuestro restaurante, cada detalle
            está diseñado para ofrecer una experiencia excepcional.
          </p>

          <p class="about-us-paragraph">
            Al mirar hacia el futuro, nos comprometemos a mantener encendida la
            llama de la hospitalidad y la pasión de Eduardo. Estamos agradecidos
            de que hayas elegido Sweet Dreams como tu refugio y esperamos que te
            sientas parte de nuestra rica historia y tradición de dulces sueños.
            ¡Bienvenido a Sweet Dreams, donde los sueños se hacen realidad!
          </p>
        </div>
      </div>
    </section>
  </body>

  <script src="index.js"></script>
</html>
