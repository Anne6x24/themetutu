<?php

get_header();

?>

<style>

#toppen, .kjole1, #bunden, #midten, .slideshow {
    margin: 2rem;
}

h3 {
    margin-bottom: 0rem;
}

.hero2 {
    display: none;
}

.guide2 {
        display: none;
    }

.midten_o {
    font-size: 2rem;
    margin-top: 3rem;
}



.insta {
    color: black;
}

.insta_grid {
    display: none;
}


@media(min-width: 768px) {

    .hero1 {
        display: none;
    }

    .hero2 {
        display: block;
    }

    #toppen {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-left: 18rem;
        margin-right: 18rem;
        gap: 4rem;
    }

    .kjole1 {
        margin: 0;
        margin-top: 4rem;
    }

    .guide1 {
        display: block;
    }
    
    .guide2 {
        display: none;
    }

    
    .slideshow {
        display: none;
    }

    .insta_grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap: 3rem;
        margin-top: 1rem;
        margin-bottom: 6rem;
        margin-left: 2rem;
        margin-right: 2rem;
        
    }

    .secondhandh {
        font-size: 3rem;
    }


    .insta {
        position: relative;
        float: right;
    }

}


</style>

<section id="primary" class="content-area">
   
        <img class="hero1" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-05-32.jpg" alt="HERO">
        <img class="hero2" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/hero.png" alt="HERO">
        
        <!-- <video class="hero1" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/Hero_video_lille_tutu_final.mp4"></video> -->

    <section id="toppen">
    <div id="tekst_1">
    <h1 id="headline" class="secondhandh">Secondhand i børnehøjde</h1>
    <p class="secondhand">Mange har et ønske om at klæde deres børn lækkert og smart på. 
        Det kan skabe glæder hos de fleste mødre, at deres børn også ser godt ud. 
        En ting der er sikkert med børn, er dog at de vokser og de vokser hurtigt. 
        Derfor er der meget af deres tøj der ikke bliver brugt længe af gangen og 
        får en plads på loftet eller i en kasse under sengen. Men er det den bedste 
        måde at behandle tøj på, det mener vi ikke. Et lækkert stykke børnetøj, skal 
        kunne blive brugt mange gange og give glæde og varme til så mange børn som overhovedet muligt.</p>
        <button>Se vores vare her</button>
        </div>
        <div class="kjole1">
                <img src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-34-3-e1638784792853.jpg" alt="">
                </div>
    </section>
    <section id="midten">
        <h1 class="midten_o">Bliv en del af komissionen!</h1>
        <img class="guide1" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/Artboard-1.png" alt="">
        <img class="guide2" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/Artboard-1.png" alt="">


        <!-- <h2 class="step1">//STEP 1</h2>
        <p class="t1">Indlever dit brugte tøj hos lilleTUTU, 
            hvorefter vi kigger det igennem sammen og aftaler en pris.
        </p>
        <img class="step1b" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/step1.jpg" alt="">
        
        <h2 class="step2">//STEP 2</h2>
        <p class="t2">Er der noget af noget som enten kunne trænge til en lapning
            eller et nyt look - tilbyder vi upcycling af dit brugte tøj.
        </p>
        <img class="step2b" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/step2.png" alt="">
        
        <h2 class="step3">//STEP 3</h2>
        <p class="t3">Dit tøj for lov at hænge i vores butik i 2 måneder, hvor vi sørger for salget og
            du tjener 50% af det solgte!
        </p>
        <img class="step3b" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/step_3.png" alt=""> -->
    </section>
    <section id="bunden">
        <div class="insta_h">
        <h3>Find os på instagram</h3>
        </div>
        <div class="insta">
        <a class="insta" href="https://www.instagram.com/lilletutu_secondhand/">@lilletutu_secondhand</a>
        </div>
    <!-- slideshow -->
    </section>
   
    <div class="insta_grid">
    <img class="pic1" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta1.png">
    <img class="pic2" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta2.png">
    <img class="pic3" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta3.png">
    <img class="pic4 "src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta4.png">

  </div>
    
  <div class="slideshow">
    <img class="mySlides" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta1.png">
    <img class="mySlides" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta2.png">
    <img class="mySlides" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta3.png">
    <img class="mySlides "src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta4.png">

  </div>

</section>

    
   

</section>

<script>

var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<?php

get_footer();
?>
