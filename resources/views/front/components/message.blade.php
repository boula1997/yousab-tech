<div class="g-map-message">
    <div class="row justify-content-end">
        <div class="col-lg-7 col-md-5">
            <div class="g-map-inner">
                {!! settings()->map !!}
            </div>
        </div>
        <div class="col-lg-5 col-md-7">
            <form class="message-form-wrap"  method="post" id="message-form">
                @csrf
                <div class="consulting-message-form mx-4">
                    <h3 class="mb-3">{{ __('general.free_consulting') }}</h3>
                    <div class="single-input-inner style-bg">
                        <input type="text" name="name" placeholder={{ __('general.fullname') }}>
                        <div id="name" class="err"></div>
                    </div>
                    <div class="single-input-inner style-bg">
                        <input type="text" name="email" placeholder={{ __('general.email_address') }}>
                        <div id="email" class="err"></div>
                    </div>
                    <div class="single-input-inner style-bg">
                        <input type="text" name="phone" placeholder={{ __('general.phone') }}>
                        <div id="phone" class="err"></div>
                    </div>
                    <div class="single-input-inner style-bg">
                        <textarea name="message" placeholder={{ __('general.message') }}></textarea>
                        <div id="message" class="err"></div>
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


@push('scripts')
    <script>
        $('#message-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $(".err").empty();
            $(".err").addClass("d-none");
            $('#btn-contact').attr('disabled', 'disabled');

            $.ajax({
                type: 'POST',
                url: "{{ route('front.message.post') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    'name': $("input[name=name]").val(),
                    'email': $("input[name=email]").val(),
                    'phone': $("input[name=phone]").val(),
                    'message': $("#message").val(),
                },
                success: (response) => {
                    $('#btn-contact').removeAttr('disabled');
                    if (response) {
                        this.reset();
                        if (response.success) {
                            $('.success').removeClass('d-none').text(response.success);
                            setTimeout(() => {
                                $('.success').addClass('d-none').text(response.success);
                            }, 5000);
                        } else
                            $('.error').removeClass('d-none').text(response.error);
                    }
                },
                error: function(response) {
                    $('#btn-contact').removeAttr('disabled');

                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                    if (response.responseJSON.errors.name) {
                        $("#name").append(
                            `<div class="alert alert-danger my-1"  style="text-align:initial !important">${response.responseJSON.errors.name}</div>`
                        );
                    }
                    if (response.responseJSON.errors.email) {
                        $("#email").append(
                            `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.email}</div>`
                        );
                    }
                    if (response.responseJSON.errors.phone) {
                        $("#phone").append(
                            `<div class="alert alert-danger my-1" style="text-align:initial !important">${response.responseJSON.errors.phone}</div>`
                        );
                    }

                    if (response.responseJSON.errors.message) {
                        $("#message").append(
                            `<div class="alert alert-danger text-initial my-1" style="text-align:initial !important">${response.responseJSON.errors.message}</div>`
                        );
                    }

                }
            });
        });
    </script>
@endpush
