<template>
<div>
   <header class="header-global">
			<nav id="navbar-main" class="navbar navbar-main fixed-top navbar-expand-lg navbar-transparent navbar-light headroom">
				<div class="container">
					<div class="logo">
						<a><img src="/assets/images/logo-white.png" class="img-fluid" alt=""></a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
					<div class="navbar-collapse collapse" id="navbar_global">
						<div class="navbar-collapse-header">
							<div class="row">
								<div class="col-6 collapse-brand">
									<div class="logo">
										<a><img class="img-fluid" src="/assets/images/logo-white.png" width="164" height="25" alt=""></a>
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
						<div class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
							<nav id="navigation" class="style-1">
								<ul id="responsive">
									<router-link to="/" tag="li" class="current">
                                        <a>Home</a>
                                	</router-link>
									<router-link to="/company-listing" tag="li">
                                        <a>Company Listings</a>
                                	</router-link>
									<router-link to="/auth/register" tag="li">
                                        <a>Register</a>
                                	</router-link>
									<router-link to="/auth/login" tag="li">
                                        <a>Login</a>
                                	</router-link>

								</ul>
							</nav>
							
						</div>
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
