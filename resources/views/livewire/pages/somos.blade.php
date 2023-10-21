<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>¿Quienes somos?</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if (Route::has('somos'))
                <livewire:welcome.navigation />
            @endif
    <h1 align="center">¿Quienes somos?</h1>

    <section>
    <p align="justify">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus id tenetur ipsa consequatur voluptate aliquid rem architecto pariatur illum veritatis, accusantium nemo delectus minima perferendis? Adipisci architecto eius veritatis sint!
        <br>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est maxime alias beatae doloribus non, quos, excepturi iure accusamus veniam accusantium enim doloremque molestiae eveniet perspiciatis ipsa numquam placeat. Consequuntur, laudantium.
        <br>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam atque provident nulla corrupti velit qui natus officia porro asperiores alias, laborum, repellat id earum veritatis nisi aliquid? Ex, fuga reprehenderit.
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero omnis fugiat esse velit beatae a rerum numquam totam quae ullam! Amet at, aut impedit numquam non enim temporibus alias culpa.
    </p>
    </section>

    <footer>
        <p align="center">&copy; Todos los derechos ITIZ</p>
        <a href="https://www.facebook.com/profile.php?id=100082224369300"><img src="imagenes/facebook.png" alt="facebook" width="50px" height="50px"></a>
        <a href="https://www.instagram.com/angelgm1700/" width="50px" height="50px"><img src="imagenes/instagram.png" alt="instagram" width="50px" height="50px"></a>
        <a href="https://www.paypal.com/mx/home"><img align="left" src="imagenes/pagos.png" alt="pagos" width="150px" height="50px"></a>
    </footer>
</body>
</html>
