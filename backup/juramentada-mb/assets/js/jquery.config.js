$(document).ready(function () {
    /* MÁSCARAS DO CAMPOS
     ****************************************************************************/
    // CAMPO DE TELEFONE
    $('input#telefone').keydown(function (event) {
        mascara(this, validaTelefone);
        $(this).attr('maxlength', '15');
    });

    $('[data-toggle="tooltip"]').tooltip();

    $(".faq-slider").slick({
        dots: true,
        arrows: true,
        infinite: true,
        speed: 700,
        fade: false,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 2000
    });
});
/* FUNÇÕES DE MASCARAS DE CAMPOS EM EXPRESSÃO REGULAR
 ****************************************************************************/

// DEFINE A DIGITAÇÃO
function mascara(o, f) {
    v_obj = o;
    v_fun = f;

    window.setTimeout('execmascara( )', 1);
}

// EXECUTA AS MASCARAS
function execmascara() {
    v_obj.value = v_fun(v_obj.value);
}

// MASCARA PARA CAMPOS SOMENTE NÚMEROS
function soNumeros(v) {
    return v.replace(/\D/g, '');
}

// MASCARA PARA CEP
function validaCep(v) {
    v = v.replace(/\D/g, '');
    v = v.replace(/^(\d{5})(\d)/, '$1-$2');

    return v;
}

// MASCARA PARA TELEFONE
function validaTelefone(v) {
    v = v.replace(/\D/g, '');
    v = v.replace(/^(\d\d)(\d)/g, '($1) $2');
    v = v.replace(/(\d{4})(\d)/, '$1-$2');

    return v;
}
