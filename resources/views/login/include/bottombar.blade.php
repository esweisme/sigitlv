					<div class="header-bottom" id="kt_header_bottom">
							<!--begin::Container-->
							<div class="container d-flex flex-column">
								<!--begin::Tab Navs(for desktop mode)-->
								<ul class="header-tabs nav flex-column-auto" role="tablist">
									<!--begin::Item-->
									<li class="nav-item">
										<a href="#" class="nav-link" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">
											<span class="nav-title text-uppercase">Home</span>
											<span class="nav-desc">Dashboard</span>
										</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="nav-item">
										<a href="#" class="nav-link" data-toggle="tab" data-target="#kt_header_tab_2_artikel" role="tab">
											<span class="nav-title text-uppercase">Artikel</span>
											<span class="nav-desc">Blog & Catatan</span>
										</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="nav-item">
										<a href="#" class="nav-link" data-toggle="tab" data-target="#kt_header_tab_2_pesan" role="tab">
											<span class="nav-title text-uppercase">Pesan</span>
											<span class="nav-desc">Pesan Pengunjung</span>
										</a>
									</li>
									<!--end::Item-->
								</ul>
								<!--begin::Tab Navs-->
								<!--begin::Header Menu Wrapper-->
								<div class="header-navs header-navs-left flex-column-fluid" id="kt_header_navs">
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tab Pane-->
										<div class="tab-pane show" id="kt_header_tab_1">
											<!--begin::Menu-->
											<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
												<!--begin::Nav-->
												<ul class="menu-nav">
													<li class="menu-item menu-item" aria-haspopup="true">
														<a href="/admin/dashboard" class="menu-link">
															<span class="menu-text">Dashboard</span>
														</a>
													</li>
												</ul>
												<!--end::Nav-->
											</div>
											<!--end::Menu-->
										</div>
										<!--begin::Tab Pane-->
										<div class="tab-pane justify-content-between px-4 px-lg-0 {{ (request()->is('admin/dashboard')) ? 'active' : '' }} " id="kt_header_tab_2_dashboard">
											<div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
												<!--begin::Actions-->
												<a href="/admin/dashboard" class="btn btn-light font-weight-bold mr-3 my-2 my-lg-0">Dashboard</a>
												<!--end::Actions-->
											</div>
										</div>
										<!--begin::Tab Pane-->
										<div class="tab-pane justify-content-between px-4 px-lg-0 {{ (request()->is('admin/allblog') OR request()->is('admin/ngeblog')) ? 'active' : '' }} " id="kt_header_tab_2_artikel">
											<div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
												<!--begin::Actions-->
												<a href="/admin/allblog" class="btn btn-light font-weight-bold mr-3 my-2 my-lg-0">List Artikel</a>
												<a href="/admin/ngeblog" class="btn btn-light font-weight-bold my-2 my-lg-0">Tambah Tulisan</a>
												<!--end::Actions-->
											</div>
										</div>
										<!--begin::Tab Pane-->
										<div class="tab-pane justify-content-between px-4 px-lg-0 {{ request()->is('pesan') ? 'active' : '' }} " id="kt_header_tab_2_pesan">
											<div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-light font-weight-bold mr-3 my-2 my-lg-0">Semua Pesan</a>
												<!--end::Actions-->
											</div>
											<div class="d-flex align-items-center">
												<!--begin::Actions-->
												<a href="#" class="btn btn-dark font-weight-bold my-2 my-lg-0">Generate Reports</a>
												<!--end::Actions-->
											</div>
										</div>
									</div>
									<!--end::Tab Content-->
								</div>
								<!--end::Header Menu Wrapper-->
							</div>
							<!--end::Container-->
						</div>