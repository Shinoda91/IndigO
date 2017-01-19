<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/bower_components/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::is('admin') ? "active" : "" }}">
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/post*') ? "active" : "" }}"><a href="{{ route('admin.post.index') }}"><i class="fa fa-list-alt"></i><span>Articles</span></a></li>
            <li class="{{ Request::is('admin/page*') ? "active" : "" }}"><a href="{{ route('admin.page.index') }}"><i class="fa fa-file"></i><span>Pages</span></a></li>
            <li class="{{ Request::is('admin/project*') ? "active" : "" }}"><a href="{{ route('admin.project.index') }}"><i class="fa fa-laptop"></i><span>Project</span></a></li>
            <li class="{{ Request::is('admin/social') ? "active" : "" }}"><a href="{{ route('admin.social.index') }}"><i class="fa fa-share-square-o"></i><span>Social</span></a></li>
            <li class="{{ Request::is('admin/task') ? "active" : "" }}"><a href="{{ route('admin.task.index') }}"><i class="fa fa-tasks"></i><span>Task</span></a></li>
            <li class="{{ Request::is('admin/menu') ? "active" : "" }}"><a href="{{ route('admin.menu.index') }}"><i class="fa fa-bars"></i><span>Menu</span></a></li>
            <li class="{{ Request::is('admin/settings') ? "active" : "" }}"><a href="{{ route('admin.settings.edit', 1) }}"><i class="fa fa-gear"></i><span>Settings</span></a></li>

            <li class="{{ Request::is('backend/roles') ? "active" : "" }}"><a href="{{ url('backend/roles') }}"><i class="fa fa-users"></i><span>Roles</span></a></li>
            <li class="{{ Request::is('backend/users') ? "active" : "" }}"><a href="{{ url('backend/users') }}"><i class="fa fa-users"></i><span>User</span></a></li>
            <li><a href="#"><i class="fa fa-comment"></i><span>Komentar</span></a></li>
            <li><a href="#"><i class="fa fa-picture-o"></i><span>Media</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>