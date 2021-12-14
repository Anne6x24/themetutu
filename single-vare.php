<?php

get_header();

?>

<style>
.enkeltVare {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2rem;
    margin: 3rem;
    
}

.enkeltVare {
    grid-column: 1/2;
    grid-row: 2;
}

.produkt_f {
    grid-column: 1/2;
    grid-row: 2;
}

.produkt_b {
    grid-column: 2/3;
    grid-row: 2;
}

h3 {
    grid-column: 1/3;
}

p {
    grid-column: 1/3;
    margin-top: -1rem;
    margin-bottom: 0rem;
    color: black;
}




@media(min-width: 768px) {

.enkeltVare {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 2rem;
    
}

h3 {
    grid-column: 2/3;
    margin-top: -1rem;
    margin-bottom: 0rem;
}

.enkeltVare{
    grid-column: 2/4;
    grid-row: 1;
}

.produkt_f {
    grid-column: 2/3;
    grid-row: 2;
}

.produkt_b {
    grid-column: 2/3;
    grid-row: 3;
}

.tekst {
    grid-column: 3/4;
    grid-row: 2;
    margin-top: 3rem;
}
.storrelse {
    grid-column: 3/4;
    grid-row: 2;
    margin-top: 10rem;
}
.pris {
    grid-column: 3/4;
    grid-row: 2;
    margin-top: 12rem;
}

.storrelse, .pris {
    text-align: right;
}



}
</style>

<section id="primary" class="content-area">

<button class="luk">Tilbage</button>
<section class="indhold">
    <article class="enkeltVare">
    <h3 class="navn"></h3>

    <img class="produkt_f" src="" alt="">
    <img class="produkt_b" src="" alt="">
        
        <p class="tekst"></p>
        <p class="storrelse"></p>
        <p class="pris"></p>
        <p>HVAD GØR MAN HVIS MAN VIL KØBE DET?</p>
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

    document.querySelector(".luk").addEventListener("click", () => {
            //link tilbage til den foregående side på "luk" knappen
            history.back();
        })

</script>




<?php

get_footer();
?>