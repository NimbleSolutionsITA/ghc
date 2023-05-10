<!--************************************
            Footer Start
    *************************************-->
<footer id="th-footer" class="th-footer th-haslayout">
    <!--
    <div class="th-footertopbar">
        <div class="container">
            <div class="row">
                <ul class="th-fservices">
                    <li>
                        <span class="th-fserviceicon"><i class="fa fa-calendar"></i></span>
                        <div class="th-contentbox">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal"><strong>Richiedi un <span>appuntamento</span></strong></a>
                        </div>
                    </li>
                    <li>
                        <span class="th-fserviceicon"><i class="fa fa-user-md"></i></span>
                        <div class="th-contentbox">
                            <a href="/medici"><strong>Conosci il <span>nostro staff</span></strong></a>
                        </div>
                    </li>
                    <li>
                        <span class="th-fserviceicon"><i class="fa fa-stethoscope"></i></span>
                        <div class="th-contentbox">
                            <a href="/attivita/visite-ambulatoriali"><strong>Visite <span>ambulatoriali</span></strong></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    -->
    <div class="th-footermiddlebox th-sectionspace th-haslayout th-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/bgparallax/bgparallax-03.jpg">
        <div class="container">
            <div class="row">
                <div class="th-fcols">
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="th-fcol">
                            <strong class="th-logo">
                                <a href="\">
                                    <img src="/images/logo-gg-white.png" alt="image description">
                                </a>
                            </strong>
                            <ul class="th-faddressinfo">
                                <li>
                                    <span class="th-addressicon"><img src="/images/icon/img-08.png" alt="image description"></span>
                                    <address>
                                        {{ setting('informazioni-generali.via') }}<br />
                                        {{ setting('informazioni-generali.cap') }} {{ setting('informazioni-generali.citta') }}<br />
                                        {{ strtoupper(trans('app.iva')) }}: {{ setting('informazioni-generali.piva') }}<br />
                                        {{ strtoupper(trans('app.rea')) }}: {{ setting('informazioni-generali.rea') }}<br />
                                        {{ strtoupper(trans('app.capitale-sociale')) }}: € {{ setting('informazioni-generali.capitale-sociale') }}<br />
                                        {{ strtoupper(trans('app.phone')) }}:<br />
                                        {{ setting('informazioni-generali.telefono') }}<br />
                                        EMAIL:<br />
                                        {{ setting('informazioni-generali.email') }}
                                    </address>
                                </li>
                                <li>
                                    <span class="th-addressicon"><i class="flaticon-passport"></i></span>
                                    <div class="th-phone" style="font-size: .9em;">
                                        <span>
                                            <b  style="font-size: 1em;">Regolamento Generale UE 679/2016 sulla protezione dei dati personali</b><br />
                                            <b>Persona giuridica</b><br />
                                            LTA S.r.l. <br />
                                            Via della Conciliazione, 10 - Roma - Cap 00193 - P.IVA 14243311009.<br />
                                            <b>Persona fisica</b> <br />
                                            Dott. Luigi Recupero.<br />
                                            <b>Dati di contatto del Responsabile della Protezione dei Dati (Data Protection Officer - DPO)</b><br />
                                            <a href="mailto:dpo@garofalohealthcare.com">dpo@garofalohealthcare.com</a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="th-fcol">
                            <div class="th-borderheading">
                                <h3></h3>
                            </div>
                            <div class="th-description">
                            </div>
                            <ul class="th-socialicons th-socialiconsround">
                                @if(!empty(setting('informazioni-generali.facebook')))<li><a href="{{ setting('informazioni-generali.facebook') }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>@endif
                                @if(!empty(setting('informazioni-generali.linkedin')))<li><a href="{{ setting('informazioni-generali.likedin') }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>@endif
                                @if(!empty(setting('informazioni-generali.googleplus')))<li><a href="{{ setting('informazioni-generali.googleplus') }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>@endif
                                @if(!empty(setting('informazioni-generali.twitter')))<li><a href="{{ setting('informazioni-generali.twitter') }}" target="_blank"><i class="fa fa-twitter"></i></a></li>@endif
                            </ul>
                        </div>
                    </div>
                    -->
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="th-fcol">
                            <div class="th-borderheading">
                                <h3>{{ trans('app.usefulLink') }}</h3>
                            </div>
                            {{ menu('footer', 'layouts.footer_nav') }}
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="th-fcol">
                            <div class="th-borderheading">
                                <h3>{{ trans('app.recentNews') }}</h3>
                            </div>
                            <ul class="th-recentpost">
                                @foreach($posts->where('category_id', 1)->take(3) as $post)

                                    <li>
                                        <figure><a href=""><i><img src="{{ Voyager::image($post->thumbnail('footer')) }}"></i></a></figure>
                                        <div class="th-shortcontent">
                                            <time datetime="{{ $post->updated_at }}">{{ $post->updated_at->diffForHumans() }}</time>
                                            <a style="color: white;" href="/media/news/{{ $post->slug }}">{{ $post->title }}</a>
                                        </div>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="th-footerbottombar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <span class="th-copyright">Made with <i style="color: #D9534F;" class="fa fa-heart"></i> by <a style="color: white; text-decoration: underline;" href="http://www.nimble-solutions.com" target="_blank">Nimble Solutions</a></span>
                    <nav class="th-footernav" style="float: right;">
                        <a style="color: white;" href="/privacy-policy">Privacy Policy</a> - <a style="color: white;" href="/cookie-policy">Cookie Policy</a> - <a style="color: white;" href="/informativa-consenso-privacy">Informativa e Consenso Privacy</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--************************************
        Footer End
*************************************-->
