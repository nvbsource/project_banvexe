@extends('client.layout.index')
@section('content')
    <div class="container">
        <div class="infor-trip-title"><span class="text-primary">Vé xe khách > xe đi Khánh Hòa từ Sài Gòn</span> > xe đi Nha
            Trang từ Sài Gòn</div>
        <form action="#" class="form form-border" id="form-search-trip">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.471" height="20.745" viewBox="0 0 20.471 22.745">
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
                <input type="text" class="form-control flatpickr-input" id="select_date" readonly="readonly">
            </div>
            <button class="form-button" id="btn_find">Tìm vé</button>
        </form>
        <p class="font-weight-bold my-3">VeXeRe - Cam kết hoàn 150% nếu nhà xe không giữ vé</p>
        <div class="list-content">
            <div class="ant-row" style="margin-left:-8px;margin-right:-8px;margin-top:18px">
                <div class="ant-col ant-col-6 route__ColStyled-sc-3icvq2-4 hlxFHe"><button id="mapview"
                        style="margin-bottom:14px" data-tracking-event="map_view" type="button"
                        class="ant-btn Button__StyledButton-sc-139143j-0 button__vxr--style3 btn--maps-view"><span>
                        </span><span class="route__IconMaps-sc-3icvq2-8 bhYyBR"></span><span>Xem điểm đón trên bản
                            đồ</span></button>
                    <div id="route-filter" class="filters__FilterContainer-sc-1ttnqn7-0 gsrZxb filter__container"
                        style="position: absolute; top: auto;">
                        <div class="filters__Wrapper-sc-1ttnqn7-1 bOnOnK filter__group">
                            <div class="Times__Container-sc-1ny42po-0 gTjoUi filter-times-container groupStyle">
                                <p class="base__Body02Highlight-sc-1tvbuqk-17 fIPfGr filter-name labelStyle">Giờ đi</p>
                                <div class="ant-checkbox-group filter-checkbox-group groupItems"><button disabled=""
                                        type="button"
                                        class="ant-btn CheckboxButton__Container-sc-12z3u12-0 hlhNtR checkbox-button  ">
                                        <p class="base__Caption-sc-1tvbuqk-18 gJvXJw option-label">Sáng sớm (0)</p>
                                        <p class="base__Caption-sc-1tvbuqk-18 gJvXJw option-value">00:00 - 06:00</p>
                                    </button><button disabled="" type="button"
                                        class="ant-btn CheckboxButton__Container-sc-12z3u12-0 hlhNtR checkbox-button  ">
                                        <p class="base__Caption-sc-1tvbuqk-18 gJvXJw option-label">Buổi sáng (0)</p>
                                        <p class="base__Caption-sc-1tvbuqk-18 gJvXJw option-value">06:01 - 12:00</p>
                                    </button><button type="button"
                                        class="ant-btn CheckboxButton__Container-sc-12z3u12-0 hlhNtR checkbox-button  ">
                                        <p class="base__Caption-sc-1tvbuqk-18 gJvXJw option-label">Buổi chiều (19)</p>
                                        <p class="base__Caption-sc-1tvbuqk-18 gJvXJw option-value">12:01 - 18:00</p>
                                    </button><button type="button"
                                        class="ant-btn CheckboxButton__Container-sc-12z3u12-0 hlhNtR checkbox-button  ">
                                        <p class="base__Caption-sc-1tvbuqk-18 gJvXJw option-label">Buổi tối (162)</p>
                                        <p class="base__Caption-sc-1tvbuqk-18 gJvXJw option-value">18:01 - 23:59</p>
                                    </button></div>
                            </div>
                            <div class="groupStyle">
                                <div class="groupSlider Filter_Price">
                                    <div class="labelStyle">Giá vé</div>
                                    <div class="group-info">
                                        <div class="ant-slider">
                                            <div class="ant-slider-rail"></div>
                                            <div class="ant-slider-track ant-slider-track-1"
                                                style="left:0%;right:auto;width:100%"></div>
                                            <div class="ant-slider-step"></div>
                                            <div tabindex="0" class="ant-slider-handle ant-slider-handle-1"
                                                style="left:0%;right:auto;transform:translateX(-50%)" role="slider"
                                                aria-valuemin="0" aria-valuemax="2000000" aria-valuenow="0"
                                                aria-disabled="false"></div>
                                            <div tabindex="0" class="ant-slider-handle ant-slider-handle-2"
                                                style="left:100%;right:auto;transform:translateX(-50%)" role="slider"
                                                aria-valuemin="0" aria-valuemax="2000000" aria-valuenow="2000000"
                                                aria-disabled="false"></div>
                                            <div class="ant-slider-mark"></div>
                                        </div>
                                        <div class="value-left value-info">0 đ</div>
                                        <div class="value-right value-info">2,000,000 đ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="AvailableSeats__Container-yikjzp-0 gvLzCX filter-group bg--white">
                                <div class="filter-title filter-available-seat">
                                    <p class="base__Body02Highlight-sc-1tvbuqk-17 fIPfGr color--darkness">Vị trí ghế</p>
                                </div>
                                <div class="filter-item">
                                    <div class="filter-item-content">
                                        <p class="base__Body02-sc-1tvbuqk-16 ewOEQO color--darkness">Số ghế trống</p>
                                        <div
                                            class="QuantityInput__Container-sc-5ap7dx-0 bcpLGl quantity-input Filter_AvailableSeats">
                                            <button disabled="" type="button"
                                                class="ant-btn QuantityInput__RoundButton-sc-5ap7dx-1 jHictt">
                                                <div class="material-icons-wrapper md-16 color--vex-blue "><i
                                                        class="material-icons-round ">remove</i></div>
                                            </button>
                                            <div class="quantity-value">
                                                <p class="base__SubHeadline-sc-1tvbuqk-8 jsMKgN color--darkness">1</p>
                                            </div><button type="button"
                                                class="ant-btn QuantityInput__RoundButton-sc-5ap7dx-1 jHictt">
                                                <div class="material-icons-wrapper md-16 color--vex-blue "><i
                                                        class="material-icons-round ">add</i></div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <div class="filter-item-content">
                                        <p class="base__Body02-sc-1tvbuqk-16 ewOEQO color--darkness">Hàng ghế giữa</p>
                                        <label class="ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                    type="checkbox" class="ant-checkbox-input" value=""><span
                                                    class="ant-checkbox-inner"></span></span></label>
                                    </div>
                                </div>
                                <div class="filter-item">
                                    <div class="filter-item-content">
                                        <p class="base__Body02-sc-1tvbuqk-16 ewOEQO color--darkness">Hàng ghế cuối</p>
                                        <label class="ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                    type="checkbox" class="ant-checkbox-input" value=""><span
                                                    class="ant-checkbox-inner"></span></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="groupStyle Filter_BusOperator">
                                <div class="labelStyle">Nhà xe</div><input type="text" class="ant-input inputText"
                                    placeholder="Tìm trong danh sách" value="">
                                <div class="groupKind"><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>An
                                            Tiến Phát (12)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>An Phú Buslines
                                            (3)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Bình
                                            Minh Tải (2)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>Bình Minh Bus
                                            (1)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Cúc
                                            Tùng (5)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Dũng
                                            Lệ (3)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Huỳnh
                                            Gia (8)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Hà
                                            Linh (4)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Hoàng
                                            Huy (Quảng Ngãi) (3)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>HTX Miền Đông
                                            (2)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Hạnh
                                            Cafe (2)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Khanh
                                            Phong (19)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>Kumho Samco
                                            (10)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Liên
                                            Hưng (25)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Long
                                            Nguyễn (2)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>Minh Quân 61
                                            (1)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Mười
                                            Phượng (1)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>Phương Nam
                                            (7)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Phúc
                                            An Express (4)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>Quang Hạnh
                                            (8)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Rạng
                                            Đông Buslines (1)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>Sao Limousine
                                            (1)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Trà
                                            Lan Viên (8)</span></label><label
                                        class="checkBoxGroup ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>TheSinhTourist (Sinh Cafe)
                                            (1)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Tâm
                                            Hạnh (1)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Việt
                                            Nhật (4)</span></label><label class="checkBoxGroup ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Xe Nhà
                                            (12)</span></label></div>
                            </div>
                            <div class="groupStyle Filter_Pickup">
                                <div class="labelStyle">Điểm đón</div><input type="text" class="ant-input inputText"
                                    placeholder="Tìm trong danh sách" value="">
                                <div class="groupKind">
                                    <ul class="ant-tree ant-tree-icon-hide" role="tree" unselectable="on">
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Thủ Đức (251)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Thủ Đức (251)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Quận 9 (160)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Quận 9 (160)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Quận 2 (74)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Quận 2 (74)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Quận 1 (62)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Quận 1 (62)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Bình Thạnh (61)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Bình Thạnh (61)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Biên Hòa (45)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Biên Hòa (45)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Quận 12 (43)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Quận 12 (43)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Quận 5 (36)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Quận 5 (36)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span title="Dĩ An (21)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Dĩ An (21)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Bình Tân (19)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Bình Tân (19)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Trảng Bom (17)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Trảng Bom (17)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Quận 10 (14)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Quận 10 (14)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span title="Quận 3 (7)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Quận 3 (7)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Long Khánh (6)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Long Khánh (6)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Thống Nhất (6)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Thống Nhất (6)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Tân Phú (6)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Tân Phú (6)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Xuân Lộc (4)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Xuân Lộc (4)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Tân Uyên (2)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Tân Uyên (2)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Bình Chánh (1)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Bình Chánh (1)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Bến Cát (1)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Bến Cát (1)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span title="Củ Chi (1)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Củ Chi (1)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Hóc Môn (1)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Hóc Môn (1)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Thuận An (1)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Thuận An (1)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Thủ Dầu Một (1)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Thủ Dầu Một (1)</span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="groupStyle Filter_Dropoff">
                                <div class="labelStyle">Điểm trả</div><input type="text" class="ant-input inputText"
                                    placeholder="Tìm trong danh sách" value="">
                                <div class="groupKind">
                                    <ul class="ant-tree ant-tree-icon-hide" role="tree" unselectable="on">
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Cam Ranh (468)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Cam Ranh (468)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Nha Trang (378)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Nha Trang (378)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Cam Lâm (356)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Cam Lâm (356)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Diên Khánh (289)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Diên Khánh (289)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Vạn Ninh (27)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Vạn Ninh (27)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Ninh Hòa (17)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Ninh Hòa (17)</span></span></li>
                                        <li class="ant-tree-treenode-switcher-close" role="treeitem"><span
                                                class="ant-tree-switcher ant-tree-switcher_close"><i
                                                    aria-label="icon: caret-down"
                                                    class="anticon anticon-caret-down ant-tree-switcher-icon"><svg
                                                        viewBox="0 0 1024 1024" focusable="false" class=""
                                                        data-icon="caret-down" width="1em" height="1em"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path
                                                            d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                        </path>
                                                    </svg></i></span><span class="ant-tree-checkbox"><span
                                                    class="ant-tree-checkbox-inner"></span></span><span
                                                title="Ninh Phước (12)"
                                                class="ant-tree-node-content-wrapper ant-tree-node-content-wrapper-close"><span
                                                    class="ant-tree-title">Ninh Phước (12)</span></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="groupStyle">
                                <div class="labelStyle">Loại ghế / giường</div>
                                <div class="groupItems"><label
                                        class="checkBoxGroup Filter_ACSleeper ant-checkbox-wrapper"><span
                                            class="ant-checkbox"><input type="checkbox" class="ant-checkbox-input"
                                                value=""><span class="ant-checkbox-inner"></span></span><span>Giường
                                            nằm (185)</span></label><label
                                        class="checkBoxGroup  ant-checkbox-wrapper"><span class="ant-checkbox"><input
                                                type="checkbox" class="ant-checkbox-input" value=""><span
                                                class="ant-checkbox-inner"></span></span><span>Giường nằm đôi
                                            (1)</span></label></div>
                            </div>
                            <div class="groupStyle Filter_Rating">
                                <div class="labelStyle">Đánh giá</div>
                                <div class="groupItems">
                                    <div style="cursor:pointer" class="Rates__GroupRate-sc-1ioptsc-1 dfQbde">
                                        <ul class="ant-rate ant-rate-disabled Rates__RateStyle-sc-1ioptsc-0 kUnkmu"
                                            tabindex="-1" role="radiogroup">
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="1"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="2"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="3"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="4"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="5"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                        </ul><span style="font-weight:">trở lên (131)</span>
                                    </div>
                                    <div style="cursor:pointer" class="Rates__GroupRate-sc-1ioptsc-1 dfQbde">
                                        <ul class="ant-rate ant-rate-disabled Rates__RateStyle-sc-1ioptsc-0 kUnkmu"
                                            tabindex="-1" role="radiogroup">
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="1"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="2"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="3"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="4"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="5"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                        </ul><span style="font-weight:">trở lên (137)</span>
                                    </div>
                                    <div style="cursor:pointer" class="Rates__GroupRate-sc-1ioptsc-1 dfQbde">
                                        <ul class="ant-rate ant-rate-disabled Rates__RateStyle-sc-1ioptsc-0 kUnkmu"
                                            tabindex="-1" role="radiogroup">
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="1"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="2"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="3"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="4"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="5"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                        </ul><span style="font-weight:">trở lên (149)</span>
                                    </div>
                                    <div style="cursor:pointer" class="Rates__GroupRate-sc-1ioptsc-1 dfQbde">
                                        <ul class="ant-rate ant-rate-disabled Rates__RateStyle-sc-1ioptsc-0 kUnkmu"
                                            tabindex="-1" role="radiogroup">
                                            <li class="ant-rate-star ant-rate-star-full">
                                                <div role="radio" aria-checked="true" aria-posinset="1"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="2"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="3"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="4"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                            <li class="ant-rate-star ant-rate-star-zero">
                                                <div role="radio" aria-checked="false" aria-posinset="5"
                                                    aria-setsize="5" tabindex="0">
                                                    <div class="ant-rate-star-first"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                    <div class="ant-rate-star-second"><i aria-label="icon: star"
                                                            class="anticon anticon-star"><svg viewBox="64 64 896 896"
                                                                focusable="false" class="" data-icon="star"
                                                                width="1em" height="1em" fill="currentColor"
                                                                aria-hidden="true">
                                                                <path
                                                                    d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                </path>
                                                            </svg></i></div>
                                                </div>
                                            </li>
                                        </ul><span style="font-weight:">trở lên (150)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-left:16px;padding-right:8px"
                    class="ant-col ant-col-18 route__ColStyled-sc-3icvq2-4 hlxFHe">
                    <div class="list-search"></div>
                    <div id="infinity-scroll">
                        <div data-company-name="Bình Minh Bus" data-company-id="39221" data-company-full-trip="true"
                            data-company-selling-config="ONLINE" class="TicketWrapper__TicketContainer-unfwwx-0 eIAvIT">
                            <div class="container">
                                <div class="TicketPC__Container-sc-1mxgwjh-0 iDzdVo">
                                    <div class="TicketPC__BodyFlex-sc-1mxgwjh-1 iuBnBn ticket">
                                        <div class="image" style="background-image:;position:relative"><img
                                                class="operator lazyloaded"
                                                data-src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"
                                                alt="Bình Minh Bus"
                                                src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"><img
                                                class="sticker lazyloaded">
                                            <div class="confirm-ticket"><svg
                                                    class="TicketPC__ConfirmSVG-sc-1mxgwjh-5 kwcYbw" width="14"
                                                    height="12" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.666 2v2.667c-.733 0-1.333.6-1.333 1.333 0 .734.6 1.334 1.333 1.334V10c0 .734-.6 1.334-1.333 1.334H1.666c-.733 0-1.333-.6-1.333-1.334V7.334a1.333 1.333 0 0 0 .006-2.667V2C.34 1.26.933.667 1.666.667h10.667c.733 0 1.333.593 1.333 1.333zM6.391 8.965c-.016.125.07.235.182.235a.18.18 0 0 0 .16-.103l.244-.475c.301-.586.832-1.619 1.595-3.098.07-.167 0-.235-.128-.235H7.322l.287-2.254c.016-.125-.07-.235-.182-.235a.183.183 0 0 0-.16.103l-.972 1.899c-.337.657-.616 1.2-.835 1.632l-.001.002c-.016.025-.173.275.1.275h1.12L6.39 8.965z"
                                                        fill="#fff"></path>
                                                </svg> <!-- -->Xác nhận tức thì<div class="point"></div>
                                            </div>
                                        </div>
                                        <div class="TicketPC__RightBody-sc-1mxgwjh-3 iTDXJa">
                                            <div class="TicketPC__TripInfo-sc-1mxgwjh-6 dEwAnK">
                                                <div class="bus-info">
                                                    <div class="bus-name">Bình Minh Bus</div><button type="button"
                                                        class="ant-btn bus-rating-button">
                                                        <div class="bus-rating"><i aria-label="icon: star"
                                                                class="anticon anticon-star"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    class="" data-icon="star" width="1em"
                                                                    height="1em" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                    </path>
                                                                </svg></i><span>4.8 (66)</span></div>
                                                    </button>
                                                </div>
                                                <div class="seat-type">Limousine giường phòng 22 chỗ
                                                </div>
                                                <div class="from-to"><svg
                                                        class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 eKNjJr"
                                                        xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="74" viewBox="0 0 14 74">
                                                        <path fill="none" stroke="#787878" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46">
                                                        </path>
                                                        <g fill="none" stroke="#484848" stroke-width="3">
                                                            <circle cx="7" cy="7" r="7"
                                                                stroke="none"></circle>
                                                            <circle cx="7" cy="7" r="5.5">
                                                            </circle>
                                                        </g>
                                                        <path
                                                            d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                                            fill="#787878"></path>
                                                    </svg>
                                                    <div class="from-to-content">
                                                        <div class="content from">
                                                            <div class="hour">21:30</div>
                                                            <div class="place">• VP Sài Gòn</div>
                                                        </div>
                                                        <div class="duration">8h</div>
                                                        <div class="content to">
                                                            <div class="hour">05:30</div>
                                                            <div class="place">• Cổng trước Coop Mart Nha Trang</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="TicketPC__FareInfo-sc-1mxgwjh-7 jbQNEE">
                                                <div>
                                                    <div class="fare">
                                                        <div> 450.000đ</div>
                                                    </div>
                                                    <div class="fareSmall">
                                                        <div class="small"></div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="TicketPC__DetailAndAction-sc-1mxgwjh-8 TVXtN">
                                                <div class="info">
                                                    <div class="seat-available ">Còn 9 chỗ trống</div>
                                                </div>
                                                <div class="action"><button type="button"
                                                        class="ant-btn btn-detail ant-btn-link"><span>Thông tin chi
                                                            tiết</span><i aria-label="icon: caret-down"
                                                            class="anticon anticon-caret-down"><svg
                                                                viewBox="0 0 1024 1024" focusable="false"
                                                                class="" data-icon="caret-down" width="1em"
                                                                height="1em" fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                                </path>
                                                            </svg></i></button><button
                                                        data-tracking-event="selected_route" type="button"
                                                        class="ant-btn btn-booking "><span>Chọn chuyến</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-company-name="Bình Minh Bus" data-company-id="39221" data-company-full-trip="true"
                            data-company-selling-config="ONLINE" class="TicketWrapper__TicketContainer-unfwwx-0 eIAvIT">
                            <div class="container">
                                <div class="TicketPC__Container-sc-1mxgwjh-0 iDzdVo">
                                    <div class="TicketPC__BodyFlex-sc-1mxgwjh-1 iuBnBn ticket">
                                        <div class="image" style="background-image:;position:relative"><img
                                                class="operator lazyloaded"
                                                data-src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"
                                                alt="Bình Minh Bus"
                                                src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"><img
                                                class="sticker lazyloaded">
                                            <div class="confirm-ticket"><svg
                                                    class="TicketPC__ConfirmSVG-sc-1mxgwjh-5 kwcYbw" width="14"
                                                    height="12" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.666 2v2.667c-.733 0-1.333.6-1.333 1.333 0 .734.6 1.334 1.333 1.334V10c0 .734-.6 1.334-1.333 1.334H1.666c-.733 0-1.333-.6-1.333-1.334V7.334a1.333 1.333 0 0 0 .006-2.667V2C.34 1.26.933.667 1.666.667h10.667c.733 0 1.333.593 1.333 1.333zM6.391 8.965c-.016.125.07.235.182.235a.18.18 0 0 0 .16-.103l.244-.475c.301-.586.832-1.619 1.595-3.098.07-.167 0-.235-.128-.235H7.322l.287-2.254c.016-.125-.07-.235-.182-.235a.183.183 0 0 0-.16.103l-.972 1.899c-.337.657-.616 1.2-.835 1.632l-.001.002c-.016.025-.173.275.1.275h1.12L6.39 8.965z"
                                                        fill="#fff"></path>
                                                </svg> <!-- -->Xác nhận tức thì<div class="point"></div>
                                            </div>
                                        </div>
                                        <div class="TicketPC__RightBody-sc-1mxgwjh-3 iTDXJa">
                                            <div class="TicketPC__TripInfo-sc-1mxgwjh-6 dEwAnK">
                                                <div class="bus-info">
                                                    <div class="bus-name">Bình Minh Bus</div><button type="button"
                                                        class="ant-btn bus-rating-button">
                                                        <div class="bus-rating"><i aria-label="icon: star"
                                                                class="anticon anticon-star"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    class="" data-icon="star" width="1em"
                                                                    height="1em" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                    </path>
                                                                </svg></i><span>4.8 (66)</span></div>
                                                    </button>
                                                </div>
                                                <div class="seat-type">Limousine giường phòng 22 chỗ
                                                </div>
                                                <div class="from-to"><svg
                                                        class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 eKNjJr"
                                                        xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="74" viewBox="0 0 14 74">
                                                        <path fill="none" stroke="#787878" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46">
                                                        </path>
                                                        <g fill="none" stroke="#484848" stroke-width="3">
                                                            <circle cx="7" cy="7" r="7"
                                                                stroke="none"></circle>
                                                            <circle cx="7" cy="7" r="5.5">
                                                            </circle>
                                                        </g>
                                                        <path
                                                            d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                                            fill="#787878"></path>
                                                    </svg>
                                                    <div class="from-to-content">
                                                        <div class="content from">
                                                            <div class="hour">21:30</div>
                                                            <div class="place">• VP Sài Gòn</div>
                                                        </div>
                                                        <div class="duration">8h</div>
                                                        <div class="content to">
                                                            <div class="hour">05:30</div>
                                                            <div class="place">• Cổng trước Coop Mart Nha Trang</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="TicketPC__FareInfo-sc-1mxgwjh-7 jbQNEE">
                                                <div>
                                                    <div class="fare">
                                                        <div> 450.000đ</div>
                                                    </div>
                                                    <div class="fareSmall">
                                                        <div class="small"></div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="TicketPC__DetailAndAction-sc-1mxgwjh-8 TVXtN">
                                                <div class="info">
                                                    <div class="seat-available ">Còn 9 chỗ trống</div>
                                                </div>
                                                <div class="action"><button type="button"
                                                        class="ant-btn btn-detail ant-btn-link"><span>Thông tin chi
                                                            tiết</span><i aria-label="icon: caret-down"
                                                            class="anticon anticon-caret-down"><svg
                                                                viewBox="0 0 1024 1024" focusable="false"
                                                                class="" data-icon="caret-down" width="1em"
                                                                height="1em" fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                                </path>
                                                            </svg></i></button><button
                                                        data-tracking-event="selected_route" type="button"
                                                        class="ant-btn btn-booking "><span>Chọn chuyến</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-company-name="Bình Minh Bus" data-company-id="39221" data-company-full-trip="true"
                            data-company-selling-config="ONLINE" class="TicketWrapper__TicketContainer-unfwwx-0 eIAvIT">
                            <div class="container">
                                <div class="TicketPC__Container-sc-1mxgwjh-0 iDzdVo">
                                    <div class="TicketPC__BodyFlex-sc-1mxgwjh-1 iuBnBn ticket">
                                        <div class="image" style="background-image:;position:relative"><img
                                                class="operator lazyloaded"
                                                data-src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"
                                                alt="Bình Minh Bus"
                                                src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"><img
                                                class="sticker lazyloaded">
                                            <div class="confirm-ticket"><svg
                                                    class="TicketPC__ConfirmSVG-sc-1mxgwjh-5 kwcYbw" width="14"
                                                    height="12" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.666 2v2.667c-.733 0-1.333.6-1.333 1.333 0 .734.6 1.334 1.333 1.334V10c0 .734-.6 1.334-1.333 1.334H1.666c-.733 0-1.333-.6-1.333-1.334V7.334a1.333 1.333 0 0 0 .006-2.667V2C.34 1.26.933.667 1.666.667h10.667c.733 0 1.333.593 1.333 1.333zM6.391 8.965c-.016.125.07.235.182.235a.18.18 0 0 0 .16-.103l.244-.475c.301-.586.832-1.619 1.595-3.098.07-.167 0-.235-.128-.235H7.322l.287-2.254c.016-.125-.07-.235-.182-.235a.183.183 0 0 0-.16.103l-.972 1.899c-.337.657-.616 1.2-.835 1.632l-.001.002c-.016.025-.173.275.1.275h1.12L6.39 8.965z"
                                                        fill="#fff"></path>
                                                </svg> <!-- -->Xác nhận tức thì<div class="point"></div>
                                            </div>
                                        </div>
                                        <div class="TicketPC__RightBody-sc-1mxgwjh-3 iTDXJa">
                                            <div class="TicketPC__TripInfo-sc-1mxgwjh-6 dEwAnK">
                                                <div class="bus-info">
                                                    <div class="bus-name">Bình Minh Bus</div><button type="button"
                                                        class="ant-btn bus-rating-button">
                                                        <div class="bus-rating"><i aria-label="icon: star"
                                                                class="anticon anticon-star"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    class="" data-icon="star" width="1em"
                                                                    height="1em" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                    </path>
                                                                </svg></i><span>4.8 (66)</span></div>
                                                    </button>
                                                </div>
                                                <div class="seat-type">Limousine giường phòng 22 chỗ
                                                </div>
                                                <div class="from-to"><svg
                                                        class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 eKNjJr"
                                                        xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="74" viewBox="0 0 14 74">
                                                        <path fill="none" stroke="#787878" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46">
                                                        </path>
                                                        <g fill="none" stroke="#484848" stroke-width="3">
                                                            <circle cx="7" cy="7" r="7"
                                                                stroke="none"></circle>
                                                            <circle cx="7" cy="7" r="5.5">
                                                            </circle>
                                                        </g>
                                                        <path
                                                            d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                                            fill="#787878"></path>
                                                    </svg>
                                                    <div class="from-to-content">
                                                        <div class="content from">
                                                            <div class="hour">21:30</div>
                                                            <div class="place">• VP Sài Gòn</div>
                                                        </div>
                                                        <div class="duration">8h</div>
                                                        <div class="content to">
                                                            <div class="hour">05:30</div>
                                                            <div class="place">• Cổng trước Coop Mart Nha Trang</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="TicketPC__FareInfo-sc-1mxgwjh-7 jbQNEE">
                                                <div>
                                                    <div class="fare">
                                                        <div> 450.000đ</div>
                                                    </div>
                                                    <div class="fareSmall">
                                                        <div class="small"></div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="TicketPC__DetailAndAction-sc-1mxgwjh-8 TVXtN">
                                                <div class="info">
                                                    <div class="seat-available ">Còn 9 chỗ trống</div>
                                                </div>
                                                <div class="action"><button type="button"
                                                        class="ant-btn btn-detail ant-btn-link"><span>Thông tin chi
                                                            tiết</span><i aria-label="icon: caret-down"
                                                            class="anticon anticon-caret-down"><svg
                                                                viewBox="0 0 1024 1024" focusable="false"
                                                                class="" data-icon="caret-down" width="1em"
                                                                height="1em" fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                                </path>
                                                            </svg></i></button><button
                                                        data-tracking-event="selected_route" type="button"
                                                        class="ant-btn btn-booking "><span>Chọn chuyến</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-company-name="Bình Minh Bus" data-company-id="39221" data-company-full-trip="true"
                            data-company-selling-config="ONLINE" class="TicketWrapper__TicketContainer-unfwwx-0 eIAvIT">
                            <div class="container">
                                <div class="TicketPC__Container-sc-1mxgwjh-0 iDzdVo">
                                    <div class="TicketPC__BodyFlex-sc-1mxgwjh-1 iuBnBn ticket">
                                        <div class="image" style="background-image:;position:relative"><img
                                                class="operator lazyloaded"
                                                data-src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"
                                                alt="Bình Minh Bus"
                                                src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"><img
                                                class="sticker lazyloaded">
                                            <div class="confirm-ticket"><svg
                                                    class="TicketPC__ConfirmSVG-sc-1mxgwjh-5 kwcYbw" width="14"
                                                    height="12" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.666 2v2.667c-.733 0-1.333.6-1.333 1.333 0 .734.6 1.334 1.333 1.334V10c0 .734-.6 1.334-1.333 1.334H1.666c-.733 0-1.333-.6-1.333-1.334V7.334a1.333 1.333 0 0 0 .006-2.667V2C.34 1.26.933.667 1.666.667h10.667c.733 0 1.333.593 1.333 1.333zM6.391 8.965c-.016.125.07.235.182.235a.18.18 0 0 0 .16-.103l.244-.475c.301-.586.832-1.619 1.595-3.098.07-.167 0-.235-.128-.235H7.322l.287-2.254c.016-.125-.07-.235-.182-.235a.183.183 0 0 0-.16.103l-.972 1.899c-.337.657-.616 1.2-.835 1.632l-.001.002c-.016.025-.173.275.1.275h1.12L6.39 8.965z"
                                                        fill="#fff"></path>
                                                </svg> <!-- -->Xác nhận tức thì<div class="point"></div>
                                            </div>
                                        </div>
                                        <div class="TicketPC__RightBody-sc-1mxgwjh-3 iTDXJa">
                                            <div class="TicketPC__TripInfo-sc-1mxgwjh-6 dEwAnK">
                                                <div class="bus-info">
                                                    <div class="bus-name">Bình Minh Bus</div><button type="button"
                                                        class="ant-btn bus-rating-button">
                                                        <div class="bus-rating"><i aria-label="icon: star"
                                                                class="anticon anticon-star"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    class="" data-icon="star" width="1em"
                                                                    height="1em" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                    </path>
                                                                </svg></i><span>4.8 (66)</span></div>
                                                    </button>
                                                </div>
                                                <div class="seat-type">Limousine giường phòng 22 chỗ
                                                </div>
                                                <div class="from-to"><svg
                                                        class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 eKNjJr"
                                                        xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="74" viewBox="0 0 14 74">
                                                        <path fill="none" stroke="#787878" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46">
                                                        </path>
                                                        <g fill="none" stroke="#484848" stroke-width="3">
                                                            <circle cx="7" cy="7" r="7"
                                                                stroke="none"></circle>
                                                            <circle cx="7" cy="7" r="5.5">
                                                            </circle>
                                                        </g>
                                                        <path
                                                            d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                                            fill="#787878"></path>
                                                    </svg>
                                                    <div class="from-to-content">
                                                        <div class="content from">
                                                            <div class="hour">21:30</div>
                                                            <div class="place">• VP Sài Gòn</div>
                                                        </div>
                                                        <div class="duration">8h</div>
                                                        <div class="content to">
                                                            <div class="hour">05:30</div>
                                                            <div class="place">• Cổng trước Coop Mart Nha Trang</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="TicketPC__FareInfo-sc-1mxgwjh-7 jbQNEE">
                                                <div>
                                                    <div class="fare">
                                                        <div> 450.000đ</div>
                                                    </div>
                                                    <div class="fareSmall">
                                                        <div class="small"></div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="TicketPC__DetailAndAction-sc-1mxgwjh-8 TVXtN">
                                                <div class="info">
                                                    <div class="seat-available ">Còn 9 chỗ trống</div>
                                                </div>
                                                <div class="action"><button type="button"
                                                        class="ant-btn btn-detail ant-btn-link"><span>Thông tin chi
                                                            tiết</span><i aria-label="icon: caret-down"
                                                            class="anticon anticon-caret-down"><svg
                                                                viewBox="0 0 1024 1024" focusable="false"
                                                                class="" data-icon="caret-down" width="1em"
                                                                height="1em" fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                                </path>
                                                            </svg></i></button><button
                                                        data-tracking-event="selected_route" type="button"
                                                        class="ant-btn btn-booking "><span>Chọn chuyến</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-company-name="Bình Minh Bus" data-company-id="39221" data-company-full-trip="true"
                            data-company-selling-config="ONLINE" class="TicketWrapper__TicketContainer-unfwwx-0 eIAvIT">
                            <div class="container">
                                <div class="TicketPC__Container-sc-1mxgwjh-0 iDzdVo">
                                    <div class="TicketPC__BodyFlex-sc-1mxgwjh-1 iuBnBn ticket">
                                        <div class="image" style="background-image:;position:relative"><img
                                                class="operator lazyloaded"
                                                data-src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"
                                                alt="Bình Minh Bus"
                                                src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"><img
                                                class="sticker lazyloaded">
                                            <div class="confirm-ticket"><svg
                                                    class="TicketPC__ConfirmSVG-sc-1mxgwjh-5 kwcYbw" width="14"
                                                    height="12" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.666 2v2.667c-.733 0-1.333.6-1.333 1.333 0 .734.6 1.334 1.333 1.334V10c0 .734-.6 1.334-1.333 1.334H1.666c-.733 0-1.333-.6-1.333-1.334V7.334a1.333 1.333 0 0 0 .006-2.667V2C.34 1.26.933.667 1.666.667h10.667c.733 0 1.333.593 1.333 1.333zM6.391 8.965c-.016.125.07.235.182.235a.18.18 0 0 0 .16-.103l.244-.475c.301-.586.832-1.619 1.595-3.098.07-.167 0-.235-.128-.235H7.322l.287-2.254c.016-.125-.07-.235-.182-.235a.183.183 0 0 0-.16.103l-.972 1.899c-.337.657-.616 1.2-.835 1.632l-.001.002c-.016.025-.173.275.1.275h1.12L6.39 8.965z"
                                                        fill="#fff"></path>
                                                </svg> <!-- -->Xác nhận tức thì<div class="point"></div>
                                            </div>
                                        </div>
                                        <div class="TicketPC__RightBody-sc-1mxgwjh-3 iTDXJa">
                                            <div class="TicketPC__TripInfo-sc-1mxgwjh-6 dEwAnK">
                                                <div class="bus-info">
                                                    <div class="bus-name">Bình Minh Bus</div><button type="button"
                                                        class="ant-btn bus-rating-button">
                                                        <div class="bus-rating"><i aria-label="icon: star"
                                                                class="anticon anticon-star"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    class="" data-icon="star" width="1em"
                                                                    height="1em" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                    </path>
                                                                </svg></i><span>4.8 (66)</span></div>
                                                    </button>
                                                </div>
                                                <div class="seat-type">Limousine giường phòng 22 chỗ
                                                </div>
                                                <div class="from-to"><svg
                                                        class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 eKNjJr"
                                                        xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="74" viewBox="0 0 14 74">
                                                        <path fill="none" stroke="#787878" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46">
                                                        </path>
                                                        <g fill="none" stroke="#484848" stroke-width="3">
                                                            <circle cx="7" cy="7" r="7"
                                                                stroke="none"></circle>
                                                            <circle cx="7" cy="7" r="5.5">
                                                            </circle>
                                                        </g>
                                                        <path
                                                            d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                                            fill="#787878"></path>
                                                    </svg>
                                                    <div class="from-to-content">
                                                        <div class="content from">
                                                            <div class="hour">21:30</div>
                                                            <div class="place">• VP Sài Gòn</div>
                                                        </div>
                                                        <div class="duration">8h</div>
                                                        <div class="content to">
                                                            <div class="hour">05:30</div>
                                                            <div class="place">• Cổng trước Coop Mart Nha Trang</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="TicketPC__FareInfo-sc-1mxgwjh-7 jbQNEE">
                                                <div>
                                                    <div class="fare">
                                                        <div> 450.000đ</div>
                                                    </div>
                                                    <div class="fareSmall">
                                                        <div class="small"></div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="TicketPC__DetailAndAction-sc-1mxgwjh-8 TVXtN">
                                                <div class="info">
                                                    <div class="seat-available ">Còn 9 chỗ trống</div>
                                                </div>
                                                <div class="action"><button type="button"
                                                        class="ant-btn btn-detail ant-btn-link"><span>Thông tin chi
                                                            tiết</span><i aria-label="icon: caret-down"
                                                            class="anticon anticon-caret-down"><svg
                                                                viewBox="0 0 1024 1024" focusable="false"
                                                                class="" data-icon="caret-down" width="1em"
                                                                height="1em" fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                                </path>
                                                            </svg></i></button><button
                                                        data-tracking-event="selected_route" type="button"
                                                        class="ant-btn btn-booking "><span>Chọn chuyến</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-company-name="Bình Minh Bus" data-company-id="39221" data-company-full-trip="true"
                            data-company-selling-config="ONLINE" class="TicketWrapper__TicketContainer-unfwwx-0 eIAvIT">
                            <div class="container">
                                <div class="TicketPC__Container-sc-1mxgwjh-0 iDzdVo">
                                    <div class="TicketPC__BodyFlex-sc-1mxgwjh-1 iuBnBn ticket">
                                        <div class="image" style="background-image:;position:relative"><img
                                                class="operator lazyloaded"
                                                data-src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"
                                                alt="Bình Minh Bus"
                                                src="//static.vexere.com/production/images/1656960376767.jpeg?w=250&amp;h=250"><img
                                                class="sticker lazyloaded">
                                            <div class="confirm-ticket"><svg
                                                    class="TicketPC__ConfirmSVG-sc-1mxgwjh-5 kwcYbw" width="14"
                                                    height="12" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.666 2v2.667c-.733 0-1.333.6-1.333 1.333 0 .734.6 1.334 1.333 1.334V10c0 .734-.6 1.334-1.333 1.334H1.666c-.733 0-1.333-.6-1.333-1.334V7.334a1.333 1.333 0 0 0 .006-2.667V2C.34 1.26.933.667 1.666.667h10.667c.733 0 1.333.593 1.333 1.333zM6.391 8.965c-.016.125.07.235.182.235a.18.18 0 0 0 .16-.103l.244-.475c.301-.586.832-1.619 1.595-3.098.07-.167 0-.235-.128-.235H7.322l.287-2.254c.016-.125-.07-.235-.182-.235a.183.183 0 0 0-.16.103l-.972 1.899c-.337.657-.616 1.2-.835 1.632l-.001.002c-.016.025-.173.275.1.275h1.12L6.39 8.965z"
                                                        fill="#fff"></path>
                                                </svg> <!-- -->Xác nhận tức thì<div class="point"></div>
                                            </div>
                                        </div>
                                        <div class="TicketPC__RightBody-sc-1mxgwjh-3 iTDXJa">
                                            <div class="TicketPC__TripInfo-sc-1mxgwjh-6 dEwAnK">
                                                <div class="bus-info">
                                                    <div class="bus-name">Bình Minh Bus</div><button type="button"
                                                        class="ant-btn bus-rating-button">
                                                        <div class="bus-rating"><i aria-label="icon: star"
                                                                class="anticon anticon-star"><svg
                                                                    viewBox="64 64 896 896" focusable="false"
                                                                    class="" data-icon="star" width="1em"
                                                                    height="1em" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                                                                    </path>
                                                                </svg></i><span>4.8 (66)</span></div>
                                                    </button>
                                                </div>
                                                <div class="seat-type">Limousine giường phòng 22 chỗ
                                                </div>
                                                <div class="from-to"><svg
                                                        class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 eKNjJr"
                                                        xmlns="http://www.w3.org/2000/svg" width="14"
                                                        height="74" viewBox="0 0 14 74">
                                                        <path fill="none" stroke="#787878" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46">
                                                        </path>
                                                        <g fill="none" stroke="#484848" stroke-width="3">
                                                            <circle cx="7" cy="7" r="7"
                                                                stroke="none"></circle>
                                                            <circle cx="7" cy="7" r="5.5">
                                                            </circle>
                                                        </g>
                                                        <path
                                                            d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z"
                                                            fill="#787878"></path>
                                                    </svg>
                                                    <div class="from-to-content">
                                                        <div class="content from">
                                                            <div class="hour">21:30</div>
                                                            <div class="place">• VP Sài Gòn</div>
                                                        </div>
                                                        <div class="duration">8h</div>
                                                        <div class="content to">
                                                            <div class="hour">05:30</div>
                                                            <div class="place">• Cổng trước Coop Mart Nha Trang</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="TicketPC__FareInfo-sc-1mxgwjh-7 jbQNEE">
                                                <div>
                                                    <div class="fare">
                                                        <div> 450.000đ</div>
                                                    </div>
                                                    <div class="fareSmall">
                                                        <div class="small"></div>
                                                    </div>
                                                </div>
                                                <div></div>
                                            </div>
                                            <div class="TicketPC__DetailAndAction-sc-1mxgwjh-8 TVXtN">
                                                <div class="info">
                                                    <div class="seat-available ">Còn 9 chỗ trống</div>
                                                </div>
                                                <div class="action"><button type="button"
                                                        class="ant-btn btn-detail ant-btn-link"><span>Thông tin chi
                                                            tiết</span><i aria-label="icon: caret-down"
                                                            class="anticon anticon-caret-down"><svg
                                                                viewBox="0 0 1024 1024" focusable="false"
                                                                class="" data-icon="caret-down" width="1em"
                                                                height="1em" fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M840.4 300H183.6c-19.7 0-30.7 20.8-18.5 35l328.4 380.8c9.4 10.9 27.5 10.9 37 0L858.9 335c12.2-14.2 1.2-35-18.5-35z">
                                                                </path>
                                                            </svg></i></button><button
                                                        data-tracking-event="selected_route" type="button"
                                                        class="ant-btn btn-booking "><span>Chọn chuyến</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/lang/vn.js') }}"></script>
    <script src="{{ asset('js/home/home.js') }}"></script>
@endsection
