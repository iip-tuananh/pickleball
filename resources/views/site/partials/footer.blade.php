<footer class="footer">
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="fot-col col-xs-12 col-md-6 col-lg-6 col-xl-3 footer-info">
                    <div class="logo-footer">
                        <a href="{{route('front.home-page')}}" title="{{$config->web_title}}">
                            <img width="300" height="51"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                 data-src="{{$config->image ? $config->image->path : 'https://placehold.co/300x51'}}"
                                 alt="{{$config->web_title}}" class="lazyload">
                        </a>
                    </div>
                    <div class="des_foo">
                        {{$config->web_des}}
                    </div>
                    <div class="social-footer">
                        <div class="social">
                            <a href="{{$config->facebook}}" target="_blank" aria-label="Facebook"
                               title="Theo dõi Sudes Sport trên Facebook">
                                <img class="lazyload" width=35 height=35 alt="Facebook"
                                     data-src="/site/images/facebook_2.svg?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                            <a href="{{$config->instagram}}" target="_blank" aria-label="Instagram"
                               title="Theo dõi Sudes Sport trên Instagram">
                                <img class="lazyload" width=35 height=35 alt="Instagram"
                                     data-src="/site/images/instagram_1.svg?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                            <a href="{{$config->shopee}}" target="_blank" aria-label="Shopee"
                               title="Theo dõi Sudes Sport trên Shopee">
                                <img class="lazyload" width=35 height=35 alt="Shopee"
                                     data-src="/site/images/shopee.svg?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                            <a href="{{$config->lazada}}" target="_blank" aria-label="Lazada"
                               title="Theo dõi Sudes Sport trên Lazada">
                                <img class="lazyload" width=35 height=35 alt="Lazada"
                                     data-src="/site/images/lazada.svg?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                            <a href="{{$config->tiktok}}" target="_blank" aria-label="Tiktok"
                               title="Theo dõi Sudes Sport trên Tiktok">
                                <img class="lazyload" width=35 height=35 alt="Tiktok"
                                     data-src="/site/images/tiktok.svg?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fot-col col-xs-12 col-md-6 col-lg-6 col-xl-3 footer-contact">
                    <h4 class="title-menu">
                        Liên hệ
                    </h4>
                    <div class="list-menu toggle-mn">
                        <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <b>Địa chỉ: </b>
                                        {{$config->address_company}}
                                    </span>
                        </div>
                        <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <b>Điện thoại: </b>
                                        <a title="{{$config->hotline}}" href="tel:{{ str_replace(' ', '', $config->hotline)}}">
                                            {{$config->hotline}}
                                        </a>
                                    </span>
                        </div>
                        <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <b>Zalo: </b>
                                        <a title="{{$config->zalo}}" href="https://zalo.me/{{ str_replace(' ', '', $config->zalo)}}">
                                            {{$config->zalo}}
                                        </a>
                                    </span>
                        </div>
                        <div class="content-contact clearfix">
                                    <span class="list_footer">
                                        <b>Email: </b>
                                        <a title="{{$config->email}}"
                                           href="mailto:{{$config->email}}">
                                            {{$config->email}}
                                        </a>
                                    </span>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-stores" href="/he-thong-cua-hang"
                       title="Chuỗi cửa hàng Sudes Sport">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                            <path
                                d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                        </svg>
                        <span>Chuỗi cửa hàng Sudes Sport</span>
                    </a>
                </div>
                <div class="fot-col col-xs-12 col-md-4 col-lg-4 col-xl-2 footer-click">
                    <h4 class="title-menu clicked">
                        Chính sách
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob">
                        @foreach ($policies as $policy)
                        <li class="li_menu">
                            <a href="{{route('front.policy-detail', $policy->slug)}}" title="{{$policy->title}}">{{$policy->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="fot-col col-xs-12 col-md-4 col-lg-4 col-xl-2 footer-click">
                    <h4 class="title-menu clicked">
                        Danh mục
                    </h4>
                    <ul class="list-menu toggle-mn hidden-mob list-social">
                        <li class="li_menu">
                            <a href="{{route('front.home-page')}}" title="Trang chủ">Trang chủ</a>
                        </li>
                        <li class="li_menu">
                            <a href="{{route('front.about-us')}}" title="Về {{$config->web_title}}">Giới thiệu</a>
                        </li>
                        <li class="li_menu">
                            <a href="{{route('front.contact-us')}}" title="Liên hệ chúng tôi">Liên hệ chúng tôi</a>
                        </li>
                        @foreach ($post_categories as $category)
                            <li class="li_menu">
                                <a href="{{route('front.list-blog', $category->slug)}}" title="{{$category->name}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="fot-col col-xs-12 col-md-4 col-lg-4 col-xl-2 footer-click">
                    <h4 class="title-menu">
                        Hỗ trợ thanh toán
                    </h4>
                    <div class="block-payment">
                        <div class="payment-footer list-menu">
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="MoMo"
                                     data-src="/site/images/payment_1.png?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Zalo Pay"
                                     data-src="/site/images/payment_2.png?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="VnPay"
                                     data-src="/site/images/payment_3.png?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Moca"
                                     data-src="/site/images/payment_4.png?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="Visa"
                                     data-src="/site/images/payment_5.png?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                            <div class="payment-item">
                                <img class="lazyload" width=126 height=58 alt="ATM"
                                     data-src="/site/images/payment_6.png?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </div>
                        </div>
                    </div>
                    <div class="block-certifi">
                        <h4 class="title-menu">
                            Được chứng nhận bởi
                        </h4>
                        <div class="certifi-footer">
                            <a href="#" title="Chứng nhận 1" target="_blank">
                                <img width=335 height=108 class="lazyload" alt="Chứng nhận 1"
                                     data-src="/site/images/certifi_1.png?1758009149569"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-footer-bottom copyright clearfix">
        <div class="container">
            <div class="row tablet">
                <div id="copyright" class="col-lg-12 col-md-12 col-xs-12 fot_copyright">
                            <span class="wsp">
                                <span class="mobile">© Bản quyền thuộc về <b>{{$config->web_title}}</b>

                                </span>
                            </span>
                </div>
            </div>
            <div class="footer-widget">
                <a href="#" class="backtop" title="Lên đầu trang">
                    <i class="icon-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                        </svg>
                    </i>
                </a>
                <div class="main-widget">
                    <div class="def-content unsee element">
                        <div class="def-header">
                            Liên hệ với chúng tôi
                            <div class="close-icon" title="Đóng">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>
                        </div>
                        <div class="item phone">
                            <a href="tel:{{ str_replace(' ', '', $config->hotline)}}">
                                        <span class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path fill="currentColor"
                                                      d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                                                </path>
                                            </svg>
                                        </span>
                                <div class="detail">
                                    <b class="arcu-item-title">
                                        Hotline:
                                    </b>
                                    <span class="arcu-item-subtitle">
                                        {{$config->hotline}}
                                            </span>
                                </div>
                            </a>
                        </div>
                        <div class="item zalo">
                            <a target="_blank" href="https://zalo.me/{{ str_replace(' ', '', $config->zalo)}}">
                                        <span class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                 viewBox="0 0 614.501 613.667" xml:space="preserve">
                                                <path fill="currentColor"
                                                      d="M464.721,301.399c-13.984-0.014-23.707,11.478-23.944,28.312c-0.251,17.771,9.168,29.208,24.037,29.202   c14.287-0.007,23.799-11.095,24.01-27.995C489.028,313.536,479.127,301.399,464.721,301.399z">
                                                </path>
                                                <path fill="currentColor"
                                                      d="M291.83,301.392c-14.473-0.316-24.578,11.603-24.604,29.024c-0.02,16.959,9.294,28.259,23.496,28.502   c15.072,0.251,24.592-10.87,24.539-28.707C315.214,313.318,305.769,301.696,291.83,301.392z">
                                                </path>
                                                <path fill="currentColor"
                                                      d="M310.518,3.158C143.102,3.158,7.375,138.884,7.375,306.3s135.727,303.142,303.143,303.142   c167.415,0,303.143-135.727,303.143-303.142S477.933,3.158,310.518,3.158z M217.858,391.083   c-33.364,0.818-66.828,1.353-100.133-0.343c-21.326-1.095-27.652-18.647-14.248-36.583c21.55-28.826,43.886-57.065,65.792-85.621   c2.546-3.305,6.214-5.996,7.15-12.705c-16.609,0-32.784,0.04-48.958-0.013c-19.195-0.066-28.278-5.805-28.14-17.652   c0.132-11.768,9.175-17.329,28.397-17.348c25.159-0.026,50.324-0.06,75.476,0.026c9.637,0.033,19.604,0.105,25.304,9.789   c6.22,10.561,0.284,19.512-5.646,27.454c-21.26,28.497-43.015,56.624-64.559,84.902c-2.599,3.41-5.119,6.88-9.453,12.725   c23.424,0,44.123-0.053,64.816,0.026c8.674,0.026,16.662,1.873,19.941,11.267C237.892,379.329,231.368,390.752,217.858,391.083z    M350.854,330.211c0,13.417-0.093,26.841,0.039,40.265c0.073,7.599-2.599,13.647-9.512,17.084   c-7.296,3.642-14.71,3.028-20.304-2.968c-3.997-4.281-6.214-3.213-10.488-0.422c-17.955,11.728-39.908,9.96-56.597-3.866   c-29.928-24.789-30.026-74.803-0.211-99.776c16.194-13.562,39.592-15.462,56.709-4.143c3.951,2.619,6.201,4.815,10.396-0.053   c5.39-6.267,13.055-6.761,20.271-3.357c7.454,3.509,9.935,10.165,9.776,18.265C350.67,304.222,350.86,317.217,350.854,330.211z    M395.617,369.579c-0.118,12.837-6.398,19.783-17.196,19.908c-10.779,0.132-17.593-6.966-17.646-19.512   c-0.179-43.352-0.185-86.696,0.007-130.041c0.059-12.256,7.302-19.921,17.896-19.222c11.425,0.752,16.992,7.448,16.992,18.833   c0,22.104,0,44.216,0,66.327C395.677,327.105,395.828,348.345,395.617,369.579z M463.981,391.868   c-34.399-0.336-59.037-26.444-58.786-62.289c0.251-35.66,25.304-60.713,60.383-60.396c34.631,0.304,59.374,26.306,58.998,61.986   C524.207,366.492,498.534,392.205,463.981,391.868z">
                                                </path>
                                            </svg>
                                        </span>
                                <div class="detail">
                                    <b class="arcu-item-title">
                                        Zalo chat:
                                    </b>
                                    <span class="arcu-item-subtitle">
                                        {{$config->zalo}}
                                            </span>
                                </div>
                            </a>
                        </div>
                        <div class="item mess">
                            <a target="_blank" href="{{$config->facebook}}">
                                        <span class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                                            </svg>
                                        </span>
                                <div class="detail">
                                    <b class="arcu-item-title">
                                        Messenger:
                                    </b>
                                    <span class="arcu-item-subtitle">
                                                {{$config->facebook}}
                                            </span>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="item map">
                            <a target="_blank" href="/he-thong-cua-hang">
                                        <span class="img">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                      d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                                                <path fill-rule="evenodd"
                                                      d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                                            </svg>
                                        </span>
                                <div class="detail">
                                    <b class="arcu-item-title">
                                        Hệ thống cửa hàng:
                                    </b>
                                    <span class="arcu-item-subtitle">
                                                Xem địa chỉ cửa hàng
                                            </span>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                    <div class="out-circle">
                        <div class="main-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" version="1.1"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g transform="translate(-825 -308)">
                                    <g>
                                        <path transform="translate(825 308)" fill="#FFFFFF"
                                              d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <p>
                                Hỗ trợ
                            </p>
                        </div>
                        <div class="close-icon unsee element">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                 fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <script>
                    $(function() {
                        $('.close-icon').click(function(event) {
                            $('.element').toggleClass('unsee');
                        });
                    });
                </script>
            </div>
        </div>
    </div>
</footer>
