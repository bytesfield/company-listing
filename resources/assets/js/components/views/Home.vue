<template>
    <!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
        <Header></Header>
        <!--Header ends -->
		<div class="position-relative">
			<section class="section section-lg section-hero section-shaped">
				<div class="shape shape-style-1 shape-primary">
					<span class="span-150"></span>
					<span class="span-50"></span>
					<span class="span-50"></span>
					<span class="span-75"></span>
					<span class="span-100"></span>
					<span class="span-75"></span>
					<span class="span-50"></span>
					<span class="span-100"></span>
					<span class="span-50"></span>
					<span class="span-100"></span>
					<div class="overlay-bg"></div>
				</div>
				<div class="container shape-container d-flex align-items-center py-lg">
					<div class="main-search-inner">
						<h2 class="text-white display-2">Company Listing Application</h2>
						<div class="main-search-input">
							<div class="main-search-input-item" >
								<input type="text" style="width:100%;" placeholder="Type the compnay you are looking for?" value="" />
							</div>
							
							<a href="#" class="btn main-search-btn btn-radius btn-lg btn-white">
								<span class="btn-inner--text">Search</span>
							</a>
						</div>
					</div>
				</div>
				<!-- SVG separator -->
				<div class="separator separator-bottom separator-skew zindex-100">
					<svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                     <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                  </svg>
				</div>
			</section>
		</div>
		
		<div class="block-space bg-secondary">
			
			<div class="container">
			</div>
		</div>
        <Footer></Footer>
    </div>
</template>
<script>
    import Header from '../layout/guest/Header.vue';
    import Footer from '../layout/guest/Footer.vue';

export default {
  name: 'Home',
  components: {
    Header,
    Footer

  }
}
</script>
