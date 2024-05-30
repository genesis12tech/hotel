


<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Hotel</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ route('admin.dashboard') }}" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>

				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Manage Teams </div>
					</a>
					<ul>
						<li> <a href="{{ route('all.team') }}"><i class='bx bx-radio-circle'></i>All Team</a>
						</li>
						<li> <a href="{{ route('add.team') }}"><i class='bx bx-radio-circle'></i>Add Team</a>
						</li>

					</ul>
				</li>



				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Manage Booking Area </div>
					</a>
					<ul>
						<li> <a href="{{ route('book.area') }}"><i class='bx bx-radio-circle'></i>Update BookArea</a>
						</li>


					</ul>
				</li>



				 <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Manage Room Type </div>
            </a>
            <ul>
                <li> <a href="{{ route('room.type.list') }}"><i class='bx bx-radio-circle'></i>Room Type List </a>
                </li>

            </ul>
        </li>

        <li class="menu-label">Booking Manage </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>

                <div class="menu-title">Booking </div>
            </a>
            <ul>

                <li> <a href="{{ route('booking.list') }}"><i class='bx bx-radio-circle'></i>Booking List </a>
                </li>
				<li> <a href="{{ route('add.room.list') }}"><i class='bx bx-radio-circle'></i>Add Booking </a>
                </li>

			</ul>

			</li>



			<li>
				<a class="has-arrow" href="javascript:;">
					<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
					</div>
					<div class="menu-title">Manage RoomList</div>
				</a>
				<ul>
					<li> <a href="{{ route('view.room.list') }}"><i class='bx bx-radio-circle'></i>Room List</a>
					</li>
					
					 
				</ul>
			</li>



			<li>
				<a class="has-arrow" href="javascript:;">
					<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
					</div>
					<div class="menu-title">Setting</div>
				</a>
				<ul>
					<li> <a href="{{ route('smtp.setting') }}"><i class='bx bx-radio-circle'></i>SMTP Setting</a>
					</li>
	
	
				</ul>
			</li>



			<li>
				<a class="has-arrow" href="javascript:;">
					<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
					</div>
					<div class="menu-title">Tesimonial</div>
				</a>
				<ul>
					<li> <a href="{{ route('all.testimonial') }}"><i class='bx bx-radio-circle'></i>All Testimonial</a>
					</li>
	
					 <li> <a href="{{ route('add.testimonial') }}"><i class='bx bx-radio-circle'></i>Add Testimonial</a>
					</li>
	
	
				</ul>
			</li>


			<li>
				<a class="has-arrow" href="javascript:;">
					<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
					</div>
					<div class="menu-title">Blog</div>
				</a>
				<ul>
					<li> <a href="{{ route('blog.category') }}"><i class='bx bx-radio-circle'></i>Blog Category </a>
					</li>
	
					 <li> <a href="{{ route('all.blog.post') }}"><i class='bx bx-radio-circle'></i>All Blog Post</a>
					</li>
	
	
				</ul>
			</li>



			<li>
				<a class="has-arrow" href="javascript:;">
					<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
					</div>
					<div class="menu-title">Manage Comment</div>
				</a>
				<ul>
					<li> <a href="{{ route('all.comment') }}"><i class='bx bx-radio-circle'></i>All Comments </a>
					</li>
	
				</ul>
			</li>




			<li>
				<a class="has-arrow" href="javascript:;">
					<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
					</div>
					<div class="menu-title">Booking Report </div>
				</a>
				<ul>
					<li> <a href="{{ route('booking.report') }}"><i class='bx bx-radio-circle'></i>Booking Report </a>
					</li> 
	
				</ul>
			</li>



			<!--end navigation-->
		</div>