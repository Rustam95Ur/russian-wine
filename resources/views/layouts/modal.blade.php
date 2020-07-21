<div id="policy" class="active activated">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var policy = document.getElementById('policy');
            var policy2cookie = document.cookie.match(new RegExp('(?:^|; )' +
                'policy_confirm'.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') +
                '=([^;]*)'));
            if (!policy2cookie || policy2cookie[1] != 'Y') {
                var policy_container = document.querySelector('div.policy__container');
                if (policy_container) {
                    if (!navigator.cookieEnabled) {
                        policy_container.innerHTML = '<div class="policy__text"><p>' + privacy_text_nocookie + '</p></div>'
                    } else {
                        policy_container.innerHTML = '<div id="is18plus"><div class="is18plus-box"><div class="is18plus-content">' +
                            '<img class="img-responsive" alt="18_pluc_img" src="/image/bg/18plus_bg.jpg" /><div>' +
                            '<div class="circle">18+</div><p>Для доступа необходимо подтвердить совершеннолетний возраст. </p>' +
                            '<a class="policy__confirm confirm btn-white" href="javascript:void(0)">Мне исполнилось 18 лет</a>' +
                            '</div></div></div></div>';
                    }
                    setTimeout(function () {
                        policy.appendChild(policy_container);
                        policy.classList.add('active');
                        setTimeout(function () {
                            policy.classList.add('activated')
                        }, 300);
                        var policy_confirm = document.querySelector('.policy__confirm');
                        if (policy_confirm) {
                            policy_confirm.addEventListener('click', function () {
                                policy.classList.remove('activated');
                                setTimeout(function () {
                                    policy.remove()
                                }, 300);
                                document.cookie = 'policy_confirm=Y; path=/'
                            })
                        }
                    }, 100)
                }
            } else {
                policy.remove()
            }
        })
    </script>
    <div class="policy__container">
        <div id="is18plus">
            <div class="is18plus-box">
                <div class="is18plus-content"><img alt="18_pluc_img" class="img-responsive"
                                                   src="{{asset('image/bg/18plus_bg.jpg')}}">
                    <div>
                        <div class="circle">18+</div>
                        <p>Для доступа необходимо подтвердить совершеннолетний возраст. </p>
                        <a class="policy__confirm confirm btn-white" href="javascript:void(0)">
                            Мне исполнилось 18 лет</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
