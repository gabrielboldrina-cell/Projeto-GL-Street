$(document).ready(function () {
    const darkTheme = {
        background: "#121212",
        color: "#f5f5f5",
        confirmButtonColor: "#dc3545"
    };

    function showCartAlert() {
        Swal.fire({
            title: "O produto foi adicionado ao carrinho!",
            text: "Seu pedido está no carrinho",
            icon: "success",
            ...darkTheme
        });
    }

    const cartButtons = [
        "#btn16",
        "#btnclub",
        "#btnike",
        "#btn15",
        "#btn321",
        "#btn423",
        "#btnjogador",
        "#btnJogadora",
        "#btndf",
        "#btndrifit",
        "#btndesenho",
        "#btnfiesta",
        "#btnestatua",
        "#btntenis",
        "#btnairzoom",
        "#btnAlphafly",
        "#btnvapor",
        "#btnstructure",
        "#btnpegasus",
        "#btnJordan",
        "#btnFeminina",
        "#btn2026",
        "#btnMasculina",
        "#btnBrasil",
        "#btnInfantil",
        "#btnElite",
        "#btnPro",
        "#btnJordan1",
        "#btnJorda1",
        "#btnJorda2",
        "#btnUnissex"
    ];

    cartButtons.forEach(function (selector) {
        $(selector).on("click", showCartAlert);
    });

    $("#btncompra").on("click", function () {
        Swal.fire({
            title: "O pedido foi realizado com sucesso!",
            text: "Em breve chegará em sua residencia!",
            icon: "success",
            ...darkTheme
        });
    });
});
