<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Âncora Legal - Advocacia Especializada</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: #1a1a2e;
            color: #fff;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo span {
            color: #c4a747;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #c4a747;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #fff;
            padding: 120px 0 80px;
            margin-top: 60px;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .hero-text h1 {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button {
            display: inline-block;
            background: #c4a747;
            color: #fff;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background: #a8862c;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #c4a747;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1a1a2e;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .service-card h3 {
            margin-bottom: 1rem;
            color: #1a1a2e;
        }

        /* Contact Section */
        .contact {
            padding: 80px 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info {
            background: #1a1a2e;
            color: #fff;
            padding: 2rem;
            border-radius: 10px;
        }

        .contact-info h3 {
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        .info-icon {
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .contact-form {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group textarea {
            resize: vertical;
        }

        .submit-button {
            background: #c4a747;
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-button:hover {
            background: #a8862c;
        }

        /* Footer */
        footer {
            background: #1a1a2e;
            color: #fff;
            text-align: center;
            padding: 2rem 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content,
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .hero-text h1 {
                font-size: 2rem;
            }
            
            nav ul {
                gap: 1rem;
            }
            
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">
                Âncora <span>Legal</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Início</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Excelência em Advocacia<br>Resultados que Transformam</h1>
                <p>Com mais de 15 anos de experiência, oferecemos soluções jurídicas personalizadas e eficientes para seus desafios legais.</p>
                <a href="#contact" class="cta-button">Consultoria Gratuita</a>
                <div class="hero-stats">
                    <div class="stat">
                        <div class="stat-number">500+</div>
                        <div>Casos Resolvidos</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">98%</div>
                        <div>Taxa de Sucesso</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">15+</div>
                        <div>Anos de Experiência</div>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <svg viewBox="0 0 400 300" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: auto;">
                    <rect x="50" y="50" width="300" height="200" rx="10" fill="#2c3e50" opacity="0.3"/>
                    <text x="200" y="170" text-anchor="middle" fill="#c4a747" font-size="20" font-family="Arial">⚖️ Justiça e Ética</text>
                </svg>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Nossos Serviços</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">⚖️</div>
                    <h3>Direito Civil</h3>
                    <p>Contratos, responsabilidade civil, direito do consumidor e muito mais. Protegemos seus direitos com excelência.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏢</div>
                    <h3>Direito Empresarial</h3>
                    <p>Assessoria completa para empresas: contratos comerciais, societário, falências e recuperação judicial.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">👨‍👩‍👧‍👦</div>
                    <h3>Direito de Família</h3>
                    <p>Divórcios, guarda de filhos, pensão alimentícia e inventários com sensibilidade e competência.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">💼</div>
                    <h3>Direito Trabalhista</h3>
                    <p>Defesa dos direitos do trabalhador e empregador, acordos coletivos e reclamações trabalhistas.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🏛️</div>
                    <h3>Direito Tributário</h3>
                    <p>Planejamento tributário, defesas administrativas e judiciais em questões fiscais.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔒</div>
                    <h3>Direito Previdenciário</h3>
                    <p>Aposentadorias, pensões, benefícios assistenciais e revisão de benefícios do INSS.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Entre em Contato</h2>
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Informações de Contato</h3>
                    <div class="info-item">
                        <span class="info-icon">📍</span>
                        <span>Av. Paulista, 1000 - Bela Vista, São Paulo - SP</span>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">📞</span>
                        <span>(11) 3456-7890</span>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">✉️</span>
                        <span>contato@ancoralegal.com.br</span>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">🕒</span>
                        <span>Segunda a Sexta: 9h às 18h</span>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form method="POST" action="">
                        <div class="form-group">
                            <input type="text" name="nome" placeholder="Seu nome completo" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Seu e-mail" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="telefone" placeholder="Seu telefone">
                        </div>
                        <div class="form-group">
                            <select name="assunto" required>
                                <option value="">Selecione o assunto</option>
                                <option value="civil">Direito Civil</option>
                                <option value="empresarial">Direito Empresarial</option>
                                <option value="familia">Direito de Família</option>
                                <option value="trabalhista">Direito Trabalhista</option>
                                <option value="tributario">Direito Tributário</option>
                                <option value="previdenciario">Direito Previdenciário</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="mensagem" rows="5" placeholder="Descreva sua situação ou dúvida" required></textarea>
                        </div>
                        <button type="submit" name="enviar" class="submit-button">Enviar Mensagem</button>
                    </form>
                    
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar'])) {
                        $nome = htmlspecialchars($_POST['nome']);
                        $email = htmlspecialchars($_POST['email']);
                        $telefone = htmlspecialchars($_POST['telefone']);
                        $assunto = htmlspecialchars($_POST['assunto']);
                        $mensagem = htmlspecialchars($_POST['mensagem']);
                        
                        // Aqui você pode adicionar o código para enviar e-mail ou salvar no banco de dados
                        echo "<div style='background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-top: 20px; text-align: center;'>
                                <strong>Mensagem enviada com sucesso!</strong><br>
                                Entraremos em contato em breve, $nome.
                              </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Âncora Legal Advocacia. Todos os direitos reservados.</p>
            <p style="margin-top: 10px; font-size: 0.9rem;">Excelência jurídica a serviço da justiça</p>
        </div>
    </footer>
</body>
</html>
