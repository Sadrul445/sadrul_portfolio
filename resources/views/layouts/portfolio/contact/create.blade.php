<div class="container">
    <div class="card text-center" style="border: none;">
        <p class="section-subtitle">How can you communicate?</p>
        <h6 class="section-title mb-5">Contact Me</h6>
    </div>
    <div class="row" data-aos="fade-in">
        <div class="col-lg-6 d-flex align-items-stretch">
            <div class="info">
                <div class="address">
                    <h4 class="contact-title">Location:</h4>
                    <p>Ispahani Circle,Lalkhan Bazar Chittagong,Bangladesh</p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4 class="contact-title">Email:</h4>
                    <p>sadrulpashachowdhury.edu@gmail.com</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4 class="contact-title">Call:</h4>
                    <p>+880-1683682400</p>
                </div>
                {{-- <div class=""> --}}
                    <iframe
                       class="box-shadow rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.5405185170517!2d91.81858552850021!3d22.347508339103975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89629b8b77b%3A0xc41426068d9aa080!2s114%20Ispahani%20Cir%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1691488550422!5m2!1sen!2sbd"
                        width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                {{-- </div> --}}
            </div>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name" class="contact-label">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email" class="contact-label">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="reason" class="contact-label">Subject</label>
                    <input type="text" class="form-control" name="reason" id="reason">
                </div>
                <div class="form-group">
                    <label for="msg" class="contact-label">Message</label>
                    <textarea class="form-control" name="msg" id="msg" rows="10"></textarea>
                </div>
                <div class="text-center"><button class="btn btn-primary rounded" type="submit">Send Message</button></div>
            </form>
        </div>
        
    </div>
</div>
                {{-- <div class="my-3">
                    <div class="loading">Loading</div>
                    @if (session()->has('create'))
                        <div class="sent-message">
                            <div class="alert alert-success">
                                {{ session('create') }}
                            </div>
                        </div>
                    @else
                        <div class="error-message">
                            <div class="alert alert-danger">
                                
                            </div>
                        </div>
                    @endif
                </div> --}}