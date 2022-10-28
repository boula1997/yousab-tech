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
        <p><a href="https://wa.me/0500774150" target="_blank"> {{ $setting->phone1 }}
            </a> <i class="fab fa-whatsapp"></i> <i class="fas fa-phone-square"></i></i></i></p>
        <p><a href="https://wa.me/0500774150"target="_blank"> {{ $setting->phone2 }}
            </a><i class="fab fa-whatsapp"></i> <i class="fas fa-phone-square"></i></i></i></p>
        <p><a href="https://wa.me/0500774150"target="_blank"> {{ $setting->phone3 }}
            </a> <i class="fab fa-whatsapp"></i> <i class="fas fa-phone-square"></i></i></i></p>
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
        <form name="sentMessage" id="contactForm" novalidate style="text-align: right;">
            <div class="control-group form-group">
                <div class="controls">
                    <label>الاسم بالكامل</label>
                    <input type="text" class="form-control" id="name" required
                        data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>رقم الهاتف</label>
                    <input type="tel" class="form-control" id="phone" required
                        data-validation-required-message="Please enter your phone number.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>البريد الالكتروني</label>
                    <input type="email" class="form-control" id="email" required
                        data-validation-required-message="Please enter your email address.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>الرسالة </label>
                    <textarea rows="5" cols="100" class="form-control" id="message" required
                        data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">ارسال</button>
        </form>
    </div>
</div>
