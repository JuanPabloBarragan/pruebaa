<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARMAJUCRI</title>
    <link rel="shortcut icon" href="IMG/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <header>
		<nav>
            <a href="home.php">Inicio </a>
            <a href="PHP/lacteos.php">Lacteos </a>
            <a href="PHP/granos.php">Granos </a>
            <a href="PHP/carnicos.php">Carnicos </a>
            <a href="PHP/aseo.php">Aseo </a>
            <a href="PHP/aseoper.php">Aseo Personal </a>
            <a href="PHP/bebidas.php">Bebidas </a>
            <a href="PHP/medicamentos.php">Medicamentos </a>
            <a href="PHP/golocinas.php">Golocinas </a>
		</nav>
		<section class="textos-header">
			<h1>CARMAJUCRI</h1>
			<h2>La Tienda De Todos</h2>
		</section>
		<div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 517.21,61.67 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>
	</header>
    <section class="contenedor sobre-afianzamiento">
        <h2 class="titulo">Bienvenidos A La Tienda Carmajucri</h2>
        <div class="contenedor-sobre-afianzamiento">
            <img src="IMG/abuela.jpeg" alt="" class="imagen-about-us">
            <div class="contenido-textos"><br><br>
                <h3><span>:3</span>Mira Todo Lo Que Gustes</h3>
                <p>Tenemos productos para el aseo del hogar y personal, ricos aperitivos para el dia, productos para tus mascotas y muchisimo más.</p><br>
                <br><br>
                <h3><span>:3</span>¿Aun No Inicias Sesion?</h3>
                <p>Si quieres disfrutar al maximo de nuestro servicio incia sesion dando click <a href="index.html">aqui</a>.</p><br>
            </div>
        </div>
    </section><br><br><br>


    <div class="container-slider">
        <div class="slider" id="slider">
            <div class="slider__section">
                <img src="IMG/logo.png" alt="" class="slider__img">
            </div>
            <div class="slider__section">
                <img src="IMG/lacteos.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Productos Lacteos</h2>
                    <a href="PHP/lacteos.php" class="slider__link">Comprar Ahora</a>
                </div>
            </div>

            <div class="slider__section">
                <img src="IMG/granos.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Productos De Granos</h2>
                    <a href="PHP/granos.php" class="slider__link">Comprar Ahora</a>
                </div>
            </div>

            <div class="slider__section">
                <img src="IMG/carnicos.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Productos Carnicos</h2>
                    <a href="PHP/carnicos.php" class="slider__link">Comprar Ahora</a>
                </div>
            </div>

            <div class="slider__section">
                <img src="IMG/aseo.webp" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Productos De Aseo</h2>
                    <a href="PHP/aseo.php" class="slider__link">Comprar Ahora</a>
                </div>
            </div>

            <div class="slider__section">
                <img src="IMG/aseo_personal.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Productos De Aseo Personal</h2>
                    <a href="PHP/aseoper.php" class="slider__link">Comprar Ahora</a>
                </div>
            </div>

            <div class="slider__section">
                <img src="IMG/bebidas.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Bebidas</h2>
                    <a href="PHP/bebidas.php" class="slider__link">Comprar Ahora</a>
                </div>
            </div>

            <div class="slider__section">
                <img src="IMG/medicamentos.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Medicamentos</h2>
                    <a href="PHP/medicamentos.php" class="slider__link">Comprar Ahora</a>
                </div>
            </div>

            <div class="slider__section">
                <img src="IMG/snaks.jpg" alt="" class="slider__img">
                <div class="slider__content">
                    <h2 class="slider__title">Golocinas</h2>
                    <a href="PHP/golocinas.php" class="slider__link">Comprar Ahora</a>
                </div>
            </div>
        </div>
        <div class="slider__btn slider__btn--right" id="btn-right">&#62;</div>
        <div class="slider__btn slider__btn--left" id="btn-left">&#60;</div>
    </div>


    <main class="main">
        <div class="container">
            <h2 class="main-title">-Mira Lo Que Desees-</h2>
            <section class="container-products">
                <div class="product">
                    <img src="IMG/lacteos.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Lacteos</h3>
                        <buttom class="form_buttom"><a href="PHP/lacteos.php"></a></buttom>
                    </div>
                    <i class="product__icon fa-solid fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="IMG/granos.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Granos</h3>
                        <buttom class="form_buttom"><a href="PHP/granos.php"></a></buttom>
                    </div>
                    <i class="product__icon fa-solid fa-cart-plus"></i>
                </div>

                <div class="product">
                    <img src="IMG/carnicos.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Carnicos</h3>
                        <buttom class="form_buttom"><a href="PHP/carnicos.php"></a></buttom>
                    </div>
                    <i class="product__icon fa-solid fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="IMG/aseo.webp" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Aseo</h3>
                        <buttom class="form_buttom"><a href="PHP/aseo.php"></a></buttom>
                    </div>
                    <i class="product__icon fa-solid fa-cart-plus"></i>
                </div>
            </section>
        </div>

        <div class="container-editor">
            <div class="editor__item">
                <img src="IMG/perrito.jpg" alt="" class="editor__img">
                <p class="editor__circle">Para Los Perritos</p>
            </div><br>
            <div class="editor__item">
                <img src="IMG/gatos.jpeg" alt="" class="editor__img">
                <p class="editor__circle">Para Los Gaticos</p>
            </div>
        </div><br><br>

        <div class="container">
            <section class="container-products">
                <div class="product">
                    <img src="IMG/aseo_personal.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Aseo Personal</h3>
                        <buttom class="form_buttom"><a href="PHP/aseoper.php"></a></buttom>
                    </div>
                    <i class="product__icon fa-solid fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="IMG/bebidas.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Bebidas</h3>
                        <buttom class="form_buttom"><a href="PHP/bebidas.php"></a></buttom>
                    </div>
                    <i class="product__icon fa-solid fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="IMG/medicamentos.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Medicamentos</h3>
                        <buttom class="form_buttom"><a href="PHP/medicamentos.php"></a></buttom>
                    </div>
                    <i class="product__icon fa-solid fa-cart-plus"></i>
                </div>
                <div class="product">
                    <img src="IMG/snaks.jpg" alt="" class="product__img">
                    <div class="product__description">
                        <h3 class="product__tittle">Golocinas</h3>
                        <buttom class="form_buttom"><a href="PHP/golocinas.php"></a></buttom>
                    </div>
                    <i class="product__icon fa-solid fa-cart-plus"></i>
                </div>
            </section>
        </div><br><br><br>
    </main>
    <footer>
		<div class="contenedor-footer">
			<div class="content-foo">
				<h4>CONTÁCTANOS</h4>
				<p>3125872318</p>
				<p>carmajucri@gmail.com</p>
			</div>
		</div>
		<h2 class="titulo-final">Carmajucri - Tienda Virtual</h2><br>
	</footer>
    <script src="SCRIPTS/slider.js"></script>
    <script src="SCRIPTS/menu.js"></script>
</body>
</html>