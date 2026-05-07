// ════════════════════════════════════════════════════════
//  GL STREET — produto.js
//  Banco de dados dos produtos + lógica da página dinâmica
//
//  Para adicionar um produto novo:
//  1. Copie um bloco abaixo e cole com um novo ID único
//  2. Preencha as informações
//  3. No home.blade.php, use data-produto-id="seu-id-novo"
// ════════════════════════════════════════════════════════

const GL_PRODUTOS = {

    "selecao-jordan2-jogador-masc": {
        nome: "Camisa Brasil Jordan II 2026/27 Jogador Masculina",
        preco: 729.99,
        parcelas: 12,
        imagem: "images/selecao/foto5.jpg",
        categoria: "Seleção Brasileira",
        genero: "Masculino",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Masculino",
            "Marca":       "Jordan / Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Jogador",
            "Tecnologia":  "Dri-FIT"
        },
        tamanhos: ["PP", "P", "M", "G", "GG", "XGG"],
        descricao: "A camisa oficial da Seleção Brasileira para a temporada 2026/27, desenvolvida em parceria com a Jordan Brand. Tecnologia Dri-FIT para máximo conforto e desempenho dentro e fora de campo. Design que une a tradição do futebol brasileiro com a estética street da Jordan."
    },

    "selecao-jordan2-jogadora-fem": {
        nome: "Camisa Brasil Jordan II 2026/27 Jogadora Feminina",
        preco: 429.99,
        parcelas: 12,
        imagem: "images/selecao/foto6.png",
        categoria: "Seleção Brasileira",
        genero: "Feminino",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Feminino",
            "Marca":       "Jordan / Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Jogadora",
            "Tecnologia":  "Dri-FIT"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "Versão feminina da camisa oficial da Seleção Brasileira 2026/27 em parceria com a Jordan Brand. Corte desenvolvido para o público feminino, mantendo toda a tecnologia Dri-FIT e o visual icônico da parceria Jordan x Brasil."
    },

    "selecao-jordan1-torcedora-fem": {
        nome: "Camisa Brasil Jordan I 2026/27 Torcedora Pro Feminina",
        preco: 749.99,
        parcelas: 12,
        imagem: "images/selecao/camisa7.png",
        categoria: "Seleção Brasileira",
        genero: "Feminino",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Feminino",
            "Marca":       "Jordan / Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Torcedora Pro",
            "Tecnologia":  "Dri-FIT"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "Camisa Jordan I da Seleção Brasileira na versão Torcedora Pro Feminina. Ideal para quem quer levar o estilo brasileiro do estádio para a rua com conforto e identidade."
    },

    "selecao-jordan1-jogadora-fem": {
        nome: "Camisa Brasil Jordan I 2026/27 Jogadora Feminina",
        preco: 749.99,
        parcelas: 12,
        imagem: "images/selecao/camisa7.png",
        categoria: "Seleção Brasileira",
        genero: "Feminino",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Feminino",
            "Marca":       "Jordan / Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Jogadora",
            "Tecnologia":  "Dri-FIT ADV"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "A versão Jogadora da camisa Jordan I da Seleção Brasileira 2026/27. Tecnologia de elite para atletas que exigem o máximo em performance e estilo."
    },

    "selecao-jordan2-torcedora-fem": {
        nome: "Camisa Brasil Jordan II 2026/27 Torcedora Pro Feminina",
        preco: 429.99,
        parcelas: 12,
        imagem: "images/selecao/foto6.png",
        categoria: "Seleção Brasileira",
        genero: "Feminino",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Feminino",
            "Marca":       "Jordan / Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Torcedora Pro",
            "Tecnologia":  "Dri-FIT"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "Camisa Jordan II da Seleção Brasileira na versão Torcedora Pro Feminina. Conforto e estilo para quem acompanha o Brasil com muito orgulho."
    },

    "selecao-bone-unissex": {
        nome: "Boné Brasil Jordan Club Unissex",
        preco: 189.99,
        parcelas: 6,
        imagem: "images/acessorios/bone.png",
        categoria: "Seleção Brasileira",
        genero: "Unissex",
        badge: "Acessório",
        specs: {
            "Material":    "100% Algodão",
            "Gênero":      "Unissex",
            "Marca":       "Jordan / Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Boné Club",
            "Fechamento":  "Strapback"
        },
        tamanhos: ["Único"],
        descricao: "Boné oficial da Seleção Brasileira em parceria com a Jordan Brand. Bordado de alta qualidade, aba curva e fechamento ajustável. Perfeito para completar o look verde e amarelo no dia a dia."
    },

    "selecao-jordan2-torcedor-masc": {
        nome: "Camisa Brasil Jordan II 2026/27 Torcedora Pro Masculina",
        preco: 729.99,
        parcelas: 12,
        imagem: "images/selecao/foto5.jpg",
        categoria: "Seleção Brasileira",
        genero: "Masculino",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Masculino",
            "Marca":       "Jordan / Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Torcedor Pro",
            "Tecnologia":  "Dri-FIT"
        },
        tamanhos: ["PP", "P", "M", "G", "GG", "XGG"],
        descricao: "Camisa Jordan II da Seleção Brasileira na versão Torcedor Pro Masculina. O equilíbrio perfeito entre performance e estilo para quem vive o futebol brasileiro."
    },

    "selecao-nike1-torcedora-fem": {
        nome: "Camisa Brasil Nike I 2026/27 Torcedora Pro Feminina",
        preco: 429.99,
        parcelas: 12,
        imagem: "images/selecao/camisa7.png",
        categoria: "Seleção Brasileira",
        genero: "Feminino",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster Reciclado",
            "Gênero":      "Feminino",
            "Marca":       "Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Torcedora Pro",
            "Tecnologia":  "Dri-FIT"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "Camisa Nike I da Seleção Brasileira na versão Torcedora Pro Feminina. Confeccionada com poliéster reciclado, unindo sustentabilidade e estilo com o orgulho do Brasil."
    },

    "selecao-nike1-jogador-masc": {
        nome: "Camisa Brasil Nike I 2026/27 Jogador Masculina",
        preco: 729.99,
        parcelas: 12,
        imagem: "images/selecao/camisa6.png",
        categoria: "Seleção Brasileira",
        genero: "Masculino",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Masculino",
            "Marca":       "Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Jogador",
            "Tecnologia":  "Dri-FIT ADV"
        },
        tamanhos: ["PP", "P", "M", "G", "GG", "XGG"],
        descricao: "A camisa de jogo oficial da Seleção Brasileira 2026/27 pela Nike. Tecnologia Dri-FIT ADV para atletas de elite, com design que carrega toda a identidade do futebol brasileiro."
    },

    "selecao-nike1-infantil": {
        nome: "Camisa Brasil Nike I 2026/27 Torcedor Pro Infantil",
        preco: 369.99,
        parcelas: 10,
        imagem: "images/selecao/camisa8.png",
        categoria: "Seleção Brasileira",
        genero: "Infantil",
        badge: "Seleção Brasileira",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Infantil",
            "Marca":       "Nike",
            "Coleção":     "2026/27",
            "Tipo":        "Torcedor Pro",
            "Tecnologia":  "Dri-FIT"
        },
        tamanhos: ["2", "4", "6", "8", "10", "12", "14"],
        descricao: "Camisa oficial da Seleção Brasileira 2026/27 na versão infantil. Para o pequeno torcedor crescer torcendo pelo Brasil com muito orgulho e estilo."
    },

   
    "tenis-alphafly3-masc": {
        nome: "Tênis Nike Air Zoom Alphafly 3 Masculino",
        preco: 2169.99,
        parcelas: 12,
        imagem: "images/tenis/tenis1.png",
        categoria: "Tênis",
        genero: "Masculino",
        badge: "Tênis",
        specs: {
            "Material":    "Mesh + Borracha",
            "Gênero":      "Masculino",
            "Marca":       "Nike",
            "Modelo":      "Alphafly 3",
            "Tecnologia":  "Air Zoom + ZoomX",
            "Uso":         "Corrida de Rua"
        },
        tamanhos: ["38", "39", "40", "41", "42", "43", "44", "45"],
        descricao: "O Nike Air Zoom Alphafly 3 é o tênis de corrida de alta performance da Nike. Com amortecimento ZoomX e placa de carbono, é a escolha dos atletas de elite para maratonas e provas de longa distância."
    },

    "tenis-alphafly3-kipchoge": {
        nome: "Tênis Nike Air Zoom Alphafly 3 Kipchoge Masculino",
        preco: 2169.99,
        parcelas: 12,
        imagem: "images/tenis/tenis2.png",
        categoria: "Tênis",
        genero: "Masculino",
        badge: "Edição Especial",
        specs: {
            "Material":    "Mesh + Borracha",
            "Gênero":      "Masculino",
            "Marca":       "Nike",
            "Modelo":      "Alphafly 3 Kipchoge",
            "Tecnologia":  "Air Zoom + ZoomX",
            "Edição":      "Especial"
        },
        tamanhos: ["38", "39", "40", "41", "42", "43", "44"],
        descricao: "Edição especial em homenagem a Eliud Kipchoge, o maior maratonista da história. O mesmo DNA do Alphafly 3 com colorway exclusivo inspirado no lendário atleta queniano."
    },

    "tenis-alphafly3-v2": {
        nome: "Tênis Nike Air Zoom Alphafly 3 Masculino",
        preco: 2074.99,
        parcelas: 12,
        imagem: "images/tenis/tenis3.png",
        categoria: "Tênis",
        genero: "Masculino",
        badge: "Tênis",
        specs: {
            "Material":    "Mesh + Borracha",
            "Gênero":      "Masculino",
            "Marca":       "Nike",
            "Modelo":      "Alphafly 3",
            "Tecnologia":  "Air Zoom + ZoomX",
            "Colorway":    "Alternativo"
        },
        tamanhos: ["38", "39", "40", "41", "42", "43", "44", "45"],
        descricao: "Versão alternativa do Nike Air Zoom Alphafly 3 com colorway exclusivo. Performance de elite para corredores que buscam o melhor em amortecimento e propulsão."
    },

    "tenis-vaporfly3-masc": {
        nome: "Tênis Nike ZoomX VaporFly 3 Masculino",
        preco: 1581.24,
        parcelas: 12,
        imagem: "images/tenis/tenis4.png",
        categoria: "Tênis",
        genero: "Masculino",
        badge: "Tênis",
        specs: {
            "Material":    "Flyknit + Borracha",
            "Gênero":      "Masculino",
            "Marca":       "Nike",
            "Modelo":      "VaporFly 3",
            "Tecnologia":  "ZoomX + Placa de Carbono",
            "Uso":         "Corrida de Rua"
        },
        tamanhos: ["38", "39", "40", "41", "42", "43", "44"],
        descricao: "O Nike ZoomX VaporFly 3 combina espuma ZoomX ultralevе e placa de carbono para uma corrida mais rápida e eficiente. O tênis favorito dos corredores que quebram recordes."
    },

    "tenis-structure-plus": {
        nome: "Tênis Nike Structure Plus",
        preco: 1099.99,
        parcelas: 12,
        imagem: "images/tenis/tenis6.png",
        categoria: "Tênis",
        genero: "Unissex",
        badge: "Tênis",
        specs: {
            "Material":    "Mesh + EVA",
            "Gênero":      "Unissex",
            "Marca":       "Nike",
            "Modelo":      "Structure Plus",
            "Tecnologia":  "React + Suporte",
            "Uso":         "Corrida / Treino"
        },
        tamanhos: ["36", "37", "38", "39", "40", "41", "42", "43", "44"],
        descricao: "O Nike Structure Plus oferece suporte estável e amortecimento responsivo para corredores que pisam com pronação. Ideal para treinos longos com máximo conforto."
    },

    "tenis-pegasus-plus-masc": {
        nome: "Tênis Nike Pegasus Plus Masculino",
        preco: 997.49,
        parcelas: 12,
        imagem: "images/tenis/tenis5.png",
        categoria: "Tênis",
        genero: "Masculino",
        badge: "Tênis",
        specs: {
            "Material":    "Mesh + Borracha",
            "Gênero":      "Masculino",
            "Marca":       "Nike",
            "Modelo":      "Pegasus Plus",
            "Tecnologia":  "Air Zoom + ZoomX",
            "Uso":         "Corrida Versátil"
        },
        tamanhos: ["38", "39", "40", "41", "42", "43", "44", "45"],
        descricao: "O lendário Nike Pegasus em sua versão mais avançada. O Pegasus Plus combina a confiabilidade da linha com espuma ZoomX para um tênis versátil que serve tanto para treinos diários quanto para provas."
    },

    // ── CHUTEIRAS ───────────────────────────────────────

    "chuteira-vapor16-futsal-verde": {
        nome: "Chuteira Nike Zoom Vapor 16 Academy Futsal Verde Neon",
        preco: 599.89,
        parcelas: 10,
        imagem: "images/chuteiras/fotochuteira2.png",
        categoria: "Chuteiras",
        genero: "Unissex",
        badge: "Futsal",
        specs: {
            "Material":    "Sintético",
            "Tipo":        "Futsal",
            "Marca":       "Nike",
            "Modelo":      "Vapor 16 Academy",
            "Sola":        "Borracha Não-marcante",
            "Cor":         "Verde Neon"
        },
        tamanhos: ["36", "37", "38", "39", "40", "41", "42", "43"],
        descricao: "A chuteira ideal para quadra. Sola interna de EVA para amortecimento, cabedal sintético para toque preciso na bola e sola de borracha não-marcante com padrão multidirecional para tração máxima no futsal."
    },

    "chuteira-mercurial-vapor16-club": {
        nome: "Chuteira Campo Nike Mercurial Vapor 16 Club",
        preco: 218.49,
        parcelas: 6,
        imagem: "images/chuteiras/fotochuteira.png",
        categoria: "Chuteiras",
        genero: "Unissex",
        badge: "Campo",
        specs: {
            "Material":    "Sintético",
            "Tipo":        "Campo",
            "Marca":       "Nike",
            "Modelo":      "Mercurial Vapor 16 Club",
            "Sola":        "FG — Grama Natural",
            "Nível":       "Club"
        },
        tamanhos: ["36", "37", "38", "39", "40", "41", "42", "43", "44"],
        descricao: "A linha Mercurial Vapor 16 Club traz a velocidade do Mercurial para um preço acessível. Ideal para jogadores que querem estilo e agilidade no campo sem abrir mão da qualidade Nike."
    },

    "chuteira-jordan-tiempo-elite-1": {
        nome: "Chuteira Campo Jordan Tiempo Maestro Elite SE",
        preco: 2279.99,
        parcelas: 12,
        imagem: "images/chuteiras/chuteira7.png",
        categoria: "Chuteiras",
        genero: "Unissex",
        badge: "Edição Especial",
        specs: {
            "Material":    "Couro Canguru",
            "Tipo":        "Campo",
            "Marca":       "Jordan / Nike",
            "Modelo":      "Tiempo Maestro Elite SE",
            "Sola":        "FG — Grama Natural",
            "Nível":       "Elite"
        },
        tamanhos: ["38", "39", "40", "41", "42", "43", "44"],
        descricao: "A fusão perfeita entre o clássico Tiempo e a identidade Jordan. Cabedal em couro canguru para toque incomparável na bola, com placa de carbono para máxima tração e potência nos chutes."
    },

    "chuteira-phantom6-academy": {
        nome: "Chuteira Campo Nike Phantom 6 Academy Low",
        preco: 474.99,
        parcelas: 10,
        imagem: "images/chuteiras/chuteira3.png",
        categoria: "Chuteiras",
        genero: "Unissex",
        badge: "Campo",
        specs: {
            "Material":    "Sintético Texturizado",
            "Tipo":        "Campo",
            "Marca":       "Nike",
            "Modelo":      "Phantom 6 Academy Low",
            "Sola":        "FG — Grama Natural",
            "Nível":       "Academy"
        },
        tamanhos: ["36", "37", "38", "39", "40", "41", "42", "43", "44"],
        descricao: "O Nike Phantom 6 Academy Low oferece controle e precisão para jogadores que vivem de passes e domínio de bola. Superfície texturizada para melhor contato com a bola em qualquer situação."
    },

    "chuteira-mercurial-vapor15-club": {
        nome: "Chuteira Nike Campo Mercurial Vapor 15 Club DJ5963-600",
        preco: 314.93,
        parcelas: 6,
        imagem: "images/chuteiras/chuteira4.png",
        categoria: "Chuteiras",
        genero: "Unissex",
        badge: "Campo",
        specs: {
            "Material":    "Sintético",
            "Tipo":        "Campo",
            "Marca":       "Nike",
            "Modelo":      "Mercurial Vapor 15 Club",
            "Sola":        "FG/MG",
            "Referência":  "DJ5963-600"
        },
        tamanhos: ["36", "37", "38", "39", "40", "41", "42", "43", "44"],
        descricao: "Chuteira versátil para campo natural e misto. O Mercurial Vapor 15 Club entrega velocidade e leveza com custo-benefício excelente para jogadores em desenvolvimento."
    },

    "chuteira-vapor16-mbappe": {
        nome: "Chuteira Nike Zoom Vapor 16 Pro Kylian Mbappé Campo",
        preco: 740.99,
        parcelas: 12,
        imagem: "images/chuteiras/chuteira5.png",
        categoria: "Chuteiras",
        genero: "Unissex",
        badge: "Edição Especial",
        specs: {
            "Material":    "Flyknit",
            "Tipo":        "Campo",
            "Marca":       "Nike",
            "Modelo":      "Zoom Vapor 16 Pro",
            "Sola":        "FG — Grama Natural",
            "Edição":      "Kylian Mbappé"
        },
        tamanhos: ["38", "39", "40", "41", "42", "43", "44"],
        descricao: "A chuteira de Kylian Mbappé em versão Pro. O Zoom Vapor 16 combina leveza extrema com tração agressiva para jogadores de velocidade que precisam acelerar em qualquer situação de jogo."
    },

    "chuteira-jordan-tiempo-elite-2": {
        nome: "Chuteira Campo Jordan Tiempo Maestro Elite SE",
        preco: 2279.99,
        parcelas: 12,
        imagem: "images/chuteiras/chuteira6.png",
        categoria: "Chuteiras",
        genero: "Unissex",
        badge: "Edição Especial",
        specs: {
            "Material":    "Couro Canguru",
            "Tipo":        "Campo",
            "Marca":       "Jordan / Nike",
            "Modelo":      "Tiempo Maestro Elite SE",
            "Sola":        "FG — Grama Natural",
            "Colorway":    "Alternativo"
        },
        tamanhos: ["38", "39", "40", "41", "42", "43", "44"],
        descricao: "Segunda colorway da Jordan Tiempo Maestro Elite SE. Mesmo DNA premium com couro canguru e placa de carbono, em uma versão de visual ainda mais exclusivo para quem quer se destacar no campo."
    },

    // ── CAMISAS ─────────────────────────────────────────

    "camisa-nike-df-acd23": {
        nome: "Camiseta Nike DF ACD23 Top SS Branca e Preta",
        preco: 139.41,
        parcelas: 6,
        imagem: "images/camisas/camisanike.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "Camisas",
        specs: {
            "Material":    "Poliéster Reciclado",
            "Gênero":      "Unissex",
            "Marca":       "Nike",
            "Modelo":      "DF ACD23",
            "Tecnologia":  "Dri-FIT",
            "Cor":         "Branco e Preto"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "Camiseta Nike com tecnologia Dri-FIT que afasta o suor da pele mantendo você seco e confortável. Perfeita para treinos, academia e uso casual no dia a dia."
    },

    "camisa-nike-drifit-park-masc": {
        nome: "Camisa Nike Dri-Fit Park Masculina - Preta",
        preco: 149.99,
        parcelas: 6,
        imagem: "images/camisas/camisa2.png",
        categoria: "Camisas",
        genero: "Masculino",
        badge: "Camisas",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Masculino",
            "Marca":       "Nike",
            "Modelo":      "Dri-Fit Park",
            "Tecnologia":  "Dri-FIT",
            "Cor":         "Preta"
        },
        tamanhos: ["PP", "P", "M", "G", "GG", "XGG"],
        descricao: "A camisa Nike Dri-Fit Park é uma das mais populares para treinos de futebol. Leveza, respirabilidade e o estilo Nike para usar da academia ao campo."
    },

    "camisa-nike-desenho": {
        nome: "Camiseta Nike Desenho",
        preco: 80.63,
        parcelas: 3,
        imagem: "images/camisas/camisa3.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "Camisas",
        specs: {
            "Material":    "100% Algodão",
            "Gênero":      "Unissex",
            "Marca":       "Nike",
            "Estilo":      "Casual / Streetwear",
            "Fit":         "Regular",
            "Lavagem":     "Máquina 30°C"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "Camiseta Nike com estampa artística exclusiva. Algodão premium para máximo conforto no dia a dia. O estilo Nike Sportswear para quem quer se expressar além do esporte."
    },

    "camisa-nike-fiesta-masc": {
        nome: "Camisa Nike Run SS Fiesta Floral Masculina",
        preco: 109.90,
        parcelas: 6,
        imagem: "images/camisas/camisa4.png",
        categoria: "Camisas",
        genero: "Masculino",
        badge: "Camisas",
        specs: {
            "Material":    "100% Poliéster",
            "Gênero":      "Masculino",
            "Marca":       "Nike",
            "Modelo":      "Run SS Fiesta Floral",
            "Tecnologia":  "Dri-FIT",
            "Estampa":     "Floral"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "Camisa Nike Run com estampa floral Fiesta. Uma mistura ousada de performance e estilo urbano para quem não tem medo de se destacar durante a corrida ou no dia a dia."
    },

    "camisa-nike-estatua-liberdade": {
        nome: "Camisa Nike Estátua Da Liberdade",
        preco: 99.99,
        parcelas: 6,
        imagem: "images/camisas/camisa5.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "Camisas",
        specs: {
            "Material":    "100% Algodão",
            "Gênero":      "Unissex",
            "Marca":       "Nike",
            "Estampa":     "Estátua da Liberdade",
            "Fit":         "Regular",
            "Estilo":      "Casual"
        },
        tamanhos: ["PP", "P", "M", "G", "GG", "XGG"],
        descricao: "Camiseta Nike com estampa icônica da Estátua da Liberdade. Algodão macio e confortável para o dia a dia urbano com o estilo gráfico característico da Nike Sportswear."
    },

    "camisa-oversized-preta": {
        nome: "Camisa Oversized Preta / 100% Algodão",
        preco: 89.99,
        parcelas: 3,
        imagem: "images/camisas/CamisaOversized.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "GL Street",
        specs: {
            "Material":    "100% Algodão",
            "Gênero":      "Unissex",
            "Marca":       "GL Street",
            "Fit":         "Oversized",
            "Cor":         "Preta",
            "Lavagem":     "Máquina 30°C"
        },
        tamanhos: ["P", "M", "G", "GG", "XGG"],
        descricao: "Camisa oversized GL Street em algodão 100% premium. O fit largo e caído é perfeito para o streetwear urbano — combina com tudo e entrega conforto o dia todo."
    },

    "camisa-oversized-branca": {
        nome: "Camisa Oversized Branca / 100% Algodão",
        preco: 89.99,
        parcelas: 3,
        imagem: "images/camisas/CamisaOversizedBranca.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "GL Street",
        specs: {
            "Material":    "100% Algodão",
            "Gênero":      "Unissex",
            "Marca":       "GL Street",
            "Fit":         "Oversized",
            "Cor":         "Branca",
            "Lavagem":     "Máquina 30°C"
        },
        tamanhos: ["P", "M", "G", "GG", "XGG"],
        descricao: "Versão branca da camisa oversized GL Street. Algodão premium, fit largo e visual clean que funciona com qualquer combinação do seu guarda-roupa urbano."
    },

    "camisa-gl-basquete": {
        nome: "GL Street – Basquete 100% Algodão",
        preco: 109.90,
        parcelas: 6,
        imagem: "images/camisas/CamisaGLStreet.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "GL Street",
        specs: {
            "Material":    "100% Algodão",
            "Gênero":      "Unissex",
            "Marca":       "GL Street",
            "Tema":        "Basquete",
            "Fit":         "Regular",
            "Estilo":      "Streetwear"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "Camisa GL Street com temática de basquete. A cultura do streetwear encontra a quadra nessa peça exclusiva da GL Street — para quem vive entre o esporte e a rua."
    },

    "camisa-gl-abstract-clash": {
        nome: "GL Street – Abstract Clash Tee / 100% Algodão",
        preco: 79.99,
        parcelas: 3,
        imagem: "images/camisas/Camisa6.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "GL Street",
        specs: {
            "Material":    "100% Algodão",
            "Gênero":      "Unissex",
            "Marca":       "GL Street",
            "Estampa":     "Abstract Clash",
            "Fit":         "Regular",
            "Estilo":      "Streetwear"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "A Abstract Clash Tee é uma das peças mais ousadas da GL Street. Estampa geométrica abstrata com contraste de cores forte — para quem quer chamar atenção sem precisar falar nada."
    },

    "camisa-gl-blind-chaos": {
        nome: "GL Street – Blind Chaos Tee / 100% Algodão",
        preco: 129.99,
        parcelas: 6,
        imagem: "images/camisas/GL Street – Blind Chaos Tee.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "GL Street",
        specs: {
            "Material":    "100% Algodão",
            "Gênero":      "Unissex",
            "Marca":       "GL Street",
            "Estampa":     "Blind Chaos",
            "Fit":         "Regular",
            "Estilo":      "Streetwear Premium"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "A Blind Chaos Tee é a peça mais premium das camisas GL Street originais. Estampa exclusiva com conceito visual de caos organizado — identidade forte para quem leva o streetwear a sério."
    },

    "camisa-gl-dryfit": {
        nome: "GL Street – Dryfit Academia/Futebol 100% Algodão",
        preco: 99.99,
        parcelas: 6,
        imagem: "images/camisas/CamisaGLStreetDryfit.png",
        categoria: "Camisas",
        genero: "Unissex",
        badge: "GL Street",
        specs: {
            "Material":    "Poliéster / Elastano",
            "Gênero":      "Unissex",
            "Marca":       "GL Street",
            "Tecnologia":  "Dry-Fit",
            "Uso":         "Academia / Futebol",
            "Fit":         "Slim"
        },
        tamanhos: ["PP", "P", "M", "G", "GG"],
        descricao: "A camisa Dryfit GL Street foi desenvolvida para quem treina com intensidade. Tecido que seca rápido, leve e de alta respirabilidade para academia, futebol ou qualquer atividade física."
    }
};

// ════════════════════════════════════════════════════════
//  LÓGICA DA PÁGINA — não precisa mexer aqui
// ════════════════════════════════════════════════════════

function glFormatPrice(value) {
    return value.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
}

function glGetIdFromURL() {
    const params = new URLSearchParams(window.location.search);
    return params.get('id');
}

function glRenderProduct(id) {
    const produto = GL_PRODUTOS[id];
    const app = document.getElementById('gl-produto-app');
    const breadcrumbCat  = document.getElementById('gl-breadcrumb-cat');
    const breadcrumbNome = document.getElementById('gl-breadcrumb-nome');

    if (!produto) {
        app.innerHTML = `
            <div class="produto-not-found">
                <h2>Produto não encontrado</h2>
                <p>O produto <strong>${id || 'informado'}</strong> não existe no catálogo.</p>
                <a href="/home">Voltar ao catálogo</a>
            </div>`;
        return;
    }

    // Atualiza título e breadcrumb
    document.title = produto.nome + ' — GL Street';
    if (breadcrumbCat)  breadcrumbCat.textContent  = produto.categoria;
    if (breadcrumbNome) breadcrumbNome.textContent = produto.nome;

    // Monta specs
    const specsHTML = Object.entries(produto.specs).map(([label, value]) => `
        <div class="spec-item">
            <div class="spec-label">${label}</div>
            <div class="spec-value">${value}</div>
        </div>
    `).join('');

    // Monta tamanhos
    const tamanhosHTML = produto.tamanhos.map((t, i) => `
        <button class="tamanho-btn${i === 0 ? ' ativo' : ''}">${t}</button>
    `).join('');

    const parcela = glFormatPrice(produto.preco / produto.parcelas);

    app.innerHTML = `
        <div class="produto-page">
            <div class="produto-gallery">
                <div class="produto-img-main">
                    <img src="${produto.imagem}" alt="${produto.nome}"
                         onerror="this.style.opacity='0.2'">
                    <div class="produto-badge">${produto.badge}</div>
                </div>
            </div>

            <div class="produto-info">
                <div>
                    <p class="produto-categoria">${produto.categoria} &middot; ${produto.genero}</p>
                    <h1 class="produto-nome">${produto.nome}</h1>
                </div>

                <div class="produto-preco-wrap">
                    <div class="produto-preco">${glFormatPrice(produto.preco)}</div>
                    <div class="produto-parcelas">ou ${produto.parcelas}x de ${parcela} sem juros</div>
                </div>

                <div class="produto-divider"></div>

                <div>
                    <p class="specs-label">Especificações</p>
                    <div class="specs-grid">${specsHTML}</div>
                </div>

                <div>
                    <p class="specs-label">Tamanhos disponíveis</p>
                    <div class="tamanhos-wrap">${tamanhosHTML}</div>
                </div>

                <div class="produto-divider"></div>

                <p class="produto-desc">${produto.descricao}</p>

                <div>
                    <button class="btn-comprar">
                        <i class="bi bi-lightning-charge-fill"></i>
                        Comprar agora
                    </button>
                    <button class="btn-carrinho">
                        <i class="bi bi-bag"></i>
                        Adicionar ao carrinho
                    </button>
                </div>

                <div class="seguranca-note">
                    <i class="bi bi-shield-check"></i>
                    Pagamento 100% seguro e criptografado
                </div>
            </div>
        </div>`;

    // Tamanhos — seleção
    document.querySelectorAll('.tamanho-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            document.querySelectorAll('.tamanho-btn').forEach(b => b.classList.remove('ativo'));
            this.classList.add('ativo');
        });
    });

    // Botão comprar
    document.querySelector('.btn-comprar').addEventListener('click', function () {
        window.location = '/compra';
    });

    // Botão carrinho
    document.querySelector('.btn-carrinho').addEventListener('click', function () {
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                title: "Produto adicionado!",
                text: "Seu item está no carrinho.",
                icon: "success"
            });
        }
    });
}

// Inicializa quando o DOM estiver pronto
document.addEventListener('DOMContentLoaded', function () {
    const id = glGetIdFromURL();
    glRenderProduct(id);
});