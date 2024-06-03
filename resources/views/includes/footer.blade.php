<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h6 class="widget-title">Spring Luxury Academy</h6>
                <p>
                    {{ $setting->about }}
                </p>
            </div>
            <!-- end col-4 -->
            <div class="col-xl-3 col-lg-1"> </div>
            <!-- end col-3 -->
            <div class="col-xl-3 col-lg-3">
                <h6 class="widget-title">Contact</h6>
                <p>
                {{ $setting->email }}
                <br>
                    {{ $setting->phone }}
                    {{-- <br> --}}
                    {{-- <a href="https://www.google.com/maps/search/?api=1&amp;query=centurylink+field"
                        data-fancybox="" data-width="640" data-height="360">Discover On Map</a> --}}
                </p>
            </div>
            <!-- end col-3 -->
            <div class="col-xl-2 col-lg-4">
                <h6 class="widget-title">Location</h6>
                <p>{{ $setting->address }}</p>
            </div>
            <!-- end col-2 -->
            <div class="col-12">
                <div class="bottom-bar"> <span>© {{ Date("Y") }} {{ $setting->website_title }}</span>
                    <ul class="footer-social">
                        <li><a href="{{ $setting->instagram }}">Instagram</a></li>
                        <li><a href="{{ $setting->twitter }}">Twitter</a></li>
                        <li><a href="{{ $setting->facebook }}">Facebook</a></li>
                    </ul>
                    <!-- end footer-social -->
                </div>
                <!-- end bottom-bar -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>