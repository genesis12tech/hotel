


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







			</ul>
			<!--end navigation-->
		</div>