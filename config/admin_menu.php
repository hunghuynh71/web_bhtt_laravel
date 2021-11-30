<?php 
return [
    [
        'name' => 'Tổng quan',
        'module'=>'dashboard',
        'route'=>'admin.dashboard.index',
        'icon' => 'fas fa-tachometer-alt',
        'role' => [1,3]
    ],
    [
        'name' => 'Bán hàng',
        'module'=>'order',
        'route'=>'admin.order.index',
        'icon' => 'fas fa-money-bill',
        'role' => [1,3],
        'items' => [
            [
                'name' => 'Đơn hàng',
                'route' => 'admin.order.index',
                'role' => [1,3],
            ]
        ]
    ],
    [
        'name' => 'Tài khoản',
        'module'=>'user',
        'route'=>'admin.user.index',
        'icon' => 'fas fa-user-circle',
        'role' => [1,2],
        'items' => [
            [
                'name' => 'Danh sách',
                'route' => 'admin.user.index',
                'role' => [1,2],
            ],
            [
                'name' => 'Thêm',
                'route' => 'admin.user.add',
                'role' => [1,2],
            ]
        ]
    ],
    [
        'name' => 'Trang',
        'module'=>'page',
        'route'=>'admin.page.index',
        'icon' => 'fas fa-pager',
        'role' => [1,2],
        'items' => [
            [
                'name' => 'Danh sách',
                'route' => 'admin.page.index',
                'role' => [1,2],
            ],
            [
                'name' => 'Thêm',
                'route' => 'admin.page.add',
                'role' => [1,2],
            ]
        ]
    ],
    [
        'name' => 'Bài viết',
        'module'=>'post',
        'route'=>'admin.post.index',
        'icon' => 'fas fa-blog',
        'role' => [1,2],
        'items' => [
            [
                'name' => 'Danh sách',
                'route' => 'admin.post.index',
                'role' => [1,2],
            ],
            [
                'name' => 'Thêm',
                'route' => 'admin.post.add',
                'role' => [1,2],
            ],
            [
                'name' => 'Danh mục',
                'route' => 'admin.post_category.index',
                'role' => [1,2],
            ]
        ]
    ],
    [
        'name' => 'Sản phẩm',
        'module'=>'product',
        'route'=>'admin.product.index',
        'icon' => 'fab fa-product-hunt',
        'role' => [1,2],
        'items' => [
            [
                'name' => 'Danh sách',
                'route' => 'admin.product.index',
                'role' => [1,2],
            ],
            [
                'name' => 'Thêm',
                'route' => 'admin.product.add',
                'role' => [1,2],
            ],
            [
                'name' => 'Danh mục',
                'route' => 'admin.product_category.index',
                'role' => [1,2],
            ]
        ]
    ]
];
?>