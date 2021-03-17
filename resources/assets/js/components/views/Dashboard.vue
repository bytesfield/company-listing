<template>
    <div>
        

            <!-- Wrapper -->
	<div id="wrapper">
		<!-- Header of Admin Panel -->
	<Header></Header>
		<!-- Headers Ends here-->
		<div class="clearfix"></div>
		<div id="dashboard">
			<!-- Sidebar of Admin Panel -->
			<Sidebar></Sidebar>
			<!-- Sidebar Ends here -->
            <div class="dashboard-content">
				<!-- Notice -->
				<div class="row">
					<div class="col-md-12 mb-4">

					</div>
				</div>
				<!-- Content -->
				<div class="row">
					<!-- Item -->
					<div class="col-lg-3 col-md-6">
						<div class="card   mb-4">
							<div class="card-body text-center">
								<i class="i-Add-User"></i>
								<div class="py-4">
									<h2 class="text-primary mb-2">100</h2>
									<p class="mt-2 mb-0">Companies</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Item -->
					<div class="col-lg-3 col-md-6">
						<div class="card   mb-4">
							<div class="card-body text-center">
								<i class="i-Add-User"></i>
								<div class="py-4">
									<h2 class="text-primary mb-2">672</h2>
									<p class="mt-2 mb-0">Ratings</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Item -->
					<div class="col-lg-3 col-md-6">
						<div class="card   mb-4">
							<div class="card-body text-center">
								<i class="i-Add-User"></i>
								<div class="py-4">
									<h2 class="text-primary mb-2">902</h2>
									<p class="mt-2 mb-0">Rating Values</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Item -->
					<div class="col-lg-3 col-md-6">
						<div class="card   mb-4">
							<div class="card-body text-center">
								<i class="i-Add-User"></i>
								<div class="py-4">
									<h2 class="text-primary mb-2">20,905</h2>
									<p class="mt-2 mb-0">Total Users</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				
					
					<!-- Invoices -->
					<div class="col-lg-12 col-md-12 mb-4">
						<div class="card">
							<div class="db-tile">
								<h4>Company Listings</h4>
							</div>
							<div class="dashboard-list-box table-responsive invoices with-icons">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Image</th>
											<th>Name</th>
											<th>Booking Date</th>
											<th>Payment Type</th>
											<th>Status</th>
											<th>View Invoice</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><img class="img-fluid rounded-circle shadow-lg" src="assets/images/thumb-1.jpg" width="50" height="50" alt=""></td>
											<td>Mark</td>
											<td>Sep-02-2019</td>
											<td>Paypal</td>
											<td><span class="badge badge-pill badge-primary text-uppercase">Booked</span></td>
											<td><button class="btn btn-sm btn-primary" type="button">View</button></td>
										</tr>
										<tr>
											<td>2</td>
											<td><img class="img-fluid rounded-circle shadow-lg" src="assets/images/thumb-2.jpg" width="50" height="50" alt=""></td>
											<td>Jacob</td>
											<td>Sep-02-2019</td>
											<td>Credit</td>
											<td><span class="badge badge-pill badge-primary text-uppercase">Booked</span></td>
											<td><button class="btn btn-sm btn-primary" type="button">View</button></td>
										</tr>
										<tr>
											<td>3</td>
											<td><img class="img-fluid rounded-circle shadow-lg" src="assets/images/thumb-3.jpg" height="50" width="50" alt=""></td>
											<td>Thore</td>
											<td>Sep-02-2019</td>
											<td>Paypal</td>
											<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
											<td><button class="btn btn-sm btn-primary" type="button">View</button></td>
										</tr>
										<tr>
											<td>4</td>
											<td><img class="img-fluid rounded-circle shadow-lg" src="assets/images/thumb-4.jpg" height="50" width="50" alt=""></td>
											<td>Ashely</td>
											<td>Sep-02-2019</td>
											<td>Paypal</td>
											<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
											<td><button class="btn btn-sm btn-primary" type="button">View</button></td>
										</tr>
										<tr>
											<td>5</td>
											<td><img class="img-fluid rounded-circle shadow-lg" src="assets/images/thumb-1.jpg" height="50" width="50" alt=""></td>
											<td>Larry the Bird</td>
											<td>Sep-02-2019</td>
											<td>Paypal</td>
											<td><span class="badge badge-pill badge-danger text-uppercase">Pending</span></td>
											<td><button class="btn btn-sm btn-primary" type="button">View</button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Main Container -->
			 <router-view></router-view>
		</div>
	</div>
    </div>
</template>

<script>

    import Header from '../layout/admin/Header.vue';
    import Sidebar from '../layout/admin/Sidebar.vue';


export default {
  name: 'Dashboard',
  components: {
    Header,
    Sidebar

  }
}
</script>
