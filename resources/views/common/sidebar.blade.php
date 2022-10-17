<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="background-color: #009900;">
            <div class="pull-left image">
                <img src="{{asset('').auth()->guard('admin')->user()->photo.'?' . random_int(0, 1000)}}" class="img-circle" alt="{{ auth()->guard('admin')->user()->first_name }} {{ auth()->guard('admin')->user()->last_name }} Image">
            </div>
            <div class="pull-left info"  style="margin-left: 10px;">
                <h4>{{ auth()->guard('admin')->user()->fullname }}</h4>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li class="header">{{ trans('labels.navigation') }}</li>

            <li class="treeview {{ Request::is('admin/dashboard/*') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/dashboard/this_month')}}">
                    <i class="fa fa-dashboard"></i> <span>{{ trans('labels.header_dashboard') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/cities') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/cities')}}">
                    <i class="fa fa-map-marker"></i> <span>{{ trans('labels.Cities') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/secteurs') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/secteurs')}}">
                    <i class="fa fa-handshake-o"></i> <span>{{ trans('labels.Secteurs') }}</span>
                </a>
            </li>


            <li class="treeview {{Request::is('admin/headers') || Request::is('admin/announces') || Request::is('admin/user_home_categories') || Request::is('admin/auctions')? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-street-view" aria-hidden="true"></i>
                    <span>{{ trans('labels.User Home') }} </span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/headers') ? 'active' : '' }}"><a href="{{ URL::to('admin/headers')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Headers') }}</a></li>
                    <li class="{{ Request::is('admin/announces') ? 'active' : '' }}"><a href="{{ URL::to('admin/announces')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Announces') }}</a></li>
                    <li class="{{ Request::is('admin/user_home_categories') ? 'active' : '' }}"><a href="{{ URL::to('admin/user_home_categories')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.User home categories') }}</a></li>
                    <li class="{{ Request::is('admin/auctions') ? 'active' : '' }}"><a href="{{ URL::to('admin/auctions')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Auctions sales') }}</a></li>
                </ul>
            </li>


            <li class="treeview {{Request::is('admin/categories') || Request::is('admin/addcategory') || Request::is('admin/editcategory/*') || Request::is('admin/subcategories') || Request::is('admin/subcategories/*') || Request::is('admin/addsubcategory') || Request::is('admin/editsubcategory/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span>{{ trans('labels.link_categories') }} </span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/categories') || Request::is('admin/addcategory') || Request::is('admin/editcategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/categories')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_main_categories') }}</a></li>
                    <li class="{{ Request::is('admin/subcategories') || Request::is('admin/subcategories/*') || Request::is('admin/addsubcategory') ||  Request::is('admin/editsubcategory/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/subcategories')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_sub_categories') }}</a></li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('admin/users_activities') || Request::is('admin/shops_activities') || Request::is('admin/activities') || Request::is('admin/addactivity') || Request::is('admin/editactivity/*')
            || Request::is('admin/activitiestypes') || Request::is('admin/addactivitytype') || Request::is('admin/editactivitytype/*')? 'active' : ''    }}">
                <a href="#">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <span>{{ trans('labels.Activities') }} </span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/activitiestypes') || Request::is('admin/addactivitytype') || Request::is('admin/editactivitytype/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/activitiestypes')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Activity Types') }}</a></li>
                    <li class="{{ Request::is('admin/activities') || Request::is('admin/addactivity') || Request::is('admin/editactivity/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/activities')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.Activities List') }}</a></li>
                    <li class="{{ Request::is('admin/shops_activities') ? 'active' : '' }}"><a href="{{ URL::to('admin/shops_activities')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.ShopsActivities') }}</a></li>
                    <li class="{{ Request::is('admin/users_activities') ? 'active' : '' }}"><a href="{{ URL::to('admin/users_activities')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.UsersActivities') }}</a></li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('admin/versions') || Request::is('admin/addversion') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/versions')}}">
                    <i class="fa fa-signal"></i> <span>{{ trans('labels.App versions') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/commercials') || Request::is('admin/addcommercial') || Request::is('admin/editcommercial/*') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/commercials')}}">
                    <i class="fa fa-users"></i> <span>{{ trans('labels.link_commercials') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/products') || Request::is('admin/addproduct') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/products')}}">
                    <i class="fa fa-database"></i> <span>{{ trans('labels.link_products') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/shops') || Request::is('admin/addshop') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/shops')}}">
                    <i class="fa fa-home" aria-hidden="true"></i> <span>{{ trans('labels.link_shops') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/card_orders') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/card_orders')}}">
                    <i class="fa fa-id-card" aria-hidden="true"></i> <span>{{ trans('labels.link_card_orders') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/customers') ? 'active' : '' }}  {{ Request::is('admin/addcustomers') ? 'active' : '' }}  {{ Request::is('admin/editcustomers/*') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/customers')}}">
                    <i class="fa fa-users" aria-hidden="true"></i> <span>{{ trans('labels.link_customers') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/coupons') ? 'active' : '' }} {{ Request::is('admin/editcoupons/*') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/coupons')}}" ><i class="fa fa-tablet" aria-hidden="true"></i> <span>{{ trans('labels.link_coupons') }}</span></a>
            </li>

            <li class="treeview {{ Request::is('admin/devices') ? 'active' : '' }} {{ Request::is('admin/viewdevices/*') ? 'active' : '' }} {{ Request::is('admin/notifications') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/devices')}} ">
                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                    <span>{{ trans('labels.link_notifications') }}</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/devices') ? 'active' : '' }} {{ Request::is('admin/viewdevices/*') ? 'active' : '' }}">
                        <a href="{{ URL::to('admin/devices')}}"><i class="fa fa-circle-o"></i>{{ trans('labels.link_devices') }} </a>
                    </li>
                    <li class="{{ Request::is('admin/notifications') ? 'active' : '' }} ">
                        <a href="{{ URL::to('admin/notifications') }}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_send_notifications') }}</a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('admin/orders') ? 'active' : '' }}  {{ Request::is('admin/addOrders') ? 'active' : '' }}  {{ Request::is('admin/vieworder/*') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/orders')}}" ><i class="fa fa-list-ul" aria-hidden="true"></i> <span> {{ trans('labels.link_orders') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/shippingmethods') ? 'active' : '' }} {{ Request::is('admin/upsShipping') ? 'active' : '' }} {{ Request::is('admin/flateRate') ? 'active' : '' }}">
                <a href="{{ URL::to('admin/shippingmethods')}}"><i class="fa fa-truck" aria-hidden="true"></i> <span> {{ trans('labels.link_shipping_methods') }}</span>
                </a>
            </li>

            <li class="treeview {{ Request::is('admin/statscustomers') ? 'active' : '' }} {{ Request::is('admin/outofstock') ? 'active' : '' }} {{ Request::is('admin/statsproductspurchased') ? 'active' : '' }} {{ Request::is('admin/statsproductsliked') ? 'active' : '' }} {{ Request::is('admin/lowinstock') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <span>{{ trans('labels.link_reports') }}</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/lowinstock') ? 'active' : '' }} "><a href="{{ URL::to('admin/lowinstock')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_products_low_stock') }}</a></li>
                    <li class="{{ Request::is('admin/outofstock') ? 'active' : '' }} "><a href="{{ URL::to('admin/outofstock')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_out_of_stock_products') }}</a></li>
                <!-- <li class="{{ Request::is('admin/productsstock') ? 'active' : '' }} "><a href="{{ URL::to('admin/stockin')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.stockin') }}</a></li>-->
                    <li class="{{ Request::is('admin/statscustomers') ? 'active' : '' }} "><a href="{{ URL::to('admin/statscustomers')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_customer_orders_total') }}</a></li>
                    <li class="{{ Request::is('admin/statsproductspurchased') ? 'active' : '' }}"><a href="{{ URL::to('admin/statsproductspurchased')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_total_purchased') }}</a></li>
                    <li class="{{ Request::is('admin/statsproductsliked') ? 'active' : '' }}"><a href="{{ URL::to('admin/statsproductsliked')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_products_liked') }}</a></li>
                </ul>
            </li>

            <li class="treeview {{ Request::is('admin/banners') ? 'active' : '' }} {{ Request::is('admin/addbanner') ? 'active' : '' }} {{ Request::is('admin/editbanner/*') ? 'active' : '' }} {{ Request::is('admin/pages') ? 'active' : '' }}  {{ Request::is('admin/addpage') ? 'active' : '' }}  {{ Request::is('admin/editpage/*') ? 'active' : '' }}  {{ Request::is('admin/appSettings') ? 'active' : '' }} {{ Request::is('admin/admobSettings') ? 'active' : '' }} {{ Request::is('admin/applabel') ? 'active' : '' }} {{ Request::is('admin/addappkey') ? 'active' : '' }} {{ Request::is('admin/applicationapi') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-gears" aria-hidden="true"></i>
                    <span> {{ trans('labels.link_app_settings') }}</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/appsettings') ? 'active' : '' }}"><a href="{{ URL::to('admin/appsettings')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_setting') }}</a></li>

                </ul>
            </li>

            <li class="treeview {{ Request::is('admin/admins') ? 'active' : '' }} {{ Request::is('admin/addadmins') ? 'active' : '' }} {{ Request::is('admin/editadmin/*') ? 'active' : '' }} {{ Request::is('admin/manageroles') ? 'active' : '' }} {{ Request::is('admin/addadminType') ? 'active' : '' }} {{ Request::is('admin/editadminType/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span> {{ trans('labels.Manage Admins') }}</span> <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li class="{{ Request::is('admin/admins') ? 'active' : '' }} {{ Request::is('admin/addadmins') ? 'active' : '' }} {{ Request::is('admin/editadmin/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/admins')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_admins') }}</a></li>
                    <li class="{{ Request::is('admin/manageroles') ? 'active' : '' }} {{ Request::is('admin/addadminType') ? 'active' : '' }} {{ Request::is('admin/editadminType/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/manageroles')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_manage_roles') }}</a></li>

                    <li style="display: none" class="{{ Request::is('admin/categoriesroles') ? 'active' : '' }} {{ Request::is('admin/categoriesroles') ? 'active' : '' }} {{ Request::is('admin/categoriesroles/*') ? 'active' : '' }}"><a href="{{ URL::to('admin/categoriesroles')}}"><i class="fa fa-circle-o"></i> {{ trans('labels.link_categoriesroles') }}</a></li>

                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>