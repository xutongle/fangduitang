<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>仿堆糖</title>
    <link rel="stylesheet" href="<?php echo asset('static/css/normalize.css');?>">
    <link rel="stylesheet" href="<?php echo asset('static/css/foundation.css');?>">
    <style>
        header{
            background:#fff;
            border-bottom:1px solid #D4D5D6;
            height:64px;
            padding:0;
            width:100%;
            position:fixed;
            z-index:999;
        }
        .logo{
            position:relative;
            top:13px;
        }
        .header__ul{
            height:100%;
            margin:auto;
            width:1200px;
        }
        .header__ul-li{
            font-size:13px;
            padding:4px 25px;
            margin:18px 0;
            border-left:1px solid #EBEBEB;
        }
        .search__input{
            height:30px;
            width:366px;
        }
        .nav__classify{
            font-size:14px;
            line-height:64px;
            margin-left:4%;
        }
        .search__li{
            line-height:64px;
            margin-left:8%;
        }
        .header__register{
            padding:8px 14px;
            background-color:#F46;
            border-radius:3px;
            color:#fff;
        }
        .header__life-new{
            padding:2px;
            border-radius:2px;
            background-color:#F46;
            color:#fff;
            font-size:12px;
        }
        .header__phone{
            background:url(<?php echo asset('static/img/phone.png');?>) no-repeat;
            display:inline-block;
            height:19px;
            padding-left:14px;
        }
        .container{
            width:1200px;
            margin:auto;
            padding-top:105px;
        }
        .ad{
            width:712px;
            background:#ccc;
            height:445px;

        }
        .community-hot{
            width:402px;
            background:#fff;
            height:261px;
            padding:15px 32px;
            border:1px solid #dedfe0;
            font-size:13px;
        }
        .community-hot__title{
            font-size:16px;
            color:#666;
            border-bottom:1px solid #dedfe0;
            margin-top:0;
            padding-bottom:13px;
        }
        .community-hot__tag{
            margin-left:-17px;
            padding-bottom:16px;
        }
        .community-hot__tag-a{
            display:inline-block;
            margin:2px 0;
            padding:0 17px;
            border-right:1px solid #dedfe0;
        }
        .community-hot__list{
            border-top:1px dotted #dedfe0;
            padding:16px 0;
        }
        .community-hot__span{
            color:#fff;
            padding:3px;
            border-radius:2px;
        }
        .mobile-download{
            height:129px;
            margin-top:21px;
            width:468px;
            border:1px solid #dedfe0;
            background:url(<?php echo asset('static/img/app_download.jpeg');?>) no-repeat;
        }
        .index-goods__list{
            padding:10px 0;
            width:1200px;
            border-top:1px solid #D4D5D5;
            margin-bottom:30px;
        }
        .good-nav{
            float:right;
            margin-top:22px;
            line-height:12px;
        }
        .good-nav__li{
            float:left;
            color:#444;
            border-left:1px solid #dedfe0;
            padding:0 10px;
        }
        .good-nav__li-all{
            float:left;
            color:#444;
            padding:0 10px 0 15px;
        }
        .index-goods__right-button{
            background-color:#22b4f6;
            font-size:13px;
            color:#fff;
            border-radius:2px;
            padding:4px 10px;
            margin-top:15px;
        }
        .index-goods__title{
            margin-bottom:30px;
            color:#444;
        }
        .list-item_size_large{
            width:224px;
            float:left;
            font-size:13px;
            margin-right:20px;
        }
        .waterfall{
            -webkit-column-count:5;
            -webkit-column-gap:25px;
            -moz-column-count:5;
            -moz-column-gap:25px;
        }
        .waterfall__list{
            width:224px;
            font-size:13px;
            background:#fff;
            margin-bottom:20px;
            display:inline-block;
            border:1px solid #dedfe0;
        }
        .waterfall__comment{
            word-wrap: break-word;
            word-break: break-all;
            padding:0 12px 10px 12px;
            color:#444;
        }
        .waterfall__content{
            padding:0 12px 10px 12px;
            border-bottom:1px solid #dedfe0;
            color:#a0a0a0;
            font-size:13px;
        }
        .waterfallpull__face-img{
            border-radius:26px;
            margin-right:15px;
            float:left;
        }
        .list-item__border{
            border:1px solid #dedfe0;
        }
        .list-item__img{
            position:relative;
            left:-1px;
        }
        .list-item__buyer-face{
            position: absolute;
            top: 68px;
            left: 68px;
            width: 80px;
            height: 80px;
            border: 4px solid #fff;
            border-radius: 80px;
            z-index:1;
        }
        .list-item__buyer-name{
            display:block;
            color:#444;
            font-weight:700;
            margin:50px 0 10px 0;
            text-align:center;
        }
        .list-item__star{
            display: inline-block;
            width: 16px;
            height: 16px;
            background-image: url(<?php echo asset('static/img/sprite.png');?>);
            background-repeat: no-repeat;
            background-position: -4px -52px;
            position:relative;
            top:2px;
            right:5px;
        }
        .list-item__zan{
            display:inline-block;
            background-repeat: no-repeat;
            background-image: url(<?php echo asset('static/img/sprite.png');?>);
            font-size: 13px;
            width: 16px;
            height: 16px;
            background-position: -90px -50px;
        }
        .list-item__title{
            color:#444;
            padding:10px 0 0 10px;
            font-weight:700;
            display:inline-block;
        }
        .list-item__content{
            color:#888;
            padding-left:10px;
        }
        .list-item__border-one{
            width:220px;
            height:1px;
            margin:auto;
            border-bottom:1px solid #dedfe0;
        }
        .list-item__border-two{
            width:216px;
            height:1px;
            margin:auto;
            border-bottom:1px solid #dedfe0;
        }
        .list-item__purchase{
            color:#fff;
            background-color:#fb3;
            padding:3px 10px;
            margin:-7px 15px 0 0;
            float:right;
            border-radius:3px;
        }
        .reload-button{
            display:block;
            text-align:center;
            margin:20px auto;
            background:#1e9ed8;
            font-size:15px;
            font-weight:700;
            padding:10px 0;
            color:#fff;
            width:110px;
            border-radius:2px;
        }
        footer{
            width:100%;
            height:260px;
            border-top:1px solid #CFD0D1;
            background:#E1E2E3;
        }
        .footer__content{
            width:1200px;
            margin:auto;
            padding:30px 0;
            font-size:13px;
        }
        .footer__list{
            float:left;
            padding:8px 28px 0 30px;
            border-left:1px solid #CFD0D1;
            width:180px;
            height:140px;
        }
        .footer__list-item{
            float:left;
            margin:8px 0 0 0;
            width:90px;
        }
        .footer__bottom{
            text-align:center;
            font-size:13px;
            color:#888;
        }
    </style>
</head>
<body>
<!--[if lte IE 8]>
<p class="browserupgrade">您的浏览器版本老的可笑，请到 <a href="http://browsehappy.com/">这里</a>更新，以获取最佳的体验</p>
<![endif]-->
    <header>
        <ul class="header__ul clearfix">
            <li class="pull-left"><img class="logo" src="<?php echo asset('static/img/logo.png');?>" alt="网站logo"></li>
            <li id="navClassify" class="nav__classify pull-left">
                <nav>分类</nav>
            </li>
            <li class="search__li pull-left"><input class="search__input" placeholder="搜索感兴趣的内容"></li>
            <li class="header__ul-li pull-right"><a class="header__phone" href="">手机版</a></li>
            <li class="header__ul-li pull-right"><a href="">登录</a></li>
            <li class="header__ul-li pull-right"><a class="header__register" href="">注册</a></li>
            <li class="header__ul-li pull-right"><a href="">堆糖生活家</a>&nbsp;<span class="header__life-new">new</span></li>
        </ul>
    </header>

    <div class="container">
        <section class="clearfix mb-40">
            <section class="ad pull-left"></section>
            <section class="pull-right">
                <article class="community-hot">
                    <h3 class="community-hot__title">社区热点</h3>
                    <div class="community-hot__tag">
                        <a class="community-hot__tag-a" href="">夏天</a>
                        <a class="community-hot__tag-a" href="">把生活过成一首诗</a>
                        <a class="community-hot__tag-a" href="">美食</a>
                        <a class="community-hot__tag-a" href="">记下时间走过的路</a>
                        <a class="community-hot__tag-a" href="">原创</a>
                        <a class="community-hot__tag-a" href="">飘窗</a>
                        <a class="community-hot__tag-a" href="">欢乐颂</a>
                    </div>
                    <div class="community-hot__list">
                        <a class="pr-5" href="">有趣的活动照</a>
                        <span class="community-hot__span bg-fb3">活动</span>
                    </div>
                    <div class="community-hot__list">
                        <a class="pr-5" href="">『人气连衣裙精选』 大合集</a>
                        <span class="community-hot__span bg-f46">精选</span>
                    </div>
                    <div class="community-hot__list">
                        <span>收图小助手:</span>
                        <a class="pl-10" href="">堆糖收集工具</a>
                    </div>
                </article>
                <div class="mobile-download"></div>
            </section>
        </section>
        <section class="index-goods__list clearfix">
            <a class="index-goods__right-button pull-right" href="">往期回顾</a>
            <h2 class="index-goods__title">专辑精选</h2>
            <div class="w-1220">
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p1.jpeg');?>">
                        <a class="list-item__title mb-25" href="">夏末初秋怎么穿</a>
                        <div class="list-item__content ft-12">112张图片 · 3155人收藏</div>
                        <div class="list-item__content ft-12">by<a href="">baozi</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                    <div class="list-item__border-two"></div>
                </div>
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p1.jpeg');?>">
                        <a class="list-item__title mb-25" href="">夏末初秋怎么穿</a>
                        <div class="list-item__content ft-12">112张图片 · 3155人收藏</div>
                        <div class="list-item__content ft-12">by<a href="">baozi</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                    <div class="list-item__border-two"></div>
                </div>
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p1.jpeg');?>">
                        <a class="list-item__title mb-25" href="">夏末初秋怎么穿</a>
                        <div class="list-item__content ft-12">112张图片 · 3155人收藏</div>
                        <div class="list-item__content ft-12">by<a href="">baozi</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                    <div class="list-item__border-two"></div>
                </div>
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p1.jpeg');?>">
                        <a class="list-item__title mb-25" href="">夏末初秋怎么穿</a>
                        <div class="list-item__content ft-12">112张图片 · 3155人收藏</div>
                        <div class="list-item__content ft-12">by<a href="">baozi</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                    <div class="list-item__border-two"></div>
                </div>
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p1.jpeg');?>">
                        <a class="list-item__title mb-25" href="">夏末初秋怎么穿</a>
                        <div class="list-item__content ft-12">112张图片 · 3155人收藏</div>
                        <div class="list-item__content ft-12">by<a href="">baozi</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                    <div class="list-item__border-two"></div>
                </div>
            </div>
        </section>
        <section class="index-goods__list clearfix">
            <nav class="good-nav">
                <ul class="clearfix">
                    <li class="pull-left">良品购:</li>
                    <li class="good-nav__li-all"><a href="">全部</a></li>
                    <li class="good-nav__li"><a href="">上衣</a></li>
                    <li class="good-nav__li"><a href="">裙裤</a></li>
                    <li class="good-nav__li"><a href="">配饰</a></li>
                    <li class="good-nav__li"><a href="">鞋子</a></li>
                    <li class="good-nav__li"><a href="">包袋</a></li>
                    <li class="good-nav__li"><a href="">日杂</a></li>
                </ul>
            </nav>
            <h2 class="index-goods__title">单品精选</h2>
            <div class="w-1220">
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p2.jpeg');?>">
                        <a class="list-item__title mb-15" href="">短裤</a>
                        <div class="list-item__content clearfix ft-12">18520人在逛<a class="list-item__purchase" href="">良品购</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p2.jpeg');?>">
                        <a class="list-item__title mb-15" href="">短裤</a>
                        <div class="list-item__content clearfix ft-12">18520人在逛<a class="list-item__purchase" href="">良品购</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p2.jpeg');?>">
                        <a class="list-item__title mb-15" href="">短裤</a>
                        <div class="list-item__content clearfix ft-12">18520人在逛<a class="list-item__purchase" href="">良品购</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p2.jpeg');?>">
                        <a class="list-item__title mb-15" href="">短裤</a>
                        <div class="list-item__content clearfix ft-12">18520人在逛<a class="list-item__purchase" href="">良品购</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
                <div class="list-item_size_large">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p2.jpeg');?>">
                        <a class="list-item__title mb-15" href="">短裤</a>
                        <div class="list-item__content clearfix ft-12">18520人在逛<a class="list-item__purchase" href="">良品购</a></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
            </div>
        </section>
        <section class="index-goods__list clearfix">
            <a class="index-goods__right-button pull-right" href="">更多达人</a>
            <h2 class="index-goods__title">达人推荐</h2>
            <div class="w-1220">
                <div class="list-item_size_large rel">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p3.jpeg');?>">
                        <img class="list-item__buyer-face" src="<?php echo asset('static/img/p4.jpeg');?>" alt="">
                        <a class="list-item__buyer-name" href="">沉睡的Two耳</a>
                        <div class="list-item__content center pb-10"><span class="list-item__star"></span>5621</div>
                        <div class="list-item__content center">擅长领域: <b class="c-444">园艺</b></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
                <div class="list-item_size_large rel">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p3.jpeg');?>">
                        <img class="list-item__buyer-face" src="<?php echo asset('static/img/p4.jpeg');?>" alt="">
                        <a class="list-item__buyer-name" href="">沉睡的Two耳</a>
                        <div class="list-item__content center pb-10"><span class="list-item__star"></span>5621</div>
                        <div class="list-item__content center">擅长领域: <b class="c-444">园艺</b></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
                <div class="list-item_size_large rel">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p3.jpeg');?>">
                        <img class="list-item__buyer-face" src="<?php echo asset('static/img/p4.jpeg');?>" alt="">
                        <a class="list-item__buyer-name" href="">沉睡的Two耳</a>
                        <div class="list-item__content center pb-10"><span class="list-item__star"></span>5621</div>
                        <div class="list-item__content center">擅长领域: <b class="c-444">园艺</b></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
                <div class="list-item_size_large rel">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p3.jpeg');?>">
                        <img class="list-item__buyer-face" src="<?php echo asset('static/img/p4.jpeg');?>" alt="">
                        <a class="list-item__buyer-name" href="">沉睡的Two耳</a>
                        <div class="list-item__content center pb-10"><span class="list-item__star"></span>5621</div>
                        <div class="list-item__content center">擅长领域: <b class="c-444">园艺</b></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
                <div class="list-item_size_large rel">
                    <div class="list-item__border bg-fff pb-10">
                        <img class="list-item__img" src="<?php echo asset('static/img/p3.jpeg');?>">
                        <img class="list-item__buyer-face" src="<?php echo asset('static/img/p4.jpeg');?>" alt="">
                        <a class="list-item__buyer-name" href="">沉睡的Two耳</a>
                        <div class="list-item__content center pb-10"><span class="list-item__star"></span>5621</div>
                        <div class="list-item__content center">擅长领域: <b class="c-444">园艺</b></div>
                    </div>
                    <div class="list-item__border-one"></div>
                </div>
            </div>
        </section>
        <section class="index-goods__list">
            <h2 class="index-goods__title">大家正在逛</h2>
            <div class="waterfall">
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p5.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p6.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p7.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p8.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p9.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p10.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p5.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p6.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
                <div class="waterfall__list">
                    <img src="<?php echo asset('static/img/p7.jpeg');?>">
                    <p class="waterfall__comment">Meguro Gawa,Tokyo, Japan。目黑川是东京的赏樱名所，沿着山手通路流淌的目黑川河畔遍植樱花树，每逢3、4月，盛开的樱花仿佛花之走廊，掩映于河面之上。随着花瓣飘落，水面会变成粉色的樱花溪流。晚上还可以赏夜樱。</p>
                    <div class="waterfall__content">
                        <span class="list-item__star"></span>28
                        <span class="list-item__zan"></span>2
                    </div>
                    <div class="waterfall__content clearfix mt-20">
                        <img class="waterfallpull__face-img" src="<?php echo asset('static/img/p11.jpeg');?>" alt="">
                        <p class="pull-left">
                            <div><a href="">下不了海的渔夫</a></div>
                            <div>收集到<a href="">为你掌一盏灯</a></div>
                        </p>
                    </div>
                </div>
            </div>
            <a class="reload-button" href="">浏览更多</a>
        </section>
    </div>

    <footer>
        <ul class="footer__content clearfix">
            <li class="footer__list">
                <ul class="clearfix">
                    <li>关于我们</li>
                    <li class="footer__list-item"><a href="">关于我们</a></li>
                    <li class="footer__list-item"><a href="">帮助中心</a></li>
                    <li class="footer__list-item"><a href="">加入我们</a></li>
                    <li class="footer__list-item"><a href="">堆糖收集工具</a></li>
                    <li class="footer__list-item"><a href="">联系我们</a></li>
                    <li class="footer__list-item"><a href="">标签集</a></li>
                    <li class="footer__list-item"><a href="">商务合作</a></li>
                    <li class="footer__list-item"><a href="">免责声明</a></li>
                </ul>
            </li>
            <li class="footer__list">
                <ul class="clearfix">
                    <li>手机应用</li>
                    <li class="footer__list-item"><a href="">堆糖客户端</a></li>
                    <li class="footer__list-item"><a href="">爱疯了壁纸</a></li>
                    <li class="footer__list-item"><a href="">堆糖良品购</a></li>
                </ul>
            </li>
            <li class="footer__list" style="text-align:center;">
                <img style="width:88px;" src="<?php echo asset('static/img/wechat.png');?>" alt="">
                <div>扫描二维码</div>
                <div>下载堆糖手机客户端</div>
            </li>
            <li class="footer__list">
                <ul class="clearfix">
                    <li>关注我们</li>
                    <li class="footer__list-item"><a href="">新浪微博</a></li>
                    <li class="footer__list-item"><a href="">微信</a></li>
                    <li class="footer__list-item"><a href="">腾讯微博</a></li>
                    <li class="footer__list-item"><a href="">QQ 空间</a></li>
                    <li class="footer__list-item"><a href="">人人网</a></li>
                    <li class="footer__list-item"><a href="">豆瓣</a></li>
                </ul>
            </li>
            <li class="footer__list">
                <ul class="clearfix">
                    <li>友情链接</li>
                    <li class="footer__list-item"><a href="">爱物网</a></li>
                    <li class="footer__list-item"><a href="">东方女性网</a></li>
                    <li class="footer__list-item"><a href="">肉丁网</a></li>
                    <li class="footer__list-item"><a href="">LADYMAX时尚</a></li>
                    <li class="footer__list-item"><a href="">美食美酒网</a></li>
                    <li class="footer__list-item"><a href="">携程攻略</a></li>
                    <li class="footer__list-item"><a href="">传导体招聘</a></li>
                    <li class="footer__list-item"><a href="">更多..</a></li>
                </ul>
            </li>
        </ul>
        <div class="footer__bottom">
            ©2015 duitang.com 版权所有。沪ICP备10038086号-3
        </div>
    </footer>

</body>
</html>
