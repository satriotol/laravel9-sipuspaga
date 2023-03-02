<footer>
    <div class="footer-top-area black-bg pt-80 pb-50"
        style="background-image:url({{ asset('frontend_assets/img/bg/bg-04.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.6282273328147!2d110.42590811431853!3d-7.052896771071706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c00e19e3db1%3A0xde471feee960ce9f!2sDinas%20Pemberdayaan%20Perempuan%20Dan%20Perlindungan%20Anak!5e0!3m2!1sid!2sid!4v1674576110738!5m2!1sid!2sid"
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">Link Terkait</h3>
                        <div class="footer-link">
                            <ul>
                                @foreach ($links as $link)
                                    <li><a href="{{ $link->url }}"
                                            target="_blank">{{ $link->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6" id="kontak">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">Kontak</h3>
                        <ul class="contact-link">
                            @foreach ($contacts as $contact)
                                <li>
                                    <div class="contact-address-icon">
                                        <i class="{{ $contact->icon }}"></i>
                                    </div>
                                    <div class="contact-address-text">
                                        <span>{{ $contact->description }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-wrapper mb-30">
                        <h3 class="footer-title">Sosial Media</h3>
                        <div class="footer-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
    <div class="footer-bottom-area black-soft-bg pt-25 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="copyright text-center">
                        <p>Copyright <i class="far fa-copyright"></i> 2023 <a href="#">Puspaga</a>. All
                            Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>