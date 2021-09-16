@extends('layout.master')
@section('content')
    <div id="first">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 left-bar position_fixed_mob">
                    <h6>Explore websites, people, and locations</h6>
                    <form action="#">
                        <input type="text" class="form-control typing search_left" id="formGroupExampleInput">
                        <i class="fas fa-search"></i>
                    </form>
                    <div class="pt-5 top-resources">
                        <h5>Top resources</h5>
                        <ul>
                            <li>f3r4</li>
                            <li>f3r4</li>
                            <li>f3r4</li>
                            <li>f3r4</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 main">
                    <div class="row">
                        <div class="col-md-12 main-header ">
                            <div class="header max-width-1000">
                                <div class="bg-image"></div>
                                <div class="header-title">
                                    <h2 class="sub-title">STUDY ABROAD CONSULTANCY</h2>
                                    <h1>Georgian Academic Abroad
                                    </h1>
                                    <em class="fw-400">You study, We care</em>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center mt-5 border-top pt-5 pb-5">
                            <div class="about max-width-1000">
                                <h2 class="font-3">ჩვენ შესახებ</h2>
                                <div class="text-justify  mb-5 container">
                                    <p> GAA - წამყვანი საგანმანათლებლო საკონსულტაციო სააგენტოა საქართველოში, რომელიც თავის
                                        მომხმარებელს სთავაზობს ასობით საგანმანათლებლო პროგრამას მთელს მსოფლიოში.
                                    </p>
                                    <p>
                                        GAA - (Georgian Academic Abroad) დარსდა 2008 წელს.
                                        2008 წლიდან ჩვენ 2500-ზე მეტ აპლიკანტს დავეხმარეთ ესწავლათ სასურველ უნივერსიტეტებსა
                                        და
                                        ენის
                                        სკოლებში. ჩვენმა სტუდენტებმა განათლება მიიღეს: ამერიკის შეერთებული შტატებში,
                                        კანადაში,
                                        დიდ
                                        ბრიტანეთში, ავსტრალიაში, მალტაში, ახალ ზელანდიაში, ესპანეთში, იტალიაში, გერმანიაში,
                                        ჩინეთში
                                        შვეიცარიასა და საფრანგეთში.
                                    </p>
                                    <p>
                                        ჩვენ ვართ ექსკლუზიური წარმომადგენელი ისეთი პრესტიჟული უნივერსიტეტებისა როგორებიცაა:
                                        GLION,
                                        Les Roches, Kendall College, Blue Mountains International Hotel Management School.

                                    </p>
                                    <p> GAA - ის პერსონალმა გაიარა ბრიტანეთის საბჭოს ტრენინგები 2015 და 2016. კომპანიას აქვს
                                        ფილიალები აზერბაიჯანში, უკრაინაში, ყაზახეთსა და ალბანეთში.

                                        ჩვენი სერვისი მომხმარებლისთვის უფასოა!</p>
                                </div>
                                <img src="{{ asset('images/home/about-me-signature.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-12 border-top mb-5">
                            <div class="gallery max-width-1000">
                                <h2 class="title">პოპულარული ქვეყნები</h2>
                                @foreach ($countries as $country)
                                    <a href="#" class="card">
                                        <div class="content">
                                            <span class="title">{{ $country->name }}</span>
                                        </div>
                                        <div class="image">
                                            <img src="https://www.academicabroad.ge/storage/cover_images/{{ $country->photo }}"
                                                alt="Events Image">
                                        </div>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-12 border-top mb-5">
                            <div class="max-width-1000 text-center pt-5">
                                <h2 class="title">პოპულარული ქვეყნები</h2>
                                <div id="news-slider" class="owl-carousel">
                                    @foreach ($news as $item)
                                        <div class="post-slide">
                                            <div class="post-img">
                                                <img src="https://www.academicabroad.ge/storage/cover_images/{{ $item->photo }}"
                                                    alt="Events Image">
                                                <a href="news/{{ $item->id }}" class="over-layer"><i
                                                        class="fa fa-link"></i></a>
                                            </div>
                                            <div class="post-content">
                                                <h3 class="post-title">
                                                    <a href="news/{{ $item->id }}">{{ $item->title }}</a>
                                                </h3>
                                                <p class="post-description">{!! $item->description !!}</p>
                                                <span class="post-date"><i
                                                        class="fa fa-clock-o"></i>{{ date('F, d Y', strtotime($item->created_at)) }}</span>
                                                <a href="news/{{ $item->id }}" class="read-more">read more</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 border-top">

                        </div>

                    </div>
                </div>
            </div>
            <div class="tle-gutter__bg_left"></div>
            <div class="tle-gutter__bg_index"></div>
        </div>
    </div>

@endsection
