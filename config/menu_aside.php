<?php

return [
    'admin' => [
        [
            'name' => 'dashboard',
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid',
            'route' => 'admin.dashboard',
            'submenu' => [],
            'number' => 1
        ],
        [
            'name' => 'banner',
            'title' => 'Banner hình ảnh',
            'icon' => 'bi bi-grid',
            'route' => 'admin.banner.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'order',
            'title' => 'Quản lý đơn hàng',
            'icon' => 'bi bi-grid',
            'route' => 'admin.order',
            'submenu' => [],
            'number' => 10
        ],
        [
            'name' => 'information',
            'title' => 'Đăng ký nhận thông tin',
            'icon' => 'bi bi-grid',
            'route' => 'admin.information',
            'submenu' => [],
            'number' => 10
        ],
        [
            'name' => 'header',
            'title' => 'Menu header',
            'icon' => 'bi bi-grid',
            'route' => 'admin.header.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'category',
            'title' => 'Danh mục',
            'icon' => 'bi bi-grid',
            'route' => 'admin.category.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'product',
            'title' => 'Sản phẩm',
            'icon' => 'bi bi-grid',
            'route' => 'admin.product.index',
            'submenu' => [],
            'number' => 2
        ],
        [
            'name' => 'video',
            'title' => 'Video',
            'icon' => 'bi bi-grid',
            'route' => 'admin.video.index',
            'submenu' => [],
            'number' => 3
        ],
        [
            'name' => 'new',
            'title' => 'Tin tức',
            'icon' => 'bi bi-grid',
            'route' => 'admin.new.index',
            'submenu' => [],
            'number' => 4
        ],
        [
            'name' => 'collection',
            'title' => 'Bộ sưu tập',
            'icon' => 'bi bi-grid',
            'route' => null,
            'submenu' => [
                [
                    'title' => 'Danh mục',
                    'route' => 'admin.collection.index',
                    'name' => 'index'
                ],
                [
                    'title' => 'Danh sách',
                    'route' => 'admin.collection.info',
                    'name' => 'list'
                ]
            ],
            'number' => 5
        ],
        [
            'name' => 'project',
            'title' => 'Dự án',
            'icon' => 'bi bi-grid',
            'route' => null,
            'submenu' => [
                [
                    'title' => 'Danh mục',
                    'route' => 'admin.project.index',
                    'name' => 'index'
                ],
                [
                    'title' => 'Danh sách dự án',
                    'route' => 'admin.project.info',
                    'name' => 'list'
                ]
            ],
            'number' => 6
        ],
        [
            'name' => 'comment',
            'title' => 'Nhận xét của khách hàng',
            'icon' => 'bi bi-grid',
            'route' => 'admin.comment.index',
            'submenu' => [],
            'number' => 9
        ],
        [
            'name' => 'contact_us',
            'title' => 'Liên hệ với chúng tôi',
            'icon' => 'bi bi-grid',
            'route' => 'admin.contact_us.index',
            'submenu' => [],
            'number' => 7
        ],
        [
            'name' => 'setting',
            'title' => 'Cài đặt',
            'icon' => 'bi bi-grid',
            'route' => 'admin.setting.index',
            'submenu' => [],
            'number' => 8
        ],
        [
            'name' => 'customer_support',
            'title' => 'Hỗ trợ khách hàng',
            'icon' => 'bi bi-grid',
            'route' => 'admin.customer_support.index',
            'submenu' => [],
            'number' => 9
        ],
        [
            'name' => 'introduce',
            'title' => 'Giới thiệu cửa hàng',
            'icon' => 'bi bi-grid',
            'route' => 'admin.introduce.index',
            'submenu' => [],
            'number' => 10
        ],
]
];
