<?php

get_header();
?>

<section id="primary" class="content-area">

<h3 class="event_o">Mini events</h3>
<p>Der vil løbende komme små pop-up events for børn og baby og forældre hos LILLE Tutu. 
    Følg med på denne side eller på instagram <a href="">@lilletutu_secondhand</a>, for at være opdateret. 
    For booking af et event, kontakt os på mail <a href="mailto:lilletutu@email.com">yoga@leabresson.dk</a>.</p>
    <!-- <nav id="filtrering"><button class="filter_valgt" data-vare="alle">Alle</button></nav>
  
   
    <nav id="indhold_filtrering"><button class="filter_valgt" data-cat="alle">Alle</button></nav> -->

<section id="event_oversigt"></section>
</section>
    

<template>
    <article class="kasse_1">
        <h3 class="navn"></h3>
        <img class="foto1" src="" alt="">
        <img class="foto2" src="" alt="">
        <h4 class="overskrift"></h4>
        <p class="beskrivelse"></p>
        <p class="dato"></p>
       
        <button class="her1">LÆS MERE</button>
    </article>

</template> 

<script>
    // https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/vare?per_page=100
    // https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/categories

    let events =[];
    const indhold = document.querySelector("#event_oversigt");
    const skabelon = document.querySelector("template");
    let filterEvent = "alle";
    document.addEventListener("DOMContentLoaded", getJson);

    function start() {
        getJson();
    }

    const url ="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/event?per_page=100";
    async function getJson() {
        let response = await fetch(url);
        events = await response.json();
        visEvents();
    }

    function visEvents(){
        console.log(events);
        events.forEach(event => {
            const klon = skabelon.cloneNode(true).content;
            klon.querySelector(".navn").textContent = event.navn;
            klon.querySelector(".foto1").src = event.img1.guid;
            klon.querySelector(".foto2").src = event.img2.guid;
            klon.querySelector(".overskrift").innerHTML = event.overskrift;
            klon.querySelector(".beskrivelse").innerHTML = event.beskrivelse;
            klon.querySelector(".her1").addEventListener("click", () => {
                location.href = event.link;
            })
            indhold.appendChild(klon);
        })
    }

</script>

<?php

get_footer();
?>