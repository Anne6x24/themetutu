<?php

get_header();

?>

<style>

#toppen, .kjole1, #midten, #bunden, .slideshow {
    margin: 2rem;
}

h3 {
    margin-bottom: 0rem;
}



</style>

<section id="primary" class="content-area">
   
        <img class="hero" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/A976787-R2-05-32.jpg" alt="HERO">
        <div id="tekst_1">
    <section id="toppen">
    <h1 id="headline" class="secondhand">Secondhand i børnehøjde</h1>
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
        <h2>GUIDE</h2>
    </section>
    <section id="bunden">
        <div class="insta_h">
        <h3>Find os på instagram</h3>
        </div>
        <div class="insta">
        <a href="https://www.instagram.com/lilletutu_secondhand/">@lilletutu_secondhand</a>
        </div>
    <!-- slideshow -->
    </section>
    <section>
    
  <div class="slideshow">
    <img class="mySlides" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta1.png">
    <img class="mySlides" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta2.png">
    <img class="mySlides" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/insta3.png">

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
