@extends('layouts.master')
@section('content')
<main>
    <section>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center mt-5 mb-5">
                        <div class="col-lg-12 bg-white">
                            <div class="form-login p-4 rounded">
                                <p class="form_title mb-2 text-center pt-2">Viết bài mới</p>
                                <p class="text-center" id="text-success" style="color:green;"></p>
                                <form  class="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <label for="article_title"  class="font-500 text-label">Tiêu đề<span style="color:red;">*</span></label>
                                                <input id="article_title" name="article_title"  type="text" class="input">
                                                <span class="error-message"></span>
                                                  <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path d="M6 12L10 16L18 8" stroke="#58C27D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </svg>

                                                  <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM9.70711 8.29289C9.31658 7.90237 8.68342 7.90237 8.29289 8.29289C7.90237 8.68342 7.90237 9.31658 8.29289 9.70711L10.5858 12L8.29289 14.2929C7.90237 14.6834 7.90237 15.3166 8.29289 15.7071C8.68342 16.0976 9.31658 16.0976 9.70711 15.7071L12 13.4142L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L13.4142 12L15.7071 9.70711C16.0976 9.31658 16.0976 8.68342 15.7071 8.29289C15.3166 7.90237 14.6834 7.90237 14.2929 8.29289L12 10.5858L9.70711 8.29289Z" fill="#777E91"/>
                                                  </svg>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <label for="article_avatar"  class="font-500 text-label">Avatar<span style="color:red;">*</span></label>
                                                <input id="article_avatar" name="article_avatar"  type="file" class="input">
                                                <span class="error-message"></span>
                                                <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M6 12L10 16L18 8" stroke="#58C27D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>

                                                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM9.70711 8.29289C9.31658 7.90237 8.68342 7.90237 8.29289 8.29289C7.90237 8.68342 7.90237 9.31658 8.29289 9.70711L10.5858 12L8.29289 14.2929C7.90237 14.6834 7.90237 15.3166 8.29289 15.7071C8.68342 16.0976 9.31658 16.0976 9.70711 15.7071L12 13.4142L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L13.4142 12L15.7071 9.70711C16.0976 9.31658 16.0976 8.68342 15.7071 8.29289C15.3166 7.90237 14.6834 7.90237 14.2929 8.29289L12 10.5858L9.70711 8.29289Z" fill="#777E91"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <label class="font-500 text-label">Danh mục bài viết</label>
                                                <select class="input" name="article_categories_id" id="article_categories_id">
                                                    <option value="">Chọn danh mục tin tức</option>
                                                    @foreach($article_categories as $key => $article_category)
                                                    <option value="{{$article_category->id}}">{{$article_category->article_categories_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <label for="article_content"  class="font-500 text-label">Nội dung<span style="color:red;">*</span></label>
                                                <textarea name="article_content" id="article_content" rows="5" class="input"></textarea>
                                                <span class="error-message"></span>
                                                <svg class="icon icon-success hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M6 12L10 16L18 8" stroke="#58C27D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>

                                                <svg class="icon icon-error hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM9.70711 8.29289C9.31658 7.90237 8.68342 7.90237 8.29289 8.29289C7.90237 8.68342 7.90237 9.31658 8.29289 9.70711L10.5858 12L8.29289 14.2929C7.90237 14.6834 7.90237 15.3166 8.29289 15.7071C8.68342 16.0976 9.31658 16.0976 9.70711 15.7071L12 13.4142L14.2929 15.7071C14.6834 16.0976 15.3166 16.0976 15.7071 15.7071C16.0976 15.3166 16.0976 14.6834 15.7071 14.2929L13.4142 12L15.7071 9.70711C16.0976 9.31658 16.0976 8.68342 15.7071 8.29289C15.3166 7.90237 14.6834 7.90237 14.2929 8.29289L12 10.5858L9.70711 8.29289Z" fill="#777E91"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-form btn-lg mt-4 mb-4 float-right">Xuất bản bài viết</button>
                                </form>
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
                                            let self = this;

                                            this.form.addEventListener('submit', event => {
                                                event.preventDefault();
                                                self.fields.forEach(field => {
                                                const input = document.querySelector(`#${field}`);
                                                self.validateFields(input);
                                                });

                                                if (this.isFormValid()) {
                                                const formData = new FormData(this.form);

                                                fetch('/save-article', {
                                                    method: 'POST',
                                                    body: formData
                                                })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        if (data.success) {
                                                            const successText = document.getElementById('text-success');
                                                            successText.textContent = 'Bài viết đã tạo thành công';

                                                        fields.forEach(field => {
                                                        document.getElementById(field).value = '';
                                                        });
                                                        setTimeout(() => {
                                                            successText.textContent = '';
                                                        }, 3000);
                                                    }
                                                    })
                                                    .catch(error => {
                                                    console.error(error);
                                                    });
                                                }
                                            });
                                            }

                                            isFormValid() {
                                            let isValid = true;

                                            this.fields.forEach(field => {
                                                const input = document.querySelector(`#${field}`);
                                                if (input.classList.contains('input-error')) {
                                                isValid = false;
                                                }
                                            });

                                            return isValid;
                                            }

                                        validateOnEntry() {
                                            this.fields.forEach(field => {
                                            const input = document.querySelector(`#${field}`);
                                            const fieldType = input.tagName.toLowerCase();

                                            if (fieldType === 'input') {
                                                input.addEventListener('input', () => {
                                                this.validateFields(input);
                                                });
                                            } else if (fieldType === 'select') {
                                                input.addEventListener('change', () => {
                                                this.validateFields(input);
                                                });
                                            } else if (fieldType === 'textarea') {
                                                input.addEventListener('input', () => {
                                                this.validateTextareaFields(input);
                                                });
                                            }
                                            });
                                        }

                                        validateFields(field) {
                                            if (field.value.trim() === '') {
                                            this.setStatus(field, `${field.previousElementSibling.innerText} không để trống`, 'error');
                                            } else {
                                            this.setStatus(field, null, 'success');
                                            }
                                        }

                                        validateTextareaFields(textarea) {
                                            if (textarea.value.trim() === '') {
                                            this.setStatus(textarea, `${textarea.previousElementSibling.innerText} không để trống`, 'error');
                                            } else {
                                            this.setStatus(textarea, null, 'success');
                                            }
                                        }

                                        setStatus(field, message, status) {
                                        const successIcon = field.parentElement.querySelector('.icon-success');
                                        const errorIcon = field.parentElement.querySelector('.icon-error');
                                        const errorMessage = field.parentElement.querySelector('.error-message');

                                        if (status === 'success') {
                                            if (errorIcon) {
                                            errorIcon.classList?.add('hidden');
                                            }

                                            if (errorMessage) {
                                            errorMessage.innerText = '';
                                            }
                                            successIcon?.classList?.remove('hidden');
                                            field.classList?.remove('input-error');
                                        }

                                        if (status === 'error') {
                                            if (successIcon) {
                                            successIcon.classList?.add('hidden');
                                            }

                                            if (errorMessage) {
                                            errorMessage.innerText = message;
                                            }
                                            errorIcon?.classList?.remove('hidden');
                                            field.classList?.add('input-error');
                                        }
                                        }

                                        }

                                    const form = document.querySelector('.form');
                                    const fields = ['article_title', 'article_avatar', 'article_categories_id', 'article_content'];

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
