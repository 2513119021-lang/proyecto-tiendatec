<html>
    <head>
        <title>Tienda Tec</title>
    </head>
    <body>
        <header>
        <h1>Bienvenido a Tienda Tec- agregar-producto</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="productos.php">Catálogo</a>
            <a href="contacto.php">Contacto</a>
        </nav>
        <main>
    <section>
        <h2>Agregar Nuevo Producto</h2>
        <form action="#" method="post">
            <label for="nombre">Nombre del producto:</label>
            <input type="text" name="nombre" id="nombre" required>
            <br>
            <label for="categoria">Categoría:</label>
            <input type="text" name="categoria" id="categoria" required>
            <br>
            <label for="precio">precio:</label>
            <input type="number" name="precio" id="precio" step="0.01" min="0">
            <br>
            <label for="stock">stock:</label>
            <input type="number" name="stock" id="stock" min="0">

            <button type="submit">Agregar Producto</button>
        </form>
    </section>
</main>
        <footer>
            <p>&copy; 2024 Tienda Tec. Todos los derechos reservados.</p>
        </footer>
        </header>
    </body>
</html>
