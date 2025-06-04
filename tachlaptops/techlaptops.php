<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLaptops - Tecnología del Futuro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        /* Animated background particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #00f5ff;
            border-radius: 50%;
            animation: float 6s infinite linear;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Header */
        header {
            position: relative;
            z-index: 10;
            padding: 2rem 0;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 245, 255, 0.3);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            background: linear-gradient(45deg, #00f5ff, #ff00ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 30px rgba(0, 245, 255, 0.5);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border: 1px solid transparent;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .nav-links a:hover {
            border-color: #00f5ff;
            box-shadow: 0 0 20px rgba(0, 245, 255, 0.5);
            transform: translateY(-2px);
        }

        /* Hero background image */
        .hero {
            position: relative;
            z-index: 5;
            text-align: center;
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            background: url('https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80') center/cover;
            border-radius: 20px;
            background-blend-mode: overlay;
            background-color: rgba(26, 26, 46, 0.8);
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #00f5ff, #ff00ff, #ffff00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 20px #00f5ff, 0 0 30px #00f5ff, 0 0 40px #00f5ff;
            }
            to {
                text-shadow: 0 0 30px #ff00ff, 0 0 40px #ff00ff, 0 0 50px #ff00ff;
            }
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.8;
        }

        .cta-button {
            background: linear-gradient(45deg, #00f5ff, #ff00ff);
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            border-radius: 50px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 245, 255, 0.4);
        }

        .cta-button:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .cta-button:hover:before {
            left: 100%;
        }

        /* Products Grid */
        .products {
            position: relative;
            z-index: 5;
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .products h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #00f5ff;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 245, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 245, 255, 0.2);
            border-color: #00f5ff;
        }

        .product-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(0, 245, 255, 0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }

        .product-card:hover:before {
            transform: translateX(100%);
        }

        .product-image {
            width: 100%;
            height: 250px;
            border-radius: 10px;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #1a1a2e, #16213e);
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .product-image:hover img {
            transform: scale(1.1);
        }

        .product-image:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(0, 245, 255, 0.1), rgba(255, 0, 255, 0.1));
            border-radius: 10px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); }
            50% { transform: translate(-50%, -50%) scale(1.1); }
        }

        .product-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #00f5ff;
        }

        .product-card p {
            margin-bottom: 1rem;
            opacity: 0.8;
            line-height: 1.6;
        }

        .price {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ff00ff;
            margin-bottom: 1rem;
        }

        .buy-button {
            width: 100%;
            background: linear-gradient(45deg, #ff00ff, #00f5ff);
            border: none;
            padding: 0.8rem;
            border-radius: 25px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .buy-button:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(255, 0, 255, 0.4);
        }

        /* Add more product cards */
        .extended-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .product-card-small {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 245, 255, 0.2);
            border-radius: 15px;
            padding: 1.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .product-card-small:hover {
            transform: translateY(-5px);
            border-color: #00f5ff;
            box-shadow: 0 15px 30px rgba(0, 245, 255, 0.15);
        }

        .product-image-small {
            width: 100%;
            height: 180px;
            border-radius: 8px;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .product-image-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-image-small:hover img {
            transform: scale(1.05);
        }

        .product-card-small h4 {
            font-size: 1.2rem;
            color: #00f5ff;
            margin-bottom: 0.5rem;
        }

        .product-card-small .price-small {
            font-size: 1.4rem;
            font-weight: bold;
            color: #ff00ff;
            margin: 0.5rem 0;
        }
        .features {
            position: relative;
            z-index: 5;
            padding: 4rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .features h2 {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #ff00ff;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .feature-item {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 0, 255, 0.3);
            border-radius: 15px;
            padding: 2rem;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            border-color: #ff00ff;
            box-shadow: 0 15px 30px rgba(255, 0, 255, 0.2);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #ff00ff;
        }

        /* Footer */
        footer {
            position: relative;
            z-index: 5;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(0, 245, 255, 0.3);
            padding: 2rem;
            text-align: center;
            margin-top: 4rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Animated particles background -->
    <div class="particles" id="particles"></div>

    <header>
        <nav>
            <div class="logo">TechLaptops</div>
            <ul class="nav-links">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="inicio">
        <h1>LAPTOPS DEL FUTURO</h1>
        <p>Experimenta la próxima generación de computación portátil con tecnología cuántica y IA avanzada</p>
        <button class="cta-button">EXPLORAR AHORA</button>
    </section>

    <section class="products" id="productos">
        <h2>COLECCIÓN CYBERNÉTICA</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="QuantumBook Pro X1">
                </div>
                <h3>QuantumBook Pro X1</h3>
                <p>Procesador cuántico de 64 qubits, pantalla holográfica 4K, batería de grafeno con 72 horas de autonomía</p>
                <div class="price">$4,999</div>
                <button class="buy-button">Comprar Ahora</button>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1587&q=80" alt="NeuralLink Elite">
                </div>
                <h3>NeuralLink Elite</h3>
                <p>Interfaz cerebral directa, AI asistente integrado, renderizado en tiempo real con ray tracing cuántico</p>
                <div class="price">$7,299</div>
                <button class="buy-button">Comprar Ahora</button>
            </div>
            
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1603791440384-56cd371ee9a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="HyperSpeed Nano">
                </div>
                <h3>HyperSpeed Nano</h3>
                <p>Ultra-portátil con procesador fotónico, 1TB de memoria cuántica, peso de solo 500g</p>
                <div class="price">$3,499</div>
                <button class="buy-button">Comprar Ahora</button>
            </div>
        </div>

        <!-- Extended product grid -->
        <div class="extended-grid">
            <div class="product-card-small">
                <div class="product-image-small">
                    <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1964&q=80" alt="ChromaBook Vision">
                </div>
                <h4>ChromaBook Vision</h4>
                <p>Pantalla flexible OLED 360°, reconocimiento ocular avanzado</p>
                <div class="price-small">$2,799</div>
                <button class="buy-button">Comprar</button>
            </div>

            <div class="product-card-small">
                <div class="product-image-small">
                    <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" alt="TitanBook Ultra">
                </div>
                <h4>TitanBook Ultra</h4>
                <p>Carcasa de titanio, resistencia militar, batería solar integrada</p>
                <div class="price-small">$5,499</div>
                <button class="buy-button">Comprar</button>
            </div>

            <div class="product-card-small">
                <div class="product-image-small">
                    <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1932&q=80" alt="AeroBook Stealth">
                </div>
                <h4>AeroBook Stealth</h4>
                <p>Diseño ultradelgado, invisibilidad electromagnética, teclado holográfico</p>
                <div class="price-small">$6,299</div>
                <button class="buy-button">Comprar</button>
            </div>

            <div class="product-card-small">
                <div class="product-image-small">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1926&q=80" alt="Galaxy Workstation">
                </div>
                <h4>Galaxy Workstation</h4>
                <p>Potencia de estación de trabajo, GPU cuántica dual, 128GB RAM</p>
                <div class="price-small">$8,999</div>
                <button class="buy-button">Comprar</button>
            </div>
        </div>
    </section>



    <footer id="contacto">
        <p>&copy; 2025 TechLaptops Corp. Tecnología del futuro, disponible hoy.</p>
        <p>Contacto: info@techlaptops.future | +1-555-QUANTUM</p>
    </footer>

    <script>
        // Create animated particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
                particle.style.animationDelay = Math.random() * 2 + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add click animations to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.5);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s linear;
                    pointer-events: none;
                `;
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add ripple animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Initialize particles
        createParticles();

        // Add parallax effect on scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const particles = document.querySelectorAll('.particle');
            particles.forEach(particle => {
                const speed = 0.5;
                particle.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
    </script>
</body>
</html>