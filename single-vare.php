<?php

get_header();

?>

<section id="primary" class="content-area">

<button class="luk">Tilbage</button>
<section class="indhold">
    <article class="enkeltVare">
    <img class="produkt_f" src="" alt="">
    <img class="produkt_b" src="" alt="">
        <h3 class="navn"></h3>
        <p class="tekst"></p>
        <p class="storrelse"></p>
        <p class="pris"></p>
    </article>
</section>
    
<script>


    let vare;

    document.addEventListener("DOMContentLoaded", getJson);

    async function getJson() {
            console.log("id er", <?php echo get_the_ID() ?>);
            //hent en enkelt ret udfra id'et
            let jsonData = await fetch('https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/vare/<?php echo get_the_ID() ?>');
            vare = await jsonData.json();
            console.log("vare", vare);
            visVare();
            
        }

    function visVare() {
        console.log(vare);
        document.querySelector(".produkt_f").src = vare.billede_front.guid;
        document.querySelector(".produkt_b").src = vare.billede_bag.guid;
        document.querySelector(".navn").textContent = vare.navn;
        document.querySelector(".tekst").textContent = vare.tekst;
        document.querySelector(".storrelse").textContent = vare.storrelse;
        document.querySelector(".pris").textContent = vare.pris;
    }

</script>




<?php

get_footer();
?>