<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Formulario Futurista</title>
    <link rel="stylesheet" href="estilos.css" />
</head>
<body>
    <div class="form-container">
        <div class="logo">
            <div class="techlaptops"></div>
        </div>
        <div class="title">BIENVENIDO</div>
        <form id="userData">
            <div class="input-group">
                <input type="text" class="input-field" id="nombre" name="nombre" placeholder="nombre" required />
                <div class="icon">👤</div>
            </div>

            <div class="input-group">
                <input type="password" class="input-field" id="contrasena" name="contrasena" placeholder="contraseña" required />
                <div class="icon">🔒</div>
            </div>

            <div class="input-group">
                <input type="email" class="input-field" id="correo" name="correo" placeholder="correo electrónico" required />
                <div class="icon">✉️</div>
            </div>

            <div class="input-group">
                <input type="text" class="input-field" id="carrito" name="carrito" placeholder="carrito de compras" required />
                <div class="icon">🛒</div>
            </div>

            <div class="input-group">
                <input type="tel" class="input-field" id="telefono" name="telefono" placeholder="teléfono" required />
                <div class="icon">📞</div>
            </div>

              <a href="techlaptops.php"button type="submit" class="submit-btn">Enviar/>

            <div class="terms">
                <a href="#" id="terminos-link">Términos y condiciones</a>
            </div>

            <div id="successMessage" class="success-message">
                ¡Datos guardados correctamente en la base de datos!
            </div>

            <div id="errorMessage" class="error-message">
                Error al guardar datos. Inténtelo de nuevo.
            </div>
        </form>
    </div>

    <script>
        document.getElementById('userData').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const userData = {
                nombre: formData.get('nombre'),
                contrasena: formData.get('contrasena'),
                correo: formData.get('correo'),
                carrito: formData.get('carrito'),
                telefono: formData.get('telefono')
            };

            saveToDatabase(userData);
        });

        function saveToDatabase(userData) {
            setTimeout(() => {
                if (Math.random() < 0.95) {
                    console.log('Datos guardados en la base de datos:', userData);
                    document.getElementById('successMessage').style.display = 'block';
                    document.getElementById('errorMessage').style.display = 'none';
                    document.getElementById('userData').reset();
                    setTimeout(() => {
                        document.getElementById('successMessage').style.display = 'none';
                    }, 3000);
                } else {
                    console.error('Error al guardar datos');
                    document.getElementById('errorMessage').style.display = 'block';
                    document.getElementById('successMessage').style.display = 'none';
                    setTimeout(() => {
                        document.getElementById('errorMessage').style.display = 'none';
                    }, 3000);
                }
            }, 1000);
        }

        document.getElementById('terminos-link').addEventListener('click', function(e) {
            e.preventDefault();
            alert('Términos y condiciones del servicio:\n\n1. Los datos proporcionados serán almacenados en nuestra base de datos.\n2. Su información será tratada con confidencialidad.\n3. No se compartirá con terceros sin su consentimiento.');
        });
    </script>
</body>
</html>
