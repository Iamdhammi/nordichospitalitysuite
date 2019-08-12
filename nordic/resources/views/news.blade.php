@include('layout.header')


<div class="breadcrumb breadcrumb-1 pos-center bg">
    <h1>BLOG</h1>
</div>
<div class="content"><!-- Content Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-8 blog-post-contents">
                @foreach($blogs as $blog)
                <div class="blog-post"><!-- Blog Post -->
                    <h3><a href="blog-details.html">{{$blog->title}}</a></h3>
                    <div class="post-materials  clearfix">
                        <ul>                                
                            <li><h6><a href="#"><i class="fa fa-calendar"></i>{{$blog->date}}</a></h6></li>
                            <li><h6><a href="#"><i class="fa fa-user"></i>{{$blog->author}}</a></h6></li>
                            <li><h6><a href="#"><i class="fa fa-comments"></i>{{$blog->comment}}</a></h6></li>
                            {{-- <li><h6><a href="#"><i class="fa fa-tags"></i>DESIGN, WORDPRESS, COMPANY</a></h6></li> --}}
                        </ul>
                    </div>
                    <div class="blog-image marginb30 margint30">
                        <img alt="Blog Image 2" class="img-responsive" src="temp/blog-image-1.jpg" >
                    </div>
                    <div class="post-content margint10">
                        <p>{{$blog->postcontent}}</p>
                    </div>
                    <div class="button mini-button button-style-2 margint30"><h6><a href="javascript:;">READ MORE</a></h6></div>
                </div>
                @endforeach
                
            </div>
            <div class="col-lg-3 col-sm-4 margint60"><!-- Sidebar -->
                <div class="luxen-widget news-widget">
                    <div class="title">
                        <h5>RECENT NEWS</h5>
                    </div>
                    <ul class="sidebar-recent">

                        <li class="clearfix">
                            <h6><a href="#">News from us from now</a></h6>
                            <div class="pull-left blg-img margint20">
                                <img src="temp/sidebar-news-image-1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="pull-left blg-txt">
                                <p>Donec ullamcorper nulla non metus auctor Nulla vitae elit libero, a pharetra augue <a class="active-color" href="#">[...]</a></p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <h6><a href="#">Its Summary for news</a></h6>
                            <div class="pull-left blg-img margint20">
                                <img src="temp/sidebar-news-image-2.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="pull-left blg-txt">
                                <p>Donec ullamcorper nulla non metus auctor Nulla vitae elit libero, a pharetra augue <a class="active-color" href="#">[...]</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="luxen-widget news-widget">
                    <div class="title">
                        <h5>HOTEL INFORMATION</h5>
                    </div>
                    <p>Nordic Hospitality is a boutique hotel located in Jabi. We offer 22 unique state of the art rooms furnished in a modern day style and decorated with designer furniture. Our rooms are ideal for travelers and families who want the best of leisure time.</p>
                </div>
                <div class="luxen-widget news-widget">
                    <div class="title">
                        <h5>CONTACT</h5>
                    </div>
                    <ul class="footer-links">
                        <li><p><i class="fa fa-map-marker"></i> No. 14, Patrick O. Bokkor Crescent, Jabi, Abuja </p></li>
                        <li><p><i class="fa fa-phone"></i> +234 708 026 6555 </p></li>
                        <li><p><i class="fa fa-envelope"></i> info@nordichospitalitysuites.com </p></li>
                    </ul>
                </div>
                <div class="luxen-widget news-widget">
                    <div class="title">
                        <h5>SOCIAL MEDIA</h5>
                    </div>
                    <ul class="social-links">
                        <li><a href="#><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-vine"></i></a></li>
                        <li><a href="#"><i class="fab fa-foursquare"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layout.footer')