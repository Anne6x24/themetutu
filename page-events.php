<?php

get_header();
?>

<style>

#primary {
    margin-left: 2rem;
    margin-right: 2rem;
    
}

p {
    color: black;
}

#event_oversigt {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    text-align: center;
    margin-bottom: 2rem;
    /* margin-left: 2rem;
    margin-right: 2rem; */
}

.her1 {
    background-image: none;
    background-color: white;
    color: black;
    text-align: left;
    font-size: 0.8rem;
    padding: 1rem;
    

}

.her1:hover {
    text-decoration: underline;
    background-color: white;
}

.kasse_1 .navn {
    grid-column: 2;
    font-size: 1rem;
    margin-bottom: 1rem;
    font-weight: bold;
}

@media(min-width: 768px) {

#primary {
    margin-left: 10rem;
    margin-right: 10rem;
    margin-bottom: 5rem;
}

#event_oversigt {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 2rem;
    text-align: center;
    
}


.kasse_1 .navn {
    grid-column: 2;
    grid-row: 1;
    font-size: 1em;
    margin-bottom: 1rem;
}

.foto1 {
    grid-column: ;
    grid-row: 2;
}

.her1 {
    text-align: center;
    font-size: 1rem;
}

}
</style>

<section id="primary" class="content-area">

<h3 class="event_o">Mini events</h3>
<p>Der vil løbende komme små pop-up events for børn og baby og forældre hos LILLE Tutu. 
    Følg med på denne side eller på instagram <a href="https://xd.adobe.com/view/ce42b194-64c2-466a-b975-e38f101ad629-9b11/?fullscreen&hints=off">@lilletutu_secondhand</a>, for at være opdateret. 
    For booking af et event, kontakt os på mail <a href="mailto:lilletutu@email.com">yoga@leabresson.dk</a>.</p>
    <!-- <nav id="filtrering"><button class="filter_valgt" data-vare="alle">Alle</button></nav>
  
   
    <nav id="indhold_filtrering"><button class="filter_valgt" data-cat="alle">Alle</button></nav> -->

<section id="event_oversigt"></section>
</section>
    

<template>
    <article class="kasse_1">
        <!-- <h3 class="navn"><b></b></h3> -->
        <img class="foto1" src="" alt="">
        <button class="her1"></button>
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
            // klon.querySelector(".navn").textContent = event.navn;
            klon.querySelector(".foto1").src = event.img01.guid;
            klon.querySelector(".her1").textContent = event.navn;
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