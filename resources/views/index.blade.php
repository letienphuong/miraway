@extends('layouts.master')
@section('content')


<main>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card" style="border:none;">
                        <img class="card-img-top" style="border-radius:24px;" src="{{asset('assets/img/banner_1.png')}}" alt="Card image cap">
                        <div class="card-body content">
                        <h5 class="card-title title_header">DATA – TRÁI TIM CỦA CÔNG NGHỆ CHUYỂN ĐỔI SỐ</h5>
                        <p class="card-text text-content">Chuyển đổi công nghệ số đang trở thành xu hướng không thể tránh khỏi đối với các doanh nghiệp trong thời đại ngày nay. Với sự phát triển của 4.0 thì chuyển đổi số đã không còn là sự lựa chọn mà là con đường bắt buộc của những doanh nghiệp muốn thành công. Vậy phải làm thế nào? Dựa trên cái gì? Hãy cùng Miraway tìm hiểu</p>
                        <div class="banner-main">
                            <div class="post-meta">07/07/2023_Tiến Phượng _ 0 comments</div>
                            <div><a href="#" class="more-view">Xem thêm</a></div>
                        </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-4" style="border:none;">
                        <img class="card-img-top" style="border-radius:5%;" src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg" alt="Card image cap">
                        <div class="card-body content">
                            <p class="card-text title_sibar">Ứng dụng CDP phân tích nguyện vọng và hành vi của khách hàng lĩnh vực tài chính ngân hàng.</p>
                            <div class="banner-main">
                                <div class="post-meta">07/07/2023</div>
                                <div><a href="#" class="more-view">Xem thêm</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4" style="border:none;">
                        <img class="card-img-top" style="border-radius:5%;" src="https://dfstudio-d420.kxcdn.com/wordpress/wp-content/uploads/2019/06/digital_camera_photo-1080x675.jpg" alt="Card image cap">
                        <div class="card-body content">
                            <p class="card-text title_sibar">Miraway tài trợ hội thảo IDG – Chuyển đổi số trong lĩnh vực Tài chính – Ngân hàng và Fintech – Dữ liệu cá nhân</p>
                            <div class="banner-main">
                                <div class="post-meta">07/07/2023</div>
                                <div><a href="#" class="more-view">Xem thêm</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text" style="text-align:center; padding:40px 0;">
                        <div class="info_header">
                            <h2 class="text_title">Miraway trên mạng xã hội</h2>
                        </div>
                        <div class="social_medial">
                            <ul class="social_medial_icon">
                                <li><img src="{{asset('assets/img/youtube.svg')}}" alt=""></li>
                                <li><img src="{{asset('assets/img/facebook.svg')}}" alt=""></li>
                                <li><img src="{{asset('assets/img/logo.svg')}}" alt=""></li>
                                <li><img src="{{asset('assets/img/linkedin.svg')}}" alt=""></li>
                                <li><img src="{{asset('assets/img/zalo.svg')}}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured_articles">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured_articles_list">
                        <div class="header_title">
                            <p class="text_title">Bài viết tiêu biểu</p>
                        </div>
                        <div class="action_arrow">
                            <a href="#">
                                <img class="arrow arrow-left"src="{{asset('assets/img/arrow-left.svg')}}" alt="">
                            </a>
                            <a href="#">
                                <img class="arrow arrow-right" src="{{asset('assets/img/arrow-right.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                        <img class="article_image d-block w-100" src="{{asset('assets/img/banner_4.png')}}" alt="">
                        </div>
                        <div class="article_block col-sm-7">
                            <div class="card-block">
                                <p class="article_title">TƯNG BỪNG KHAI TRƯƠNG KIOSK TỰ PHỤC VỤ 24/7</p>
                                <p class="article_content">Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.</p>
                                <a href="#" class="btn-view more-view">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                        <img class="article_image d-block w-100" src="{{asset('assets/img/banner_4.png')}}" alt="">
                        </div>
                        <div class="article_block col-sm-7">
                            <div class="card-block">
                                <p class="article_title">TƯNG BỪNG KHAI TRƯƠNG KIOSK TỰ PHỤC VỤ 24/7</p>
                                <p class="article_content">Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.</p>
                                <a href="#" class="btn-view more-view">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register-articles col-lg-5">
                    <div class="form-register-articles p-4 bg-white rounded border-1">
                        <p class="form_title mb-2 text-center pt-2">Đăng ký tài khoản bài viết</p>
                        <form  class="form">
                            @csrf
                            <div class="input-group">
                              <label for="name" class="font-500 text-label">Họ và tên</label>
                              <input id="name" name="name" placeholder="Họ và tên" type="text" class="input">
                              <span class="error-message"></span>
                              <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 12L10 16L18 8" stroke="#58C27D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM9.70711 8.29289C9.31658 7.90237 8.68342 7.90237 8.29289 8.29289C7.90237 8.68342 7.90237 9.31658 8.29289 9.70711L10.5858 12L8.29289 14.2929C7.90237 14.6834 7.90237 15.3166 8.29289 15.7071C8.68342 16.0976 9.31658 16.0976 9.70711 15.7071L12 13.4142L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L13.4142 12L15.7071 9.70711C16.0976 9.31658 16.0976 8.68342 15.7071 8.29289C15.3166 7.90237 14.6834 7.90237 14.2929 8.29289L12 10.5858L9.70711 8.29289Z" fill="#777E91" />
                              </svg>
                            </div>
                            <div class="input-group">
                              <label for="email" class="font-500 text-label">Email</label>
                              <input id="email" name="email" type="email" class="input" autocomplete placeholder="john@gmail.com">
                              <span class="error-message"></span>
                              <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 12L10 16L18 8" stroke="#58C27D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM9.70711 8.29289C9.31658 7.90237 8.68342 7.90237 8.29289 8.29289C7.90237 8.68342 7.90237 9.31658 8.29289 9.70711L10.5858 12L8.29289 14.2929C7.90237 14.6834 7.90237 15.3166 8.29289 15.7071C8.68342 16.0976 9.31658 16.0976 9.70711 15.7071L12 13.4142L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L13.4142 12L15.7071 9.70711C16.0976 9.31658 16.0976 8.68342 15.7071 8.29289C15.3166 7.90237 14.6834 7.90237 14.2929 8.29289L12 10.5858L9.70711 8.29289Z" fill="#777E91" />
                              </svg>
                            </div>
                            <div class="input-group">
                              <label for="password" class="font-500 text-label">Mật khẩu</label>
                              <input id="password" name="password" type="password" class="input">
                              <span class="error-message"></span>
                              <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M6 12L10 16L18 8" stroke="#58C27D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM9.70711 8.29289C9.31658 7.90237 8.68342 7.90237 8.29289 8.29289C7.90237 8.68342 7.90237 9.31658 8.29289 9.70711L10.5858 12L8.29289 14.2929C7.90237 14.6834 7.90237 15.3166 8.29289 15.7071C8.68342 16.0976 9.31658 16.0976 9.70711 15.7071L12 13.4142L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L13.4142 12L15.7071 9.70711C16.0976 9.31658 16.0976 8.68342 15.7071 8.29289C15.3166 7.90237 14.6834 7.90237 14.2929 8.29289L12 10.5858L9.70711 8.29289Z" fill="#777E91" />
                              </svg>
                            </div>
                            <button id="submitButton" type="submit" class="button">Đăng ký</button>
                        </form>
                        <div class="d-flex align-items-center justify-content-center">
                            <div id="loadingIndicator" style="display: none;justify-content:center;">
                                <img style="width=:100px; height:100px;" src="{{asset('assets/img/loading_gif.gif')}}" alt="">
                            </div>
                        </div>
                        <script>

                            class FormValidator {
                                constructor(form, fields) {
                                    this.form = form;
                                    this.fields = fields;
                                }

                                initialize() {
                                    this.validateOnEntry();
                                    this.validateOnSubmit();
                                }

                                validateOnSubmit() {
                                    const self = this;

                                    this.form.addEventListener('submit', event => {
                                        event.preventDefault();

                                        document.getElementById('loadingIndicator').style.display = 'block';
                                        document.getElementById('submitButton').disabled = true;

                                        let isValid = true;

                                        self.fields.forEach(field => {
                                        const input = document.querySelector(`#${field}`);
                                        self.validateFields(input);

                                        if (input.classList.contains('input-error')) {
                                            isValid = false;
                                        }
                                        });

                                        if (isValid) {
                                        const formData = new FormData(self.form);

                                        fetch('/register', {
                                            method: 'POST',
                                            body: formData,
                                            redirect: 'follow'
                                        })
                                            .then(response => {
                                            if (response.ok) {
                                                return response.json();
                                            } else {
                                                throw new Error(response.statusText);
                                            }
                                            })
                                            .then(data => {
                                            console.log(data);

                                            if (data.success) {
                                                alert('Đăng ký thành công. Vui lòng xác nhận tài khoản qua email.');
                                                window.location.href = '/';
                                            } else if (data.errors) {
                                                const errors = data.errors;

                                                self.fields.forEach(field => {
                                                const input = document.querySelector(`#${field}`);
                                                const errorMessages = errors[field];
                                                console.log("errorMessages",errorMessages);

                                                if (errorMessages && errorMessages.length > 0) {
                                                    input.classList.add('input-error');
                                                    self.setStatus(input, errorMessages[0], 'error');
                                                } else {
                                                    input.classList.remove('input-error');
                                                    self.setStatus(input, null, 'success');
                                                }
                                                });
                                            } else {
                                                alert('Đăng ký không thành công. Vui lòng thử lại.');
                                            }
                                            })
                                            .catch(error => {
                                            console.error('Đã xảy ra lỗi:', error);
                                            alert('Đã xảy ra lỗi. Vui lòng thử lại sau.');
                                            })
                                            .finally(() => {
                                            document.getElementById('loadingIndicator').style.display = 'none';
                                            document.getElementById('submitButton').disabled = false;
                                            });
                                        } else {
                                        document.getElementById('loadingIndicator').style.display = 'none';
                                        document.getElementById('submitButton').disabled = false;
                                        }
                                    });
                                }
                                validateOnEntry() {
                                    let self = this;
                                    this.fields.forEach(field => {
                                    const input = document.querySelector(`#${field}`);

                                    input.addEventListener('input', () => {
                                        self.validateFields(input);
                                    });
                                    });
                                }

                                validateFields(field) {
                                    if (field.value.trim() === '') {
                                        this.setStatus(field, `${field.previousElementSibling.innerText} không để trống`, 'error');
                                    } else if (field.type === 'email') {
                                        const re = /\S+@\S+\.\S+/;
                                        if (re.test(field.value)) {
                                        this.setStatus(field, null, 'success');
                                        } else {
                                        this.setStatus(field, 'Email chưa đúng định dạng', 'error');
                                        }
                                    } else {
                                        this.setStatus(field, null, 'success');
                                    }
                                }

                                setStatus(field, message, status) {
                                    const successIcon = field.parentElement.querySelector('.icon-success');
                                    const errorIcon = field.parentElement.querySelector('.icon-error');
                                    const errorMessage = field.parentElement.querySelector('.error-message');

                                    if (status === 'success') {
                                    if (errorIcon) {
                                        errorIcon.classList.add('hidden');
                                    }

                                    if (errorMessage) {
                                        errorMessage.innerText = '';
                                    }
                                    successIcon.classList.remove('hidden');
                                    field.classList.remove('input-error');
                                    field.parentElement.querySelector('.input').innerText = message;
                                    field.classList.add('input-success');
                                    }

                                    if (status === 'error') {
                                    if (successIcon) {
                                        successIcon.classList.add('hidden');
                                    }

                                    field.parentElement.querySelector('.error-message').innerText = message;
                                    errorIcon.classList.remove('hidden');
                                    field.classList.add('input-error');
                                    field.parentElement.querySelector('.input').innerText = message;
                                    field.classList.remove('input-success');
                                    }
                                }
                                }

                                const form = document.querySelector('.form');
                                const fields = ['name', 'email', 'password'];

                                const validator = new FormValidator(form, fields);
                                validator.initialize();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-articles mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="featured_articles_list">
                        <div class="header_title">
                            <p class="text_title">Bài viết mới nhất</p>
                        </div>
                        <div class="action_arrow">
                            <a href="#">
                                <img class="arrow arrow-left"src="{{asset('assets/img/arrow-left.svg')}}" alt="">
                            </a>
                            <a href="#">
                                <img class="arrow arrow-right" src="{{asset('assets/img/arrow-right.svg')}}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-5">
                        <img class="article_image d-block w-100" src="{{asset('assets/img/banner_4.png')}}" alt="">
                        </div>
                        <div class="article_block col-sm-7">
                            <div class="card-block">
                                <p class="article_title">TƯNG BỪNG KHAI TRƯƠNG KIOSK TỰ PHỤC VỤ 24/7</p>
                                <p class="article_content">Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.</p>
                                <a href="#" class="btn-view more-view">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                        <img class="article_image d-block w-100" src="{{asset('assets/img/banner_4.png')}}" alt="">
                        </div>
                        <div class="article_block col-sm-7">
                            <div class="card-block">
                                <p class="article_title">TƯNG BỪNG KHAI TRƯƠNG KIOSK TỰ PHỤC VỤ 24/7</p>
                                <p class="article_content">Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.</p>
                                <a href="#" class="btn-view more-view">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                        <img class="article_image d-block w-100" src="{{asset('assets/img/banner_4.png')}}" alt="">
                        </div>
                        <div class="article_block col-sm-7">
                            <div class="card-block">
                                <p class="article_title">TƯNG BỪNG KHAI TRƯƠNG KIOSK TỰ PHỤC VỤ 24/7</p>
                                <p class="article_content">Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.</p>
                                <a href="#" class="btn-view more-view">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                        <img class="article_image d-block w-100" src="{{asset('assets/img/banner_4.png')}}" alt="">
                        </div>
                        <div class="article_block col-sm-7">
                            <div class="card-block">
                                <p class="article_title">TƯNG BỪNG KHAI TRƯƠNG KIOSK TỰ PHỤC VỤ 24/7</p>
                                <p class="article_content">Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.</p>
                                <a href="#" class="btn-view more-view">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-5">
                        <img class="article_image d-block w-100" src="{{asset('assets/img/banner_4.png')}}" alt="">
                        </div>
                        <div class="article_block col-sm-7">
                            <div class="card-block">
                                <p class="article_title">TƯNG BỪNG KHAI TRƯƠNG KIOSK TỰ PHỤC VỤ 24/7</p>
                                <p class="article_content">Ngày 20/8 vừa qua, Công ty Cổ phần Miraway Giải pháp Công nghệ đã triển khai thành công Kiosk tự phục vụ 24/7 (Self – Service Kiosk) tại 30 cửa hàng lớn thuộc hệ thống Winmart+.</p>
                                <a href="#" class="btn-view more-view">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="news">
                        <div class="news_article_more">
                            <img src="{{asset('assets/img/icon_moreview.svg')}}" alt="">
                            <span class="news_article_header">Xem thêm</span>
                        </div>
                        <ul>
                            <li class="news_article_text">
                                <a href="#">Thông báo hợp tác chiến lược giữa Miraway - Bắc Hải - Viettelconstruction</a>
                            </li>
                            <li class="news_article_text">
                                <a href="#">Thông báo hợp tác chiến lược giữa Miraway - Bắc Hải - Viettelconstruction</a>
                            </li>
                            <li class="news_article_text">
                                <a href="#">Thông báo hợp tác chiến lược giữa Miraway - Bắc Hải - Viettelconstruction</a>
                            </li>
                            <li class="news_article_text">
                                <a href="#">Thông báo hợp tác chiến lược giữa Miraway - Bắc Hải - Viettelconstruction</a>
                            </li>
                            <li class="news_article_text">
                                <a href="#">Thông báo hợp tác chiến lược giữa Miraway - Bắc Hải - Viettelconstruction</a>
                            </li>
                            <li class="news_article_text">
                                <a href="#">Thông báo hợp tác chiến lược giữa Miraway - Bắc Hải - Viettelconstruction</a>
                            </li>
                            <li class="news_article_text">
                                <a href="#">Thông báo hợp tác chiến lược giữa Miraway - Bắc Hải - Viettelconstruction</a>
                            </li>
                        </ul>

                    </div>
                    <div class="tags mt-4">
                        <div class="news_article_more">
                            <img src="{{asset('assets/img/icon_moreview.svg')}}" alt="">
                            <span class="news_article_header">Tag</span>
                        </div>
                        <ul style="display:flex;">
                            <li>
                                <a class="tag" href="#">CDP</a>
                                <a class="tag" href="#">Kinh doanh</a>
                                <a class="tag" href="#">Công nghệ</a>
                                <a class="tag" href="#">CDP</a>
                                <a class="tag" href="#">Quản trị nhân sự</a>
                                <a class="tag" href="#">CDP</a>
                                <a class="tag" href="#">CDP</a>
                                <a class="tag" href="#">CDP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-sm-12 register_view_article_news">
                <p class="register_articles_title ">Đăng ký xem bài viết mới</p>
                <h2 class="text-center" id="text-success" style="color:green;"></h2>

                <form  class="form_register">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-group" style="width:60% !important;">
                        <label for="email" class="font-500 text-label">Email</label>
                        <input  id="email_register" name="email" type="email" class="input mr-4" autocomplete placeholder="john@gmail.com">
                        <span class="error-message"></span>
                        <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M6 12L10 16L18 8" stroke="#58C27D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM9.70711 8.29289C9.31658 7.90237 8.68342 7.90237 8.29289 8.29289C7.90237 8.68342 7.90237 9.31658 8.29289 9.70711L10.5858 12L8.29289 14.2929C7.90237 14.6834 7.90237 15.3166 8.29289 15.7071C8.68342 16.0976 9.31658 16.0976 9.70711 15.7071L12 13.4142L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L13.4142 12L15.7071 9.70711C16.0976 9.31658 16.0976 8.68342 15.7071 8.29289C15.3166 7.90237 14.6834 7.90237 14.2929 8.29289L12 10.5858L9.70711 8.29289Z" fill="#777E91" />
                        </svg>
                    </div>
                    <button style="width:30%;" type="submit" class="btn-form">Đăng ký</button>
                </form>
            </div>

        </div>
    </section>
                <script>
                    const myForm = document.querySelector('.form_register');
                    const emailInput = document.querySelector('#email_register');
                    const errorContainer = document.querySelector('.error-message');
                    const csrfToken = document.querySelector('input[name="_token"]').value;

                    myForm.addEventListener('submit', event => {
                        event.preventDefault();

                        const email = emailInput.value;

                        if (email.trim() === '') {
                            setStatus(emailInput, 'Vui lòng nhập địa chỉ email.', 'error');
                            return;
                        }

                        fetch('/register-article-email', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': csrfToken
                            },
                            body: JSON.stringify({ email }),
                            redirect: 'follow'
                        })
                            .then(response => {
                                if (response.ok) {
                                    return response.json();
                                } else {
                                    throw new Error(response.statusText);
                                }
                            })
                            .then(data => {
                                console.log('Data',data)
                                if (!data.success) {
                                    const errors = data.errors;
                                    if (errors && errors.email) {
                                        setStatus(emailInput, errors.email[0], 'error');
                                    } else {
                                        setStatus(emailInput, 'Đăng ký không thành công. Vui lòng thửlại.', 'error');
                                    }
                                } else {
                                    setStatus(emailInput, 'Đăng ký thành công.', 'success');
                                    // Hiển thị thông báo thành công trong 3 giây
                                    const successMessage = document.getElementById('text-success');
                                    successMessage.textContent = 'Đăng ký thành công.';
                                    successMessage.style.color = 'green';
                                    setTimeout(() => {
                                        successMessage.textContent = '';
                                    }, 3000);
                                    emailInput.value = '';
                                }
                            })
                            .catch(error => {
                                console.error('Đã xảy ra lỗi:', error);
                                setStatus(emailInput, 'Đã xảy ra lỗi. Vui lòng thử lại sau.', 'error');
                            });
                    });

                    function setStatus(field, message, status) {
                        const errorMessage = field.parentElement.querySelector('.error-message');

                        if (status === 'success') {
                            if (errorMessage) {
                                errorMessage.innerText = '';
                            }
                            if (field) {
                                field.classList.remove('input-error');
                            }
                            if (errorContainer) {
                                errorContainer.classList.add('hidden');
                            }
                        }

                        if (status === 'error') {
                            if (field && errorMessage) {
                                errorMessage.innerText = message;
                                field.classList.add('input-error');
                                field.classList.remove('input-success');
                            }
                            if (errorContainer) {
                                errorContainer.classList.remove('hidden');
                            }
                        }
                    }
                </script>
</main>
@endsection
