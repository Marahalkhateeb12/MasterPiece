@extends('MasterPage.master')
@section('content')





<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li><a href="halls">Hayat Irbid Halls</a></li>
					<li class="active">Aldahabia</li>
				</ol>
			</div>
			
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src='images/halls/Hayat/2.jpg' alt='' data-zoom-image='images/halls/Hayat/2.jpg' />
								</div>
								<div class='item'>
									<img src='images/halls//Hayat/4.jpg' alt='' data-zoom-image='images/halls//Hayat/4.jpg' />
								</div>
								
								<div class='item'>
									<img src='images/halls//Hayat/5.jpg' alt='' data-zoom-image='images/halls//Hayat/5.jpg' />
								</div>
								<div class='item'>
									<img src='images/halls//Hayat/6.jpg'alt='' data-zoom-image='images/halls//Hayat/6.jpg' />
								</div>
								<div class='item'>
									<img src='images/halls//Hayat/6.jpg' alt='' data-zoom-image='images/halls//Hayat/6.jpg'/>
								</div>
								<div class='item'>
									<img src='images/halls//Hayat/4.jpg' alt='' data-zoom-image='images/halls//Hayat/4.jpg' />
								</div>
								
							</div>
							
							<!-- sag sol -->
							<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
								<i class="tf-ion-ios-arrow-left"></i>
							</a>
							<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
								<i class="tf-ion-ios-arrow-right"></i>
							</a>
						</div>
						
						<!-- thumb -->
						<ol class='carousel-indicators mCustomScrollbar meartlab'>
							<li data-target='#carousel-custom' data-slide-to='0' class='active'>
								<img src='images/halls//Hayat/2.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='1'>
								<img src='images/halls//Hayat/4.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='2'>
								<img src='images/halls//Hayat/5.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='3'>
								<img src='images/halls//Hayat/6.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='4'>
								<img src='images/halls//Hayat/6.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='5'>
								<img src='images/halls//Hayat/4.jpg' alt='' />
							</li>
							<li data-target='#carousel-custom' data-slide-to='6'>
								<img src='images/halls//Hayat/4.jpg' alt='' />
							</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2 style="color: #feacc6;">ALDAHABIA</h2>
					
					
					<p class="product-description mt-20">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsum dicta quod, quia doloremque aut deserunt commodi quis. Totam a consequatur beatae nostrum, earum consequuntur? Eveniet consequatur ipsum dicta recusandae.
					</p>
					
					<div class="product-size">
						<span>Size:</span>
						<!-- <select class="form-control">
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
						</select> -->
					</div>
					<div class="product-quantity">
						<span>Quantity:</span>
						<!-- <div class="product-quantity-slider">
							<input id="product-quantity" type="text" value="0" name="product-quantity">
						</div> -->
					</div>
					<div class="product-category">
						<span>Categories:</span>
						<!-- <ul>
							<li><a href="product-single.html">Products</a></li>
							<li><a href="product-single.html">Soap</a></li>
						</ul> -->
					</div>
					<div class="product-date">
						
							<span>Date:</span>
							<input id="product-date" type="date" onchange="availableTime()"  name="product-date" width="20px">
						
					</div>
					<!-- <a href="cart.html" class="btn btn-main mt-20">Book Now</a> -->
				</div>
			</div>
		</div>
		<div id="times"></div>
		<script>
function availableTime(){
document.getElementById('times').innerHTML="<table class='table' style='margin-top:50px'>"+
	"<tr><th>Time</th><th>Price</th><th>Status</th><th>Book</th></tr>"+
	"<tr><th>4:00-6:00</th><th>1000JOD</th><th><span class='label label-info'>Pinding</span></th><th><a href='booking' class='btn btn-main  book' disabled='true'>Book Now</a> </th></tr>"+
	"<tr><th>6:00-8:00</th><th>1100JOD</th><th><span class='label label-success'>Available</span></th><th><a href='booking' class='btn btn-main  book' >Book Now</a></th></tr>"+
	"<tr><th>8:00-10:00</th><th>1200JOD</th><th><span class='label label-danger'>Not Available</span></th><th><a href='booking' class='btn btn-main  book' disabled='true'>Book Now</a></th></tr>"+
	"<tr><th>10:00-12:00</th><th>1300JOD</th><th><span class='label label-success'>Available</span></th><th><a href='booking' class='btn btn-main  book'>Book Now</a></th></tr>"+
	"</table>";
}

		</script>
		<!-- <div class="row">
			<div class="col-xs-12">
				<div class="tabCommon mt-20">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Details</a></li>
						<li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Reviews (3)</a></li>
					</ul>
					<div class="tab-content patternbg">
						<div id="details" class="tab-pane fade active in">
							<h4>Product Description</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut per spici</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis delectus quidem repudiandae veniam distinctio repellendus magni pariatur molestiae asperiores animi, eos quod iusto hic doloremque iste a, nisi iure at unde molestias enim fugit, nulla voluptatibus. Deserunt voluptate tempora aut illum harum, deleniti laborum animi neque, praesentium explicabo, debitis ipsa?</p>
						</div>
						<div id="reviews" class="tab-pane fade">
							<div class="post-comments">
						    	<ul class="media-list comments-list m-bot-50 clearlist">
								    < Comment Item start
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/avater-1.jpg" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">
								            <div class="comment-info">
								                <h4 class="comment-author">
								                    <a href="#!">Jonathon Andrew</a>
								                	
								                </h4>
								                <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
								            </div>

								            <p>
								                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod laborum minima, reprehenderit laboriosam officiis praesentium? Impedit minus provident assumenda quae.
								            </p>
								        </div>

								    </li>
								     End Comment Item 

								    Comment Item start
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/avater-4.jpg" alt="" width="50" height="50" />
								        </a>

								        <div class="media-body">

								            <div class="comment-info">
								                <div class="comment-author">
								                    <a href="#!">Jonathon Andrew</a>
								                </div>
								                <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
								            </div>

								            <p>
								                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni natus, nostrum iste non delectus atque ab a accusantium optio, dolor!
								            </p>

								        </div>

								    </li>
								     End Comment Item 

								    Comment Item start
								    <li class="media">

								        <a class="pull-left" href="#!">
								            <img class="media-object comment-avatar" src="images/blog/avater-1.jpg" alt="" width="50" height="50">
								        </a>

								        <div class="media-body">

								            <div class="comment-info">
								                <div class="comment-author">
								                    <a href="#!">Jonathon Andrew</a>
								                </div>
								                <time datetime="2013-04-06T13:53">July 02, 2015, at 11:34</time>
								                <a class="comment-button" href="#!"><i class="tf-ion-chatbubbles"></i>Reply</a>
								            </div>

								            <p>
								                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
								            </p>

								        </div>

								    </li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
<section class="products related-products section">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>More Images / Videos</h2>
			</div>
		</div>
		
	</div>
</section>



<!-- Modal -->

@endsection