 <header id="page-topbar" style="background: teal;">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box" style="background: #fff;">
                            <a href="{{route('admin.dashboard')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logoo.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17" width="50px;">
                                </span>
                            </a>

                            <a href="{{route('admin.dashboard')}}" class="logo logo-light">
                                <span class="logo-sm">
                                <div style="font-size:1.5em; color: #000000">LASPO<span style="color: #1ABC9C; height: 10; font-size: 1em;"> M.</span></div>
                                </span>
                                <span class="logo-lg">
                                <div style="font-size:2em; color: #000000">LASPO<span style="color: #1ABC9C; height: 19; font-size: 1em;"> M.</span></div>
                            </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars" style="color: #fff;"></i>
                        </button>

                      <!-- App Search-->
                    <!--   <form class="app-search d-none d-lg-block">
                           

                               <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter Task ID" id="enter_task_id">
                                        
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit" id="search_btn"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                         
                        </form> -->

                
                    </div>

                    <div class="d-flex">

                       <!--  <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." id="enter_task_id">
                                          
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit" id="search_btn2"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
 -->

                




                     <!--    <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item"
                               >
                                <img class="" src="{{ asset('assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
                            </button>
                  
                        </div> -->

                

                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="bx bx-fullscreen" style="color: #fff;"></i>
                            </button>
                        </div>

                        

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/noimage.jpg') }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ml-1" style="color: #fff;">{{auth()->guard('admin')->user()->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block" style="color: #fff;"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                            
                                
                                <a class="dropdown-item d-block" href="{{route('admin.resetpassword')}}"><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> Settings</a>
                        
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-block" href="{{ URL::to('index') }}"><i class="bx bx-home font-size-16 align-middle mr-1"></i> Home Page</a>
                        
                        <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>  logout
                                                {{csrf_field()}}
                                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                          {{csrf_field()}}
                                        </form>
                                            </a>
                            </div>
                        </div>


    



            
                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->




<script src="{{asset('js/app.js')}}"></script>
            <script type="text/javascript">
                $(document).ready(function(){
var _tokens = $('input[name=_token]').val();
    






                });
            </script>











