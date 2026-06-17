$(document).ready(function () {
    $("#btn_alterar").click(function () {
        $.ajax({
            type: "PUT",
            url: "../api/alterar_produto",
            data: {
                nome_produto: $("#nome_produto").val(),
                descricao_produto: $("#descricao_produto").val(),
                preco_produto: $("#preco_produto")
                    .val()
                    .toString()
                    .replace(",", "."),
                quantidade_produto: $("#estoque_produto").val(),
                tipo_produto: $("#tipo_produto").val(),
                produto_id: $("#produto_id").val(),
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                if (data.erro == "n") {
                    swal.fire({
                        title: "Sucesso!",
                        text: "Produto alterado com sucesso!",
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

    $("#btn_deletar").click(function () {
        $.ajax({
            url: "../api/deletar_produto",
            type: "DELETE",
            data: {
                produto_id: $("#produto_id").val(),
            },
            dataType: "JSON",
            success: function (info) {
                console.log(info);

                if (info.erro == "n") {
                    swal.fire({
                        title: "Sucesso!",
                        text: "Produto deletado com sucesso!",
                        icon: "success",
                    });

                    window.location.href = "../lista_produto";
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
