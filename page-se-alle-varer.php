<?php

get_header();
?>

<style>

.o1, .text1 {
    text-align: center;
    color: black;
}

.text1 {
    margin-left: 14vw;
margin-right: 14vw;
}

.button:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover {
    background-color: var(none);
    background-color: var(--go-button-interactive--color--background,var(none));
    cursor: pointer;
}

/* knapper */

#filtrering {
    text-align: center;
    padding-top: 2rem;
}

.filter, .filter_valgt {
    background-image: none;
    background-color: #FFFFFF;
    color: black;
    margin: 1vw;
    padding: 2vw;
}



.her1 {
    background-image: none;
    background-color: white;
    color: black;
}

.her1:hover {
    background-color: white;
    text-decoration: underline;
}

.filter_valgt:hover {
    background-image: none;
    color: black;
    text-decoration: underline;
    
}

button {
    padding: 0;
}

button:hover {
    background-color: white;
    text-decoration: underline;
}

/* produktgrid */

#vare_oversigt {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    margin: 2vw;
    padding: 32px;
}

#vare_oversigt{
    grid-column: 1/2;
    grid-row: 1;
    /* padding: 8vw;
    margin: 2vw; */
}

h3, p {
    font-size: 1rem;
    color: black;
    margin-bottom: 2vw;
}

.kasse_1{
    margin-bottom: 2rem;
}



@media(min-width: 768px) {

#vare_oversigt {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 2rem;
    
}

#vare_oversigt{
    grid-column: 1/2;
    grid-row: 1;
    padding-left: 8vw;
padding-right: 8vw;
margin-right: 2vw;
margin-left: 2vw;
margin-top: 0;
padding-top: 0;
}

.kasse_1{
    margin: 4rem;
    margin-bottom: 1em;
}

p {
    margin-bottom: 1rem;
}

}



</style>

<section id="primary" class="content-area">
    <h2 class="o1">LILLE tutus vareoversigt</h2>
    <p class="text1">Nedenfor viser vi alle de unikke secondhand varer, som lige nu er til at få fingrene i!
        For køb af disse vare, bedes man skrive en mail til os med varens varenummer - på forhånd tak!
    </p>
    <p class="text1">Ønsker du at se tøjet nærmere, så kom ned i butikken og kig ind!</p>

    <section>
    <nav id="filtrering"><button class="filter_valgt" data-vare="alle">Alle</button></nav>
    <!-- <h3 class="vare_o">Alle varer</h3> -->
    </section>

<section id="vare_oversigt"></section>
</section>
    

<template>
    <article class="kasse_1">
        <img class="produkt" src="" alt="">
        <h3 class="navn"><strong></strong></h3>
        <p class="varenr">vrn.: </p>
        <p class="pris"></p>
        <p class="storrelse"></p>
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
        // henter vare
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
            klon.querySelector(".produkt").alt = vare.navn;
            klon.querySelector(".varenr").textContent += vare.varenr;
            
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