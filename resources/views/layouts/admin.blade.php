<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
    <script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    @yield('custom_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ route('homeAdmin') }}" class="brand-link">
            <style>
                .brand-link {
                    background-color: #182B45;
                }
            </style>
            <span class="brand-text font-weight-light" style="margin-left: 88px">Semurg</span>
        </a>
        <div class="sidebar" style="background-color: #182B45">
            <nav class="mt-8" style="padding-bottom: 40px">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                      {{-- start  --}}
                       <li class="nav-item">
                        <a href="{{ route('slider.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            Sliders
                        </p>
                        </a>
                       </li>
                      {{-- end  --}}


                      {{-- start  --}}
                         <li class="nav-item">
                            <a href="{{ route('insurancecategory.index') }}" class="nav-link">
                            <i class="nav-icon fa-solid fa-arrow-down-wide-short"></i>
                             <p>
                                Insurance Category
                             </p>
                            </a>
                        </li>
                      {{-- end  --}}


                      {{-- start  --}}
                      <li class="nav-item">
                        <a href="{{ route('insuranceproduct.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-cart-plus"></i>
                         <p>
                            Insurance Product
                         </p>
                        </a>
                       </li>
                     {{-- end  --}}

                      {{-- start  --}}
                      <li class="nav-item">
                        <a href="{{ route('carousel.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-check"></i>
                           <p>
                            Why clients choose us
                           </p>
                         </a>
                       </li>
                     {{-- end  --}}

                     {{-- start  --}}
                     <li class="nav-item">
                        <a href="{{ route('client.index') }}" class="nav-link">
                          <i class="nav-icon fa-solid fas fa-users"></i>
                           <p>
                              Our clients
                           </p>
                         </a>
                       </li>
                     {{-- end  --}}


                      {{-- start  --}}
                      <li class="nav-item">
                        <a href="{{ route('useful.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-link"></i>
                           <p>
                              Useful Links
                           </p>
                         </a>
                       </li>
                     {{-- end  --}}

                     {{-- start  --}}
                     <li class="nav-item">
                        <a href="{{ route('page.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-building"></i>
                           <p>
                              About Company
                           </p>
                         </a>
                       </li>
                     {{-- end  --}}

                     {{-- start  --}}
                     <li class="nav-item">
                        <a href="{{ route('article.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-newspaper"></i>
                           <p>
                              Articles
                           </p>
                         </a>
                       </li>
                     {{-- end  --}}

                     
                     {{-- start  --}}
                     <li class="nav-item">
                      <a href="{{ route('blog.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-info"></i>
                         <p>
                            About us
                         </p>
                       </a>
                     </li>
                   {{-- end  --}}


                    {{-- start  --}}
                    <li class="nav-item">
                      <a href="{{ route('director.index') }}" class="nav-link">
                        <i class="nav-icon far fa-address-book"></i>
                         <p>
                            Director
                         </p>
                       </a>
                     </li>
                   {{-- end  --}}

                    {{-- start  --}}
                       <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link">
                          <i class="nav-icon fa-solid fa-arrow-down-wide-short"></i>
                           <p>
                              Document Categories
                           </p>
                         </a>
                       </li>
                     {{-- end  --}}

                     {{-- start  --}}
                     <li class="nav-item">
                      <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-file"></i>
                         <p>
                             Documents
                         </p>
                       </a>
                     </li>
                   {{-- end  --}}

                    {{-- start  --}}
                    <li class="nav-item">
                      <a href="{{ route('history.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                         <p>
                            History Company
                         </p>
                       </a>
                     </li>
                   {{-- end  --}}

                    {{-- start  --}}
                    <li class="nav-item">
                      <a href="{{ route('leadership.index') }}" class="nav-link">
                        <i class="nav-icon far fa-id-card"></i>
                         <p>
                            Leaderships
                         </p>
                       </a>
                     </li>
                   {{-- end  --}}


                    {{-- start  --}}
                    <li class="nav-item">
                      <a href="{{ route('licensescategory.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-award"></i>
                         <p>
                            Certificates Type
                         </p>
                       </a>
                     </li>
                   {{-- end  --}}


                   {{-- start  --}}
                   <li class="nav-item">
                    <a href="{{ route('licensesdocument.index') }}" class="nav-link">
                      <i class="nav-icon fa-solid fa-file"></i>
                       <p>
                          Certificates Documents
                       </p>
                     </a>
                   </li>
                 {{-- end  --}}
                   
                     {{-- start  --}}
                     <li class="nav-item">
                      <a href="{{ route('structure.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-project-diagram"></i>
                         <p>
                            Company structure
                         </p>
                       </a>
                     </li>
                   {{-- end  --}}


                   {{-- start  --}}
                      <li class="nav-item">
                        <a href="{{ route('forum.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-comment"></i>
                           <p>
                              Forum
                           </p>
                         </a>
                       </li>
                   {{-- end  --}}

                    {{-- start  --}}
                    <li class="nav-item">
                      <a href="{{ route('vacancy.index') }}" class="nav-link">
                        <i class="nav-icon far fa-folder-open"></i>
                         <p>
                            Vacancies
                         </p>
                       </a>
                     </li>
                 {{-- end  --}}


                 {{-- start  --}}
                  <li class="nav-item">
                   <a href="{{ route('faq.index') }}" class="nav-link">
                     <i class="nav-icon fas fa-question"></i>
                      <p>
                         FAQ
                      </p>
                    </a>
                  </li>
                 {{-- end  --}}


                 {{-- start  --}}
                 <li class="nav-item">
                  <a href="{{ route('tender.index') }}" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                     <p>
                        Tenders
                     </p>
                   </a>
                 </li>
                {{-- end  --}}

                 
                {{-- start  --}}
                   <li class="nav-item">
                    <a href="{{ route('incoming.index') }}" class="nav-link">
                    <i class="nav-icon far fa-window-maximize"></i>
                       <p>
                           Incoming reinsurance
                       </p>
                     </a>
                   </li>
                {{-- end  --}}


                 {{-- start  --}}
                 <li class="nav-item">
                  <a href="{{ route('outgoing.index') }}" class="nav-link">
                  <i class="nav-icon far fa-window-maximize"></i>
                     <p>
                          Outgoing reinsurance
                     </p>
                   </a>
                 </li>
               {{-- end  --}}


                 {{-- start  --}}
                  <li class="nav-item">
                  <a href="{{ route('international.index') }}" class="nav-link">
                    <i class="nav-icon far fa-handshake"></i>
                     <p>
                        Partners
                     </p>
                   </a>
                 </li>
                {{-- end  --}}


                 {{-- start  --}}
                 <li class="nav-item">
                  <a href="{{ route('contactlist.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-list-alt"></i>
                     <p>
                        Contact List
                     </p>
                   </a>
                 </li>
                {{-- end  --}}


            
                
                </ul>
            </nav>
        </div>
    </aside>


    <div class="content-wrapper">
        @yield('content')
    </div>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
     $(window).on('load', function () {

if (feather) {
    feather.replace({
        width: 14,
        height: 14
    });
}


})
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/plugins/chart.js/Chart.min.js"></script>
<script src="/admin/plugins/sparklines/sparkline.js"></script>
<script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="/admin/plugins/moment/moment.min.js"></script>
<script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/admin/dist/js/adminlte.js"></script>
<script src="/admin/dist/js/demo.js"></script>
<script src="/admin/dist/js/pages/dashboard.js"></script>

<!-- App js -->
<script src="{{ asset('admin/js/app.js') }}"></script>
@yield('custom_js')
</body>
</html>
