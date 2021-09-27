document.addEventListener('DOMContentLoaded', function () {

    //-------------------------------------Materialize ---------------- //
    //NAVBAR
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, {});
    //MODALS
    elems = document.querySelectorAll('.modal');
    instances = M.Modal.init(elems, {});
    //SCROLLSPY
    elems = document.querySelectorAll('.scrollspy');
    instances = M.ScrollSpy.init(elems, {
        scrollOffset: 0,
        throttle: 500
    });


    //--------------------  HOME-TYPING ------------------ //
    const write = document.querySelector("#write");
    const wordsArray = ["é inovação.", "é empreendedorismo.", "é crescimento.", "é comprometimento.", "é inconformismo.", "é responsabilidade."];
    var num = 0;

    //Faz a escrita
    function typing(elemento) {
        const textoArray = elemento.innerHTML.split('');
        elemento.innerHTML = "";
        textoArray.forEach((letra, i) => {
            setTimeout(() => elemento.innerHTML += letra, 100 * i)
        })
    }
    //Intervalo de chamada
    setInterval(() => {
        if (num == wordsArray.length) {
            num = 0;
        }
        else {
            write.innerHTML = wordsArray[num];
            typing(write);
            num++;
        }
    }, 4000);



    //-----------------------SCROLL------------------//
    const animationClass = 'animate';

    document.addEventListener("scroll", () => {

        //Botão
        if (scrollY < 150) {
            wp.style.display = "none";
        }
        else {
            wp.style.display = "inline-block";
        }

        // BACKGROUND NAVBAR
        const navBack = document.querySelector("nav")
        if (window.pageYOffset > 610) {
            navBack.classList.add("nav-cor");
        } else {
            navBack.classList.remove("nav-cor");
        }
        //Animação das fotos
        animationScroll();
    })


})
// -------------------- ANIMAÇÃO DAS FOTOS ---------------- //
const wp = document.querySelector("#botao-wp");
const target = document.querySelectorAll("[data-anime]");
function animationScroll() {
    //Localização do Scroll na pagina
    const windowTop = window.pageYOffset + window.innerHeight * 0.75;
    target.forEach((element) => {
        //Localização de cada elemento em relação ao top
        if (windowTop > element.offsetTop) {
            element.classList.add("animate");
        } else {
            element.classList.remove("animate");
        }
    })
}

// ------------------- MASCARA TELEFONE -------------------------//
function mascara(o, f) {
    v_obj = o
    v_fun = f
    setTimeout("execmascara()", 1)
}
function execmascara() {
    v_obj.value = v_fun(v_obj.value)
}
function mtel(v) {
    v = v.replace(/\D/g, "");             //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id(el) {
    return document.getElementById(el);
}
window.onload = function () {
    id('telefone').onkeyup = function () {
        mascara(this, mtel);
    }
}
//--------- VALIDAÇÃO --------------------//
function validaForm(frm) {

    frm.nome.focus();
    //o form não é enviado.
    if (frm.nome.value == "" || frm.nome.value == null || frm.nome.value.lenght < 3) {
        //É mostrado um alerta, caso o campo esteja vazio.
        frm.nome.classList.remove("validate");
        frm.nome.classList.add("invalid");
        //Foi definido um focus no campo.
        return false;
    } else {
        frm.nome.classList.remove("invalid");
        frm.nome.classList.add("validate");
    }

    if (frm.telefone.value.length <= 13) {
        //É mostrado um alerta, caso o campo esteja vazio.
        //Foi definido um focus no campo.
        frm.telefone.classList.remove("validate");
        frm.telefone.classList.add("invalid");
        frm.telefone.focus();
        return false;
    } else {
        frm.telefone.classList.remove("invalid");
        frm.telefone.classList.add("validate");
    }
    //o campo e-mail precisa de conter: "@", "." e não pode estar vazio
    if (frm.email.value.indexOf("@") == -1 ||
        frm.email.value.indexOf(".") == -1 ||
        frm.email.value == "" ||
        frm.email.value == null) {
        frm.email.classList.remove("validate");
        frm.email.classList.add("invalid");
        frm.email.focus();
        return false;
    } else {
        frm.email.classList.remove("invalid");
        frm.email.classList.add("validate");
    }
}

function enviado() {
    //Apaga todos os campos do formulário
    var apagar = document.querySelectorAll("#form");
    apagar.forEach((elemento) => {
        elemento.style.display = "none";
    })
    //Aparece a mensagem de Correto
    document.getElementById("resposta").style.display = "block";

    var trocar_classe = document.querySelector("#tamanho_back");
    trocar_classe.classList.remove("back_contato");
    trocar_classe.classList.add("back_contato2");
    document.getElementById("tamanho_back").scrollIntoView();

}
