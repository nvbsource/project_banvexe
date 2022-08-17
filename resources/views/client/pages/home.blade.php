@extends('client.layout.index')
@section('content')
    <section class="banner">
        <img src="{{ asset('images/leaderboard.png') }}" alt="" class="banner-img">
        <div class="banner-content">
            <div class="container">
                <h2 class="banner-title">VeXeRe - Cam kết hoàn 150% nếu nhà xe không giữ vé</h2>
                <div class="banner-form">
                    <div class="form-tabs">
                        <div class="form-tabs-item">
                            <div class="form-bus-icon">
                                <svg viewBox="0 0 24 24">
                                    <path
                                        d="M4 16c0 .88.39 1.67 1 2.22V20c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h8v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1.78c.61-.55 1-1.34 1-2.22V6c0-3.5-3.58-4-8-4s-8 .5-8 4v10zm3.5 1c-.83 0-1.5-.67-1.5-1.5S6.67 14 7.5 14s1.5.67 1.5 1.5S8.33 17 7.5 17zm9 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm1.5-6H6V6h12v5z">
                                    </path>
                                </svg>
                            </div>
                            <span>Xe khách</span>
                        </div>
                    </div>
                    <form action="#" class="form" id="form-search-trip">
                        <div class="form-group" id="element_departure">
                            <div class="form-maps-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.781 16">
                                    <defs></defs>
                                    <path class="svg-location"
                                        d="M5.89 0A5.9 5.9 0 0 0 0 5.891 5.746 5.746 0 0 0 .517 8.3a37.14 37.14 0 0 0 5.127 7.591.328.328 0 0 0 .5 0A37.159 37.159 0 0 0 11.266 8.3a5.743 5.743 0 0 0 .515-2.4A5.9 5.9 0 0 0 5.89 0zm0 8.95a3.06 3.06 0 1 1 3.06-3.06 3.063 3.063 0 0 1-3.06 3.06z">
                                    </path>
                                </svg>
                            </div>
                            <input type="text" class="form-control">
                            <svg class="form-swap-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                viewBox="0 0 28 28">
                                <g stroke="#0060c4">
                                    <g fill="#fff">
                                        <circle cx="14" cy="14" r="14" stroke="none"></circle>
                                        <circle cx="14" cy="14" r="13.5" fill="none"></circle>
                                    </g>
                                    <path fill="none" stroke-linecap="round" stroke-miterlimit="10"
                                        d="M20 10.5H8.5M20.5 10.5L17 7M20.5 10.5L17 14M19.5 17.5H9M8 17.5l3.5-3.5M11.5 21L8 17.5">
                                    </path>
                                </g>
                            </svg>
                            <ul class="form-menu-dropdown" id="select_departure">
                                <li class="form-menu-dropdown-item">
                                    <div class="form-menu-dropdown-item-label">Tỉnh - Thành phố</div>
                                    <ul class="form-menu-dropdown-item-list">
                                        <li>Bình thuận</li>
                                        <li>Ninh thuận</li>
                                    </ul>
                                </li>
                                <li class="form-menu-dropdown-item">
                                    <div class="form-menu-dropdown-item-label">Tỉnh - Thành phố</div>
                                    <ul class="form-menu-dropdown-item-list">
                                        <li>Bình thuận</li>
                                        <li>Ninh thuận</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group" id="element_destination">
                            <div class="form-maps-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.781 16">
                                    <defs></defs>
                                    <path class="svg-location"
                                        d="M5.89 0A5.9 5.9 0 0 0 0 5.891 5.746 5.746 0 0 0 .517 8.3a37.14 37.14 0 0 0 5.127 7.591.328.328 0 0 0 .5 0A37.159 37.159 0 0 0 11.266 8.3a5.743 5.743 0 0 0 .515-2.4A5.9 5.9 0 0 0 5.89 0zm0 8.95a3.06 3.06 0 1 1 3.06-3.06 3.063 3.063 0 0 1-3.06 3.06z">
                                    </path>
                                </svg>
                            </div>
                            <input type="text" class="form-control">
                            <ul class="form-menu-dropdown" id="select_destination">
                                <li class="form-menu-dropdown-item">
                                    <div class="form-menu-dropdown-item-label">Tỉnh - Thành phố</div>
                                    <ul class="form-menu-dropdown-item-list">
                                        <li>Bình thuận</li>
                                        <li>Ninh thuận</li>
                                        <li>Ninh thuận</li>
                                        <li>Ninh thuận</li>
                                        <li>Ninh thuận</li>
                                        <li>Ninh thuận</li>
                                    </ul>
                                </li>
                                <li class="form-menu-dropdown-item">
                                    <div class="form-menu-dropdown-item-label">Tỉnh - Thành phố</div>
                                    <ul class="form-menu-dropdown-item-list">
                                        <li>Bình thuận</li>
                                        <li>Ninh thuận</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group" id="element_date">
                            <div class="form-calendar-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.471" height="20.745"
                                    viewBox="0 0 20.471 22.745">
                                    <g fill="#1861c5">
                                        <path
                                            d="M18.196 2.275h-1.137V0h-2.274v2.275h-9.1V0H3.412v2.275H2.275A2.264 2.264 0 0 0 .012 4.55L.001 20.472a2.274 2.274 0 0 0 2.275 2.275h15.92a2.274 2.274 0 0 0 2.271-2.276V4.549a2.274 2.274 0 0 0-2.271-2.274zm0 18.2H2.275V7.961h15.921z">
                                        </path>
                                        <path
                                            d="M13.394 18.954h3.033v-2.148h-3.033v2.148zM8.593 18.954h3.033v-2.148H8.593v2.148zM3.896 18.954h3.033v-2.148H3.896zM13.394 15.552h3.033v-2.148h-3.033v2.148zM8.593 15.659h3.033v-2.148H8.593v2.148zM6.824 13.511H3.791v2.148h3.033zM13.394 12.257h3.033v-2.148h-3.033v2.148zM8.593 12.257h3.033v-2.148H8.593v2.148zM3.896 12.257h3.033v-2.148H3.896z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <input type="date" class="form-control" id="select_date">
                        </div>
                        <button class="form-button" id="btn_find">Tìm vé</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('js/lang/vn.js') }}"></script>
    <script src="{{ asset('js/home/home.js') }}"></script>
@endsection
