        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset('assets/backend/images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="email">
                        {{ Auth::user()->email }}
                    </div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i>{{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    @if(Request::is('admin*'))
                        <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="material-icons">dashboard</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/package*') ? 'active' : '' }}">
                            <a href="{{ route('admin.package.index') }}">
                                <i class="material-icons">list</i>
                                <span>Packages</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                            <a href="{{ route('admin.category.index') }}">
                                <i class="material-icons">view_module</i>
                                <span>Category</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/verifier*') ? 'active' : '' }}">
                            <a href="{{ route('admin.verifier.index') }}">
                                <i class="material-icons">perm_identity</i>
                                <span>Verifiers</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/verifiedlisting*') ? 'active' : '' }}">
                            <a href="{{ route('admin.verifiedlisting.index') }}">
                                <i class="material-icons">playlist_add_check</i>
                                <span>Verified Links</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/order*') ? 'active' : '' }}">
                            <a href="{{ route('admin.order.index') }}">
                                <i class="material-icons">card_membership</i>
                                <span>Orders</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/invoice*') ? 'active' : '' }}">
                            <a href="{{ route('admin.invoice.index') }}">
                                <i class="material-icons">description</i>
                                <span>Invoices</span>
                            </a>
                        </li>
                        
                        <li class="header">System</li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>
                                <span>Sign Out</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endif
                    @if(Request::is('verifier*'))
                        <li class="{{ Request::is('verifier/dashboard') ? 'active' : '' }}">
                            <a href="{{ route('verifier.dashboard') }}">
                                <i class="material-icons">dashboard</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('verifier/category*') ? 'active' : '' }}">
                            <a href="{{ route('verifier.category.index') }}">
                                <i class="material-icons">list</i>
                                <span>Category</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('verifier/verifylisting*') ? 'active' : '' }}">
                            <a href="{{ route('verifier.verifylisting.index') }}">
                                <i class="material-icons">link</i>
                                <span>Links for verify</span>
                            </a>
                        </li>
                        <li class="header">System</li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>
                                <span>Sign Out</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endif
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - .
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->