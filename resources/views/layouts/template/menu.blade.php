
<!--/. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a class="active-menu" href="#"><i class="fa fa-dashboard"></i>Home<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::to('/') }}">Dashboard</a>
                        <a href="{{ route('settings') }}">Settings</a>
                    </li>
                </ul>
            </li>
            
<li>
                <a href="#"><i class="fa fa-money"></i>Products and Leads<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('products') }}">Products<span class="label label-marketing pull-right" style="margin-top:4px">{{ $countProducts }}</span></a>
                        <a href="{{ route('tasks') }}">Leads<span class="label label-marketing pull-right" style="margin-top:4px">{{ $countTasks }}</span></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ route('clients') }}"><i class="fa fa-user"></i>Customers<span class="fa arrow">{{ $countClients }}</span></a>
                <!--<ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('clients') }}">Clients<span class="label label-dependencies pull-right" style="margin-top:4px;">{{ $countClients }}</span></a>
                        <a href="{{ route('employees') }}">Employees<span class="label label-dependencies pull-right" style="margin-top:4px">{{ $countEmployees }}</span></a>
                        <a href="{{ route('deals') }}">Deals<span class="label label-dependencies pull-right" style="margin-top:4px">{{ $countDeals }}</span></a>
                        <a href="{{ route('companies') }}">Companies<span class="label label-dependencies pull-right" style="margin-top:4px">{{ $countCompanies }}</span></a>
                    </li>
                </ul>-->
            </li>
            
            <li>
                <a href="{{ route('sales') }}"><i class="fa fa-shopping-cart"></i> Sales<span class="fa arrow">{{ $countSales }}</span></a>
               
            </li>

            <li>
                <a href="{{ route('finances') }}"><i class="fa fa-shopping-cart"></i> Quotations<span class="fa arrow">{{ $countFinances }}</span></a>
               
            </li>
        </ul>
        @if (Config::get('crm_settings.stats') == 1)
        
            @endif
    </div>

</nav>
