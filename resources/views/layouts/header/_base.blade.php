
<div id="kt_header" style="" class="header align-items-stretch">

	<div class="container-fluid d-flex align-items-stretch justify-content-between">

		<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
			<div class="btn btn-icon btn-active-light-primary" id="kt_aside_mobile_toggle">

				<span class="svg-icon svg-icon-2x mt-1">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
							<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
						</g>
					</svg>
				</span>
			</div>
		</div>

		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
			<a href="{{ url('') }}" class="d-lg-none">
				<img alt="Logo" src="{{ asset('images/logo/logo-git.png') }}" class="h-30px" />
			</a>
		</div>

		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">

			<div class="d-flex align-items-stretch" id="kt_header_nav">

			</div>

			<div class="d-flex align-items-stretch flex-shrink-0">

				@component('layouts.topbar._base')@endcomponent

			</div>

		</div>

	</div>

</div>


