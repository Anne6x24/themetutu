<?php

get_header();

?>
<section id="primary" class="content-area">

<button class="luk">Tilbage</button>
<section class="indhold">
    <article class="enkeltEvent">
    <h3 class="navn"></h3>
        <img class="foto1" src="" alt="">
        <img class="foto2" src="" alt="">
        <h4 class="overskrift"></h4>
        <p class="beskrivelse"></p>
        <p class="dato"></p>
    </article>
</section>
    
<script>


    let event;

    document.addEventListener("DOMContentLoaded", getJson);

    async function getJson() {
            console.log("id er", <?php echo get_the_ID() ?>);
            //hent en enkelt ret udfra id'et
            let jsonData = await fetch('https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/event/<?php echo get_the_ID() ?>');
            event = await jsonData.json();
            console.log("event", event);
            visEvent();
            
        }

    function visEvent() {
        console.log(event);
        document.querySelector(".navn").textContent = event.navn;
        document.querySelector(".foto1").src = event.img1.guid;
        document.querySelector(".foto2").src = event.img2.guid;
        document.querySelector(".overskrift").innerHTML = event.overskrift;
        document.querySelector(".beskrivelse").innerHTML = event.beskrivelse;
        
    }

    document.querySelector(".luk").addEventListener("click", () => {
            //link tilbage til den foregående side på "luk" knappen
            history.back();
        })
</script>

<?php

get_footer();
?>