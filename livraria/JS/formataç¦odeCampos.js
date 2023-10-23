function formatarCPF(campo) {
    campo.value = campo.value.replace(/[^0-9]/g, "");

    if (campo.value.length === 11) {
        campo.value = campo.value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
    }
}

function formatarTelefone(campo) {
    campo.value = campo.value.replace(/[^0-9]/g, "");

    if (campo.value.length === 11) {
        campo.value = campo.value.replace(/(\d{2})(\d{5})(\d{4})/, "($1) $2-$3");
    }
}
