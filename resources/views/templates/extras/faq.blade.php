@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					FAQ
					<span class="panel-options">
						<a href="#" class="panel-refresh">
							<i class="ion ion-refresh"></i> 
						</a>
						<a href="#" class="panel-minimize">
							<i class="ion ion-chevron-up"></i> 
						</a>
						<a href="#" class="panel-close">
							<i class="iion ion-close"></i> 
						</a>
					</span>
				</h3>
			</div>
			<div class="panel-body">  
				<div class="row">
					<div class="col-md-8">
						<p>These are frequently asked questions in general</p>
						<div class="panel-group knot-accordion knot-accordion-two" id="accordionfaq" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="FAQmodal">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionfaq" href="#collapseModalOne" aria-expanded="true" aria-controls="FAQmodal">
											FAQ #1
										</a>
									</h4>
								</div>
								<div id="collapseModalOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="collapseModalOne">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi praesentium similique totam odio obcaecati, reprehenderit, dignissimos rem temporibus ea inventore alias! Beatae animi nemo ea tempora, temporibus laborum facilis ut!
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalTwo">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordionfaq" href="#collapseModalTwo" aria-expanded="false" aria-controls="collapseModalTwo">
											FAQ #2
										</a>
									</h4>
								</div>
								<div id="collapseModalTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseModalTwo">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, reiciendis corporis molestias inventore rem cum dolorem! Cupiditate aliquid soluta, officiis sunt officia quo, debitis id vel nemo distinctio esse, ex.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalThree">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionfaq" href="#collapseModalThree" aria-expanded="false" aria-controls="headingModalThree">
											FAQ #3
										</a>
									</h4>
								</div>
								<div id="collapseModalThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseModalThree">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalFour">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionfaq" href="#collapseModalFour" aria-expanded="false" aria-controls="headingModalFour">
											FAQ #4
										</a>
									</h4>
								</div>
								<div id="collapseModalFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseModalFour">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalFive">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionfaq" href="#collapseModalFive" aria-expanded="false" aria-controls="headingModalFive">
											FAQ #5
										</a>
									</h4>
								</div>
								<div id="collapseModalFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseModalFive">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalSix">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionfaq" href="#collapseModalSix" aria-expanded="false" aria-controls="headingModalSix">
											FAQ #6
										</a>
									</h4>
								</div>
								<div id="collapseModalSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseModalSix">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingModalSeven">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordionfaq" href="#collapseModalSeven" aria-expanded="false" aria-controls="headingModalSeven">
											FAQ #7
										</a>
									</h4>
								</div>
								<div id="collapseModalSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseModalSeven">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
						</div>
						<!-- accordion -->
					</div>
					<!-- col-md-8 -->
					<div class="col-md-4">
						<p><i class="ion ion-ios-color-filter"></i> Categories</p>
						<div class="panel-group knot-accordion" id="accordioncategory" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="categoryModalOne">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordioncategory" href="#collapseCategoryOne" aria-expanded="true" aria-controls="categoryModalOne">
											Lorem
										</a>
									</h4>
								</div>
								<div id="collapseCategoryOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseCategoryOne">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi praesentium similique totam odio obcaecati, reprehenderit, dignissimos rem temporibus ea inventore alias! Beatae animi nemo ea tempora, temporibus laborum facilis ut!
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="categoryModalTwo">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordioncategory" href="#collapseCategoryTwo" aria-expanded="false" aria-controls="categoryModalTwo">
											Ipsum
										</a>
									</h4>
								</div>
								<div id="collapseCategoryTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseCategoryTwo">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, reiciendis corporis molestias inventore rem cum dolorem! Cupiditate aliquid soluta, officiis sunt officia quo, debitis id vel nemo distinctio esse, ex.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="categoryModalThree">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordioncategory" href="#collapseCategoryThree" aria-expanded="false" aria-controls="categoryModalThree">
											Consectetur
										</a>
									</h4>
								</div>
								<div id="collapseCategoryThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseCategoryThree">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="categoryModalFour">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordioncategory" href="#collapseCategoryFour" aria-expanded="false" aria-controls="categoryModalFour">
											Voluptatem
										</a>
									</h4>
								</div>
								<div id="collapseCategoryFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseCategoryFour">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="categoryModalFive">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordioncategory" href="#collapseCategoryFive" aria-expanded="false" aria-controls="categoryModalFive">
											Adipisicing
										</a>
									</h4>
								</div>
								<div id="collapseCategoryFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseCategoryFive">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="categoryModalSix">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordioncategory" href="#collapseCategorySix" aria-expanded="false" aria-controls="categoryModalSix">
											Necessitatibus
										</a>
									</h4>
								</div>
								<div id="collapseCategorySix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseCategorySix">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="categoryModalSeven">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordioncategory" href="#collapseCategorySeven" aria-expanded="false" aria-controls="categoryModalSeven">
											Dolore
										</a>
									</h4>
								</div>
								<div id="collapseCategorySeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseCategorySeven">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quisquam ut voluptates, alias quae odio dolore ex enim quis voluptatem obcaecati perferendis necessitatibus similique voluptate provident tempora iure mollitia dolores.
									</div>
								</div>
							</div>
						</div>
						<!-- accordion -->
					</div>
					<!-- col-md-4 -->
				</div>
				<!-- row -->
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 --> 
</div> 
<!-- row -->
<div class="row">
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Questions With Number of Replies
					<span class="panel-options">
						<a href="#" class="panel-refresh">
							<i class="ion ion-refresh"></i> 
						</a>
						<a href="#" class="panel-minimize">
							<i class="ion ion-chevron-up"></i> 
						</a>
						<a href="#" class="panel-close">
							<i class="iion ion-close"></i> 
						</a>
					</span>
				</h3>
			</div>
			<div class="panel-body">  
				<div class="list-group demo-list-group">
					<a href="#" class="list-group-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit? <span class="badge bg-success">10</span></a>
					<a href="#" class="list-group-item">Quisque a vehicula dolor. In vel viverra nisi, ut faucibus felis? <span class="badge bg-warning">62</span></a>
					<a href="#" class="list-group-item">Pellentesque ornare nulla quam? <span class="badge bg-info">05</span></a>
					<a href="#" class="list-group-item"> Curabitur ut sem ac odio viverra rutrum vitae ut felis? <span class="badge bg-danger">10</span></a>
					<a href="#" class="list-group-item">Donec quis turpis eget lectus molestie dictum in ut nulla? <span class="badge bg-success">99</span></a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 -->
	<div class="col-md-6 panel-parent">
		<!-- panel -->
		<div class="panel knot-panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">
					Recent FAQ With Category
					<span class="panel-options">
						<a href="#" class="panel-refresh">
							<i class="ion ion-refresh"></i> 
						</a>
						<a href="#" class="panel-minimize">
							<i class="ion ion-chevron-up"></i> 
						</a>
						<a href="#" class="panel-close">
							<i class="iion ion-close"></i> 
						</a>
					</span>
				</h3>
			</div>
			<div class="panel-body">  
				<div class="list-group demo-list-group">
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Lorem</h4>
						<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit? </p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Quisque</h4>
						<p class="list-group-item-text">Quisque a vehicula dolor. In vel viverra nisi, ut faucibus felis? </p>
					</a>
					<a href="#" class="list-group-item">
						<h4 class="list-group-item-heading">Pellentesque</h4>
						<p class="list-group-item-text">Pellentesque ornare nulla quam? </p>
					</a>
				</div>
			</div>
		</div>
		<!-- /panel -->
	</div>
	<!-- /col-md-6 --> 
</div> 
<!-- row --> 

@endsection

@section('scripts')



@endsection