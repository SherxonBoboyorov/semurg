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
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">

                <li class="nav-item">
                    <a href="{{ route('slider.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Sliders</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('headerkacko.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Header Calculator</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Kasko <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('kasko_auto_brand.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Auto brands</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kasko_auto_model.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Auto Models</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kasko_auto_equipment.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Auto Equipments</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kackobanner.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Kacko Banner</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('ocagobanner.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>Ocago Banner</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('insurancecategory.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-arrow-down-wide-short"></i>
                        <p>Insurance Category</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('insuranceproduct.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-cart-plus"></i>
                        <p>Insurance Product</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('carousel.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>Why clients choose us</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('client.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fas fa-users"></i>
                        <p>Our clients</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('useful.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-link"></i>
                        <p>Useful Links</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('page.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>About Company</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('article.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Articles</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('blog.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-info"></i>
                        <p>About us</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('director.index') }}" class="nav-link">
                        <i class="nav-icon far fa-address-book"></i>
                        <p>Director</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-arrow-down-wide-short"></i>
                        <p>Document Categories</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-file"></i>
                        <p>Documents</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('history.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-history"></i>
                        <p>History Company</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('leadership.index') }}" class="nav-link">
                        <i class="nav-icon far fa-id-card"></i>
                        <p>Leaderships</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('licensescategory.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-award"></i>
                        <p>Certificates Type</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('licensesdocument.index') }}" class="nav-link">
                        <i class="nav-icon fa-solid fa-file"></i>
                        <p>Certificates Documents</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('structure.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-project-diagram"></i>
                        <p>Company structure</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('forum.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-comment"></i>
                        <p>Forum</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('vacancy.index') }}" class="nav-link">
                        <i class="nav-icon far fa-folder-open"></i>
                        <p>Vacancies</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('faq.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-question"></i>
                        <p>FAQ</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('tender.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>Tenders</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('incoming.index') }}" class="nav-link">
                        <i class="nav-icon far fa-window-maximize"></i>
                        <p>Reinsurance</p>
                    </a>
                </li>


                {{-- <li class="nav-item">
                <a href="{{ route('outgoing.index') }}" class="nav-link">
                <i class="nav-icon far fa-window-maximize"></i>
                    <p>
                        Outgoing reinsurance
                    </p>
                </a>
                </li> --}}

                <li class="nav-item">
                    <a href="{{ route('international.index') }}" class="nav-link">
                        <i class="nav-icon far fa-handshake"></i>
                        <p>Partners</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contactlist.index') }}" class="nav-link">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>Contact List</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('options.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Options</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('poll.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-poll"></i>
                        <p>Survey Question</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pollanswer.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-poll"></i>
                        <p>Survey Answer</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('feedback.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-envelope-open-text"></i>
                        <p>Feedback</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
