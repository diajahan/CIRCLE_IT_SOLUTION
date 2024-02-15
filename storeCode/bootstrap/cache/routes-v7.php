<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/share-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.shareReport',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nhUjzPA6S8ZGudpV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::55Fg8so4wUS6BCor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/view-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.all.products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/video-tutorials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'video.tutorials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/picture-tutorials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'picture.tutorials',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submite-your-own-craft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ahd8gwbJZoRUSuPY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/submit-your-craft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q1MsgKOq9JPIOXgb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.to.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/load-cart-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'load.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/view-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/place-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place.order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms-and-condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms.condition',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy.policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return.policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/baloon-craft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i0yzNpFFxBhomAos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/kaktaruya-craft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t576IvaUahgGUbYa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/braslet-craft' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6GRfNAm1X9hDBC4f',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-lists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-new-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.category',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.category',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/orders-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.order',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.order',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manage-blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FXtAf97sBwz95ELU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iH8XzQa7sWElHiso',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-new-blog-step1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rRsdBQ4zH26IVUw9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog-id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::30xqrn6OWh92Wcgy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-blog-content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TZpLcmyIglnW9exx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manage-video-tutorials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q2kaksJ5BiZIsP5d',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-new-video' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f7HQQohn3N9aC8rx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-video-tutorial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oU7BVhxLle3DqjBz',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/optimize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OTyXeYWZ7jEY1WD4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/route-chache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xso4l731N3QSpaDL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cache-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::klKwPHVu0BjvqVWQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/route-clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9FLpdXVqFYxRDfaT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_ignition/s(?|cripts/([^/]++)(*:37)|tyles/([^/]++)(*:58))|/view\\-(?|single\\-(?|product/([^/]++)(*:103)|order/([^/]++)(*:125))|cate\\-products/([^/]++)(*:157)|blog/([^/]++)(*:178))|/buy\\-now/([^/]++)(*:205)|/delete(?|_cart_item/([^/]++)(*:242)|/([^/]++)(*:259)|image/([^/]++)(*:281)|\\-(?|blog/([^/]++)(*:307)|video\\-tutorial/([^/]++)(*:339)))|/edit(?|\\-(?|product/([^/]++)(*:378)|video/([^/]++)(*:400))|_(?|category(?|/([^/]++)(*:433)|\\-delete/([^/]++)(*:458))|order/([^/]++)(*:481)|delete_order/([^/]++)(*:510)))|/update\\-product/([^/]++)(*:545))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.scripts',
          ),
          1 => 
          array (
            0 => 'script',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.styles',
          ),
          1 => 
          array (
            0 => 'style',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'single.product',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.single.order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cate.products',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s33mO97WaZKylSqV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'buy.now',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.cart.item',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.product',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.images',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::19fZxZsjHw38nLKa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zU1jkbnp8ueRhho5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      378 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.product',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i54A1fIaH65CjVVE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.category',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.delete.category',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.delete.order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.product',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableRunnableSolutions',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.shareReport' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/share-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
          1 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionConfigValueEnabled:enableShareButton',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ShareReportController',
        'as' => 'ignition.shareReport',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/scripts/{script}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\ScriptController',
        'as' => 'ignition.scripts',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/styles/{style}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Facade\\Ignition\\Http\\Middleware\\IgnitionEnabled',
        ),
        'uses' => 'Facade\\Ignition\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'Facade\\Ignition\\Http\\Controllers\\StyleController',
        'as' => 'ignition.styles',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nhUjzPA6S8ZGudpV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::nhUjzPA6S8ZGudpV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::55Fg8so4wUS6BCor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000466559e40000000077687ece";}";s:4:"hash";s:44:"a0evDtPietjIIr1rQteI7FSle00ZfMFCaJb8snuB+vA=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::55Fg8so4wUS6BCor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'front.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@frontPage',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@frontPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.all.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@allProducts',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@allProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'view.all.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'single.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-single-product/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@singleProduct',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@singleProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'single.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cate.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-cate-products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@cateProducts',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@cateProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cate.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'video.tutorials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'video-tutorials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@videoTutorials',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@videoTutorials',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'video.tutorials',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'picture.tutorials' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'picture-tutorials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@pictureTutorials',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@pictureTutorials',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'picture.tutorials',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ahd8gwbJZoRUSuPY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'submite-your-own-craft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@submitYourCraft',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@submitYourCraft',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ahd8gwbJZoRUSuPY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q1MsgKOq9JPIOXgb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'submit-your-craft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@submitCraft',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@submitCraft',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::q1MsgKOq9JPIOXgb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.to.cart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@addToCart',
        'controller' => 'App\\Http\\Controllers\\CartController@addToCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.to.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buy.now' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buy-now/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@buyNow',
        'controller' => 'App\\Http\\Controllers\\CartController@buyNow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'buy.now',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.cart' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@updateCart',
        'controller' => 'App\\Http\\Controllers\\CartController@updateCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'load.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'load-cart-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@loadCart',
        'controller' => 'App\\Http\\Controllers\\CartController@loadCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'load.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@viewCart',
        'controller' => 'App\\Http\\Controllers\\CartController@viewCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'view.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.cart.item' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete_cart_item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@deleteCartItem',
        'controller' => 'App\\Http\\Controllers\\CartController@deleteCartItem',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.cart.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CheckoutController@checkoutPage',
        'controller' => 'App\\Http\\Controllers\\CheckoutController@checkoutPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'view.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'place-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CheckoutController@placeOrder',
        'controller' => 'App\\Http\\Controllers\\CheckoutController@placeOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'place.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms.condition' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-and-condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@termsAndCondition',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@termsAndCondition',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms.condition',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy.policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@privacyPolicy',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@privacyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'privacy.policy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return.policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@returnPolicy',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@returnPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'return.policy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s33mO97WaZKylSqV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-blog/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@picturalTutorial',
        'controller' => 'App\\Http\\Controllers\\BlogController@picturalTutorial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::s33mO97WaZKylSqV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i0yzNpFFxBhomAos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'baloon-craft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@ballonCraftTutorial',
        'controller' => 'App\\Http\\Controllers\\BlogController@ballonCraftTutorial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i0yzNpFFxBhomAos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t576IvaUahgGUbYa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'kaktaruya-craft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@kaktaruyaCraftTutorial',
        'controller' => 'App\\Http\\Controllers\\BlogController@kaktaruyaCraftTutorial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::t576IvaUahgGUbYa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6GRfNAm1X9hDBC4f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'braslet-craft',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@brasletCraftTutorial',
        'controller' => 'App\\Http\\Controllers\\BlogController@brasletCraftTutorial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6GRfNAm1X9hDBC4f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'alreadyLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@LoginPage',
        'controller' => 'App\\Http\\Controllers\\LoginController@LoginPage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\LoginController@adminLogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@dashboard',
        'controller' => 'App\\Http\\Controllers\\BackEndController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\LoginController@adminLogout',
        'controller' => 'App\\Http\\Controllers\\LoginController@adminLogout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-lists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@productList',
        'controller' => 'App\\Http\\Controllers\\BackEndController@productList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'view.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@addProduct',
        'controller' => 'App\\Http\\Controllers\\BackEndController@addProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@editProduct',
        'controller' => 'App\\Http\\Controllers\\BackEndController@editProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.product' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@updateProduct',
        'controller' => 'App\\Http\\Controllers\\BackEndController@updateProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.product' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@deleteProduct',
        'controller' => 'App\\Http\\Controllers\\BackEndController@deleteProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.images' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'deleteimage/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@deleteImage',
        'controller' => 'App\\Http\\Controllers\\BackEndController@deleteImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@viewCategory',
        'controller' => 'App\\Http\\Controllers\\BackEndController@viewCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'view.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-new-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@addCategory',
        'controller' => 'App\\Http\\Controllers\\BackEndController@addCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@editCategory',
        'controller' => 'App\\Http\\Controllers\\BackEndController@editCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.category' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@updateCategory',
        'controller' => 'App\\Http\\Controllers\\BackEndController@updateCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.delete.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_category-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@editCateDelete',
        'controller' => 'App\\Http\\Controllers\\BackEndController@editCateDelete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.delete.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.category' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'delete-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@deleteCategory',
        'controller' => 'App\\Http\\Controllers\\BackEndController@deleteCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'orders-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@orderList',
        'controller' => 'App\\Http\\Controllers\\BackEndController@orderList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'view.orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@editOrder',
        'controller' => 'App\\Http\\Controllers\\BackEndController@editOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.order' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@updateOrder',
        'controller' => 'App\\Http\\Controllers\\BackEndController@updateOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.single.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-single-order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@viewSingleOrder',
        'controller' => 'App\\Http\\Controllers\\BackEndController@viewSingleOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'view.single.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.delete.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_delete_order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@editDeleteOrder',
        'controller' => 'App\\Http\\Controllers\\BackEndController@editDeleteOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.delete.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.order' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'delete-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BackEndController@DeleteOrder',
        'controller' => 'App\\Http\\Controllers\\BackEndController@DeleteOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FXtAf97sBwz95ELU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manage-blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@viewBlogLists',
        'controller' => 'App\\Http\\Controllers\\BlogController@viewBlogLists',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FXtAf97sBwz95ELU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iH8XzQa7sWElHiso' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@createBlog',
        'controller' => 'App\\Http\\Controllers\\BlogController@createBlog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iH8XzQa7sWElHiso',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rRsdBQ4zH26IVUw9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-new-blog-step1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@addBlogStep1',
        'controller' => 'App\\Http\\Controllers\\BlogController@addBlogStep1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rRsdBQ4zH26IVUw9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::30xqrn6OWh92Wcgy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog-id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@getBlogId',
        'controller' => 'App\\Http\\Controllers\\BlogController@getBlogId',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::30xqrn6OWh92Wcgy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TZpLcmyIglnW9exx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-blog-content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@addBlogContent',
        'controller' => 'App\\Http\\Controllers\\BlogController@addBlogContent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TZpLcmyIglnW9exx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::19fZxZsjHw38nLKa' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-blog/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@deleteBlog',
        'controller' => 'App\\Http\\Controllers\\BlogController@deleteBlog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::19fZxZsjHw38nLKa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q2kaksJ5BiZIsP5d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manage-video-tutorials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\VideoTutorialController@videoTutorials',
        'controller' => 'App\\Http\\Controllers\\VideoTutorialController@videoTutorials',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Q2kaksJ5BiZIsP5d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f7HQQohn3N9aC8rx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-new-video',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\VideoTutorialController@addVideo',
        'controller' => 'App\\Http\\Controllers\\VideoTutorialController@addVideo',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::f7HQQohn3N9aC8rx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i54A1fIaH65CjVVE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-video/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\VideoTutorialController@editVideoTutorial',
        'controller' => 'App\\Http\\Controllers\\VideoTutorialController@editVideoTutorial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::i54A1fIaH65CjVVE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oU7BVhxLle3DqjBz' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-video-tutorial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\VideoTutorialController@updateVideoTutorial',
        'controller' => 'App\\Http\\Controllers\\VideoTutorialController@updateVideoTutorial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oU7BVhxLle3DqjBz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zU1jkbnp8ueRhho5' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-video-tutorial/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'isLoggedIn',
        ),
        'uses' => 'App\\Http\\Controllers\\VideoTutorialController@deleteVideoTutorial',
        'controller' => 'App\\Http\\Controllers\\VideoTutorialController@deleteVideoTutorial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zU1jkbnp8ueRhho5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OTyXeYWZ7jEY1WD4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'optimize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ChacheController@Optimize',
        'controller' => 'App\\Http\\Controllers\\ChacheController@Optimize',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OTyXeYWZ7jEY1WD4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xso4l731N3QSpaDL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'route-chache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ChacheController@RouteChached',
        'controller' => 'App\\Http\\Controllers\\ChacheController@RouteChached',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Xso4l731N3QSpaDL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::klKwPHVu0BjvqVWQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cache-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ChacheController@onlyCacheCleare',
        'controller' => 'App\\Http\\Controllers\\ChacheController@onlyCacheCleare',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::klKwPHVu0BjvqVWQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9FLpdXVqFYxRDfaT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'route-clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ChacheController@RouteClear',
        'controller' => 'App\\Http\\Controllers\\ChacheController@RouteClear',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9FLpdXVqFYxRDfaT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
