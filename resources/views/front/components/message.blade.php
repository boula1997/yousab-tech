
        <div class="g-map-message">
            <div class="row justify-content-end">
                <div class="col-lg-7 col-md-5">
                    <div class="g-map-inner">
                        {!! settings()->map !!}
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <form class="message-form-wrap" action="mail.php" method="post" id="message-form">
                        <div class="consulting-message-form mx-4">
                            <h3 class="mb-3">Free consulting </h3>
                            <div class="single-input-inner style-bg">
                                <input type="text" name="name" placeholder={{ __('general.fullname') }}>
                            </div>
                            <div class="single-input-inner style-bg">
                                <input type="text" name="email" placeholder={{ __('general.email_address') }}>
                            </div>
                            <div class="single-input-inner style-bg">
                                <textarea name="message" placeholder={{ __('general.message') }}></textarea>
                            </div>
                            <div class="btn-wrap pb-3">
                                <button type="submit" class="btn btn-base">{{ __('general.submit') }}</button>
                            </div>
                            <p class="form-messege mb-0 mt-20 text-center"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- call to action start -->
        <div class="call-to-action-area pd-top-120 pd-bottom-120 text-center bg-overlay-base"
            style="background-image: url('./assets/img/bg/5.webp');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="single-call-to-action-inner style-white">
                            <h5>We are here to answer your questions 24/7</h5>
                            <h2>Need for it solution services</h2>
                            <a class="btn btn-black mt-3" href="message.html">Message With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- call to action start -->
