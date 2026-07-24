<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая помощь: практический курс для каждого</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="api/visit.php" defer></script>
    <script src="js/main.js" defer></script>
</head>
<body>
    <header class="hero" id="hero">
        <div class="container hero-content">
            <span class="hero-badge">Офлайн-курс · 15 августа 2026 · от 4 900 ₽</span>
            <h1>Первая помощь: практический курс для каждого</h1>
            <p class="hero-text">
                Научитесь действовать уверенно в экстренной ситуации: остановить кровотечение,
                провести сердечно-легочную реанимацию, помочь при травмах и ожогах до приезда
                медиков. Практика с инструкторами скорой помощи.
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="#pricing" data-track="hero_pricing">Выбрать формат участия</a>
            </div>
            <p class="hero-cta-note">До 14 человек · практика на манекенах · инструкторы экстренной помощи</p>
            <div class="meta-grid">
                <div class="meta-card">
                    <strong>Дата</strong>
                    15 августа 2026, суббота
                </div>
                <div class="meta-card">
                    <strong>Время</strong>
                    10:00 – 18:00, перерыв на обед
                </div>
                <div class="meta-card">
                    <strong>Место</strong>
                    Москва, ул. Примерная, 10, учебный центр «Спаси-Себя»
                </div>
                <div class="meta-card">
                    <strong>Стоимость</strong>
                    от 4 900 ₽ · оплата после подтверждения
                </div>
            </div>
            <div class="hero-note">
                8 часов практики на манекенах, малые группы до 14 человек, именной сертификат и памятка по алгоритмам.
            </div>
        </div>
    </header>

    <main>
        <section class="section" id="about">
            <div class="container">
                <h2 class="section-title">О курсе</h2>
                <p class="section-lead">
                    Это не лекция «для галочки», а полноценный практический день, где каждый блок
                    заканчивается отработкой навыков под контролем инструктора.
                </p>
                <div class="features-grid">
                    <article class="feature-card">
                        <h3>8 часов практики</h3>
                        <p>Больше половины времени посвящено тренировкам на манекенах, имитации травм и работе в парах.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Формат offline</h3>
                        <p>Живое общение, мгновенная обратная связь и возможность задать вопросы по вашим реальным ситуациям.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Сертификат</h3>
                        <p>После курса вы получите именной сертификат и чек-лист действий для дома, работы и поездок.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Малые группы</h3>
                        <p>До 14 человек в группе, чтобы каждый успел отработать все ключевые навыки несколько раз.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section pricing-section" id="pricing">
            <div class="container">
                <h2 class="section-title">Тарифы</h2>
                <p class="section-lead">
                    Выберите формат. Во все тарифы входят материалы, сертификат и памятка.
                </p>
                <div class="pricing-grid">
                    <article class="pricing-card is-selected">
                        <h3>Базовый</h3>
                        <div class="price">4 900 ₽</div>
                        <ul class="pricing-list">
                            <li>Участие в полном однодневном курсе</li>
                            <li>Сертификат и памятка</li>
                            <li>Кофе-брейки</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="Базовый" data-track="tariff_basic" aria-pressed="true">Выбрать Базовый</button>
                    </article>
                    <article class="pricing-card featured">
                        <h3>Расширенный</h3>
                        <div class="price">7 900 ₽</div>
                        <ul class="pricing-list">
                            <li>Всё из базового тарифа</li>
                            <li>Набор перевязочных материалов</li>
                            <li>Дополнительный практический блок</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="Расширенный" data-track="tariff_extended" aria-pressed="false">Выбрать Расширенный</button>
                    </article>
                    <article class="pricing-card">
                        <h3>Корпоративный</h3>
                        <div class="price">12 900 ₽</div>
                        <ul class="pricing-list">
                            <li>Индивидуальный разбор рисков профессии</li>
                            <li>Консультация для HR или руководителя</li>
                            <li>Отчёт о прохождении для работодателя</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="Корпоративный" data-track="tariff_corp" aria-pressed="false">Выбрать Корпоративный</button>
                    </article>
                </div>
            </div>
        </section>

        <section class="section registration-section" id="registration">
            <div class="container">
                <div class="registration-panel">
                    <h2 class="section-title">Записаться на курс</h2>
                    <p class="section-lead">
                        Укажите имя и контакты — свяжемся, чтобы подтвердить место.
                    </p>
                    <p class="selected-tariff has-selection" id="selected-tariff">Выбран тариф «Базовый». Заполните форму ниже.</p>
                    <form class="form-grid form-grid-compact" id="registration-form" action="api/submit.php" method="post">
                        <input type="hidden" name="tariff" id="tariff-field" value="Базовый">
                        <input type="hidden" name="purpose" id="purpose-field" value="Тариф: Базовый. Запись на курс первой помощи">
                        <label>
                            Имя
                            <input type="text" name="name" required autocomplete="name">
                        </label>
                        <label>
                            Телефон
                            <input type="tel" name="phone" required autocomplete="tel" inputmode="tel">
                        </label>
                        <label class="form-field-wide">
                            E-mail
                            <input type="email" name="email" required autocomplete="email">
                        </label>
                        <button type="submit" class="btn btn-primary form-submit">Отправить заявку</button>
                    </form>
                    <p class="form-message" id="form-message" aria-live="polite"></p>
                </div>
            </div>
        </section>

        <section class="section section-compact" id="program">
            <div class="container">
                <h2 class="section-title">Программа курса</h2>
                <p class="section-lead program-intro">
                    За один день — от оценки обстановки до цельного сценария помощи.
                    В каждом модуле: короткий разбор, демонстрация и практика руками.
                </p>
                <div class="program-list">
                    <article class="program-module">
                        <h3>10:00 – 11:00 · Оценка обстановки и безопасность</h3>
                        <p>Оценка рисков, проверка сознания и дыхания, вызов помощи. Алгоритм на манекене и в паре.</p>
                    </article>
                    <article class="program-module">
                        <h3>11:00 – 12:30 · Сердечно-легочная реанимация</h3>
                        <p>Компрессии, смена спасателя, тренировочный AED. Полный цикл до передачи медикам.</p>
                    </article>
                    <article class="program-module">
                        <h3>12:30 – 13:30 · Обед и разбор кейсов</h3>
                        <p>Реальные ситуации из практики инструкторов и типичные ошибки очевидцев.</p>
                    </article>
                    <article class="program-module">
                        <h3>13:30 – 15:00 · Кровотечения и шок</h3>
                        <p>Давящая повязка, турникет, признаки шока. Практика с имитаторами ран.</p>
                    </article>
                    <article class="program-module">
                        <h3>15:00 – 16:30 · Переломы, вывихи, ожоги</h3>
                        <p>Иммобилизация подручными средствами и безопасная помощь при ожогах.</p>
                    </article>
                    <article class="program-module">
                        <h3>16:30 – 18:00 · Итоговая практика и сертификация</h3>
                        <p>Сценарии с несколькими пострадавшими, обратная связь и сертификат.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section-compact" id="injuries">
            <div class="container">
                <h2 class="section-title">Виды травм и состояний</h2>
                <p class="section-lead">
                    Самые частые ситуации, с которыми сталкиваются очевидцы. На курсе отрабатываем их руками.
                </p>
                <div class="injury-grid injury-grid-compact">
                    <article class="injury-card">
                        <h3>Кровотечения</h3>
                        <p>Давящая повязка и турникет</p>
                    </article>
                    <article class="injury-card">
                        <h3>Переломы и вывихи</h3>
                        <p>Иммобилизация подручными средствами</p>
                    </article>
                    <article class="injury-card">
                        <h3>Ожоги</h3>
                        <p>Охлаждение и стерильная повязка</p>
                    </article>
                    <article class="injury-card">
                        <h3>Обмороки и шок</h3>
                        <p>Положение тела и контроль дыхания</p>
                    </article>
                    <article class="injury-card">
                        <h3>Остановка дыхания</h3>
                        <p>СЛР и AED до приезда скорой</p>
                    </article>
                    <article class="injury-card">
                        <h3>Травмы головы и позвоночника</h3>
                        <p>Когда нельзя менять положение</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section-compact legal-section" id="legal">
            <div class="container">
                <h2 class="section-title">Юридические аспекты</h2>
                <p class="section-lead">
                    Что говорит закон и как действовать, не боясь помочь.
                </p>
                <div class="legal-list">
                    <article class="legal-block">
                        <h3>Добросовестный помощник</h3>
                        <p>
                            Если вы помогаете в разумных пределах и без грубой неосторожности,
                            закон защищает вас от необоснованных претензий.
                        </p>
                    </article>
                    <article class="legal-block">
                        <h3>Границы ответственности</h3>
                        <p>
                            Какие действия разумны, когда ждать медиков и как фиксировать обстоятельства.
                        </p>
                    </article>
                    <article class="legal-block">
                        <h3>Документирование и вызов служб</h3>
                        <p>
                            Что сообщить диспетчеру и медикам по прибытии.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="emotional-photo" id="photo">
            <img src="images/cpr-training.jpg" alt="Практика сердечно-легочной реанимации на манекене">
        </section>

        <section class="section section-compact" id="instructors">
            <div class="container">
                <h2 class="section-title">Инструкторы</h2>
                <p class="section-lead">
                    Курс ведут специалисты с многолетним опытом работы в экстренной медицине и обучения.
                </p>
                <div class="instructors-grid">
                    <article class="instructor-card">
                        <img class="instructor-photo" src="images/instructor-kravtsov.jpg" alt="Алексей Кравцов" width="160" height="160">
                        <h3>Алексей Кравцов</h3>
                        <p class="instructor-title">Врач скорой медицинской помощи, стаж 14 лет</p>
                        <ul class="credentials">
                            <li>Более 8 000 выездов бригады скорой помощи</li>
                            <li>Сертификат European Resuscitation Council BLS</li>
                            <li>Автор программы «Первая помощь дома и на работе»</li>
                        </ul>
                    </article>
                    <article class="instructor-card">
                        <img class="instructor-photo" src="images/instructor-sokolova.jpg" alt="Марина Соколова" width="160" height="160">
                        <h3>Марина Соколова</h3>
                        <p class="instructor-title">Инструктор РКК, фельдшер, стаж 11 лет</p>
                        <ul class="credentials">
                            <li>Обучила более 1 200 слушателей базовой первой помощи</li>
                            <li>Член региональной команды инструкторов РКК</li>
                            <li>Специализация: помощь детям и подросткам</li>
                        </ul>
                    </article>
                    <article class="instructor-card">
                        <img class="instructor-photo" src="images/instructor-novikov.jpg" alt="Дмитрий Новиков" width="160" height="160">
                        <h3>Дмитрий Новиков</h3>
                        <p class="instructor-title">Парамедик, наставник учебного центра</p>
                        <ul class="credentials">
                            <li>Сертификат ERC First Aid Provider</li>
                            <li>Опыт работы в корпоративных программах безопасности</li>
                            <li>Ведёт практические блоки по кровотечениям и травмам</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            © 2026 Учебный центр «Спаси-Себя». Курс первой помощи, Москва.
        </div>
    </footer>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=110922093', 'ym');

        ym(110922093, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/110922093" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>
