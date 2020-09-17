<?php
function debug($data){
   # echo 'HI2!';
    echo '<pre>' . print_r($data, 1) . '</pre>';
}


function console($data) {
    echo "<script>console.log('111=== $data  +++++');</script>";
}

function isDetailPage($url) {
    $code = array_pop(array_filter(explode( '/',  $url))); //возвращает последний элемент в урле
    //console($code);
    $pattern = "/\b\d+\b/i";
    return preg_match($pattern, $code);//если последний элемент число, то страница детализации
}

// функция возвращает имя класса для контентной части страницы
function getContentClass($url, $isDetail) {
    $className = 'content-';
    if ($url == SITE_DIR) return  $className.'about';
    /*$code = array_pop(array_filter(explode( '/',  $url))); //возвращает последний элемент в урле
    //console($code);
    $pattern = "/\b\d+\b/i";
    $isDetail = preg_match($pattern, $code);//если последний элемент число, то страница детальизации*/
    if ($isDetail) {
        if (preg_match("/services/i", $url)) {
            return $className.'servicesi';
        }
    } else {
        return $className.array_pop(array_filter(explode( '/',  $url)));
    }
    console("BigError");
}

function getMenuTypeClass($curpage) {
    if ($curpage == SITE_DIR) {
        $menuType = '';
    } else if($curpage == SITE_DIR.'management/' || $curpage == SITE_DIR.'departments/' ||
        $curpage == SITE_DIR.'products/small_forms/' || $curpage == SITE_DIR.'products/suspended-facades/' || $curpage == SITE_DIR.'products/others/'  ||
        $curpage == SITE_DIR.'portfolio/')

        $menuType = 'm-collapsed';
    else
        $menuType = 'm-sm';

    return $menuType;
}

function isBreadCreadcrumbs($breadCreadcrumbs, $isDetailPage) {
    if ($breadCreadcrumbs == 1 || $isDetailPage) {
        return 1;
    } else {
        return 0;
    }
}