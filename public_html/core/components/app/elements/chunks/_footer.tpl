<footer>
    <div class="relations-home">
        <div class="container">
            <div class="relations-home_info">
                <div>
                    <div class="relations-home_title">
                        У вас есть уникальный проект и вы хотите его обсудить?
                    </div>
                    <div class="relations-home_longtitle">
                        Наши менеджеры помогут вам с выбором и ответят на любые вопросы в кратчайшие сроки.
                    </div>
                    <a href="#modal-project" class="relations-home_link" uk-toggle>Свяжитесь с нами</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-info">
            <div class="footer-copy">
                <a href="" class="footer-copy_logo">
                    <img src="assets/components/app/web/img/footer-logo.png" alt="">
                </a>
            </div>
            <div class="footer-addres">
                <div class="footer-addres_city">
                    Москва
                </div>
                <div class="footer-addres_addres">
                    {'footer_address' | option}
                </div>
                <div class="footer-addres_phone">
                    {'header_phone' | option}
                </div>
            </div>
            <div class="footer-addres">
                <div class="footer-addres_city">
                    О компании
                </div>
                <div class="footer-addres_addres">
                    {'footer_name' | option}<br>
                    {'footer_inn' | option}
                </div>
                <div class="footer-addres_phone">
                    {'footer_mail' | option}
                </div>
            </div>
            <div class="footer-addres">
                <div class="footer-addres_city">
                    Подписывайтесь
                </div>
                <a href="{'vkontakte' | option}" class="footer-social_link"  target="_blank">
                    Vkontakte
                </a>
                <a href="{'facebook' | option}" class="footer-social_link"  target="_blank">
                    Facebook
                </a>
                <a href="{'instagram' | option}" class="footer-social_link"  target="_blank">
                    Instagram
                </a>
            </div>
        </div>
        <div class="footer-info footer-link">
            <span class="footer-copy_year footer-link_copy">2018 &#169; {'footer_name' | option}</span>
            <a href="" class="footer-addres_link footer-link_link" target="_blank">
                Политика конфиденциальности
            </a>
            <a href="" class="footer-addres_link footer-link_link"  target="_blank">
                Website Design: Kris Anfalova
            </a>
            <a href="" class="footer-addres_link footer-link_link"  target="_blank">
                Developer: namedeveloper
            </a>
        </div>
    </div>
</footer>

<div id="modal-project" uk-modal>
    <div class="uk-modal-dialog uk-modal-body form-modal">
        <button class="uk-modal-close form-close" type="button"></button>
        <div class="form-question" id="question">
            {'!AjaxForm@Form' | snippet : [
                'emailSubject'  => 'Задать вопрос',
                'validate'      => 'nomail:blank,email:required,policy:required',
                'form'          => '@FILE chunks/form/question.tpl',
                'emailTpl'      => '@FILE chunks/form/message.tpl',
            ]}
        </div>
    </div>
</div>

<div id="modal-price" uk-modal>
    <div class="uk-modal-dialog uk-modal-body form-modal">
        <button class="uk-modal-close form-close" type="button"></button>
        <div class="form-question" id="question">
            {'!AjaxForm@Form' | snippet : [
                'emailSubject'  => 'Уточнить стоимость',
                'validate'      => 'nomail:blank,email:required,policy:required',
                'form'          => '@FILE chunks/form/price.tpl',
                'emailTpl'      => '@FILE chunks/form/message.tpl',
            ]}
        </div>
    </div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){ m[i]=m[i]||function(){ (m[i].a=m[i].a||[]).push(arguments) };
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a) })
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(54240871, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54240871" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script src="assets/components/app/web/js/jquery.min.js"></script>
<script src="assets/components/app/web/js/jquery.validate.min.js"></script>
<script src="assets/components/app/web/js/modernizr.js"></script>
<script src="assets/components/app/web/js/jquery.fancybox.min.js"></script>


<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{ if(f.fbq)return;n=f.fbq=function(){ n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments) };
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s) }(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '484632565704871');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=484632565704871&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

