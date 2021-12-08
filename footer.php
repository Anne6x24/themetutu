<?php
/**
 * The template for displaying the footer.
 *
 * @package Go
 */

?>

<style>
	.footer1, .form {
		background-color: #375A48;
	}

	.t1, .t2 {
		color: white;
		text-align: center;
		margin: 2rem;
	}

	.t2 {
		padding: 2rem;
	}

	a {
		color: white;
	}

	a:hover {
		color: blue;
	}

	.logo {
		display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  max-width: 7rem;
  padding: 2rem;
	}

	
/* styling af e-mailbox */

.container1 {
	background-color: none;
	margin: 2rem;
	margin-bottom: 0;
}

.container2 {
	background-color: none;
	margin: 2rem;
	margin-top: 0;
}

/* Style the input elements and the submit button */
input[type=text], {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  align-content: center;
}

input[type=submit]
{
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  align-content: center;
}

/* Add margins to the checkbox */
input[type=checkbox] {
  margin-top: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: white;
  color: black;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}

@media(min-width: 768px) {
	.container1 {
		margin-left: 30vw;
		margin-right: 30vw;
	}

	.container2 {
		margin-left: 45vw;
		margin-right: 45vw;
	}

	input[type=text] {
		margin-bottom: 0;
	}

	input[type=submit] {
		margin-top: 1rem;
	}

}
</style>

	</main>

	<section class="footer1">
	<img class="logo" src="https://annemunksgaard.dk/kea/02sem/eksamen_tutu/tutu_wp/wp-content/uploads/2021/12/logo_lilletutu-2.png" alt="logo">
	
	<!-- e-mail form -->
	<form class="form" action="action_page.php">
  <div class="container">
    <p class="t1">BLIV EN DEL AF VORES UNIVERS - 
				TILMELD DIG VORES NYHEDSBREV!</p>
  </div>

  <div class="container1">
    <input type="text" placeholder="Email address" name="mail" required>
  </div>

  <div class="container2">
    <input type="submit" value="Send">
  </div>
</form>

<p class="t2">LILLE TUTU - HADERSLEVSGADE 31, 1786 KBH V - <a href="mailto:lilletutu@email.com">LILLETUTU@EMAIL.COM</a> - @LILLETUTU_SECONDHAND</p>


</section>

	</div>

	<?php wp_footer(); ?>

	</body>
</html>
