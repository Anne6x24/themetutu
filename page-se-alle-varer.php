<?php

get_header();
?>

<section id="primary" class="content-area">

<h3 class="vare_o">Alle varer</h3>
    <!-- <nav id="filtrering"><button class="filter_valgt" data-vare="alle">Alle</button></nav>
  
   
    <nav id="indhold_filtrering"><button class="filter_valgt" data-cat="alle">Alle</button></nav> -->

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


    let varer =[];
    const indhold = document.querySelector("#vare_oversigt");
    const skabelon = document.querySelector("template");
    let filterVare = "alle";
    document.addEventListener("DOMContentLoaded", getJson);

    function start() {
        getJson();
    }

    const url ="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/vare?per_page=100";
    async function getJson() {
        let response = await fetch(url);
        varer = await response.json();
        visVarer();
    }

    function visVarer(){
        console.log(varer);
        varer.forEach(vare => {
            const klon = skabelon.cloneNode(true).content;
            klon.querySelector(".navn").textContent = vare.navn;
            klon.querySelector(".produkt").src = vare.billede_front.guid;
            klon.querySelector(".pris").innerHTML = vare.pris;
            klon.querySelector(".storrelse").innerHTML = vare.storrelse;
        
            klon.querySelector(".her1").addEventListener("click", () => {
                location.href = vare.link;
            })
            indhold.appendChild(klon);
        })
        }

</script>

<?php

get_footer();
?>