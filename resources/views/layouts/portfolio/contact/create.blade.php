@extends('layouts.portfolio.master')
{{-- @push('css')
@endpush
@includeIf('layouts.dashboard.partials.css')
@section('title', 'Create Contact With Us')
@section('content')
    @component('components.breadcrumb')
        @slot('bredcrumb_title')
            Home
        @endslot
        <li class="breadcrumb-item">Contact With Us</li>
        <li class="breadcrumb-item">Create</li>
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('contact.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-lg-6">
                                    <x-input-label class="form-label" for="name" :value="__('Name')" />
                                    <span class="text-danger">(*)</span>
                                    <x-text-input class="form-control" id="name" type="text"
                                        placeholder="Enter your name here..." required="" name="name" />
                                </div>
                                <div class="col-lg-6">
                                    <x-input-label class="form-label" for="email" :value="__('Email')" />
                                    <span class="text-danger">(*)</span>
                                    <x-text-input class="form-control" id="email" type="email"
                                        placeholder="Enter email is here..." required="" name="email" />
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-6">
                                    <x-input-label class="form-label" for="phoneNumber" :value="__('Phone Number')" />
                                    <span class="text-danger">(*)</span>
                                    <x-text-input class="form-control" id="phoneNumber" type="tel"
                                        placeholder="Enter phone number name..." required="" name="phoneNumber" />
                                </div>
                                <div class="col-lg-6">
                                    <x-input-label class="form-label" for="inquiry" :value="__('Inquiry')" />
                                    <span class="text-danger">(*)</span>
                                    <select class="form-control btn btn-orange" id="inquiry" name="inquiry" required>
                                        <option class="select-placeholder btn btn-orange" value="" disabled selected>
                                            Select Inquiry
                                        </option>
                                        <option value="innovations">Neocon Innovations Limited</option>
                                        <option value="technologies">Neocon Technologies Limited</option>
                                        <option value="gateway">Neocon Gateway Limited</option>
                                        <option value="ksl">Kabir Securities Limited</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <x-input-label class="form-label" for="reason" :value="__('Describe Your Inquiry')" />
                                    <span class="text-danger">(*)</span>
                                    <textarea class="form-control" id="reason" required="" placeholder="Enter your inquiry..." name="reason"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <x-primary-button href="#" class="btn btn-primary">Save</x-primary-button>
                                    <x-secondary-button href="#" class="btn btn-secondary">Cancel
                                    </x-secondary-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        //FroalaEditor
        var editor = new FroalaEditor('#reason', {
            pluginsEnable: ['insertUnorderedList', 'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough',
                'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'align', 'outdent', 'indent',
                'quote', 'insertLink',
                'insertImage', 'insertTable', 'insertHR', 'undo', 'redo'
            ],
            height: '100px',
        });
    </script>
@endpush --}}
{{-- <div class="container text-center">
    <p class="section-subtitle">How can you communicate?</p>
    <h6 class="section-title mb-5">Contact Me</h6>
    <!-- contact form -->
    <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
        <div class="form-row">
            <div class="form-group col-sm-6">
                <input type="text" size="50" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="email" class="form-control" placeholder="Enter Email" requried>
            </div>
            <div class="form-group col-sm-12">
                <textarea name="comment" id="comment" rows="6" class="form-control" placeholder="Write Something"></textarea>
            </div>
            <div class="form-group col-sm-12 mt-3">
                <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
            </div>
        </div>
    </form><!-- end of contact form -->
</div><!-- end of container --> --}}
<div class="container">
    <div class="card text-center" style="border: none;">
        <p class="section-subtitle">How can you communicate?</p>
        <h6 class="section-title mb-5">Contact Me</h6>
    </div>
    <div class="row" data-aos="fade-in">
        <div class="col-lg-6 d-flex align-items-stretch">
            <div class="info">
                <div class="address">
                    <h4>Location:</h4>
                    <p>Ispahani Circle,Lalkhan Bazar Chittagong,Bangladesh</p>
                </div>

                <div class="email">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>sadrulpashachowdhury.edu@gmail.com</p>
                </div>

                <div class="phone">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+880-1683682400</p>
                </div>
                <div class="box-shadow rounded">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.5405185170517!2d91.81858552850021!3d22.347508339103975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89629b8b77b%3A0xc41426068d9aa080!2s114%20Ispahani%20Cir%2C%20Chittagong!5e0!3m2!1sen!2sbd!4v1691488550422!5m2!1sen!2sbd"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </div>

        <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{-- {{ route('contact.store') }} --}}" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10"></textarea>
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
                <div class="text-center"><button class="btn btn-primary" type="submit">Send Message</button></div>
            </form>
        </div>
    </div>
</div>
