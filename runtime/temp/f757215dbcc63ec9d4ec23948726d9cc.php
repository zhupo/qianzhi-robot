<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/Users/bruce/Documents/cms/public/../application/index/view/index/index.html";i:1653747579;}*/ ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo htmlentities($site['name']); ?></title>
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
    <!-- Bootstrap Core CSS -->
    <link href="/assets/libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/pages/common.css">
    <link rel="stylesheet" href="/assets/css/frontend.min.css">
    <link rel="stylesheet" href="/assets/css/pages/home.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
            <script src="https://cdn.staticfile.org/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body id="page-top" class="home-wrap">
    <div class="home-header">
        <nav class="navbar">
            <div class="container-fluid container-flex">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo-wrap d-flex">
                        <img src="/assets/img/png/logo.png" alt="logo">
                        <div class="pl-2">
                            <span class="d-block font-bold f20">湖南千智机器人科技发展有限公司</span>
                            <span class="d-block f12">HUNAN QIANZHI ROBOT TECHNOLOGY DEVELOPMENT CO,. LTD</span>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="px-4">
                            <form class="navbar-form navbar-left" id="js-search-from">
                                <div class="form-group">
                                    <input type="text" class="form-control search-input" id="js-search-input"
                                        placeholder="Search" />
                                </div>
                                <span class="glyphicon glyphicon-search media-middle cursor-pointer" id="js-search-btn"
                                    aria-label="search button" aria-hidden="true">
                                </span>
                            </form>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                English
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">China</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav pull-right menu-list">
                        <li class="active"><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">PRODUCT</a></li>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">CONTACT US</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="home-header-detail text-center">
            <span class="d-block top-title f18">BEST QUALITY SERVICE</span>
            <span class="d-block title f50 font-bold">QIANZHI ROBOT</span>
            <span class="d-block sub-title f28">Towards the goal of building a R&D heights of special robots in
                china</span>
            <div class="but-group">
                <a type="button" href="/" class="btn btn-info btn-lg mr-4">
                    Learn More
                </a>
                <a type="button" href="/" class="btn btn-danger btn-lg">
                    Contact Us
                </a>
            </div>
        </div>
    </div>


    <main id="home-body">
        <!-- out product -->
        <div class="home-body-card our-product">
            <div class="container card-item">
                <div class="text-center">
                    <span class="top-title">Our Products</span>
                    <span class="title">BEST OF OUR WORKS</span>
                </div>
                <div class="row" id="ourProduct">
                    <script id="ourProductTemplate" type="text/html">
                        {{each products as item index}}
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail content-item">
                                <div class="card-img-wrap">
                                    <div class="card-img-wrap-bg"  style="background-image: url({{item.bgUrl}});">
                                    </div>
                                    <img src="{{item.imgUrl}}" alt="{{item.title}}">
                                </div>
                                <div class="caption">
                                    <p class="font-bold f20 mt-4">{{ item.title }}</p>
                                    <p class="caption-content">{{ item.content }}</p>
                                    <a href="#" class="product-learn-more">
                                        Learn More
                                        <span class="glyphicon glyphicon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                            </div>
                        {{/each}}
                    </script>
                </div>
            </div>
        </div>

        <!-- about us -->
        <div class="home-body-card about-us">
            <div class="container card-item">
                <div class="text-center">
                    <span class="top-title">About Us</span>
                    <span class="title">QIANZHI ROBOTICS</span>
                    <span class="sub-title">Qianzhi Robotics was established in October 2015 with a registered captial
                        150 million yuan. It is a hight-tech enterprise specializing in the design and manufacture of
                        special robots, service robots, R&D manufacture and automation equipment.</span>
                </div>
                <div class="row" id="aboutUs">
                    <script id="aboutUsTemplate" type="text/html">

                    </script>
                </div>
            </div>
        </div>

        <!-- strategic partners -->
        <div class="home-body-card strategic-partners">
            <div class="container">
                <div class="text-center">
                    <span class="title font-bold">Strategic Partners</span>
                    <hr />
                </div>
                <div class="row" id="strategicPartners">
                    <script id="strategicPartnersTemplate" type="text/html">
                        {{each partners as item index}}
                        <div class="item col-sm-4 col-md-3">
                          <div href="#" class="thumbnail p-0">
                            <img src="{{ item.imgUrl }}" alt="partners">
                          </div>
                        </div>
                        {{/each}}
                    </script>
                </div>
            </div>
        </div>

        <!-- news center -->
        <div class="home-body-card news-center">
            <div class="container card-item">
                <div class="text-center">
                    <span class="top-title">News Center</span>
                    <span class="title">Lastest News</span>
                </div>
                <div class="row" id="newsCenter">
                    <script id="newsCenterTemplate" type="text/html">

                    </script>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div></div>
            <p>Copyright @ 2017~<?php echo date('Y',time()); ?> 版权所有 <a href="https://beian.miit.gov.cn"
                    target="_blank"><?php echo htmlentities($site['beian']); ?></a></p>
        </div>
    </footer>

    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>

    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <script data-main="/assets/js/frontend/home.js" src="/assets/js/require.min.js"></script>

</body>

</html>