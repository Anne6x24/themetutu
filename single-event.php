<?php

get_header();

?>
<section id="primary" class="content-area">

<button class="luk">Tilbage</button>
<section class="indhold">
    <article class="enkeltEvent">
    <h3 class="navn"></h3>
    <img class="img_h" src="" alt="">
    <img class="img_v" src="" alt="">
        <h3 class="overskrift"></h3>
        <p class="tekst_e"></p>
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
        document.querySelector(".img_h").src = event.img1.guid;
        document.querySelector(".img_v").src = event.img2.guid;
        document.querySelector(".overskrift").textContent = event.overskrift;
        document.querySelector(".tekst_e").textContent = event.tekst;
        
    }

    document.querySelector(".luk").addEventListener("click", () => {
            //link tilbage til den foregående side på "luk" knappen
            history.back();
        })
</script>

<?php

get_footer();
?>