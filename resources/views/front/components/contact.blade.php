<div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3628.0335249046357!2d46.7234823!3d24.588039199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f0ff202f3831b%3A0xf1617dae8e633e63!2z2YXYtdio2KfYqiDYs9iq2YrZhCDZhtmI2KfZgdmK2LEg2LTZhNin2YTYp9iq!5e0!3m2!1sen!2seg!4v1666437627350!5m2!1sen!2seg"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4 contact-right">
        <h3>{{ $contact_section->subtitle }}</h3>
        <p>
            {{ $setting->address }}
            <i class="fas fa-map-marker-alt"></i>
        </p>

        <p>{{ $setting->phone1 }}</p>
        <a href="https://wa.me/966500774150"><i class="fab fa-whatsapp"></i></a> <a href="tel:00966500774150"><i class="fas fa-phone-square"></i></a>
                    
        <p>{{ $setting->phone2 }}</p>
        <a href="https://wa.me/966537394580"><i style="font-size:200%"class="fab fa-whatsapp"></i></a> <a href="tel:00966537394580"><i style="font-size: 200%" class="fas fa-phone-square"></i></a>

        <p>{{ $setting->phone3 }}</p>
        <a href="https://wa.me/966594394745"><i class="fab fa-whatsapp"></i></a> <a href="tel:00966594394745"><i class="fas fa-phone-square"></i></a>
         <p>  
        <!-- <abbr title="Email">E</abbr>: -->
            <a href="mailto:medahtahmed465@gmail.com">{{ $setting->email1 }}<i class="fas fa-envelope"></i>
            </a>
        </p>
        <p>
            <!-- <abbr title="Email">E</abbr>: -->
            <a href="mailto:aomarkhmis1234@gmail.com">{{ $setting->email2 }}<i class="fas fa-envelope"></i>
            </a>
        </p>
        <p>
            <!-- <abbr title="Hours">H</abbr>:  -->
            {{ $setting->appointment1 }} <i class="fas fa-calendar-check"></i>
        </p>
        <p>
            <!-- <abbr title="Hours">H</abbr>:  -->
            {{ $setting->appointment2 }} <i class="fas fa-calendar-check"></i>
        </p>
    </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
    <div class="col-lg-8 mb-4 contact-left">

        <h3>راسلنا الان!</h3>
        <form id="contactForm" style="text-align: right;" method="post">
            @csrf
            <div class="control-group form-group">
                <div class="controls">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        id="name" required data-validation-required-message="Please enter your name."
                        value="{{ old('name') }}" placeholder="الاسم بالكامل">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                        id="phone" required data-validation-required-message="Please enter your phone number."
                        value="{{ old('phone') }}" placeholder="رقم الهاتف">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" required data-validation-required-message="Please enter your email address."
                        value="{{ old('email') }}" placeholder="البريد الالكتروني">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <textarea rows="5" cols="100" class="form-control @error('message') is-invalid @enderror" name="message"
                        id="message" required data-validation-required-message="Please enter your message" placeholder="الرسالة"
                        maxlength="999" style="resize:none">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">ارسال</button>
        </form>
    </div>
</div>
