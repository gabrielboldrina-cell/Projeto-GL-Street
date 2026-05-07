$(document).ready(function () {
    $("#btnLogin").click( function () {
        $(".bntlogin").hide();

        Swal.fire({
            title: "Credenciais inválidas!",
            text: "Verifique usuário e senha e tente novamente.",
            icon: "error",
            background: "#121212",
            color: "#f5f5f5",
            confirmButtonColor: "#dc3545"
        });
    });
});
