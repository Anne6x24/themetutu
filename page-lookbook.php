<?php

get_header();
?>

<section id="primary" class="content-area">
<section id="billede_oversigt"></section>

</section>

<template>
    <div id="kasse1">
        <img class="lb" src="" alt="">
        <!-- <img class="lb" src="" alt=""> -->
    </div>
    <div id="kasse2">
        <img src="" alt="">
    </div>
    <div id="kasse3">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div id="kasse4">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div id="kasse5">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div id="kasse6">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div id="kasse7">
        <img src="" alt="">
    </div>
    <div id="kasse8">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div id="kasse9">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div id="kasse10">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>
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
        billeder.forEach(billede => {
            const klon = skabelon.cloneNode(true).content;
            klon.querySelector(".lb").src = billede.img.guid;

            indhold.appendChild(klon);
        })
    }

</script>

<?php

get_footer();
?>