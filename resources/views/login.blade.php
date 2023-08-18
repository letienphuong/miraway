@extends('layouts.master')
@section('content')

<main>
    <section>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center mt-5 mb-5">
                        <div class="col-lg-5">
                            <div class="form-login p-4 bg-white rounded">
                                <p class="form_title mb-2 text-center pt-2">Đăng nhập</p>
                                <form class="form">
                                    @csrf
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
                                      <button id="submitButton" type="submit" class="button">Đăng nhập</button>
                                </form>
                                <div class="d-flex align-items-center justify-content-center">
                                    <div id="loadingIndicator" style="display: none;justify-content:center;">
                                        <img style="width:300px; height:300px;" src="{{asset('assets/img/loading_gif.gif')}}" alt="">
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

                                        fetch('/check-login', {
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
                                            console.log("data",data);

                                            if (data.success) {
                                                alert('Đăng nhập thành công');
                                                window.location.href = data.redirect_url;
                                            } else if (data.errors) {
                                                const errors = data.errors;
                                                console.log("errors",errors);


                                                self.fields.forEach(field => {
                                                    console.log(field);
                                                const input = document.querySelector(`#${field}`);
                                                const errorMessages = errors[field];


                                                if (errorMessages && errorMessages.length > 0) {
                                                    input.classList.add('input-error');
                                                    self.setStatus(input, errorMessages[0], 'error');
                                                } else {
                                                    input.classList.remove('input-error');
                                                    self.setStatus(input, null, 'success');
                                                }
                                                });


                                            } else {
                                                alert('Đăng nhập không thành công. Vui lòng thử lại.');
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
                                const fields = [ 'email', 'password'];

                                const validator = new FormValidator(form, fields);
                                validator.initialize();


                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
