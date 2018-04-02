<?php
return [
    // Insert mặc định status hiển thị
    'form'=>[
        'user'=>[
            'access'=>[
                'status'=>[
                    'status'=>true,
                    'value'=>1
                ],
                'sticky'=>[
                    'status'=>true,
                    'value'=>0
                ]                
            ],
            'account'=>[
                'status'=>[
                    'status'=>true,
                    'value'=>1
                ],
                'active'=>[
                    'status'=>true,
                    'value'=>1
                ]    
            ]
        ],
        'news'=>[
            'category'=>[
                'status'=>[
                    'status'=>true,
                    'value'=>1
                ],
                'sticky'=>[
                    'status'=>true,
                    'value'=>0
                ]                
            ],
            'news'=>[
                'status'=>[
                    'status'=>true,
                    'value'=>1
                ],
                'sticky'=>[
                    'status'=>true,
                    'value'=>1
                ]    
            ]
        ],
        'menu'=>[
            'group'=>[
                'status'=>[
                    'status'=>true,
                    'value'=>1
                ],
                'sticky'=>[
                    'status'=>true,
                    'value'=>0
                ]                
            ],
            'menu'=>[
                'status'=>[
                    'status'=>true,
                    'value'=>1
                ],
                'sticky'=>[
                    'status'=>true,
                    'value'=>1
                ]    
            ]
        ],
        'product'=>[
            'category'=>[
                'status'=>false,
                'sticky'=>true      
            ],
            'product'=>[
                'promotion'=> true,
                'new'=> true,
                'status'=>true,
                'sticky'=>true
            ]
        ],

    ],


    // Nhiều ngôn ngữ
    'languages'=>[
        'status'=>false
    ],

    // NHiều hình ảnh
    'file'=>[
        // Hình ảnh
        'images'=>[
            'news' => [
                'news'=> [
                    'upload'=>true,
                    'muti'=>true,
                    'limit'=>3
                ],
                'category' => [
                    'upload'=>true,
                    'muti'=>false,
                    'limit'=> 3  
                ]
            ],            
            'product' => [
                'product'=> [
                    'upload'=>true,
                    'muti'=>true,
                    'limit'=>3,

                    'properties_status'=>true,
                    'properties_muti'=>true,
                    'properties_limit'=>15,
                ],
                'category' => [
                    'upload'=>true,
                    'muti'=>true,
                    'limit'=> 3  
                ]
            ],
            'user' => [
                'access'=> [
                    'upload'=>false,
                    'muti'=>false,
                    'limit'=>3
                ],
                'account' => [
                    'upload'=>true,
                    'muti'=>false,
                    'limit'=> 1
                ]
            ],
            'menu' => [
                'menu'=> [
                    'upload'=>true,
                    'muti'=>false,
                    'limit'=>3
                ],
                'group' => [
                    'upload'=>true,
                    'muti'=>false,
                    'limit'=> 3  
                ]
            ],
        ],
        // Excel
        'excel'=>[
            'news'=>[
                'category'=>true,
                `news`=>true
            ]
        ]
    ],
    // Phân Quyền
    'access'=>[
        "product"=> [
            "title" => "Sản phẩm",
            "action"=>[
                "view"=>["title"=>"Xem","checked"=>false],
                "add"=>["title"=>"Thêm","checked"=>false],
                "edit"=>["title"=>"Sửa","checked"=>false],
                "delete"=>["title"=>"Xóa","checked"=>false]
            ]
        ], 
        "news"=> [
            "title" => "Tin tức",
            "action"=>[
            "view"=>["title"=>"Xem","checked"=>false],
            "add"=>["title"=>"Thêm","checked"=>false],
            "edit"=>["title"=>"Sửa","checked"=>false],
            "delete"=>["title"=>"Xóa","checked"=>false]
            ]
        ],
        "account"=> [
            "title" => "Tài khoản",
            "action"=>[
            "view"=>["title"=>"Xem","checked"=>false],
            "add"=>["title"=>"Thêm","checked"=>false],
            "edit"=>["title"=>"Sửa","checked"=>false],
            "delete"=>["title"=>"Xóa","checked"=>false]
            ]
        ],
        "gallery"=> [
            "title" => "Hình ảnh",
            "action"=>[
            "view"=>["title"=>"Xem","checked"=>false],
            "add"=>["title"=>"Thêm","checked"=>false],
            "edit"=>["title"=>"Sửa","checked"=>false],
            "delete"=>["title"=>"Xóa","checked"=>false]
            ]
        ], 
        "cart"=> [
            "title" => "Giỏ hàng",
            "action"=>[
            "view"=>["title"=>"Xem","checked"=>false],
            "add"=>["title"=>"Thêm","checked"=>false],
            "edit"=>["title"=>"Sửa","checked"=>false],
            "delete"=>["title"=>"Xóa","checked"=>false]
            ]
        ], 
        "config"=> [
            "title" => "Cấu hình website",
            "action"=>[
                "view"=>["title"=>"Xem","checked"=>false],
                "edit"=>["title"=>"Thay đổi","checked"=>false]
            ]
        ] 
    ]
];
?>