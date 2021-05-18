@extends('layouts.master')

@section('title')
    افزودن اطلاعات فعال فرهنگی
@endsection

@section('content')

            <!--start: block header -->
            <div class="block-header">

                <div>
                    <div></div>
                    <div></div>
                </div>
                <h1 class="mr-3 ml-3 txt-blue">اطلاعات فعال فرهنگی و مدیران</h1>
                <div></div>
            </div>
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <!--End: block header -->
            <!-- Start: block Breadcrumbs -->
            <!-- <div class="block-breadcrumb">
                <div class="breadcrumb-item doing tablinks active" onClick="openDL(event, 'companyInfomation')">
                    <div class="step">
                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M23.9167 15.5283L38.9671 18.5179C40.18 18.7742 41 19.7992 41 21.0121V38.4371C41 39.855 39.8554 40.9996 38.4375 40.9996H23.0625C23.5408 40.9996 23.9167 40.6237 23.9167 40.1454V39.2912H38.4375C38.8988 39.2912 39.2917 38.9154 39.2917 38.4371V21.0121C39.2917 20.6192 39.0183 20.2604 38.6254 20.175L23.9167 17.2708V15.5283Z" fill="#BEA254"></path>
                                <path d="M33.3138 23.9165C33.7921 23.9165 34.168 24.2923 34.168 24.7707C34.168 25.249 33.7921 25.6248 33.3138 25.6248H29.8971C29.4188 25.6248 29.043 25.249 29.043 24.7707C29.043 24.2923 29.4188 23.9165 29.8971 23.9165H33.3138Z" fill="#BEA254"></path>
                                <path d="M33.3138 29.0415C33.7921 29.0415 34.168 29.4173 34.168 29.8957C34.168 30.374 33.7921 30.7498 33.3138 30.7498H29.8971C29.4188 30.7498 29.043 30.374 29.043 29.8957C29.043 29.4173 29.4188 29.0415 29.8971 29.0415H33.3138Z" fill="#BEA254"></path>
                                <path d="M33.3138 34.1665C33.7921 34.1665 34.168 34.5423 34.168 35.0207C34.168 35.499 33.7921 35.8748 33.3138 35.8748H29.8971C29.4188 35.8748 29.043 35.499 29.043 35.0207C29.043 34.5423 29.4188 34.1665 29.8971 34.1665H33.3138Z" fill="#BEA254"></path>
                                <path d="M23.9154 40.1456C23.9154 40.6239 23.5395 40.9997 23.0612 40.9997C22.5829 40.9997 22.207 40.6239 22.207 40.1456V39.2914V16.2289C22.207 15.9727 22.3266 15.7335 22.5145 15.5627C22.7195 15.4089 22.9758 15.3406 23.232 15.3918L23.9154 15.5285V17.271V39.2914V40.1456Z" fill="#BEA254"></path>
                                <path d="M22.2096 39.2915V40.1457C22.2096 40.624 22.5855 40.9998 23.0638 40.9998H16.2305C16.7088 40.9998 17.0846 40.624 17.0846 40.1457V39.2915H22.2096Z" fill="#BEA254"></path>
                                <path d="M17.9388 8.5415C18.4171 8.5415 18.793 8.91734 18.793 9.39567C18.793 9.87401 18.4171 10.2498 17.9388 10.2498H14.5221C14.0438 10.2498 13.668 9.87401 13.668 9.39567C13.668 8.91734 14.0438 8.5415 14.5221 8.5415H17.9388Z" fill="#BEA254"></path>
                                <path d="M18.793 14.5207C18.793 14.999 18.4171 15.3748 17.9388 15.3748H14.5221C14.0438 15.3748 13.668 14.999 13.668 14.5207C13.668 14.0423 14.0438 13.6665 14.5221 13.6665H17.9388C18.4171 13.6665 18.793 14.0423 18.793 14.5207Z" fill="#BEA254"></path>
                                <path d="M17.9388 18.7915C18.4171 18.7915 18.793 19.1673 18.793 19.6457C18.793 20.124 18.4171 20.4998 17.9388 20.4998H14.5221C14.0438 20.4998 13.668 20.124 13.668 19.6457C13.668 19.1673 14.0438 18.7915 14.5221 18.7915H17.9388Z" fill="#BEA254"></path>
                                <path d="M17.9388 23.9165C18.4171 23.9165 18.793 24.2923 18.793 24.7707C18.793 25.249 18.4171 25.6248 17.9388 25.6248H14.5221C14.0438 25.6248 13.668 25.249 13.668 24.7707C13.668 24.2923 14.0438 23.9165 14.5221 23.9165H17.9388Z" fill="#BEA254"></path>
                                <path d="M10.25 24.7707C10.25 25.249 9.87417 25.6248 9.39583 25.6248H5.97917C5.50083 25.6248 5.125 25.249 5.125 24.7707C5.125 24.2923 5.50083 23.9165 5.97917 23.9165H9.39583C9.87417 23.9165 10.25 24.2923 10.25 24.7707Z" fill="#BEA254"></path>
                                <path d="M9.39583 8.5415C9.87417 8.5415 10.25 8.91734 10.25 9.39567C10.25 9.87401 9.87417 10.2498 9.39583 10.2498H5.97917C5.50083 10.2498 5.125 9.87401 5.125 9.39567C5.125 8.91734 5.50083 8.5415 5.97917 8.5415H9.39583Z" fill="#BEA254"></path>
                                <path d="M9.39583 13.6665C9.87417 13.6665 10.25 14.0423 10.25 14.5207C10.25 14.999 9.87417 15.3748 9.39583 15.3748H5.97917C5.50083 15.3748 5.125 14.999 5.125 14.5207C5.125 14.0423 5.50083 13.6665 5.97917 13.6665H9.39583Z" fill="#BEA254"></path>
                                <path d="M9.39583 18.7915C9.87417 18.7915 10.25 19.1673 10.25 19.6457C10.25 20.124 9.87417 20.4998 9.39583 20.4998H5.97917C5.50083 20.4998 5.125 20.124 5.125 19.6457C5.125 19.1673 5.50083 18.7915 5.97917 18.7915H9.39583Z" fill="#BEA254"></path>
                                <path d="M15.3737 31.604C15.3737 31.1257 14.9808 30.7498 14.5195 30.7498H9.39453C8.9162 30.7498 8.54036 31.1257 8.54036 31.604V39.2915H6.83203V31.604C6.83203 30.1861 7.97661 29.0415 9.39453 29.0415H14.5195C15.9374 29.0415 17.082 30.1861 17.082 31.604V39.2915H15.3737V31.604Z" fill="#BEA254"></path>
                                <path d="M8.54036 39.2915H15.3737H17.082V40.1457C17.082 40.624 16.7062 40.9998 16.2279 40.9998H7.6862C7.20786 40.9998 6.83203 40.624 6.83203 40.1457V39.2915H8.54036Z" fill="#BEA254"></path>
                                <path d="M2.98958 0.341365L21.7642 3.19428C23.0112 3.39928 23.9167 4.45845 23.9167 5.72261V15.5284L23.2333 15.3918C22.9771 15.3405 22.7208 15.4089 22.5158 15.5626C22.3279 15.7334 22.2083 15.9726 22.2083 16.2289V5.72261C22.2083 5.29553 21.9008 4.93678 21.4908 4.86845L2.71625 2.03261C2.665 2.01553 2.61375 2.01553 2.5625 2.01553C2.3575 2.01553 2.16958 2.08386 2.01583 2.22053C1.81083 2.39136 1.70833 2.61345 1.70833 2.8697V38.4372C1.70833 38.9155 2.10125 39.2914 2.5625 39.2914H6.83333V40.1455C6.83333 40.6239 7.20917 40.9997 7.6875 40.9997H2.5625C1.14458 40.9997 0 39.8551 0 38.4372V2.8697C0 2.11803 0.324583 1.40053 0.905417 0.922198C1.48625 0.426782 2.23792 0.221782 2.98958 0.341365Z" fill="#BEA254"></path>
                            </g>
                            <defs>
                                <clippath id="clip0">
                                    <rect width="41" height="41" fill="white"></rect>
                                </clippath>
                            </defs>
                        </svg>


                    </div>
                    <p class="breadcrumb-txt">اطلاعات فعال فرهنگی</p>
                </div>
                <div class="undone">
                    <svg width="60" height="30" viewBox="0 0 60 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M58 17C59.1046 17 60 16.1046 60 15C60 13.8954 59.1046 13 58 13V17ZM0.585786 13.5858C-0.195262 14.3668 -0.195262 15.6332 0.585786 16.4142L13.3137 29.1421C14.0948 29.9232 15.3611 29.9232 16.1421 29.1421C16.9232 28.3611 16.9232 27.0948 16.1421 26.3137L4.82843 15L16.1421 3.68629C16.9232 2.90524 16.9232 1.63891 16.1421 0.857864C15.3611 0.0768156 14.0948 0.0768156 13.3137 0.857864L0.585786 13.5858ZM58 13H2V17H58V13Z" fill="#C4C4C4"></path>
                    </svg>
                </div>
                <div class="breadcrumb-item undone tablinks " onClick="openDL(event, 'managerInformation')" >
                    <div class="step undone">
                        <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.625 23.4487V22.105C37.9958 22.105 38.2969 21.8042 38.2969 21.4331V17.4019C38.2969 17.0308 37.9958 16.73 37.625 16.73H33.9969L33.8667 16.2253C33.5696 15.071 33.1082 13.9653 32.4959 12.9426L32.2272 12.493L34.8031 9.91255C35.0624 9.65272 35.0624 9.23175 34.8031 8.97193L31.9498 6.11436C31.6863 5.86319 31.2724 5.86319 31.0089 6.11436L28.4282 8.69504L27.9789 8.42629C26.9545 7.81373 25.8478 7.35234 24.6919 7.05498L24.1875 6.92376V3.29248C24.1875 2.92137 23.8867 2.62061 23.5156 2.62061H19.4844C19.1133 2.62061 18.8125 2.92137 18.8125 3.29248V6.92061L18.3078 7.05105C17.1535 7.34788 16.0478 7.80927 15.0245 8.42078L14.575 8.68979L11.9951 6.11436C11.7313 5.86109 11.3148 5.86109 11.051 6.11436L8.19688 8.96773C8.07142 9.09292 8.00082 9.26298 8.00082 9.44014C8.00082 9.61756 8.07142 9.78736 8.19688 9.91255L10.7776 12.493L10.5088 12.9426C9.89677 13.9653 9.43512 15.071 9.13829 16.2253L9.00654 16.73H5.375C5.00389 16.73 4.70312 17.0308 4.70312 17.4019V21.4331C4.70312 21.8042 5.00389 22.105 5.375 22.105V23.4487C4.26194 23.4487 3.35938 22.5462 3.35938 21.4331V17.4019C3.35938 16.2888 4.26194 15.3862 5.375 15.3862H7.97458C8.25173 14.4572 8.62651 13.5601 9.09262 12.7103L7.24496 10.8626C6.86704 10.4855 6.65471 9.9737 6.65471 9.44014C6.65471 8.90658 6.86704 8.3948 7.24496 8.01792L10.1004 5.16245C10.8959 4.40108 12.1502 4.40108 12.9457 5.16245L14.7928 7.00932C15.6426 6.54346 16.5399 6.16947 17.4688 5.89259V3.29248C17.4688 2.17943 18.3713 1.27686 19.4844 1.27686H23.5156C24.6287 1.27686 25.5313 2.17943 25.5313 3.29248V5.89259C26.4603 6.16947 27.3571 6.54425 28.2072 7.0101L30.0549 5.16245C30.8506 4.40108 32.1046 4.40108 32.9004 5.16245L35.7553 8.01713C36.133 8.39427 36.345 8.90553 36.345 9.43935C36.345 9.97318 36.133 10.485 35.7553 10.8618L33.9076 12.7095C34.3735 13.5598 34.748 14.4572 35.0254 15.3862H37.625C38.7381 15.3862 39.6406 16.2888 39.6406 17.4019V21.4331C39.6406 22.5462 38.7381 23.4487 37.625 23.4487Z" fill="#BEA254"></path>
                            <path d="M30.9063 19.4175H29.5625C29.5625 14.9647 25.9527 11.355 21.5 11.355C17.0473 11.355 13.4375 14.9647 13.4375 19.4175H12.0938C12.0938 14.2225 16.305 10.0112 21.5 10.0112C26.6947 10.0112 30.9063 14.2225 30.9063 19.4175Z" fill="#BEA254"></path>
                            <path d="M21.5 24.7925C19.2736 24.7925 17.4688 22.9873 17.4688 20.7612C17.4688 18.5349 19.2736 16.73 21.5 16.73C23.7266 16.73 25.5313 18.5349 25.5313 20.7612C25.5289 22.9868 23.7256 24.7901 21.5 24.7925ZM21.5 18.0737C20.0158 18.0737 18.8125 19.2771 18.8125 20.7612C18.8125 22.2454 20.0158 23.4487 21.5 23.4487C22.9842 23.4487 24.1875 22.2454 24.1875 20.7612C24.1875 19.2771 22.9842 18.0737 21.5 18.0737Z" fill="#BEA254"></path>
                            <path d="M32.9219 27.48C30.6955 27.48 28.8906 25.6748 28.8906 23.4487C28.8906 21.2224 30.6955 19.4175 32.9219 19.4175C35.1483 19.4175 36.9531 21.2224 36.9531 23.4487C36.9508 25.6743 35.1475 27.4776 32.9219 27.48ZM32.9219 20.7612C31.4377 20.7612 30.2344 21.9646 30.2344 23.4487C30.2344 24.9329 31.4377 26.1362 32.9219 26.1362C34.406 26.1362 35.6094 24.9329 35.6094 23.4487C35.6094 21.9646 34.406 20.7612 32.9219 20.7612Z" fill="#BEA254"></path>
                            <path d="M10.0781 27.48C7.85175 27.48 6.04688 25.6748 6.04688 23.4487C6.04688 21.2224 7.85175 19.4175 10.0781 19.4175C12.3048 19.4175 14.1094 21.2224 14.1094 23.4487C14.107 25.6743 12.3037 27.4776 10.0781 27.48ZM10.0781 20.7612C8.59396 20.7612 7.39063 21.9646 7.39063 23.4487C7.39063 24.9329 8.59396 26.1362 10.0781 26.1362C11.5623 26.1362 12.7656 24.9329 12.7656 23.4487C12.7656 21.9646 11.5623 20.7612 10.0781 20.7612Z" fill="#BEA254"></path>
                            <path d="M39.0128 29.2033C38.0116 28.5152 36.8245 28.148 35.6094 28.1514H30.2344C29.9076 28.1543 29.5814 28.184 29.2594 28.2399C28.8295 27.5675 28.2702 26.9874 27.6141 26.5326C27.5156 26.4583 27.4122 26.3909 27.3044 26.3313C26.3645 25.7621 25.2861 25.4623 24.1875 25.4639H18.8125C16.7578 25.4566 14.8432 26.5051 13.7425 28.2399C13.4197 28.184 13.0929 28.1543 12.7656 28.1514H7.39063C6.17653 28.148 4.98972 28.5146 3.989 29.202C2.33503 30.3274 1.3448 32.1979 1.34375 34.1983V36.8858C1.34611 38.7203 2.4135 40.3864 4.0798 41.1548C4.69499 41.4446 5.36713 41.5929 6.04688 41.5889H12.7656V40.2452H6.71875V32.8545H5.375V40.1777C5.122 40.1271 4.87634 40.0452 4.64329 39.9347C3.45307 39.3859 2.69012 38.1962 2.6875 36.8858V34.1983C2.68907 32.6414 3.46042 31.1861 4.74748 30.3106C5.52512 29.7768 6.44711 29.4925 7.39063 29.4952H12.7656C12.884 29.4952 12.9982 29.5078 13.1136 29.5156C12.8864 30.1565 12.7685 30.831 12.7656 31.5108V38.2295C12.768 40.084 14.2708 41.5866 16.125 41.5889H18.1406V30.8389H16.7969V40.2452H16.125C15.0119 40.2452 14.1094 39.3426 14.1094 38.2295V31.5108C14.1094 28.913 16.2153 26.8077 18.8125 26.8077H24.1875C25.052 26.8082 25.8992 27.0475 26.6364 27.499C26.7047 27.5362 26.7703 27.5782 26.8325 27.6244C27.4621 28.0556 27.9789 28.6317 28.339 29.3041C28.7009 29.9833 28.8906 30.741 28.8906 31.5108V38.2295C28.8906 39.3426 27.9881 40.2452 26.875 40.2452H26.2031V30.8389H24.8594V41.5889H26.875C28.7295 41.5866 30.232 40.084 30.2344 38.2295V31.5108C30.2312 30.831 30.1139 30.1568 29.8869 29.5156C30.0026 29.5078 30.1168 29.4952 30.2344 29.4952H35.6094C36.5534 29.4925 37.4762 29.7776 38.2544 30.3119C39.5404 31.188 40.3107 32.6422 40.3125 34.1983V36.8858C40.3101 38.2009 39.5414 39.394 38.3454 39.9399C38.1158 40.0486 37.8738 40.1284 37.625 40.1777V32.8545H36.2812V40.2452H30.2344V41.5889H36.9531C37.6289 41.5931 38.2971 41.4467 38.9089 41.1601C40.5807 40.394 41.6536 38.7248 41.6562 36.8858V34.1983C41.6552 32.1987 40.6658 30.329 39.0128 29.2033Z" fill="#BEA254"></path>
                            <path d="M18.8125 40.2456H24.1875V41.5894H18.8125V40.2456Z" fill="#BEA254"></path>
                        </svg>
                    </div>
                    <p class="breadcrumb-txt">اطلاعات مدیران</p>
                </div>
            </div> -->
            <!-- End: block Breadcrumbs -->
            <!-- Start: content -->
            @if(isset($company))
                {{ Form::model($company, ['route' => ['company-information.update', $company->id], 'method' => 'patch','files'=>'true']) }}
            @else
            {{ Form::open(array('route' => 'company-information.store','files'=>'true')) }}
            @endif


            <div id="companyInfomation" class="" style="display: block;">
                <h2 class="txt-blue">اطلاعات فعال فرهنگی</h2>
                <p>
                در این بخش باید اطلاعات فعال فرهنگی یا تیم خود را ثبت کنید. این اطلاعات در صفحه اختصاصی شما نمایش داده می‌شود.
                </p>
                <div class="information-box">
                    <div class="row custom">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputNameCompany">نام فعال فرهنگی</label>
                                                                <p>"در این بخش، اسم شرکت حقوقی یا نام برند تیم فعال فرهنگی ثبت گردد."</p>
                                <input name="title" value="{{isset($company) ? $company->title : '' }}" required  type="text" class="form-control input-data " id="inputNameCompany"  placeholder="اسم یا برند شرکت حقوقی یا تیم خود را ثبت کنید">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputActivity">حوزه فعالیت</label>

                                <select name="field" required id="inputActivity" class="form-control input-data" aria-label="Default select example">
                                    <option>انتخاب کنید</option>
                                    <option value="شخصیت پردازی" {{isset($company) && $company->field == 'شخصیت پردازی' ? 'selected' : '' }}>
                                        شخصیت پردازی
                                    </option>
                                    <option value="بازی های ویدئویی و کتاب تعاملی" {{isset($company) && $company->field == 'بازی های ویدئویی و کتاب تعاملی' ? 'selected' : '' }}>
                                        بازی های ویدئویی و کتاب تعاملی
                                    </option>
                                    <option value="بازی، اسباب بازی و عروسک" {{isset($company) && $company->field == 'بازی، اسباب بازی و عروسک' ? 'selected' : '' }}>
                                        بازی، اسباب بازی و عروسک
                                    </option>
                                    <option value="پویانمایی و وبسریز" {{isset($company) && $company->field == 'پویانمایی و وبسریز' ? 'selected' : '' }}>
                                        پویانمایی و وبسریز
                                    </option>
                                    <option value="نوشت افزار" {{isset($company) && $company->field == 'نوشت افزار' ? 'selected' : '' }}>
                                        نوشت افزار
                                    </option>
                                  </select>

                            </div>
                        </div>
                    </div>
                    <div class="row custom">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputSiteName">آدرس سایت</label>
                                <input name="webAddress" value="{{isset($company) ? $company->webAddress : '' }}" type="text" class="form-control input-data " id="inputSiteName" required="required" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputPhone">شماره تماس</label>
                                <input name="phone"  value="{{isset($company) ? $company->phone : '' }}" type="text" class="form-control input-data " id="inputphone" required="required" placeholder="مثلا ۰۹۱۲۱۲۳۴۵۶۷">
                            </div>
                        </div>
                    </div>
                    <div class="row custom">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputEmail">ایمیل</label>
                                <input name="email"  value="{{isset($company) ? $company->email : '' }}" required type="email" class="form-control input-data" id="inputEmail" aria-describedby="emailHelp" placeholder="Example@gmail.com">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="lbl-txt" for="inputLinkedIn">نشانی لینکدین</label>
                                <input name="linkedin"  value="{{isset($company) ? $company->linkedin : '' }}" type="text" class="form-control input-data " id="inputlinkedin" placeholder="www.linkedin.com/example">
                            </div>
                        </div>
                    </div>
                    <div class="row custom">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="lbl-txt" for="inputInstagram">نشانی اینستاگرام</label>
                                <input name="instagram"  value="{{isset($company) ? $company->instagram : '' }}"  type="text" class="form-control input-data " id="inputInstagram" required="" placeholder="www.instagram.com/example">
                            </div>
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputAddress">نشانی فعال فرهنگی</label>
                                <textarea name="address"  required class="form-control input-data" id="inputAddress" rows="2" placeholder="">{{ $company->address ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputdesc">معرفی فعال فرهنگی</label>
                                <textarea name="description"  minlength="20" required class="form-control input-data" id="inputdesc" rows="3" maxlength="250" placeholder="">{{ $company->description ?? '' }}</textarea>
                                <p class="note-txt txt-gray">حداکثر 250 کلمه...</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group upload">
                                <div class="">
                                    <label class="lbl-txt requier" for="inputImg">بارگذاری لوگوی فعال فرهنگی</label>
                                    <p class="note">فرمت عکس باید JPG یا PNG باشد</p>
                                    <p class="note">حجم فایل باید حداکثر 1 مگابایت باشد</p>
                                </div>
                            <div class="">
                                @if (isset($company) && $company->avatar)
                                <img src="{{ asset($company->avatar) }}" class="w-25 h-25" alt="">
                                <input type="hidden" value="{{ $company->avatar }}" type="hidden" name="avatar" >
                            @else
                                <input type="file" name="avatar" accept="image/png, image/jpeg">
                            @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>

           <h2 class="txt-blue">مدیران</h2>
           <p>
           در این بخش باید اطلاعات مختصری را از مدیران مجموعه خود ثبت کنید. این اطلاعات در صفحه اختصاصی شما نمایش داده می‌شود.
           </p>
           @if (isset($company))


           @foreach ($company->managers as $key => $manager)
           <div class="information-box">
            <p class="title-txt txt-blue">مدیر {{ $key+1 }}</p>
            <div class="row custom">
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label class="lbl-txt requier" for="inputname">نام</label>
                        <input name="managerName{{ $key+1 }}" value="{{ $manager->name }}" type="text" class="form-control input-data " id="inputname" required="" placeholder="">
                        <p class="error-txt txt-pink"></p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label class="lbl-txt requier" for="inputfamily">نام خانوادگی</label>
                        <input name="managerLastName{{ $key+1 }}" value="{{ $manager->lastName }}" type="text" class="form-control input-data" id="inputfamily" required="" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row custom">
                <div class="col-md-6 col-12">
                    <div class="h-100">
                        <div class="form-group">
                            <label class="lbl-txt requier" for="inputpost">سمت</label>
                            <input name="managerPosition{{ $key+1 }}" value="{{ $manager->position }}" type="text" class="form-control input-data " id="inputpost" required="" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="lbl-txt requier" for="inputEmail">ایمیل</label>
                            <input name="managerEmail{{ $key+1 }}" value="{{ $manager->email }}" type="email" class="form-control input-data" id="inputEmail" aria-describedby="emailHelp" placeholder="Example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label class="lbl-txt requier" for="inputPhone">شماره تماس</label>
                            <input name="managerPhone{{ $key+1 }}" value="{{ $manager->phone }}" type="text" class="form-control input-data " id="inputphone" required="" placeholder="مثلا ۰۹۱۲۱۲۳۴۵۶۷">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group upload">
                        <div class="">
                            <label class="lbl-txt" for="inputImg">بارگذاری عکس</label>
                            <p class="note">فرمت عکس باید JPG یا PNG باشد</p>
                            <p class="note">حجم فایل باید حداکثر 1 مگابایت باشد</p>
                        </div>
                        <div class="">
                            @if ($manager->avatar)
                                <img src="{{ asset($manager->avatar) }}" class="w-25 h-25" alt="">
                                <input type="hidden" value="{{ $manager->avatar }}" type="hidden" name="managerAvatar{{ $key+1 }}" >
                            @else
                                <input type="file" name="managerAvatar{{ $key+1 }}" accept="image/png, image/jpeg">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
           @endforeach

            @else
            <div class="information-box">
                <p class="title-txt txt-blue">مدیر ۱</p>
                <div class="row custom">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label class="lbl-txt requier" for="inputname">نام</label>
                            <input name="managerName" type="text" class="form-control input-data " id="inputname" required="" placeholder="">
                            <p class="error-txt txt-pink"></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label class="lbl-txt requier" for="inputfamily">نام خانوادگی</label>
                            <input name="managerLastName" type="text" class="form-control input-data" id="inputfamily" required="" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row custom">
                    <div class="col-md-6 col-12">
                        <div class="h-100">
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputpost">سمت</label>
                                <input name="managerPosition" type="text" class="form-control input-data " id="inputpost" required="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputEmail">ایمیل</label>
                                <input name="managerEmail" type="email" class="form-control input-data" id="inputEmail" aria-describedby="emailHelp" placeholder="Example@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="lbl-txt requier" for="inputPhone">شماره تماس</label>
                                <input name="managerPhone" type="text" class="form-control input-data " id="inputphone" required="" placeholder="مثلا ۰۹۱۲۱۲۳۴۵۶۷">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group upload">
                            <div class="">
                                <label class="lbl-txt" for="inputImg">بارگذاری عکس</label>
                                <p class="note">فرمت عکس باید JPG یا PNG باشد</p>
                                <p class="note">حجم فایل باید حداکثر 1 مگابایت باشد</p>
                            </div>
                            <div class="">
                                    <input type="file"
                                    id="managerAvatar" name="managerAvatar"
                                    accept="image/png, image/jpeg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <div class="information-box">
                   <p class="title-txt txt-blue">مدیر ۲</p>
                   <div class="row custom">
                       <div class="col-md-6 col-12">
                           <div class="form-group">
                               <label class="lbl-txt requier" for="inputname">نام</label>
                               <input name="managerName2" type="text" class="form-control input-data " id="inputname_second" placeholder="">
                           </div>
                       </div>
                       <div class="col-md-6 col-12">
                           <div class="form-group">
                               <label class="lbl-txt requier" for="inputfamily">نام خانوادگی</label>
                               <input name="managerLastName2" type="text" class="form-control input-data" id="inputfamily_second" placeholder="">
                           </div>
                       </div>
                   </div>
                   <div class="row custom">
                       <div class="col-md-6 col-12">
                           <div class="form-group">
                               <label class="lbl-txt requier" for="inputpost">سمت</label>
                               <input name="managerPosition2" type="text" class="form-control input-data " id="inputpost_second" placeholder="">
                           </div>
                           <div class="form-group">
                               <label class="lbl-txt requier" for="inputEmail">ایمیل</label>
                               <input name="managerEmail2" type="email" class="form-control input-data" id="inputEmail_second" aria-describedby="emailHelp" placeholder="Example@gmail.com">
                           </div>
                           <div class="form-group">
                               <label class="lbl-txt requier" for="inputPhone">شماره تماس</label>
                               <input name="managerPhone2" type="text" class="form-control input-data " id="inputphone_second" placeholder="مثلا ۰۹۱۲۱۲۳۴۵۶۷">
                           </div>
                       </div>
                       <div class="col-md-6 col-12">
                           <div class="form-group upload">
                               <div class="">
                                   <label class="lbl-txt" for="inputImg">بارگذاری عکس</label>
                                   <p class="note">فرمت عکس باید JPG یا PNG باشد</p>
                                   <p class="note">حجم فایل باید حداکثر 1 مگابایت باشد</p>
                               </div>
                               <div class="">
                                   <form action="http://svn.project.hemend.com/file-upload" class="dropzone dz-clickable" id="img_manager_second">

                                       <input type="file"
                                       id="managerAvatar2" name="managerAvatar"
                                       accept="image/png, image/jpeg">
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

           @endif

            <div id="managerInformation" class="">

                <div class="btn-box mt-5">
                    <!-- <button type="button" id="" class="btn-page btn-txt btn-y-active" data-toggle="modal" data-target="#exampleModal">ادامه</button> -->
                    <button type="submit" id="submit" class="btn-page btn-txt btn-w-active" >ثبت</button>
                </div>
            </div>

            {{ Form::close() }}


        @endsection
