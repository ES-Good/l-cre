<?php

/* @var $this yii\web\View */

$this->title = 'Деньги-Просто Санкт-Петербург';
?>
<div class="wrapper">
    <div class="header-wrapper">
        <div class="header">
            <a href="/" class="logo">
                <img src="img/logo.png">
            </a>
            <div class="slogan">ПОМОЩЬ В ПОЛУЧЕНИИ КРЕДИТА В СПБ<br><span class="red circle-white">РАБОТАЕМ ОТ 200 000 Р</span></div>
            <div class="send-call-box">
                <div class="btn btn-red modal" rel="modal-1">ПОЛУЧИТЬ ДЕНЬГИ</div>
              	<div class="phone-body"><a class="phone" href="tel:+73832106792" onclick="">+7 (383) 210-67-92</a></div>
            </div>
        </div>
    </div>
    <div class="steps-wrapper">
        <div class="step-item one-step view" data-index="1">
            <div class="step-item-start-title">ПОЛУЧИТЕ 100% ОДОБРЕНИЕ ПО СТАВКЕ ОТ <span class="red">5,5%</span> ДАЖЕ С ПЛОХОЙ КРЕДИТНОЙ ИСТОРИЕЙ! БЕЗ ПРЕДОПЛАТЫ!</div>
            <div class="step-item-title">Сумма кредита?</div>
            <div class="selection-list one-columns">
                <div class="step-selection purpose-select" data-title="Сумма кредита?">
                    <div class="step-selection-select">от 200 000 до 500 000 руб</div>
                    <div class="step-selection-dropdown" style="display:none;">
                        <div class="selection-dropdown-list">
                            <div class="step-selection-item">
                                <input type="radio" name="credit_amount" id="credit_amount_0" value="false">
                                <label for="credit_amount_0">
                                    <span>МЕНЕЕ 200 000 РУБ</span>
                                </label>
                            </div>
                            <div class="step-selection-item">
                                <input type="radio" name="credit_amount" id="credit_amount_1" value="ОТ 100 000 ДО 500 000 РУБ" checked>
                                <label for="credit_amount_1">
                                    <span>от 200 000 до 500 000 руб</span>
                                </label>
                            </div>
                            <div class="step-selection-item">
                                <input type="radio" name="credit_amount" id="credit_amount_2" value="ОТ 500 000 ДО 1 000 000 РУБ">
                                <label for="credit_amount_2">
                                    <span>от 500 000 до 1 000 000 руб</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="credit_amount" id="credit_amount_3" value="ОТ 1 МИЛ. ДО 10 МИЛ. РУБ">
                                <label for="credit_amount_3">
                                    <span>от 1 мил. до 10 мил. руб</span>
                                </label>
                            </div>
                            <div class="step-selection-item">
                                <input type="radio" name="credit_amount" id="credit_amount_4" value="БОЛЕЕ 10 МИЛ. РУБ">
                                <label for="credit_amount_4">
                                    <span>Более 10 мил. руб</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="step-item two-step" data-index="2">
            <div class="step-item-title">Как срочно нужен кредит?</div>
            <div class="selection-list one-columns">
                <div class="step-selection purpose-select" data-title="Как срочно нужен кредит?">
                    <div class="step-selection-select">Сегодня</div>
                    <div class="step-selection-dropdown" style="display:none;">
                        <div class="selection-dropdown-list">
                            <div class="step-selection-item">
                                <input type="radio" name="urgent_loan" id="urgent_loan_1" value="СЕГОДНЯ" checked>
                                <label for="urgent_loan_1">
                                    <span>Сегодня</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="urgent_loan" id="urgent_loan_2" value="ОТ 1 ДО 3 ДНЕЙ">
                                <label for="urgent_loan_2">
                                    <span>от 1 до 3 дней</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="urgent_loan" id="urgent_loan_3" value="ОТ 3 ДО 7 ДНЕЙ">
                                <label for="urgent_loan_3">
                                    <span>от 3 до 7 дней</span>
                                </label>
                            </div>
                            <div class="step-selection-item">
                                <input type="radio" name="urgent_loan" id="urgent_loan_4" value="НЕТ СРОЧНОСТИ">
                                <label for="urgent_loan_4">
                                    <span>Нет срочности</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-item three-step" data-index="3">
            <div class="step-item-title">Откуда Вы?</div>
            <div class="selection-list one-columns">
                <div class="yn-list open-visa div-display" data-title="Откуда Вы?">
                    <div class="step-yn-item">
                        <input type="radio" name="from" id="from1" value="Санкт-Петербург" checked>
                        <label for="from1">
                            <span></span>
                            Санкт-Петербург
                        </label>
                    </div>
                    <div class="step-yn-item">
                        <input type="radio" name="from" id="from2" value="Ленинградская область">
                        <label for="from2">
                            <span></span>
                            Ленинградская область
                        </label>
                    </div>
                    <div class="step-yn-item">
                        <input type="radio" name="from" id="from3" value="1">
                        <label for="from3">
                            <span></span>
                            Другой регион
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-item four-step" data-index="4">
            <div class="step-item-title">Имеющиеся документы?</div>
            <div class="selection-list one-columns">
                <div class="yn-list open-visa" data-title="Имеющиеся документы?">
                    <div class="step-yn-item">
                        <input type="radio" name="document" id="document_pass" value="ПАСПОРТ" checked>
                        <label for="document_pass">
                            <span></span>
                            Паспорт
                        </label>
                    </div>
                    <div class="step-yn-item">
                        <input type="radio" name="document" id="document_plus" value="ПАСПОРТ + 2-ОЙ ДОКУМЕНТ">
                        <label for="document_plus">
                            <span></span>
                            Паспорт + 2-ой документ
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-item five-step" data-index="5">
            <div class="step-item-title">Возраст?</div>
            <div class="selection-list one-columns">
                <div class="step-selection purpose-select" data-title="Возраст?">
                    <div class="step-selection-select">Меньше 25</div>
                    <div class="step-selection-dropdown" style="display:none;">
                        <div class="selection-dropdown-list">
                            <div class="step-selection-item">
                                <input type="radio" name="age" id="age1" value="МЕНЬШЕ 25" checked>
                                <label for="age1">
                                    <span>Меньше 25</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="age" id="age2" value="ОТ 25 ДО 55">
                                <label for="age2">
                                    <span>от 25 до 55</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="age" id="age3" value="СТРАШЕ 55">
                                <label for="age3">
                                    <span>Старше 55</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-item six-step" data-index="6">
            <div class="step-item-title">Цель кредита?</div>
            <div class="selection-list one-columns">
                <div class="step-selection purpose-select" data-title="Цель кредита?">
                    <div class="step-selection-select">Потребительские расходы</div>
                    <div class="step-selection-dropdown" style="display:none;">
                        <div class="selection-dropdown-list">
                            <div class="step-selection-item">
                                <input type="radio" name="loan_purpose" id="loan_purpose1" value="ПОТРЕБИТЕЛЬСКИЕ РАСХОДЫ" checked>
                                <label for="loan_purpose1">
                                    <span>Потребительские расходы</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="loan_purpose" id="loan_purpose2" value="АВТОМОБИЛЬ">
                                <label for="loan_purpose2">
                                    <span>Автомобиль</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="loan_purpose" id="loan_purpose3" value="РЕФИНАНСИРОВАНИЕ ТЕКУЩИХ КРЕДИТОВ">
                                <label for="loan_purpose3">
                                    <span>Рефенансирование текущих кредитов</span>
                                </label>
                            </div>
                            <div class="step-selection-item">
                                <input type="radio" name="loan_purpose" id="loan_purpose4" value="ДРУГАЯ">
                                <label for="loan_purpose4">
                                    <span>Другая</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-item seven-step" data-index="7">
            <div class="step-item-title">В каком формате хотите оформление?</div>
            <div class="selection-list one-columns">
                <div class="step-selection purpose-select" data-title="В КАКОМ ФОРМАТЕ ХОТИТЕ ОФОРМЛЕНИЕ ?">
                    <div class="step-selection-select">В Банке</div>
                    <div class="step-selection-dropdown" style="display:none;">
                        <div class="selection-dropdown-list">
                            <div class="step-selection-item">
                                <input type="radio" name="registration" id="registration1" value="В БАНКЕ" checked>
                                <label for="registration1">
                                    <span>В Банке</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="registration" id="registration2" value="У ЧАСТНЫХ ИНВЕСТОРОВ">
                                <label for="registration2">
                                    <span>У частных инвесторов</span>
                                </label>
                            </div><div class="step-selection-item">
                                <input type="radio" name="registration" id="registration3" value="ПОД ЗАЛОГ">
                                <label for="promotion3">
                                    <span>Под залог</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-item eight-step" data-index="8">
            <div class="step-item-title">Вам предварительно одобрили ставку <span class="red">6%</span> годовых. Готовы получить деньги</div>
            <div class="selection-list one-columns">
                <div class="yn-list open-visa" data-title="ВАМ ПРЕДВАРИТЕЛЬНО ОДОБРЕЛИ ВАШУ СУММУ. ГОТОВЫ ЗАБРАТЬ ДЕНЬГИ?">
                    <div class="step-yn-item">
                        <input type="radio" name="approved" id="approved_y" value="ДА" checked>
                        <label for="approved_y">
                            <span></span>
                            Да
                        </label>
                    </div>
                    <div class="step-yn-item">
                        <input type="radio" name="approved" id="approved_n" value="НЕТ">
                        <label for="approved_n">
                            <span></span>
                            Нет
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="step-item nine-step" data-index="9">
            <div class="step-item-title">ХОРОШО. ЗАПОЛНИТЕ ВАШИ КОНТАКТЫ И ПОЛУЧИТЕ ВАШ ОДОБРЕННЫЙ КРЕДИТ!</div>
            <div class="fields-list">
                <form id="send-order" action="" method="post" class="ajax_form af_example">
                    <input type="text" name="antispam" value="" class="antispam" style="display: none;" value=""/>
                    <input type="text" name="phone" id="phone" value="" placeholder="Телефон*">
                    <textarea style="display:none;" id="order" name="order"></textarea>
                    <button type="submit" onclick="" class="btn btn-send-call" disabled>Отправить</button>
                </form>
            </div>
        </div>
        <div class="step-item ten-step" data-index="10">
            <div class="step-item-title">Спасибо за заявку в ближайшее время наш оператор свяжется с вами для расчета стоимости</div>
        </div>
        <div class="steps-btns">
            <div class="step-btn btn-prev start-step">Назад</div>
            <div class="step-btn btn-next">Далее</div>
        </div>
        <div class="progress-line">
            <div class="progress-line-steps"></div>
            <div class="progress-step"><span>1</span> / 10</div>
        </div>
    </div>
    <div class="footer">
        <div class="footer-offers">
            <div class="offers-item"><img src=" img/offers/1.png">Помогли взять более 15 000 000 000 рублей</div>
            <div class="offers-item"><img src=" img/offers/3.png">Более 50 Банков партнеров</div>
            <div class="offers-item"><img src=" img/offers/4.png">Одобрения даже с плохой кредитной историей</div>
            <div class="offers-item"><img src=" img/offers/5.png">Без справок и поручителей</div>
        </div>
        <div class="inn">
            В разных банках могут быть некоторые отличия, но в целом условия будут именно такими: минимальная процентная ставка: 7,5%; максимальная процентная ставка: 13%; минимальный срок погашения кредита: 6 месяцев; максимальный срок погашения кредита: 60 месяцев. Например, при кредите на сумму 1 000 000 р. на период 18 месяцев общая сумма выплат составит 1 110 258 р., при этом ежемесячный платеж составит 61 681 р. с эффективной процентной ставкой 12.1%. Сам кредит Вы будете получать в одном из банков города Санкт-Петербурга. Дополнительных комиссий по кредиту нет. При существенном нарушении заемщиком условий кредитного договора, банк вправе инициировать в судебном порядке следующие действия: взыскание долга по кредиту – ст.811, ст.395ГК РФ; обращение взыскания на залог- ст.349 ГК РФ; привлечение к солидарной ответственности поручителя по кредиту – ст.363 ГК РФ; обращение взыскания на иное имущество должника по кредиту – ст. 68 ст.69 ФЗ «Об исполнительном производстве». Указанные действия производятся службой ФССП совместно с банком в рамках исполнительного производства. Методы взыскания долга – взыскание денежных средств со счетов должника; обращение взыскания на залог и иное имущество заёмщика; привлечение к ответственности поручителей; взыскание в рамках исполнительного производства. Наша компания также оказывает информационно-консультационные услуги по кредитованию. Мы подберем для вас самый оптимальный вариант кредита. ООО ФСР 196191, г. Санкт-Петербург, пл. Конституции, дом. 7, ОФИС 91Н-№411 ИНН: 7810727365 ОГРН: 1187847105445 Мы сотрудничаем со всеми банками, в том числе: ОТП Банк (https://www.otpbank.ru/), Альфа Банк (https://alfabank.ru), Совкомбанк (https://sovcombank.ru), Банк Восточный (https://www.vostbank.ru/), Ренесанс (https://rencredit.ru), Банк Пойдем (https://www.poidem.ru/) Деятельность осуществляется на основе Генеральных лицензий на осуществление банковских операций: №2766 от 27.11.2014г, №1326 от 16.01.2015г, №2564 от 11.02.2015г, №1481 от 11.08.2015г, №2673 от 24.03.2015г, №2306 от 11.07.2013г .
        </div>
    </div>
    <div class="modal-box" id="modal-1">
        <div class="close-modal"></div>
        <div class="modal-title">Бесплатная консультация</div>
        <div class="modal-content">
            <form id="call-phone" action="/" method="post" class="ajax_form af_example">
                <input type="text" name="antispam" value="" class="antispam" style="display: none;" value=""/>
                <div class="modal-form-row">
                    <label class="control-label" for="af_name">Имя</label>
                    <div class="modal-form-controls">
                        <input type="text" id="af_name" name="name" value="" placeholder="" class="form-control"/>
                    </div>
                </div>

                <div class="modal-form-row">
                    <label class="control-label" for="af_phone">Телефон:</label>
                    <div class="modal-form-controls">
                        <input type="text" id="af_phone" name="phone" value="" placeholder="+7 (___) ___-__-__" class="form-control"/>
                    </div>
                </div>


                <button type="submit" onclick="" class="btn btn-orange btn-modal-send">Отправить</button>



                <input type="hidden" name="af_action" value="4629477ee2fc1645d710b9381b9b7f44" />
            </form>
        </div>
    </div>
    <div id="fade"></div>
</div>
<?php
$js = <<<JS
       function isCheck(name) {
            return document.querySelector('input[name="' + name + '"]:checked');
        }
        var selector_phone  = document.getElementById('phone')
        var selector_af_phone  = document.getElementById('af_phone')
        //Inputmask({"mask": "+7(999) 999-9999"}).mask(selector_phone)
        //Inputmask({"mask": "+7(999) 999-9999"}).mask(selector_af_phone)
        
        function request(url,data) {
            axios.post(url, JSON.stringify(data) )
          .then(function (response) {
            console.log(response.data);
          })
          .catch(function (error) {
            console.log(error);
          });  
          
        }
        document.getElementById('call-phone').addEventListener('submit',function(event){
           event.preventDefault()
           var nameFree =  document.getElementById('af_name').value
           var phoneFree =  document.getElementById('af_phone').value
           var valid = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/.test(phoneFree)
           if (!valid){
               alert("Ошибка ввода номера телефона")
               throw new Error('error Phone Number')
        }
           var data = [
               {
                   'name' : nameFree,
                   'phone' : phoneFree
               }
            ]
            console.log(data)
            request('/call',data)
            document.location.reload();
            yaCounter53128045.reachGoal('call')
            fbq('track', 'Contact')
       })

       document.getElementById('send-order').addEventListener('submit',function(event){
            event.preventDefault()
            var creditAmount = isCheck('credit_amount').value
            var urgentLoan = isCheck('urgent_loan').value
            var from = isCheck('from').value
            var documentAll = isCheck('document').value
            var loanPurpose = isCheck('loan_purpose').value
            var registration = isCheck('registration').value
            var approved = isCheck('approved').value
            var phone =  document.getElementById('phone').value
            var data = [
                {
                    'question':'СУММА КРЕДИТА?',
                    'answer': creditAmount
                },
                {
                    'question':'КАК СРОЧНО НУЖЕН КРЕДИТ?',
                    'answer': urgentLoan
                },
                {
                    'question':'ОТКУДА ВЫ?',
                    'answer': from
                },
                {
                    'question':'ИМЕЮЩИЕСЯ ДОКУМЕНТЫ?',
                    'answer': documentAll
                },
                {
                    'question':'ЦЕЛЬ КРЕДИТА?',
                    'answer': loanPurpose
                },
                {
                    'question':'В КАКОМ ФОРМАТЕ ХОТИТЕ ОФОРМЛЕНИЕ?',
                    'answer': registration
                },
                {
                    'question':'ВАМ ПРЕДВАРИТЕЛЬНО ОДОБРЕЛИ ВАШУ СУММУ. ГОТОВЫ ЗАБРАТЬ ДЕНЬГИ?',
                    'answer': approved
                },
                {
                    'question':'Телефон',
                    'answer': phone
                }
            ]
             console.log(data)
            request('/order',data)
            yaCounter53128045.reachGoal('order') 
            fbq('track', 'Contact')
           
       })
JS;
$this->registerJs($js)

?>

