


<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div id="container" class="home-container">
	<main  role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>






		
	<div class="home-fold">
		
		<div class="home-slider">
			
			
			
			<div class="home-slide">
				<img class="slide-background" src="http://localhost:8888/toxic/wp-content/uploads/2022/03/home-bg.jpg"/>
				<div class="slide-overlay"></div>

	
				<div class="slide-inner">
					<div class="slide-inner-content">
						<h1>What We Do</h1>
						<p>We are  working towards creating a toxic-free environment where nobody should have to worry about the presence of health-harming chemicals in the products that come into contact with our food.</p>
						<a class="take-action-head green-button" href="#">LEARN MORE</a>
					</div>
				</div>
			</div>


			<div class="home-slide">
				
				<img class="slide-background" src="http://localhost:8888/toxic/wp-content/uploads/2022/03/home-bg.jpg"/>
				<div class="slide-overlay"></div>
	
				<div class="slide-inner">
					<div class="slide-inner-content">
						<h1>What We Do</h1>
						<p>We are  working towards creating a toxic-free environment where nobody should have to worry about the presence of health-harming chemicals in the products that come into contact with our food.</p>
						<a class="take-action-head green-button" href="#">LEARN MORE</a>
						
					</div>
				</div>
				
			</div>
		
		</div>	
<!--
			<div class="slider-controls">
				<div class="slider-dots"></div>
				<div class="slider-arrows"></div>
			</div>
-->
	</div>	
		



<section class="side-by-side">
	<div class="container flex">
					
			<div class="box-2 flex flow-column">
				<div class="paddedBox">
					
				<h2>Core Organizations</h2>				
				<blockquote>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
Typography
				</blockquote>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
			</div>

			<div class="box-2 flex flow-column">
				<div class="imagegrid">
					<a href=""><img src="http://localhost:8888/toxic/wp-content/uploads/2022/03/chem-trust-logo.png"/></a>
					<a href=""><img src="http://localhost:8888/toxic/wp-content/uploads/2022/03/heal-logo.png"/></a>
					<a href=""><img src="http://localhost:8888/toxic/wp-content/uploads/2022/03/zero-waste-logo.png"/></a>
					<a href=""><img src="http://localhost:8888/toxic/wp-content/uploads/2022/03/beuc-logo.png"/></a>
				</div>
			</div>					
	</div>
</section>

<section class="blue-content">
	<div class="container-short flex">
		
		<h2>Why do we need Toxic-Free Food Packaging/Food Materials?</h2>
		
		<blockquote>In its journey from farms to our forks, our food comes into contact with many  different materials, such as factory equipment, food packaging and tableware.</blockquote>
		
		<div class="intro-text"><p>These materials are known as Food Contact Materials (FCMs) and are made mainly from plastics, ceramics, paper and board, metal or glass. While these materials are important for how we store, transport, serve and  consume our food, they also pose a potential threat to our health as they can contain hazardous (toxic) chemicals. In Europe, thousands of different chemicals are used to produce and treat food contact materials. These chemicals have the potential to migrate from the materials into our food or drink, and many of them can harm our health and pollute our environment.			
		</p></div>		
	</div>
	


	
	

	
	
	

	
	<div class="container-short ">
		
		
<div class="accordion-container">		
				
	<div class="accordion">Food packaging can contain health-harming chemicals</div>
	
	<div class="panel">
	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>

</div>


<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>






<button class="accordion">Section 3</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>











<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
		
		
	</div>
	
	
	
	
	
	
</section>
		
		


		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<?php endwhile; endif; ?>
	</main>
</div>	
<?php get_footer(); ?>