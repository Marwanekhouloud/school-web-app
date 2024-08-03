const icon_list = document.querySelector("#icon-list"); 

icon_list.onclick = function () {
    const list_mobile = document.querySelector("#menu-mobile");

    if(list_mobile.style.padding == '20px 9%'){
        list_mobile.style.height = '0px';
        list_mobile.style.padding = '0px 9%';
    }else {
        list_mobile.style.height = `${list_mobile.scrollHeight}px`;
        list_mobile.style.padding = '20px 9%';
    }
}

document.addEventListener("DOMContentLoaded", function() {
    let text = "Crée en 2002 à Salé, Polyvalence est un Institut privé de formation professionnelle, autorisé et accrédité par l'Etat.Il est destiné à former des techniciens Spécialisés en développement informatique, ayant pour mission d’organiser et d’exploiter les données relatives à la gestion, d’analyser les systèmes d’information d’une entreprise…… Aussi à former des techniciens en Gestion Informatisée, capables d’utiliser et/ou participer au développement des applications informatiques en matière de gestion.";
    let index = 0;
    let speed = 100;
    let isDeleting = false;
    let delay = 1000;

    function typeWriter() {
        let element = document.getElementById("typeWriter");

        if (isDeleting) {
            if (index > 0) {
                element.innerHTML = text.substring(0, index - 1);
                index--;
                setTimeout(typeWriter, speed);
            } else {
                isDeleting = false;
                setTimeout(typeWriter, speed);
            }
        } else {
            if (index < text.length) {
                element.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, speed);
            } else {
                isDeleting = true;
                setTimeout(typeWriter, delay);
            }
        }
    }

    typeWriter();
});



