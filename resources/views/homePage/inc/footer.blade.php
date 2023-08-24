<footer class="pt-50 pb-20 bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget wow fadeInUp animated mb-30">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">About me</h5>
                    </div>
                    <div class="textwidget">
                        <p>
                            {{$website->description}}
                        </p>

                        <p><strong class="color-black">Follow me</strong><br>
                        <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                            @foreach($socials as $row)
                            <li class="list-inline-item"><a class="pt" href="{{$row->social_link}}" target="_blank" title="Facebook"><i class="{{$row->social_icon}}"></i></a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Quick link</h5>
                    </div>
                    <ul class="font-small">
                        @foreach($pages as $row)
                        <li class="cat-item cat-item-2"><a href="#">{{$row->page_title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Newsletter</h5>
                    </div>
                    <div class="newsletter">
                        <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                        <form action="{{route('add.subscribe')}}" method="post" class="form-group">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                                </div>
                                <div class="col-md-12 mt-2 mb-2">
                                    <input type="email" class="form-control" name="email" placeholder="Enter your E-mail address">
                                </div>
                                <div class="col-md-12 mt-5">
                                    <button type="submit" class="btn btn-primary btn-block text-center align-content-center">Subscribe</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
            <p class="float-md-left font-small text-muted">{{$website->footer}}</p>
            <p class="float-md-right font-small text-muted">
                {{$website->author}}
            </p>
        </div>
    </div>
</footer>
