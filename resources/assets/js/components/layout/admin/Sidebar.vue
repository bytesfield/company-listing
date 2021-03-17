<template>
<div>
    <div class="app-admin-sidebar">
				<div class="db-admin">
					<div class="dashboard-nav">
						<div class="dashboard-nav-inner">
							<ul data-submenu-title="Main">
                                <router-link to="/dashboard" tag="li" class="active">
                                        <a><i class="fa fa-tachometer"></i> Dashboard</a>
                                </router-link>
								<li>
									<a href="dashboard-listing.html"><i class="fa fa-calendar-plus-o"></i> Add Company</a>
								</li>
								<li>
									<a href="dashboard-listing.html"><i class="fa fa-calendar-check-o"></i> View Companies</a>
								</li>
								<li>
									<a href="dashboard-listing.html"><i class="fa fa-calendar-check-o"></i> Users</a>
								</li>
							</ul>
						
							<ul data-submenu-title="Settings">
								<li>
									<a href="dashboard-listing.html"><i class="fa fa-calendar-plus-o"></i> Add Rating Values</a>
								</li>
								<li>
									<a href="dashboard-listing.html"><i class="fa fa-calendar-check-o"></i> View Rating Values</a>
								</li>
								<li>
									<a href="login.html"><i class="fa fa-sign-out"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<a class="db-trigger">
					<i class="fa fa-reorder"></i>
				</a>
			</div>
            </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
