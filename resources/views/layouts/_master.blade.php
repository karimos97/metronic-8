
<div class="d-flex flex-column flex-root">

	<div class="page d-flex flex-row flex-column-fluid">

		@component('layouts.aside._base')@endcomponent

		<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

			@component('layouts.header._base')@endcomponent

			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

				@component('layouts.toolbars._toolbar-1')@endcomponent

				<div class="post d-flex flex-column-fluid" id="kt_post">

					<div class="container">
						@yield('content')
					</div>

				</div>

			</div>

			@component('layouts.footer._footer')@endcomponent

		</div>

	</div>

</div>

@component('layouts.footer._scrolltop')@endcomponent

