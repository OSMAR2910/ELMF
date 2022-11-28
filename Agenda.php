<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="img/Iconos/Logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/Agenda.css">
    <script src="js/Agenda.js"></script>
    <meta name="theme-color" content="#ffdcdc">
    <meta name="msapplication-navbutton-color" content="#ffdcdc">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffdcdc">
    <script src="https://kit.fontawesome.com/15d60a6cf6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Nails Room</title>
</head>

<body>
    <section id="F">
        <video src="temas/diciembre/diciembre.mp4" autoplay="true" muted="true" loop="true"></video>
    </section>

    <section id="in"></section>
    <main>
        <img src="img/Iconos/Logo.png" width="170vw">
    </main>
    <nav>
        <a href="Web.html">Inicio</a>
    </nav>

    <script
        src="https://www.paypal.com/sdk/js?client-id=AYiW0Cn6YmWe27hAxo-yxoO5NR3EjZd8xqGNWvate4HKjtJV6ONZx6GXCchv9Os7r_6hK5fCfrIZuPGh&currency=MXN">
    </script>

    <section id="G">
        <div id="info">
            <input type="date" class="date" id="fecha" name="fecha" min="2022-11-01" max="2026-01-01">
            <input type="time" class="date" id="hora" name="hora" autocomplete="time" placeholder="Hora" />
            <input type="name" class="date" id="nombre" name="nombre" autocomplete="name" placeholder="Nombre" />
            <input type="email" class="date" id="email" name="email" autocomplete="email" placeholder="Email">
            <input type="tel" class="date" id="telefono" name="telefono" autocomplete="tel" placeholder="Telefono">
        </div>
        <div id="paypal-button">
            <script>
            paypal.Buttons({
                style: {
                    color: "blue",
                    shape: "pill",
                    label: "pay",
                },
                createOrder: (data, actions) => {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "150"
                            }
                        }]
                    });
                },
                onCancel: (data, actions) => {
                    alert("Tu pago se ha cancelado");
                    window.location = "Web.html";
                    console.log(data);
                },

                onApprove: (data, actions) => {
                    return actions.order.capture().then(function(orderData) {
                        console.log('Capture result', orderData, JSON.stringify(orderData, null,
                        2));
                        const transaction = orderData.purchase_units[0].payments.captures[0];
                        window.location = "Citalista.html";
                    });
                }
            }).render('#paypal-button');
                            <?php
    include "php/enviar-email.php";
    ?>
            </script>
        </div>
    </section>
</body>

</html>