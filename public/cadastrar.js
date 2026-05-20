$(document).ready(function () {
    alert("teste");
    $("#btn_cadastrar_produto").click(function () {
        $.ajax({
            type: "POST",
            url: "api/salvar_produto",
            data: {
                nome_produto: $("#nome_produto").val(),
                descricao_produto: $("#descricao_produto").val(),
                preco_produto: $("#preco_produto").val(),
                quantidade_produto: $("#estoque_produto").val(),
                data_validade: $("#data_validade").val(),
                tipo_produto: $("#tipo_produto").val(),
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                if (data.erro == "n") {
                    swal.fire({
                        title: "Sucesso!",
                        text: "Produto cadastrado com sucesso!",
                        icon: "success",
                    });
                } else {
                    swal.fire({
                        title: "Erro!",
                        text: "deu ruim :(",
                        icon: "error",
                    });
                }
            },
        });
    });
});
