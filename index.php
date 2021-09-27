<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Google Search -> Só é Necessário se não utilizar o DNS-->
    <meta name="google-site-verification" content="JF5umbF5ciSIj0XjKJAieMqUYVos4caGM0jNr-xQUX0" />

    <!-- Open Graph data -> Facebook -->
    <meta property="og:title" content="WM Soluções Web" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.wmsolucoesweb.com.br/" />
    <meta property="og:site_name" content="WM Soluções Web" />
    <meta property="og:image" itemprop="image" content="https://www.wmsolucoesweb.com.br/img/sites.png" />
    <meta property="og:description"
        content="Desenvolvimento de sites, blogs, e-commerce e sistemas para as mais variadas finalidades." />
    <meta property="og:site_name" content="WM Soluções Web" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="WM Soluções Web" />
    <meta itemprop="description" content="Desenvolvimento de sites, blogs, e-commerce e sistemas para as mais variadas finalidades. 
    Além disso, oferecemos serviços de marketing." />
    <meta itemprop="name" content="https://www.wmsolucoesweb.com.br/img/sites.png" />
    <title>WM Soluções Web - Desenvolvimento Web</title>

    <link rel="icon" href="./img/fav_icon.png">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Icons Bootstrap Rede Social-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Custom CSS-->
    <link type="text/css" rel="stylesheet" href="./css/main.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168077743-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-168077743-1');
    </script>
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="navbar-fixed z-depth-0">
            <nav>
                <div class="nav-wrapper container ">
                    <!--SEO Google-->
                    <h1 class="logo_text">WM Soluções Web</h1>
                    <a href="#home" class="brand-logo valign-wrapper"><img src="./img/logo_branco.png" class="logo_img"
                            alt="WM soluções Web"></a>
                    <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i
                            class="material-icons">menu</i></a>
                    <!--MENU DESKTOP-->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#ofertas">Ofertas</a></li>
                        <li><a href="#sobre">Sobre Nós</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--MENU MOBILE/TABLET-->
        <ul class="sidenav sidenav-close" id="menu-mobile">
            <li><a class="hide-menu" href="#home">Home</a></li>
            <li><a class="hide-menu" href="#servicos">Serviços</a></li>
            <li><a class="hide-menu" href="#ofertas">Ofertas</a></li>
            <li><a class="hide-menu" href="#sobre">Sobre Nós</a></li>
            <li><a class="hide-menu" href="#contato">Contato</a></li>
        </ul>
    </header>

    <!-- HOME -->
    <section class="home bloco scrollspy" id="home">
        <div class="escurecer valign-wrapper">
            <div class="row container center">
                <div class="col s12 white-text">
                    <h2 class="light center "><span class="txt_cor">WM Soluções </span><span id="write"></span>
                    </h2>
                    <p class="light">Temos o objetivo de fazer a diferença no seu empreendimento, ajudando pequenos e
                        grandes negócios a fortalecerem suas marcas no mundo digital.</p>
                </div>
                <div class="row container center">
                    <a href="#servicos" class="btn btn-large back_cor ajuste-btn black-text"><i
                            class="material-icons left">work</i>Serviços</a>
                    <a href="#contato" class="btn btn-large white ajuste-btn black-text"><i
                            class="material-icons left">call</i>Contato</a>
                </div>
            </div>
        </div>
    </section>

    <!--Botão Whatsapp-->
    <div class="fixed-action-btn" id="botao-wp">
        <a href="https://wa.me/556196946094" target=" _blank" class="btn-floating btn-large green">
            <i class="large material-icons fa fa-whatsapp"></i>
        </a>
    </div>

    <!-- SERVIÇOS -->
    <section class="servicos bloco scrollspy" id="servicos">
        <div class="row container center">
            <h3>Nossos Serviços</h3>
            <p>Todos os serviços possuem um ótimo custo-benefício e uma excepcional qualidade. Entre em
                contato já e peça seu orçamento.
            </p>
            <!-- SITES -->
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/sites.png" alt="sites">
                        <a href="#sites-modal"
                            class="btn-floating halfway-fab moda-trigger waves-effect waves-light modal-trigger"><i
                                class="material-icons back_cor">add</i></a>
                    </div>
                    <span class="card-title">
                        <h4>Sites</h4>
                        <p> Site é a melhor forma de atrair novos clientes
                            e expandir seus negócios.
                        </p>
                    </span>
                </div>
            </div>
            <!-- MODAL SITES -->
            <div id="sites-modal" class="modal">
                <div class="modal-content">
                    <h5 class="txt_cor">Sites</h5>

                    <p>Está precisando de um site pessoal, profissional ou empresarial?</p>
                    <p> Nós podemos te ajudar. Com o uso das tecnologias mais modernas do mercado,
                        desenvolvemos um site completamente funcional
                        e responsivo para sua necessidade.
                    </p>
                    <p class="center light orange-text">Como você imagina seu Site?</p>
                    <p class="center light orange-text">Entre em contato e nos conte!</p>
                    <a href="https://wa.me/556196946094" target=" _blank"
                        class="modal-close waves-effect waves-green btn-flat back_cor white-text">CONTATO</a>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Voltar</a>
                </div>
            </div>

            <!-- E-COMMERCE -->
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/Ecommerce.png" alt="Ecommerce">
                        <a href="#ecommerce-modal"
                            class="btn-floating halfway-fab waves-effect waves-light modal-trigger"><i
                                class="material-icons back_cor">add</i></a>
                    </div>
                    <span class="card-title">
                        <h4>E-commerce</h4>
                        <p>Expanda seu comércio e deixe suas mercadorias à venda 24 horas por dia.
                        </p>
                    </span>
                </div>
            </div>
            <!-- MODAL ECOMMERCE -->
            <div id="ecommerce-modal" class="modal">
                <div class="modal-content">
                    <h5 class="txt_cor">E-commerce</h5>
                    <p>Já pensou em ter uma loja online completamente gerenciavel e personalizada
                        com o nome do seu negócio ?
                    </p>
                    <p>Fazemos sua loja virtual com as tecnologias mais atuais do mercado. Trazendo
                        segurança, rapidez e maior alcance nas suas vendas.
                    </p>
                    <p class="center light orange-text">Como você imagina sua Loja-Virtual?</p>
                    <p class="center light orange-text">Entre em contato e nos conte!</p>
                    <a href="https://wa.me/556196946094" target=" _blank"
                        class="modal-close waves-effect waves-green btn-flat back_cor white-text">CONTATO</a>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Voltar</a>
                </div>
            </div>
            <!-- BLOG -->
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/blog.jpg" alt="Blog">
                        <a href="#blog-modal" class="btn-floating halfway-fab waves-effect waves-light modal-trigger"><i
                                class="material-icons back_cor">add</i></a>
                    </div>
                    <span class="card-title descer">
                        <h4>Blog</h4>
                        <p>Divulgue seus conhecimentos, seus hobbies e suas dicas pessoais ou profissionais.</p>
                    </span>
                </div>
            </div>
            <!-- MODAL BLOG-->
            <div id="blog-modal" class="modal">
                <div class="modal-content">
                    <h5 class="txt_cor">Blog</h5>
                    <p>Tenha um blog pessoal ou profissional para divulgar seus conhecimentos, seus gostos, suas dicas e
                        muito mais.
                    </p>
                    <p>E melhor, ganhe dinheiro com os acessos ao seu blog por meio dos anúncios do google.</p>
                    <p class="center light orange-text">Como você imagina seu Blog?</p>
                    <p class="center light orange-text">Entre em contato e nos conte!</p>
                    <a href="https://wa.me/556196946094" target=" _blank"
                        class="modal-close waves-effect waves-green btn-flat back_cor white-text">CONTATO</a>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Voltar</a>
                </div>
            </div>
            <!-- SISTEMAS -->
            <div class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/Sistema.png" alt="Sistemas">
                        <a href="#sistemas-modal"
                            class="btn-floating halfway-fab waves-effect waves-light modal-trigger"><i
                                class="material-icons back_cor">add</i></a>
                    </div>
                    <span class="card-title">
                        <h4>Sistemas</h4>
                        <p>Peça seu sistema para otimizar tarefas, armazenar dados e muito mais.</p>
                    </span>
                </div>
            </div>
            <!-- MODAL SISTEMAS-->
            <div id="sistemas-modal" class="modal">
                <div class="modal-content">
                    <h5 class="txt_cor">Sistemas</h5>
                    <p>Além de um site para o uso pessoal, empresarial e profissional,
                        você precisa de um sistema de gerenciamento do seu negócio?
                    </p>
                    <p>De forma artesanal por meio de HTML, CSS, JavaScript e tecnologias backend
                        atuais, desenvolvemos um ecossistema capaz de otimizar e tornar mais eficiente as tarefas de
                        sua organização.
                    </p>
                    <p class="center light orange-text">Como você imagina seu sistema?</p>
                    <p class="center light orange-text">Entre em contato e nos conte!</p>
                    <a href="https://wa.me/556196946094" target=" _blank"
                        class="modal-close waves-effect waves-green btn-flat back_cor white-text">CONTATO</a>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Voltar</a>
                </div>
    </section>


    <!-- IMAGEM FIXED -->
    <section class="photo-fixed">
        <div class="escurecer valign-wrapper">
            <div class="container" data-anime="left">
                <h4 class="txt_cor">Peça seu orçamento!</h4>
                <p class="white-text">Nos mande a ideia do seu projeto com o máximo de informação que conseguir que,
                    em pouco tempo, retornaremos com o seu orçamento. Além disso, temos uma série de benefícios para
                    nossos
                    clientes. Se deseja saber mais sobre, fale conosco!
                </p>
                <div class="center">
                    <a href="#contato" class="waves-effect waves-light btn-small back_cor">Entre em contato</a>
                </div>
            </div>
        </div>
    </section>

    <!--TABELA VALORES-->
    <section class="tabela bloco scrollspy" id="ofertas">
        <div class="row center container">
            <h3>Nossas Ofertas</h3>
            <p>Ofertas disponíveis:
            </p>
            <!--VALOR SITE-->
            <div class="col s12 m12 l4 center " data-anime="left">
                <div class="card borda_site">
                    <span class="card-title font light">SITE</span>
                    <div class="orange z-depth-5">
                        <h1 class="light">R$ 350,00</h1>
                        <p class="light white-text">Até 5x R$ 70,00 ou até 12x com juros</p>
                    </div>
                    <div class="card-content">
                        <p class="light texto"><i class="material-icons space_icon">done</i>One page ou até 5 páginas
                            (home+interna)</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Design Responsivo</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Site Seguro (https://)</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>SEO</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Domínio (Grátis por um
                            ano)</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Integração com Redes Sociais
                        </p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Botão do Whatsapp flutuante
                        </p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Layout Personalizado</p>
                        <div class="card-action">
                            <a href="#contato" class="btn back_cor btn-large">Contato</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--VALOR BLOG-->
            <div class="col s12 m12 center l4 " data-anime="right">
                <div class="card borda_blog">
                    <span class="card-title font_blog font light">BLOG</span>
                    <div class="blue z-depth-5">
                        <h1 class="light">R$ 300,00</h1>
                        <p class="light white-text">Até 5x R$ 60,00 ou até 12x com juros</p>
                    </div>
                    <div class="card-content">
                        <p class="light texto"><i class="material-icons space_icon">done</i>Fácil manuseio</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Muita Praticidade</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Design Responsivo</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Blog Seguro (https://)</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>SEO</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Domínio (bônus grátis por um
                            ano)</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Botão do Whatsapp flutuante
                        </p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Integração com Redes Sociais
                        </p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Layout Personalizado</p>
                        <div class="card-action">
                            <a href="#contato" class="btn back_cor btn-large">Contato</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--VALOR E-COMMERCE-->
            <div class="col s12 m12 l4" data-anime="left">
                <div class="card borda_ecommerce">
                    <span class="card-title font_ecommerce font light">E-COMMERCE</span>
                    <div class="green z-depth-5">
                        <h1 class="light">R$ 1000,00</h1>
                        <p class="light white-text">Até 5x R$ 200,00 ou até 12x com juros</p>
                    </div>
                    <div class="card-content">
                        <p class="light texto"><i class="material-icons space_icon">done</i>One page ou até 5 páginas
                            (home+interna)</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Design Responsivo</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Site Seguro (https://)</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>SEO</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Domínio (bônus grátis por um
                            ano)</p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Integração com Redes Sociais
                        </p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Botão do Whatsapp flutuante
                        </p>
                        <p class="light texto"><i class="material-icons space_icon">done</i>Layout Personalizado</p>
                        <div class="card-action">
                            <a href="#contato" class="btn btn-large back_cor">Contato</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- NOSSO PORTIFOLIO SERÁ AQUI -->

    <!-- SOBRE NÓS -->
    <section class="sobre bloco scrollspy" id="sobre">

        <!-- VISÃO-MISSÃO-VALORES -->
        <div class="aboutUs row container center">
            <h3>Sobre Nós</h3>

            <article class="col s12 m4 l4">
                <div class="ajuste2">
                    <span class="icon"> <i class="material-icons medium">directions_run</i></span>
                    <h4>Missão</h4>
                    <p>É executar projetos para inserir ou fortalecer pequenos e médios empreendimentos
                        no mundo digital.
                    </p>
                </div>
            </article>

            <article class="col s12 m4 l4">
                <span class="icon"><i class="material-icons medium">visibility</i></span>
                <h4>Visão</h4>
                <p>Buscamos através da qualidade dos nossos projetos ser uma referência no ramo
                    de desenvolvimento Web, além de
                    ajudar comerciantes a crescerem seus negócios.
                </p>
            </article>

            <article class="col s12 m4 l4">
                <div class="ajuste">
                    <span class="icon"><i class="material-icons medium">grade</i></span>
                    <h4>Valores</h4>
                    <p> -Compromisso <br>
                        - Inovação<br>
                        - Responsabilidade<br>
                        - Crescimento</p>
                </div>
            </article>
        </div>
        <!-- INTEGRANTES -->
        <div class="about">
            <div class="escurecer">
                <div class="row container center">
                    <div class="col s6 m6 l3" data-anime="left">
                        <img src="./img/marlon.jpg" class="circle responsive-img tam-img" alt="William">
                        <div class="container ajute-nome">
                            <h4> Marlon Henrique </h4>
                            <h5 class="txt_cor"> Desenvolvedor </h5>
                            <p>Graduando em Engenharia Elétrica, com ampla experiência
                                em desenvolvimento web. E o mais importante, um entusiasta por
                                tecnologia.</p>
                        </div>
                    </div>
                    <div class="col s6 m6 l3" data-anime="left">
                        <img src="./img/william.jpg" class="circle responsive-img tam-img" alt="William">
                        <div class="container">
                            <h4 class=""> Robert William</h4>
                            <h5 class="txt_cor"> Desenvolvedor </h5>
                            <p>Graduando em Engenharia de Redes de Comunicação
                                na Universidade de Brasília. Experiência profissional como desenvolvedor,
                                apaixonado por tecnologia.</p>
                        </div>
                    </div>
                    <div class="col s6 m6 l3" data-anime="right">
                        <img src="./img/deza.jpg" class="circle responsive-img tam-img" alt="William">
                        <div class="container">
                            <h4> Andreza Nunes </h4>
                            <h5 class="txt_cor"> Designer </h5>
                            <p>Graduada em desing, com uma grande experiência na área, apaixonada por moda e com
                                bastante
                                criatividade na veia, ela
                                oferece um toque sem igual aos projetos.
                            </p>
                        </div>
                    </div>
                    <div class="col s6 m6 l3" data-anime="right">
                        <img src="./img/juuh.jpeg" class="circle responsive-img tam-img" alt="William">
                        <div class="container">
                            <h4> Juliana Costa </h4>
                            <h5 class="txt_cor"> Publicitária </h5>
                            <p>Comunicativa, obstinada e criativa. Vendedora apaixonada por oferecer uma experiência de
                                compra singular. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--CONTATO-->
    <section class="contato bloco scrollspy" id="contato">
        <div class="row container center">
            <h3>Contato</h3>
            <div class="col s12 m12 l5 offset-l1">
                <div class="back_contato" id="tamanho_back">
                    <div class="row">
                        <h4 class="white-text titulo">Redes Sociais</h4>
                        <p class="white-text container">Nos acompanhe nas redes sociais e fique por dentro
                            das novidades do mundo da tecnologia e de nossas ofertas!
                        </p>
                        <div class="paddingTop">
                            <a href="#" class="btn-floating back_cor"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn-floating back_cor"><i class="fa fa-google"></i></a>
                            <a href="https://www.instagram.com/wmsolucoesweb/" class="btn-floating back_cor"><i
                                    class="fa fa-instagram"></i></a>
                        </div>

                        <div class="row paddingTop">
                            <h4 class="white-text titulo">Contatos</h4>
                            <div class="contatos">
                                <a href="https://wa.me/556196946094" target=" _blank" class="btn-floating back_cor"><i
                                        class="fa fa-whatsapp"></i></a>
                                <p class="white-text">(61)
                                    99694-6094</p>
                            </div>
                            <div class="contatos">
                                <a href="#!" class="btn-floating back_cor text-mobile"><i
                                        class="material-icons">email</i></a>
                                <p class="white-text">contato@wmsolucoesweb.com.br</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l5">
                <div class="row">

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="col s12"
                        onsubmit="return validaForm(this)">
                        <div class="white">
                            <h4>FALE CONOSCO</h4>
                            <p>Dúvidas, sugestões e orçamento.</p>

                            <div class="confirmar valign-wrapper" id="resposta">
                                <h6>
                                    Mensagem enviada com sucesso!
                                </h6>
                            </div>

                            <div class="row" id="form">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input placeholder="Seu nome" id="nome" name="name" type="text" class="validate">
                                    <label for="name">Nome</label>
                                    <span class="helper-text" data-error="Inválido" data-success=""></span>
                                </div>
                            </div>
                            <div class="row" id="form">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">phone</i>
                                    <input placeholder="Seu telefone" id="telefone" name="telefone" type="text"
                                        class="validate" maxlength="15" onkeyup="mascara(this,mtel);">
                                    <label for="phone">Telefone</label>
                                    <span class="helper-text" data-error="Inválido" data-success=""></span>
                                </div>
                            </div>
                            <div class="row" id="form">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">email</i>
                                    <input placeholder="Seu e-mail" id="email" name="email" type="text"
                                        class="validate">
                                    <label for="email">Email</label>
                                    <span class="helper-text" data-error="Inválido" data-success=""></span>
                                </div>
                            </div>
                            <div class="row" id="form">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">message</i>
                                    <textarea placeholder="Descreva o motivo do seu contato" name="mensagem"
                                        id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Mensagem</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light back_cor subir" type="submit" name="BTEnvia"
                                id="form">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--RODAPÉ-->
    <footer class="back_footer">
        <div class="escurecer">
            <div class="row container center">
                <div class="col s12 m6">
                    <img class="rodape_logo" src="./img/logo_branco.png" alt="logo" class="rodape">
                </div>
                <div class="col s12 m6">
                    <ul class="rodape_link">
                        <a href="#" class="btn-floating back_cor"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn-floating back_cor"><i class="fa fa-google"></i></a>
                        <a href="https://www.instagram.com/wmsolucoesweb/" class="btn-floating back_cor"><i
                                class="fa fa-instagram"></i></a>
                    </ul>
                </div>
            </div>

            <div class="center direitos">
                <p class="white-text light">Copyright © WM soluções Web 2020 - Todos os direitos
                    reservados |
                    contato@wmsolucoesweb.com.br</p>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>

    <!--JavaScript-->
    <script type="text/javascript" src="./js/main.js"></script>

    <!-- PHP/Enviar email -->
    <?php
    if (isset($_POST['BTEnvia']) && !empty($_POST['email'])) {

        //Variaveis de POST, Alterar somente se necessário 
        //====================================================
        $nome = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $mensagem = addslashes($_POST['mensagem']);
        //====================================================

        //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
        //==================================================== 
        $email_remetente = "contato@wmsolucoesweb.com.br"; // deve ser uma conta de email do seu dominio 
        //====================================================

        //Configurações do email, ajustar conforme necessidade
        //==================================================== 
        $email_destinatario = "contato@wmsolucoesweb.com.br"; // pode ser qualquer email que receberá as mensagens
        $email_assunto = "Contato - WM Solucoes Web"; // Este será o assunto da mensagem
        //====================================================

        //Monta o Corpo da Mensagem
        //====================================================
        $body = "Nome: " . $nome . "\n" .
            "Email: = " . $email . "\n" .
            "Telefone: = " . $telefone . "\n" .
            "mensagem: = " . $mensagem . "\n";
        //====================================================

        //Seta os Headers (Alterar somente caso necessario) 
        //==================================================== 
        $email_headers = "From:contato@wmsolucoesweb.com.br" . "\r\n" .
            "Reply-To:" . $email . "\e\n" .
            "X=Mailer:PHP/" . phpversion();
        //====================================================

        //Enviando o email 
        //==================================================== 
        if (mail($email_destinatario, $email_assunto, $body, $email_headers)) {
            echo "<script>enviado();</script>";
        } else {
            echo "<script>alert('Mensagem não enviada, confira seu email!');</script>";
        }
        //====================================================
    }
    ?>


</body>

</html>