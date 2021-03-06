@extends('client.layouts.layout')

@section('client.pages.content')

    <script type="application/ld+json">
    {
     "@context": "http://schema.org",
     "@type": "BreadcrumbList",
     "itemListElement":
     [
      {
       "@type": "ListItem",
       "position": 1,
       "item":
       {
        "@id": "https://mebelmilana.ru/",
        "name": "Мебель МИЛАНА"
        }
      },
      {
       "@type": "ListItem",
      "position": 2,
      "item":
       {
         "@id": "https://mebelmilana.ru/wardrobe",
         "name": "Гардеробы и тумбы"
       }
      }
     ]
    }
    </script>

    <main>
        <!-- visual/banner of the page -->
        <section class="visual">
            <div class="visual-inner wardrobe-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                <div class="centered">
                    <div class="container">
                        <div class="visual-text-large text-center visual-center">
                            <h1 class="visual-title visual-sub-title">Гардеробы и тумбы</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/visual/banner of the page -->
        <!-- main content wrapper -->
        <div class="content-wrapper">
            <section class="content-block">
                <div class="container text-center">
                    <div class="heading bottom-space mb-4">
                        <h2>Индивидуальность. <span>Сервис.</span> Качество.</h2>
                    </div>
                    <div class="description">
                        <h5>
                            Здесь поместится все, ну почти все что Вам хотелось. Мы об этом позаботимся. «Все до
                            мелочей, все так как я хочу».<br>
                            И все так и будет!
                        </h5>
                    </div>
                </div>
            </section>
            <section class="content-block p-0 steps-block">
                <div class="container-fluid">
                    <div class="content-slot alternate-block">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft">
                                    <img src="{{ asset('img/steps/step1-wardrobe.jpg') }}" loading="lazy" alt="images">
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="text-wrap">
                                    <h3>Первый шаг.</h3>
                                    <ul>
                                        <li>
                                            Замер
                                        </li>
                                        <li>
                                            Консультация и выбор фасадов и корпуса
                                        </li>
                                        <li>
                                            Рекомендации по фурнитуре
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInRight">
                                    <img src="{{ asset('img/steps/step2-wardrobe.jpg') }}" loading="lazy" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Второй шаг.</h3>
                                    <ul>
                                        <li>
                                            Расчет стоимости
                                        </li>
                                        <li>
                                            Разработка проекта
                                        </li>
                                        <li>
                                            3D визуализации
                                        </li>
                                        <li>
                                            Согласование всех деталей
                                        </li>
                                        <li>
                                            Подписание договора
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="bg-stretch img-wrap wow slideInLeft">
                                    <img src="{{ asset('img/steps/step3-wardrobe.jpg') }}" loading="lazy" alt="images">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-wrap">
                                    <h3>Третий шаг.</h3>
                                    <ul>
                                        <li>
                                            Доставка
                                        </li>
                                        <li>
                                            Сборка
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('client.layouts.gallery')

            <div class="content-wrapper">
                <section class="content-block quotation-block wardrobe-bottom-block black-overlay-6 parallax" data-stellar-background-ratio="0.55">
                    @include('client.layouts.cta')
                </section>
            </div>

        </div>
        <!--/main content wrapper -->
    </main>
@endsection
