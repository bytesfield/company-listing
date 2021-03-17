<template>
<div>
    <header class="header-global bg-primary">
			<nav id="navbar-main" class="navbar fixed-top navbar-main bg-primary navbar-expand-lg navbar-transparent navbar-light headroom">
				<div class="container-fluid">
					<div class="logo">
						<a href="#"><img src="frontend/assets/images/logo-white.png" class="img-fluid" alt=""></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
					<div class="navbar-collapse collapse" id="navbar_global">
						<div class="navbar-collapse-header">
							<div class="row">
								<div class="col-6 collapse-brand">
									<div id="logo">
										<a href="#"><img src="frontend/assets/images/logo-white.png'" class="img-fluid" alt=""></a>
									</div>
								</div>
								<div class="col-6 collapse-close">
									<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                           <span></span>
                           <span></span>
                           </button>
								</div>
							</div>
						</div>
						<div>
						</div>
						<div class="navbar-nav navbar-nav-hover align-items-lg-center ml-lg-auto">
							<nav id="navigation" class="style-1">
								<ul id="responsive">
									<li>
										<a class="current" href="#">Home</a>
                                        
									</li>
									<li>
										<a class="current" href="#">Company Listing</a>
									</li>
									<li>
										<a class="current" href="#">Login</a>
									</li>
									<li>
										<a class="current" href="#">Register</a>
									</li>
								
								</ul>
							</nav>
						</div>
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbar-primary_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ethan Moore</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-primary_dropdown_1">
									<a class="dropdown-item" href="#">Logout</a>
								</div>
							</li>
						</ul>
						
					</div>
				</div>
			</nav>
		</header>
        </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
