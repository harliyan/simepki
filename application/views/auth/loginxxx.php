
	<!--begin::Body-->
	<body data-kt-name="metronic" id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>if ( document.documentElement ) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value"); if ( themeMode === null ) { if ( defaultThemeMode === "system" ) { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Logo-->
				<a href="../../demo10/dist/index.html" class="d-block d-lg-none mx-auto py-20">
					<img alt="Logo" src="<?= base_url('vendor/metronic/dist/') ?>assets/media/logos/default.svg" class="theme-light-show h-25px" />
					<img alt="Logo" src="<?= base_url('vendor/metronic/dist/') ?>assets/media/logos/default-dark.svg" class="theme-dark-show h-25px" />
				</a>
				<!--end::Logo-->
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-center w-lg-50 p-20">
					<!--begin::Wrapper-->
					<div class="d-flex justify-content-between flex-column w-100 mw-450px">
						<!--begin::Header-->
						<div class="d-flex flex-stack py-2">
							<!--begin::Back link-->
							<div class="me-2"></div>
							<!--end::Back link-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="py-20">
							<!--begin::Form-->
							<form method="POST" action="<?= base_url('auth') ?>">
								<!--begin::Body-->
								<div class="card-body">
									<!--begin::Heading-->
									<div class="text-start mb-10">
										<!--begin::Title-->
										<h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">Sign In</h1>
										<!--end::Title-->
										<!--begin::Text-->
										<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Log in with your username and password</div>
										<!--end::Link-->
									</div>
									<!--begin::Heading-->
									<?= $this->session->flashdata('message'); ?>
									
									<!--begin::Input group=-->
									<div class="fv-row mb-8">
										<!--begin::Email-->
										<input type="text" class="form-control form-control-xl" placeholder="Username" id="username" name="username" value="<?= set_value('username'); ?>">
										<!--end::Email-->
									</div>
									<!--end::Input group=-->
									<div class="fv-row mb-7">
										<!--begin::Password-->
										 <input type="password" class="form-control form-control-xl" placeholder="Password" id="password" name="password">
										<!--end::Password-->
									</div>
									<!--end::Input group=-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
										<div></div>
										<!--begin::Link-->
										<!-- <a href="../../demo10/dist/authentication/layouts/fancy/reset-password.html" class="link-primary" data-kt-translate="sign-in-forgot-password">Forgot Password ?</a> -->
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Actions-->
									<div class="d-flex flex-stack">
										<!--begin::Submit-->
										<!-- <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button> -->
										<button  class="btn btn-primary me-2 flex-shrink-0" type="submit">
											<!--begin::Indicator label-->
											<span class="indicator-label" data-kt-translate="sign-in-submit">Log In</span>
											<!--end::Indicator label-->
											<!--begin::Indicator progress-->
											<!-- <span class="indicator-progress">
												<span data-kt-translate="general-progress">Please wait...</span>
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
											</span> -->
											<!--end::Indicator progress-->
										</button>

										<a href="<?= base_url('') ?>" class="btn btn-light" type="submit">
											<span class="indicator-label" data-kt-translate="sign-in-submit">Kembali ke Beranda</span>
										</a>
										<!--end::Submit-->
									</div>
									<!--end::Actions-->
								</div>
								<!--begin::Body-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Body-->
			
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(<?= base_url('assets/img/') ?>bg.png)"></div>
				<!--begin::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
