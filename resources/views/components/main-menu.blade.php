{{ config(['adminlte.classes_sidebar' => 'sidebar-light-orange nav-compact',
           'adminlte.classes_topnav' => 'navbar-orange navbar-light',
           'adminlte.classes_brand' => 'navbar-light',
           ]) }}
{{ config([
       'adminlte.menu' => [
        [
            'text' => 'search',
            'search' => false,
        ],
        [
            'text' => 'Dashboard',
            'url'     => route('home'),
            'icon' => 'fas fa-tachometer-alt',
        ],
        [
            'text' => 'account_settings',
            'icon' => 'fas fa-fw fa-user-cog',
            'submenu' => [
                    [
                        'text' => 'profile',
                        'url'  => route('home.profile') ,
                        'icon' => 'fas fa-fw fa-user',
                    ],
                    [
                        'text' => 'browser_sessions',
                        'url'  => route('home.sessions') ,
                        'icon' => 'fas fa-fw fa-user',
                        'label'       => 'New',
                        'label_color' => 'danger',
                    ],
                    [
                        'text' => 'change_password',
                        'url'  => route('home.update-password'),
                        'icon' => 'fas fa-fw fa-key',
                        'label'       => 'New',
                        'label_color' => 'danger',
                    ],
                    [
                        'text' => 'enable_2fa',
                        'url'  => route('home.2fa'),
                        'icon' => 'fas fa-fw fa-user-lock',
                        'label'       => 'New',
                        'label_color' => 'danger',
                    ],
                ]
        ],
        ['header' => 'SYSTEMS'],
        [
            'text'       => 'SPU',
            'icon_color' => 'pink',
            'url'        => route('spu.home'),
            'icon'       => 'fas fa-th',
        ],
        [
            'text'       => 'SPA',
            'icon_color' => 'yellow',
            'url'        => route('spa.home'),
            'icon'       => 'fas fa-th',
        ],
        [
            'text'       => 'SPAI',
            'icon_color' => 'lightblue',
            'url'        => route('spai.home'),
            'icon'       => 'fas fa-th',
        ],
        [
            'text'       => 'SPF',
            'icon_color' => 'teal',
            'url'        => route('spf.home'),
            'icon'       => 'fas fa-th',
        ],
        [
             'header'    => 'SETUP'
        ],
        [
            'text' => 'Manage User',
            'url'  => 'admin/blog',
            'can'  => 'create-user',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text'  => 'Manage User Role',
            'url'   => route('Role'),
            'can'   => 'create-user',
            'icon'  => 'fas fa-user-lock',
            'active'=> ['user/role/edit/*'],
        ],
        [
            'text'  => 'Manage Role Permission',
            'url'   => route('Permission'),
            'can'   => 'create-user',
            'icon'  => 'fas fa-key',
            'active'=> ['user/permission/edit/*'],
        ],
    ],
    ]) }}

