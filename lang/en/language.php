<?php

return [

    'logout' => 'Logout',
    'success' => 'Success',

    // dashboard
    'dashboard' => 'Dashboard',

    // filter
    'filter' => 'Filter',
    'filter_mode' => 'Filter mode',
    'refresh' => 'Refresh',
    'add_new' => 'Add new',
    'add' => 'Add',

    'delete' => 'Delete',
    'edit' => 'Edit',
    'restore' => 'Restore',
    'display' => 'Display',
    'agree' => 'Agree',
    'cancel' => 'Cancel',
    'action' => 'Action',
    'have' => 'Have',
    'does_not_have' => 'Does not have',

    'ordinal_number' => 'Ordinal number',

    // profile
    'profile' => 'Profile',
    'profile_info' => 'Profile information',
    'admin_info' => 'Administrative information',
    'avatar' => 'Avatar',
    'lang' => 'Language',
    'user_name' => 'Employee name',
    'enter_user_name' => 'Enter employee name',
    'first_name' => 'First name',
    'enter_first_name' => 'Enter first name',
    'last_name' => 'Last name',
    'enter_last_name' => 'Enter last name',
    'birthday' => 'Birthday',
    'choose_birthday' => 'Choose birthday',
    'gender' =>' Gender',
    'genders' => ['Male', 'Female', 'Other'],
    'email' => 'Email',
    'enter_email' => 'Enter email',
    'phone' => 'Phone',
    'enter_phone' => 'Enter cell phone',
    'hometown' => 'Hometown',
    'choose_a_prefecture' => 'Choose a prefecture',
    'choose_a_district' => 'Choose a district',
    'choose_a_commune' => 'Choose a commune',
    'identity_card' => 'Identity card',
    'enter_identity_card' => 'Enter identity card',
    'prefecture' => 'Province / City',
    'district' => 'District',
    'commune' => 'Commune',

    'id' => 'ID',
    'full_name' => 'Full name',
    'operation' => 'Operation',

    // User
    'user_list' => 'Employee list',
    'user_info' => 'Employee information',
    'user_management' => 'User management',
    'update_user_info' => 'Update employee information',
    'create_new_user' => 'Create new employee',

    'by_id' => 'By ID',
    'by_fullname' => 'By fullname',
    'by_email' => 'By email',
    'by_phone' => 'By number phone',
    'by_gender' => 'By gender',

    'delete_user' => 'Do you want to delete this employee?',
    'restore_user' => 'Do you want to restore this employee?',

    'filter_by_retired_user' => 'Filter by retired employee.',

    // button
    'save' => 'Save',
    'reset' => 'Reset',
    'cancel' => 'Cancel',

    // product category
    'product_category' => 'Product category',
    'product_category_list' => 'List of product categories',
    'add_product_category' => 'Add new product category',
    'category_name' => 'Category name',
    'choose_parent_category' => 'Choose parent category',
    'enter_category_name' => 'Enter category name',
    'is_parent_category' => 'Is the parent category',
    'id_parent_category' => 'ID parent category',
    'slug' => 'Slug',
    'thumbnail' => 'Thumbnail',
    'custom_validate_parent_id' => 'Please select parent category again',
    'created_by' => 'Created by',
    'updated_by' => 'Updated by',
    'convert_child_cate_1' => 'Convert all existing subcategories into subcategories of another parent category.',
    'update_category' => 'Update category',
    'create_category' => 'Create category',
    'delete_category' => 'Do you want to delete this product category?',
    'choose_brand' => 'Choose brand',

        
    // product
    'product' => 'Product',
    'product_list' => 'Product list',
    'add_product' => 'Add product',
    'edit_product' => 'Edit product',
    'product_name' => 'Product name',
    'enter_product_name' => 'Enter product name',
    'slug' => 'Slug',
    'sku' => 'Sku',
    'price' => 'Price',
    'stock' => 'Stock',
    'discount' => 'Discount (%)',
    'description' => 'Description',
    'choose_category' => 'Choose category',
    'gallery' => 'Gallery',
    'upload_img' => 'Upload image',
    'options' => 'Options',
    'variations' => 'Variations',
    'variation' => 'Variation',
    'option_name' => 'Attribute Name',
    'enter_option_name' => 'Enter attribute name',
    'option_value' => 'Value',
    'enter_option_value' => 'Enter values separated by "|"',
    'max_option' => 'Only 2 attributes can be selected',
    'QA_delete_option' => 'Are you sure you want to delete this attribute?',
    'variation_generate' => 'Create variations from existing options',
    'QA_save_option' => 'Do you want to save the current properties?',
    'QA_save_option_2' => 'If saved, product variations will also be changed with the current attribute.',
    'product_variation' => 'There are product variations',
    'product_not_variation' => "It's a regular product",
    'product_type' => 'Product type',
    'enter_price' => 'Enter price',
    'enter_stock' => 'Enter stock',
    'enter_sku' => 'Enter sku',
    'image' => 'Image',
    'delete_product'=> 'Do you want to delete this product?',
    'product_keyword' => 'Seach by product name, product sku',
    'by_category' => 'By category',
    'product_feature' => 'Feature product',
    'status' =>' Status',
    'status_s' => ['Not sell', 'Sell'],
    'out_stock' => 'Out of stock',
    'in_stock' => 'In stock',
    'attribute' => 'Attribute',

    // brand
    'brand' => 'Brand',
    'brand_list' => 'Brand list',
    'delete_brand' => 'Do you want to remove this brand?',
    'by_brand_name' => 'Filter by brand name',

    // coupon
    'coupon' => 'Coupon',
    'started_at' => 'Started at',
    'ended_at' => 'Ended at',
    'coupon_management' => 'Coupon management',
    'update_coupon' => 'Update coupon',
    'create_new_coupon' => 'Create new coupon',

    // order
    'order_management' => 'Order managerment',
    'order_list' => 'Order list',
    'edit_order' => 'Order edit',
    'order' => [
        'item_list' => 'Product list',
        'status' => [
            'Order Success',
            'Order successfully paid',
            'Delivery',
            'Delivery Paid',
            'Delivery successful',
            'Cancellation',
        ],
        'payment_method' => [
            'Cash on delivery',
            'Using PayPal',
        ],
    ],

    'customer_id' => 'Customer ID',
    'customer_account_name' => 'Customer name',
    'consignee_name' => 'Name of consignee',
    'consignee_phone' => 'Phone of consignee',

    // customer
    'customer_management' => 'Customer management',
    'customer_list' => 'Customer list',
    'user_profile' => 'Self information',

    // frontend
    'home' => 'Home',
    'see_more' => 'See more',
    'all_categories' => 'All categories',
    'product_new' => 'New product',
    'display_products' => 'Showing products :from-:to of :total result',
    'customer_login' => [
        'title' => 'Login',
        'title_header' => 'Sign in',
        'account_inactive' => ':attribute này chưa được kích hoạt. Vui lòng đăng ký để kích hoạt :attribute',
    ],
    'customer_register' => [
        'title' => 'Register',
        'exists' => 'This :attribute is already enabled, please use another :attribute!',
    ],

    'or' => 'or',

    'verification' => 'Verification',
    'enter_code' => 'Enter code',
    'code' => 'Code',
    'password' => 'Password',
    'enter_password' => 'Enter password',
    'confirm_password ' => 'Confirm password',
    'enter_confirm_password ' => 'Re-enter your password',

    // cart 
    'message_cart' => [
        'out_stock' => 'Out of stock!',
        'max_add' => 'You can only add up to :quantity products to your cart.',
        'max_add_in_cart' => 'You can only add up to :quantity products to the cart because this product is already in the cart.',
    ],
    'shopping_cart' => 'Shopping cart',
    'quantity' => 'Quantity',
    'subtotal' => 'Subtotal',
    'total' => 'Total',
    'checkout' => 'Checkout',
    'delivery_address' => 'Delivery address',
    'shipping' => 'Shipping',
    'free_shipping' => 'Free shipping',
    'shopping_checkout' => 'Shopping checkout',
    'billing_information' => 'Billing information',
    'cash_on_delivery' => 'Cash on delivery',
    'order_completed' => 'Order completed',
    'payment_method' => 'Payment method',
    'created_at' => 'Created at',
    'reuquired_comment' => 'To rate, comment on this product you must be logged in and have purchased this product.',
    'number_review' => ':quantity review',
    'product_detail' => 'Product detail',
    'product_wishlist' => 'Wishlist',

    // change password
    'old_password' => 'Old password',
    'new_password' => 'New password',
    'change_password' => 'Change password',
    'input_old_password' => 'Enter your old password',
    'input_new_password' => 'Enter your new password',
    'input_confirm_password' => 'Re-enter your old password',
    'change' => 'Change',
    'return' => 'Return',

    'self_info' => 'Self information',
    'sign_up' => 'Sign up',
    'verify' => 'Verify',
    'who' => 'Who: ',
    'login' => 'Login',

    // mail user register
    'mail' => [
        'register' => [
            'subject' => ':website congratulates you on your successful account registration.',
            'title' => 'Hello :fullName joined us!',
            'content' => [
                'content_1' => 'Below are the basic information for logging into our service.',
                'created_at' => 'Your account was created on:',
                'mail_adress'=> 'Email address:',
                'password' => 'Password:',
                'user_name' => 'Username:',
                'link' => 'Click the link to go to the login page',
                'content_2' => 'Information such as address, phone number, date of birth,... will be easily updated as soon as you log in to our service.',
            ]
        ],
        'customer_order' => [
            'subject' => 'Đặt hàng thành công.',
            'title' => 'Xin chào :fullName, cảm ơn bạn đã đặt mua hàng từ chúng tôi!',
            'content' => [
                'content_1' => 'Dưới đây là thông tin sản phẩm bạn đã đặt vào ngày :date.',
            ]
        ],
    ],
    'author' => 'Author',
    // 'website' => 'Website shopping vip pro',
    'website' => 'V Shop',
];
?>