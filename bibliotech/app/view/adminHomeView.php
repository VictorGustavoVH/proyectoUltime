<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotech</title>
    <link rel="stylesheet" href="style.php.css">
    <style>
        /* Reseteo y configuración básica */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url('https://images.unsplash.com/photo-1472173148041-00294f0814a2?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            text-align: center;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;         
        }

        .hero h1 {
            font-size: 4rem;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 20px 40px;
            border-radius: 10px;
            margin: 0;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .footer {
    background-color: rgba(0, 0, 0, 0.2);
    color: #fff;
    text-align: center;
    padding: 10px 0;
}

.footer .footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}

.footer .footer-logo img {
    height: 50px;
}

.footer .footer-links ul {
    list-style-type: none;
}

.footer .footer-links li {
    display: inline;
    margin: 0 10px;
}

.footer .footer-links a {
    color: #fff;
    text-decoration: none;
}

.footer .footer-social a {
    color: #fff;
    margin: 0 10px;
    text-decoration: none;
    font-size: 1.2em;
}

/* Formulario de registro y edición */
.form-register, .form-edit {
    width: 90%;
    max-width: 400px;
    background: #f9f9f9;
    padding: 30px;
    margin: 40px auto;
    border-radius: 10px;
    color: #333;
    box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.form-register h4, .form-edit h4 {
    font-size: 24px;
    margin-bottom: 20px;
}

.controls {
    width: 5%;
    background: #fff;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    font-size: 14px;
    transition: border-color 0.3s ease;
}

.controls:focus {
    border-color: #009879;
    outline: none;
}

.botons {
    width: 100%;
    padding: 10px;
    background-color: #020202;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: white;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.botons:hover {
    background-color: #007f5f;
}

    </style>
</head>
<body>
    <div class="hero">
        <h1>Bibliotech</h1>
    </div>
</body>
</html>
</section>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="app/BIBLIOTECH.png" alt="Logo">
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Política de Privacidad</a></li>|
                </ul>
            </div>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>