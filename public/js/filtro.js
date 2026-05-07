$(document).ready(function () {
    const filtros = {
        tipo: 'todos',
        genero: 'todos'
    };

    const $produtos = $('.cards-grid > div');

    function normalizar(texto) {
        return (texto || '')
            .toString()
            .trim()
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '');
    }

    function normalizarTipo(tipo) {
        const valor = normalizar(tipo);

        if (valor === 'selecao' || valor === 'brasil' ||
             valor === 'brazil' || valor === 'selecao-brasileira' ||
              valor === 'selecaobrasileira') {
            return 'selecao-brasileira';
        }

        if (valor === 'chuteiras') {
            return 'chuteira';
        }

        return valor;
    }

    function obterTitulo($produto) {
        return normalizar($produto.find('.card-title').first().text());
    }

    function obterTipo($produto) {
        const tipoAtributo = normalizarTipo($produto.attr('data-type'));
        const titulo = obterTitulo($produto);

        if (tipoAtributo) {
            return tipoAtributo;
        }

        if ($produto.hasClass('selecao')) {
            return 'selecao-brasileira';
        }

        if ($produto.hasClass('chuteira2') || titulo.indexOf('chuteira') >= 0) {
            return 'chuteira';
        }

        if ($produto.hasClass('tenis') || titulo.indexOf('tenis') >= 0) {
            return 'tenis';
        }

        if ($produto.hasClass('camisa1') || titulo.indexOf('camisa') >= 0 || titulo.indexOf('camiseta') >= 0 || titulo.indexOf('bone') >= 0) {
            return 'camisa';
        }

        return 'todos';
    }

    function obterGenero($produto) {
        const generoAtributo = normalizar($produto.attr('data-gender'));
        const titulo = obterTitulo($produto);

        if (generoAtributo) {
            return generoAtributo;
        }

        if (titulo.indexOf('unissex') >= 0) {
            return 'unissex';
        }

        if (titulo.indexOf('feminina') >= 0 || titulo.indexOf('feminino') >= 0 || titulo.indexOf('jogadora') >= 0 || titulo.indexOf('torcedora') >= 0) {
            return 'feminino';
        }

        if (titulo.indexOf('masculina') >= 0 || titulo.indexOf('masculino') >= 0 || titulo.indexOf('jogador') >= 0 || titulo.indexOf('torcedor') >= 0) {
            return 'masculino';
        }

        return 'todos';
    }

    function correspondeGenero(generoProduto) {
        if (filtros.genero === 'todos') {
            return true;
        }

        if (generoProduto === 'todos') {
            return true;
        }

        if (filtros.genero === 'masculino') {
            return generoProduto === 'masculino';
        }

        if (filtros.genero === 'feminino') {
            return generoProduto === 'feminino';
        }

        if (filtros.genero === 'unissex') {
            return generoProduto === 'unissex';
        }

        return true;
    }

    function mapearTipoPeloTexto(texto) {
        if (texto === 'todos') {
            return 'todos';
        }

        if (texto.indexOf('selecao') >= 0 && texto.indexOf('brasileira') >= 0) {
            return 'selecao-brasileira';
        }

        if (texto === 'camisa' || texto === 'camisas') {
            return 'camisa';
        }

        if (texto === 'tenis') {
            return 'tenis';
        }

        if (texto === 'chuteira' || texto === 'chuteiras') {
            return 'chuteira';
        }

        return null;
    }

    function mapearGeneroPeloTexto(texto) {
        if (texto === 'masculino' || texto === 'feminino' || texto === 'unissex' || texto === 'todos') {
            return texto;
        }

        return null;
    }

    function aplicarFiltros() {
        $produtos.each(function () {
            const $produto = $(this);
            const tipoProduto = obterTipo($produto);
            const generoProduto = obterGenero($produto);
            const correspondeTipo = filtros.tipo === 'todos' || tipoProduto === filtros.tipo;
            const visivel = correspondeTipo && correspondeGenero(generoProduto);

            $produto.toggle(visivel);
        });
    }

    $('.btn-toggle-nav button, .dropdown-menu .dropdown-item').click(function (event) {
        const texto = normalizar($(this).text());
        const tipoMapeado = mapearTipoPeloTexto(texto);
        const generoMapeado = mapearGeneroPeloTexto(texto);

        if ($(this).is('a') && (tipoMapeado !== null || generoMapeado !== null)) {
            event.preventDefault();
        }

        if (tipoMapeado !== null) {
            filtros.tipo = tipoMapeado;
        }

        if (generoMapeado !== null) {
            filtros.genero = generoMapeado;
        }

        if (tipoMapeado !== null || generoMapeado !== null) {
            aplicarFiltros();
        }
    });

    aplicarFiltros();
});
