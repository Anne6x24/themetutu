<?php

get_header();
?>

<style>

#billede_oversigt {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    margin-top: 4rem;
    gap: 4rem;
}

.g1 {
    grid-column: 3/5;
    grid-row: 1/2;
}

.g2 {
    grid-column: 5/7;
    grid-row: 1/2;
}

.g3 {
    grid-column: 3/7;
    grid-row: 2;
    padding-top: 7rem;
}

.g4 {
    grid-column: 1/3;
    grid-row: 3;
    padding-top: 10rem;
}
.g5 {
    grid-column: 3/5;
    grid-row: 3;
    padding-top: 10rem;
}
.g6 {
    grid-column: 5/7;
    grid-row: 3;
    padding-top: 10rem;
}
.g7 {
    grid-column: 5/8;
    grid-row: 4;
    padding-top: 10rem;
}
.g8 {
    grid-column: 2/5;
    grid-row: 4;
    padding-top: 21rem;;
}
.g9 {
    grid-column: 2/5;
    grid-row: 6;
    padding-top: 10rem;
}
.g10 {
    grid-column: 5/8;
    grid-row: 6;
    padding-top: 10rem;
}
.g11 {
    grid-column: 3/5;
    grid-row: 7;
    padding-top: 10rem;
    padding-bottom: 10rem;
}
.g12 {
    grid-column: 5/7;
    grid-row: 7;
    padding-top: 10rem;
    padding-bottom: 10rem;
}
.g13 {
    grid-column: 5/8;
    grid-row: 8;
    padding-top: 10rem;
    padding-bottom: 10rem;
}
.g14 {
    grid-column: 2/5;
    grid-row: 8;
    padding-top: 10rem;
    padding-bottom: 10rem;
}
.g15 {
    grid-column: 2/8;
    grid-row: 10;
    
    padding-bottom: 10rem;
}




</style>

<section id="primary" class="content-area">

<!-- <section id="container">
<img class="g1" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-08-29-e1638967425118.jpg" alt="">
   <img class="g2" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-11-26-e1639135587117.jpg" alt="">
    <img class="g3" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-07-30.jpg" alt="">
    <img class="g4_1" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-18-19.jpg" alt="">
    <img class="g4_2" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-18-19.jpg" alt="">
    <img class="g4_3" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-18-19.jpg" alt="">
    <img class="g5" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-00-37.jpg" alt="">
    <img class="g6" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-33-4-e1639129485486.jpg" alt="">
    <img class="g7" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/clothes.jpg" alt="">
    <img class="g8" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-20-17.jpg" alt="">
    <img class="g9" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R3-22-14A.jpg" alt="">
    <img class="g10" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R3-30-6A.jpg" alt="">
    <img class="g11" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R3-29-7A.jpg" alt="">
    <img class="g12" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R3-09-27A.jpg" alt="">
</section> -->

<section id="billede_oversigt"></section>

</section>

<template>
   <img src="" alt="">
    

</template>

<script>
    // https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/vare?per_page=100
    // https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/categories

    let billeder =[];
    const indhold = document.querySelector("#billede_oversigt");
    const skabelon = document.querySelector("template");
    let filterBillede = "alle";
    document.addEventListener("DOMContentLoaded", getJson);

    function start() {
        getJson();
    }

    const url ="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-json/wp/v2/billede?per_page=100";
    async function getJson() {
        let response = await fetch(url);
        billeder = await response.json();
        visBilleder();
    }

    function visBilleder(){
        console.log(billeder);
        let counter = 0
        billeder.forEach(billede => {
            // if ( counter >= 4){
            //     counter = 0
            // }
            counter ++;
            const klasse = "g" + counter
            const klon = skabelon.cloneNode(true).content;
            klon.querySelector("img").src = billede.img.guid;
            klon.querySelector("img").classList.add(klasse); 
            
            // klon.querySelector(".lb").alt = billede.img.guid;

            indhold.appendChild(klon);
        })
    }

</script> -->

<?php

get_footer();
?>