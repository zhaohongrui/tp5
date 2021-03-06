<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:68:"F:\www\thinkphp\public/../application/index\view\order\cartorder.php";i:1506415734;s:57:"F:\www\thinkphp\public/../application/index\view\base.php";i:1506569010;}*/ ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="/favicon.ico?r=gold" type="image/x-icon" />
    <meta property="qc:admins" content="365774662561636375" />
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/style/css/style-12909ab9ae.css" type="text/css" />
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/dist/index-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/style/css/page/index-6e488077c1.css">
    <link rel="stylesheet" type="text/css" href="/static/home/yanxuan.nosdn.127.nethxm/yanxuan-component/p/20170601/js/dist/yxComponent.all.min.css-v=1505963072142.css" >
    <!--[if lt IE 9]>
    <script src="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/ie-23e126e677.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="1;url=error/lowVersionBrowser.htm" tppabs="http://you.163.com/error/lowVersionBrowser" />
    <script>top.window.location.href='error/lowVersionBrowser.htm'/*tpa=http://you.163.com/error/lowVersionBrowser*/;</script>
    <![endif]-->
    <script src="/static/home/mimg.127.net/hxm/yanxuan-web/p/20150730/js/vender-c1479496a3.js"></script>


<!--    列表页、内容页、购物车引入文件-->
    <link rel="stylesheet" href="/static/home/css/index-0f4fca60a4.page.css">
    <link rel="stylesheet" href="/static/home/css/list-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/list-0239afde78.css">
    <link rel="stylesheet" href="/static/home/css/list-10a91bd2e4.css">
<!--    <link rel="stylesheet" type="text/css" href="/static/home/css/yxComponent.all.min.css">-->
    <link rel="stylesheet" href="/static/home/css/cart-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/cart-7dce11bf5a.css">
    <link rel="stylesheet" href="/static/home/css/index-b49af0d5e0.page.css">
<!--列表页、内容页、购物车、引入文件结束-->

    <script src="/static/home/js/jquery.js"></script>
    <script src="/static/home/js/vue.js"></script>

    <link rel="stylesheet" href="/static/home/css/layer.css">
    <script src="/static/home/js/layer.js"></script>

    <link rel="stylesheet" href="/static/home/layui/css/layui.css">
    <script src="/static/home/layui/layui.js"></script>

<!--    选择付款方式-->
    <link rel="stylesheet" href="/static/home/css/toPay-f530269a25.page.css">
    <link rel="stylesheet" href="/static/home/css/toPay-7cbe21654f.css">
    <link rel="stylesheet" type="text/css" href="/static/home/css/yxComponent.all.min.css">
</head>
<body>
<!-- 头部 -->
<header class="g-hd" id="gTopbar">
    <div id="j-siteNav" class="m-siteNav">
        <div class="g-row">
            <a class="declare" href="javascript:;">生活的品质，源于您的选择</a>

            <div class="right">
<!--                判断用户是否登陆-->
                <?php if(session('user')): ?>
                    <div id="loginInfoWrap" style="float: left">
                        <div class="js-userCenter userCenter w-dropdown w-dropdown-text">
                            <a href="javascript:;" class="js-userCenterToggle toggle" data-jq-dropdown="#js-userCenterDropdown1">
                                <span class="text j-nickname"><?php echo session('user.username'); ?></span>
                                <i class="w-icon-arrow arrow-up-hollow"></i>
                            </a>
                            <div id="js-userCenterDropdown1" class="jq-dropdown jq-dropdown-relative jq-dropdown-anchor-right" style="display: none; left: -7px; top: 36px;">
                                <nav class="jq-dropdown-menu dropdownMenu">
                                    <a class="item couponLink" href="/myorder">我的订单</a>
                                    <a class="item" href="/index/login/logout">退出登录</a>
                                </nav>
                            </div>
                        </div>
                    </div>

                <?php else: ?>


<!--                    如果没有登陆就显示登陆注册-->
                <a class="login j-topLogin" href="/index/login" title="登录">登录</a>
                    <div class="split"></div>
                <a class="register j-topRegister" href="/index/register">注册</a>
                <?php endif ?>


<!--                <a class="attitude" href="/myorder">我的订单</a>-->
<!--                <div class="split"></div>-->

            </div>
        </div>
    </div>
    <div id="js-funcTabWrap">
        <div id="js-funcTab" class="m-funcTab">
            <div class="g-row">
                <a class="tab-logo" href="/" title="" target="_top"></a>
                <a class="tab-logo-fixed" href="/" title="" target="_top"></a>
                <div class="tab-inner">
                    <div class="m-search">
<!--                        我的购物车-->
                        <a class="w-button-cart j-button-cart" href="/mycart/lists">
                            <i class="w-icon-cart cart-blackcart"></i>

                        </a>
                        <span id="span-cart-number"></span>
<!--                        搜索-->
                        <div class="m-searchInput" id="j-search">
                            <div class="w-button-search j-searchButton">
                                <i class="w-icon-header header-search"></i>
                            </div>
                            <div class="j-showDefaultWord showDefaultWord">
                                中秋礼物买一送一
                            </div>
                            <input type="text" maxlength="100" class="w-searchInput j-searchInput" value="">
                            <div class="m-ppnl f-hide j-searchSuggest">
                                <div class="j-ssContent"></div>
                            </div>
                        </div>
                        <script>
                            $(function () {
                                var a = $('.w-searchInput').val();
                                if(a){
                                    $('.j-showDefaultWord').hide();
                                }
                                $("input.w-searchInput").focus(function(){
                                    $('.j-showDefaultWord').hide();
                                });

                                $('.w-icon-header.header-search').click(function () {
                                    var a = $('.w-searchInput').val();
//                                    alert(a);
                                    if(a){
                                        location.href = '/lis/'+a;
                                    }
                                })
                            })
                       </script>

                    </div>
<!--                    导航-->
                    <ul class="tab-nav">
                        <?php
//                        p(request()->path());
                        if(substr(request()->path(),0,5)=='lists'){
                            $aum = ltrim(strrchr(request()->path(),'/'),'/');
                        }else{
                            $aum = '';
                        }
                        if(substr(request()->path(),0,7)=='content'){
                            $act = ltrim(strrchr(request()->path(),'/'),'/');
                            foreach($goo as $go){
                                if($go['id']==$act){
                                    $cid = $go['category_id'];
                                }
                            }
                        }else{
                            $cid = '';
                        }

                        ?>
                        <li class='nav-item first <?php if(!$aum && !$cid){?>active<?php } ?>'>
                            <a class="topLevel" title="首页" href="/">首页</a>
                        </li>

                        <?php foreach($category as $v):?>
                            <li class='j-nav-item nav-item <?php if($aum==$v['id'] || $v['id']==$cid){?>active<?php } ?>'>
                                <a class="topLevel" title="<?php echo $v['name']; ?>" href="/lists/<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
                            </li>
                        <?php endforeach;?>
                    </ul>
                    <script>
                        $(function () {
                            $('.j-nav-item').click(function () {
                                $(this).addClass('active');
                                $(this).siblings('li').removeClass('active');
                            })
                        })
                    </script>
                    <a class="w-cart j-cart" href="/mycart/lists">
                        <i class="w-icon-cart cart-blackcart"></i>
                        <i class="w-icon-normal icon-normal-badge j-cart-num j-cart-num2">0</i>
                    </a>
                    <div class="j-mini-cart m-mini-cart j-newMiniCart">
                        <div id="newMiniCart"></div>
                    </div>
                </div>
                <div class="notLogin">
                    <a class="login j-topLogin" href="/index/login" title="登录">登录</a>
                    <a class="register j-topRegister" href="">注册</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>

<!--中间部分-->


<div class="g-bd f-margin-top-50">
    <div class="g-row">
        <div id="confirmRoot">
            <div>
                <div class="m-panel">
                    <div class="w-panel g-panel">
                        <div class="hd f-fz14"><span>收货信息</span></div>
                        <div class="bd">
                            <!--                            地址显示列表-->
                            <?php if($address): ?>
                                <div class="m-orderAddress m-orderAddress2">
                                    <div>
                                        <div>
                                            <div class="left m-address" key="<?php echo $address['id']; ?>">
                                                <p class="line pine-1" >
                                                    <i class="w-icon-normal icon-normal-address-default"></i>
                                                    <button class="w-button w-button-ghost modifyBtn" type="button">收货信息</button>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>收货人:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info1"><?php echo $address['name']; ?></span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>联系方式:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info2"><?php echo $address['mobile']; ?></span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>收货地址:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info3"><?php echo $address['province'].$address['city'].$address['country'].$address['address']?></span>
                                                </p>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="right">
                                                <p class="changeAddress">
                                                    <a href="javascript:;" class="w-link" style="background-color: #">地址切换</a></p>
                                                <button class="w-button new-build" type="button">
                                                    新建地址
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!--                                新建地址，地址填写表单-->
                                <div class="m-orderAddress1 m-orderAddress">
                                    <div class="m-addressAdd">
                                        <form class="m-form-addr j-form button-form" >
                                            <div class="w-row-addr addrFirst">
                                                <div class="w-col-4">
                                                <span class="w-label">
                                                    <span>所在地区</span>
                                                    <span>:</span></span>
                                                    <div style="display:inline-block;">
                                                        <div style="display:inline-block;">
                                                            <div class="info">
                                                                <div>
                                                                    <select id="s_province" name="province"></select>  
                                                                    <select id="s_city" name="city"></select>  
                                                                    <select id="s_county" name="country"></select>
                                                                    <script class="resources library"
                                                                            src="/static/home/js/area.js"
                                                                            type="text/javascript"></script>
                                                                    <script type="text/javascript">_init_area();</script>
                                                                </div>
                                                                <div id="show"></div>
                                                            </div>
                                                            <script type="text/javascript">
                                                                var Gid = document.getElementById;
                                                                var showArea = function () {
                                                                    Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                                                                        Gid('s_city').value + " - 县/区" +
                                                                        Gid('s_county').value + "</h3>"
                                                                }
                                                                Gid('s_county').setAttribute('onchange', 'showArea()');
                                                            </script>
                                                        </div>
                                                        <div style="clear:both;"></div>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="w-row-addr">
                                                <div class="w-col-4">
                                                <span class="w-label" style="margin-top:6px;vertical-align:top;">
                                                    <span>详细地址</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap w-textarea">
                                                    <textarea placeholder="详细地址，街道、门牌号等" name="address" id="" cols="30"
                                                              rows="10" tabindex="6" class="w-textarea"></textarea>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="w-row-addr">
                                                <div class="w-col-2 errorTip mgr43">
                                                <span class="w-label">
                                                    <span>收货人</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap undefined">
                                                        <input type="text" class="w-ipt" name="name" tabindex="1">
                                                    </div>
                                                </div>
                                                <div class="w-col-2 zoneTipsInner errorTip">
                                                <span class="w-label">
                                                    <span>手机号码</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap undefined">
                                                        <input type="text" class="w-ipt" name="mobile" tabindex="2">
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <input type="text" name="users_id" value="<?php echo session('user.id'); ?>" hidden>
                                        </form>

                                        <div class="m-operateButtons f-left">
                                            <div class="w-row-addr w-row-addr-1">
                                                <div class="w-col-1">
                                                    <div class="w-chkbox">
                                                        <input type="checkbox" name="is_default" value="" class="j-checkbox setdefault">
                                                        <span>设为默认</span>
                                                    </div>
                                                </div>
                                                <div class="w-col-1 mgr24">
                                                    <button type="button" class="w-button w-button-primary j-submits">保存地址
                                                    </button>
                                                    <a class="j-cancel w-button w-button-ghost quxiao">取消</a>
                                                    <span></span>
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <?php else: ?>
                                <!--                           地址填写表单 -->
                                <div class="m-orderAddress1 m-orderAddress" style="display: block">
                                    <div class="m-addressAdd">
                                        <form class="m-form-addr j-form button-form">
                                            <div class="w-row-addr addrFirst">
                                                <div class="w-col-4">
                                                <span class="w-label">
                                                    <span>所在地区</span>
                                                    <span>:</span></span>
                                                    <div style="display:inline-block;">
                                                        <div style="display:inline-block;">
                                                            <div class="info">
                                                                <div>
                                                                    <select id="s_province" name="province"></select>  
                                                                    <select id="s_city" name="city"></select>  
                                                                    <select id="s_county" name="country"></select>
                                                                    <script class="resources library"
                                                                            src="/static/home/js/area.js"
                                                                            type="text/javascript"></script>
                                                                    <script type="text/javascript">_init_area();</script>
                                                                </div>
                                                                <div id="show"></div>
                                                            </div>
                                                            <script type="text/javascript">
                                                                var Gid = document.getElementById;
                                                                var showArea = function () {
                                                                    Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                                                                        Gid('s_city').value + " - 县/区" +
                                                                        Gid('s_county').value + "</h3>"
                                                                }
                                                                Gid('s_county').setAttribute('onchange', 'showArea()');
                                                            </script>
                                                        </div>
                                                        <div style="clear:both;"></div>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="w-row-addr">
                                                <div class="w-col-4">
                                                <span class="w-label" style="margin-top:6px;vertical-align:top;">
                                                    <span>详细地址</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap w-textarea">
                                                    <textarea placeholder="详细地址，街道、门牌号等" name="address" id="" cols="30"
                                                              rows="10" tabindex="6" class="w-textarea"></textarea>
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <div class="w-row-addr">
                                                <div class="w-col-2 errorTip mgr43">
                                                <span class="w-label">
                                                    <span>收货人</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap undefined">
                                                        <input type="text" class="w-ipt" name="name" tabindex="1">
                                                    </div>
                                                </div>
                                                <div class="w-col-2 zoneTipsInner errorTip">
                                                <span class="w-label">
                                                    <span>手机号码</span>
                                                    <span>:</span>
                                                </span>
                                                    <div class="w-error-warp j-error-wrap undefined">
                                                        <input type="text" class="w-ipt" name="mobile" tabindex="2">
                                                    </div>
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>
                                            <input type="text" name="users_id" value="<?php echo session('user.id'); ?>" hidden>
                                        </form>

                                        <div class="m-operateButtons f-left">
                                            <div class="w-row-addr w-row-addr-1">
                                                <div class="w-col-1">
                                                    <div class="w-chkbox">
                                                        <input type="checkbox" name="is_default" value="" class="j-checkbox setdefault">
                                                        <span>设为默认</span>
                                                    </div>
                                                </div>
                                                <div class="w-col-1 mgr24">
                                                    <button type="button" class="w-button w-button-primary j-submits">保存地址
                                                    </button>
                                                    <a class="j-cancel w-button w-button-ghost">取消</a>
                                                    <span></span>
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="m-orderAddress m-orderAddress2" style="display: none">
                                    <div>
                                        <div>
                                            <div class="left m-address" key="<?php echo $address['id']; ?>">
                                                <p class="line pine-1" >
                                                    <i class="w-icon-normal icon-normal-address-default"></i>
                                                    <button class="w-button w-button-ghost modifyBtn" type="button">修改</button>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>收货人:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info1"><?php echo $address['name']; ?></span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>联系方式:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info2"><?php echo $address['mobile']; ?></span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">
                                                    <span>
                                                        <span>收货地址:</span>
                                                    </span>
                                                    </label>
                                                    <span class="text f-breakall" id="info3"><?php echo $address['province'].$address['city'].$address['country'].$address['address']?></span>
                                                </p>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="right">
                                                <p class="changeAddress">
                                                    <a href="javascript:;" class="w-link" style="background-color: #">地址切换</a></p>
                                                <button class="w-button new-build" type="button">
                                                    新建地址
                                                </button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <noscript></noscript>
                <form action="/confirm" method="post">
                    <div class="g-itemInfo">
                    <div>
                        <div class="m-table">
                            <div class="theadBg"></div>
                            <table>
                                <thead class="hd">
                                <tr>
                                    <td class="f-txtleft" style="width:360px;">商品信息</td>
                                    <td class="" style="width:165px;">单价</td>
                                    <td class="" style="width:171px;">数量</td>
                                    <td class="" style="width:191px;">小计</td>
                                    <td class="" style="width:191px;">备注</td>
                                </tr>
                                </thead>
                                <tbody class="m-tbody tbody">
                                <?php foreach($cartData['goods'] as $k=>$oneArr):?>
                                <tr class="tr">
                                    <td class="m-itemInfoTd">
                                        <div class="imgWrap f-left">
                                            <img src="<?php echo $oneArr['main_image']; ?>" alt="">
                                        </div>
                                        <div class="infoWrap f-txtleft">
                                            <div class="name f-text-overflow">
                                                <span><?php echo $oneArr['name']; ?></span>
                                            </div>
                                            <p class="line line1 f-text-overflow">
                                                <span class="spec ">
                                                    <span><?php echo $oneArr['options']['attr']; ?> </span>
                                                </span>
                                            </p></div>
                                    </td>
                                    <td class="m-itemPriceTd">
                                        <div class="tdWrap">
                                            <div class="priceWrap">
                                                <p class="retailPrice">
                                                    <span>¥</span>
                                                    <span><?php echo $oneArr['price']; ?></span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="m-itemCountTd">
                                        <div class="tdWrap"><?php echo $oneArr['num']; ?></div>
                                    </td>
                                    <td>
                                        <div class="tdWrap"><?php echo $oneArr['total']; ?></div>
                                    </td>
                                    <td>
                                        <textarea id="<?php echo $k; ?>" name="remarks[<?php echo $k; ?>]" style="border: 1px solid #c0c0c0;height:100px"></textarea>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                        <div class="m-itemInfoFt">
                            <div class="left">
                                <div>
                                    <div>
                                        <div class="tt">
                                            <label>
                                                <span>商品合计</span>
                                                <span>:</span>
                                            </label>
                                            <span class="amount">¥</span>
                                            <span><?php echo $cartData['total']; ?></span>
                                        </div>
                                        <br>
                                        <div class="tt">
                                            <label>
                                                <span>商品数量</span>
                                                <span>:</span>
                                            </label>
                                            <span><?php echo $cartData['total_rows']; ?></span>
                                            <span>件</span>
                                        </div>
                                        <br>
                                        <div class="tt">
                                            <label>
                                                <span>运费</span>
                                                <span>:</span>
                                            </label>
                                            <span class="amount">¥</span>
                                            <span>0.00</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="m-confirmPayInfo">
                                <div class="m-payItemsInfo">

                                    <div class="line4">
                                        <label>
                                            <span>应付总额</span>
                                            <span>:</span>
                                        </label>
                                        <span class="amount">
                                            <span>¥</span>
                                            <span><?php echo $cartData['total']; ?></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="line5">
                                    <input class="w-button w-button-primary w-button-xl submit pay" type='submit' value="去付款">
                                </div>
                                <div id="j-addressTip" class="w-tipMsg w-tipMsg-success msg" style="display:none;">

                                    <i class="icon"></i>
                                    <span class="text"></span>
                                </div>
                            </div>
                        </div>
                        <div class="m-agreement">
                            <a class="w-link agreement" href="">同意《严选平台服务协议》</a>
                            <div class="w-chkbox checkbox">
                                <input type="checkbox" checked="" name="agreement" value="1">
                            </div>
                        </div>
                    </div>
                    <input type="text " hidden value="" class="add_class" name="address_id">
                    <textarea name="addarr" id="addarr" cols="30" hidden rows="10"></textarea>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('.submit.pay').click(function () {
            var info1 = $('#info1').text();
            var info2 = $('#info2').text();
            var info3 = $('#info3').text();
            $('#addarr').text(info1+'/'+info2+'/'+info3);
            var kk = $('.left.m-address').attr('key');
            $('.add_class').attr('value',kk);
        })
    })
</script>

<!--模态-->
<div id="widgetDialogContainer" style="display:none; z-index: 3000;">
    <div class="m-overlay m-overlay-ani" style="z-index: 1190;">
        <div class="w-mask w-mask-ani j-mask f-ani-mask"></div>
        <div class="contentWrap">
            <div class="m-pop f-scroll-y overlay-container-ani f-tlbr j-overlay-container m-pop-changeAddr f-ani-bouncein"
                 style="display: block;">
                <div class="j-w-dialog-body" style="left: 395.5px; top: 502.5px;">
                    <div class="j-w-dialog-head">
                        <div class="w-close j-close-pop"></div>
                    </div>
                    <div class="popwin-bd j-w-dialog-content">
                        <div id="j-address-change-1506314764862">
                            <div>
                                <div class="w-tit-addr">选择地址</div>
                                <div class="w-body-addr">
                                    <?php foreach ($changeAdd as $k=>$v):?>

                                        <div class="w-addr-warp j-addr" key="<?php echo $v['id']; ?>">
                                            <div class="m-address">
                                                <p class="line">
                                                    <label class="label">
                                                        <span class="textLeft">收</span>
                                                        <span>货</span>
                                                        <span class="textRight">人:&nbsp;&nbsp;</span>
                                                    </label>
                                                    <span class="text modal1"><?php echo $v['name']; ?></span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">联系方式：</label>
                                                    <span class="text modal2"><?php echo $v['mobile']; ?></span>
                                                </p>
                                                <p class="line">
                                                    <label class="label">收货地址：</label>
                                                    <span class="text f-breakall modal3"><?php echo $v['province'].$v['city'].$v['country'].$v['address']?></span>
                                                </p>
                                            </div>
                                            <i class="icon w-icon-normal icon-normal-spec-arrow"></i></div>
                                    <?php endforeach;?>
                                </div>
                                <div style="margin:31px 0 0 80px;">
                                    <button type="button" class="w-button w-button-primary w-button-l j-ok w-button-forbid confirm"
                                            style="margin-left:45px;">确定
                                    </button>
                                    <button type="button" class="w-button w-button-l j-cancel" style="margin-left:5px;">取消
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        //        判断复选框是否被选中,选中为1，没选中为0
        $('.setdefault').click(function () {
            if($(this).is(':checked')){
                $(this).attr('value',1);
            }else{
                $(this).attr('value',0);
            }
        })
        <?php if($address){ ?>
        $(".m-orderAddress1").hide();
        <?php } ?>
//        点击新建地址
        $('.new-build').click(function () {
//            alert(1)
            $(".m-orderAddress1").show();
            $('.m-orderAddress2').hide();
        })
        $('.quxiao').click(function () {
//            alert(1);
            $(".m-orderAddress2").show();
            $('.m-orderAddress1').hide();
        })
//            地址添加
        $(".j-submits").click(function () {
//               //异步添加
            //抓取button-form表单中所有的值
            var formData = $('form.button-form').serialize();
            var setDefault = $('.setdefault').attr('value');
//                                       console.log(formData);
            $.ajax({
                url: '/index/address/index',
                type: 'post',
                //序列化的数据不用使用json格式传输
                data: formData+'&is_default='+setDefault,
                //服务器返回的数据类型,返回类型是json格式，可以有phpData.code，html格式phpData.code会报错
                dataType: 'json',
                success: function (phpData) {
                       console.log(phpData);
//                       console.log(phpData.code);
//                    if(phpData.code == '200'){
////                                                    alert(1);
//                        $(".m-orderAddress1").css('display','none');
//                        $('.m-orderAddress2').css('display','block');
//                    }
//                    $('.m-orderAddress2').find('#info1').text(phpData.msg.name);
//                    $('.m-orderAddress2').find('#info2').text(phpData.msg.mobile);
//                    var addre = phpData.msg.province+phpData.msg.city+phpData.msg.country+phpData.msg.address;
//                    $('.m-orderAddress2').find('#info3').text(addre);
                }
            })
            $('.new-build').click(function () {
//                    alert(1);
                $('.m-orderAddress2').hide();
                $('.m-orderAddress1').show();
            })

        })



//            地址切换
//        注意：事件里面不可以套事件
        $('.w-link').click(function () {
            $('#widgetDialogContainer').css('display','block');
        })
        $('.w-addr-warp').click(function () {
            $(this).addClass('active').siblings('.w-addr-warp').removeClass('active');
            $('.confirm').removeClass('w-button-forbid');
        })
        $(".confirm").click(function () {
            var count = $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active').length;
            if(count==0){
                layer.msg('还没有选择地址');
                return false;
            }else{
                var key = $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active').attr('key');
//                alert(key);
                $('.left.m-address').attr('key',key);
                var value1 =  $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active .modal1').text();
                var value2 =  $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active .modal2').text();
                var value3 =  $('#j-address-change-1506314764862 .w-body-addr .w-addr-warp.active .modal3').text();
                $('.m-orderAddress2').find('#info1').text(value1);
                $('.m-orderAddress2').find('#info2').text(value2);
                $('.m-orderAddress2').find('#info3').text(value3);
                $('#widgetDialogContainer').css('display','none');
            }

        })

        $('.j-cancel').click(function () {
            $('#widgetDialogContainer').css('display','none');
        })
        $('.j-close-pop.w-close').click(function () {
            $('#widgetDialogContainer').css('display','none');
        })

    })
</script>

<!--中间部分结束-->




<footer class="g-fttta">
    <div class="m-ft2">
        <div class="g-row">
            <ul class="m-siteEnsure">
                <li class="item">
                    <div class="inner"><i class="icon w-icon-foot foot-ft1"></i><p class="text">品质保证</p></div>
                </li>
                <li class="item">
                    <div class="inner"><i class="icon w-icon-foot foot-ft2"></i><p class="text">赠送运费险</p></div>
                </li>
                <li class="item">
                    <div class="inner"><i class="layui-icon" style="position:relative;right: 155px;top:3px;font-size: 60px; color: #ffffff;">&#xe610;</i><p class="text">无忧退换货</p></div>
                </li>
            </ul>
            <hr>
            <div class="m-siteInfo">
                <nav class="nav">
                    <a class="text" href="/">首页</a>
                    <?php foreach ($category as $c):?>
                    <b class="split">|</b>
                    <a class="text" href="/lists/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a>
                    <?php endforeach;?>
                </nav>
                <p class="copyright">
                  Shop by Sun  © 1997-2017 &nbsp; 陇ICP备15000343号-1
                </p>

            </div>
        </div>
    </div>
</footer>

</body>
</html>
