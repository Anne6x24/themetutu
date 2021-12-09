<?php

get_header();
?>

<section id="primary" class="content-area">
    <h1>her kan du se alle vores vare</h1>

    <section>
    <nav id="filtrering"><button class="filter_valgt" data-vare="alle">Alle</button></nav>
    <h3 class="vare_o">Alle varer</h3>
    </section>

<section id="vare_oversigt"></section>
</section>
    

<template>
    <article class="kasse_1">
        <img class="produkt" src="" alt="">
        <h3 class="navn"></h3>
        <p class="pris"></p>
        <p class="storrelse">Henvendelse: </p>
        <button class="her1">LÆS MERE</button>
    </article>

</template> 

<script>
    // ALLE STEPS ER MARKERET MED FED OG INDDELT I STEPS

    let varer =[];
    let categories =[];
    let filterVare ="alle";
    const indhold = document.querySelector("#vare_oversigt");
    const skabelon = document.querySelector("template");
    
    document.addEventListener("DOMContentLoaded", getJson);

    // henter og fetcher jsonindhold
    function start() {
        getJson();
    }

    // henter alle mine vare og deres indhold
    const url ="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/vare?per_page=100";
    // henter categorier til filtrering
    const catUrl ="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/categories";

    // henter og fetcher jsonindhold
    async function getJson() {
        // henter retter
        let response = await fetch(url);
        // henter kategorier
        let catResponse = await fetch(catUrl);
        // varer og kategorier bliver fyldt op med indhold fra varer og categorier
        varer = await response.json();
        categories = await catResponse.json();
        console.log(categories);
        visVarer();
        opretKnapper();
    }

    // += betyder at man hele tiden tilføjer noget
    function opretKnapper() {
        categories.forEach(cat =>{
            document.querySelector("#filtrering").innerHTML += `<button class="filter" data-vare="${cat.id}">${cat.name}</button>`;
        })

        // kalder function for knapper
        addEventListenersToButtons();
    }

    // funktion for knapper, tilføjelse af EventListners til knapper
    function addEventListenersToButtons() {
            document.querySelectorAll("#filtrering button").forEach(elm =>{
                elm.addEventListener("click", filtrering);
            })
    };

    // this betyder "det element jeg har klikket på" feks. en tøjvare
    function filtrering() {
        filterVare = this.dataset.vare;
        console.log(filterVare);

        visVarer();
         

    }

    // viser alle vare samt indhold oprettet i pods
    // de to lodrette streger betyder eller
    // parseInt betyder = fortolk det som et tal og ikke som tekst
    // indsæt if således at varene bliver filtreret efter hvilken kategori som bliver trykket på
    function visVarer(){
        console.log(varer);

        indhold.innerHTML ="";
        varer.forEach(vare => {
            if ( filterVare == "alle" || vare.categories.includes(parseInt(filterVare))){
            const klon = skabelon.cloneNode(true).content;
            klon.querySelector(".navn").textContent = vare.navn;
            klon.querySelector(".produkt").src = vare.billede_front.guid;
            klon.querySelector(".pris").innerHTML = vare.pris;
            klon.querySelector(".storrelse").innerHTML = vare.storrelse;
        
            klon.querySelector(".her1").addEventListener("click", () => {
                location.href = vare.link;
            })
            indhold.appendChild(klon);
        }
        })
        
     }

</script>

<?php

get_footer();
?>