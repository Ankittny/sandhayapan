<!DOCTYPE html>
<html lang="en">
<head>
    <title>sandhyapan </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        i.mdi.mdi-chevron-down {
            position: absolute;
            right: 22px;
            top: 7px;
            z-index: -1;
            color: #6e6e6e !important;
        }

        .center-btn {
            margin: 0 auto;
        }

        a.btn.btn-block.btn-primary.btn-lg.font-weight-medium.auth-form-btn {
            padding: 6px !important;

            border-radius: 4px !important;
            background: linear-gradient(to right top, #e600bd, #7e01ff) !important;
            border: none !important;
        }

        [data-theme-version="dark"] .form-control {

            color: #000 !important;
        }

        i.mdi {
            color: #d900c5 !important;
        }

        input.form-control {
            height: 3.1rem !important;
        }

        .card {
            background: 0 !important;
            transition: 0.3s;


        }

        .active {
            color: hotpink;
        }

        .card {
            border-radius: 5px !important;
        }

        label {
            color: #000;
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 7px !important;
            display: inline-block;
        }

        span.input-group-text {
            border: 1px solid #ddd !important;
            padding: 6px;
        }

        ul.list-group.list-user.user-lists-2 li i {
            color: #3ea9f5;
        }

        span.input-group-text {
            height: 49px;
        }

        .basic-list-group.plan-sec3 button {
            /* color: #b76be6; */
            background: #b76be6;
        }

        .basic-list-group.plan-sec3 span {
            color: #b76be6;
        }

        .basic-list-group.plan-sec3 h1 {
            color: #b76be6 !important;
        }

        .card-title {
            margin-bottom: 15px !important;
        }

        h4.card-title {
            color: #000 !important;
            /* margin-bottom: 18px; */
            /* display: inline-block; */
        }

        .basic-form input {
            background: 0 !important;
            border: 1px solid #ddd !important;
            border-radius: 0px !IMPORTANT;
        }

        select.select.form-select.form-select-lg.mb-3 {
            background: 0 !important;
            border: 1px solid #ddd;
            border-radius: 0px !important;
            font-size: 14px;
            height: 2.5rem;
        }

        .card {
            border-radius: 0px !important;
        }

        .card {
            border: 1px solid #ddd;
        }

        [data-theme-version="dark"] .card-header {
            border-color: #2a2833;
            border-bottom: none !important;
        }

        h4.card-title.title-s {
            font-size: 36px;
            line-height: 42px;
        }

        [data-theme-version="dark"] {
            /* background: #05031A; */
            color: #828690;
            background: 0 !important;
        }

        .card-body {
            padding: 12px;
        }

        .user-border {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 4px !important;
        }

        h4.card-title.title-text.most-p {
            color: #fe714e !important;
            font-size: 16px;
            padding: 4px;
            text-align: center;
            font-weight: normal;
            margin-bottom: 0px !important;
        }

        .card-header.padd-0 {
            padding: 0px !important;
            background: #f6f5f1;
            border-radius: 0px !important;
        }

        .user-border h1 {
            color: #000 !important;
            font-size: 20px;
            text-transform: capitalize;
            margin-bottom: 24px;
        }

        [data-theme-version="dark"] .list-group-item {
            /* border-color: #2a2833; */
            border: none !important;
        }

        .card {
            height: auto;
        }

        li.list-group-item {
            padding: 1px;
            text-align: center;
            margin-bottom: 12px;
            font-weight: 700;


            font-size: 15px;
        }

        .active {
            background-color: #87CEEB !important;
        }

        h4.card-title.title-text {
            text-align: left;
            font-weight: 700;
            font-size: 24px;
        }

        .card-body {
            padding: 7px;
        }

        .card.top-plan {
            position: relative;
            top: 230px;
        }

        button.btn-block {
            background: #3769cc;
            color: white;
            border: none;
            padding: 11px;
            border-radius: 40px;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .basic-list-group h1 {

            text-align: center;
            font-size: 22px;
            margin: 30px 0 30px;
        }

        ul.list-group.list-user li i {
            color: #3769cc;
            font-size: 12px;
            margin-right: 15px;
        }

        ul.list-group.list-user li {
            text-align: left;
            /*font-weight: 600;*/
        }

        span.rupe {
            font-size: 25px !important;
        }

        .basic-list-group {
            text-align: center;
        }

        .basic-list-group p {
            color: #000;
        }

        .basic-list-group span {
            color: #3769cc;
            font-size: 40px;
            text-align: center;
        }

        .card.card-1.card-border {
            border-top-right-radius: 7px !important;
            border-bottom-right-radius: 7px !important;
        }

        ul.list-group.list-user.user-lists li i {
            color: #56be8e;
        }

        .basic-list-group.list-group.plan-sec3 {
            border-top-right-radius: 7px !important;
        }

        .card-title {

            margin-bottom: 50px;
        }

        .basic-list-group.plan-sec2 h1 {
            color: #3ea9f5 !important;
        }

        .text-center.mt-4 {
            margin-bottom: 20px;
        }

        .basic-list-group.plan-sec2 span {
            color: #3ea9f5 !important;
        }

        .card-body {

            padding: 0px !important;
        }

        .card.top-plan .bottom {
            border-bottom: none;
        }

        .card-header {

            border-bottom: none !important;
        }

        .card.top-plan .card-header {
            background: 0 !important;
        }

        li.list-group-item {
            padding-left: 12px;
            padding-right: 12px;
            border: none;
        }

        ul.list-group {
            border-top: 1px solid #ddd;
            border-radius: 0px !important;
            padding: 10px 0;
        }

        .card-header.card-title {
            background: 0 !important;
        }

        .card-header.card-title {
            text-align: center;
            margin-bottom: 40px !important;
        }

        .card.top-plan {
            border-top-left-radius: 7px !important;
            border-bottom-left-radius: 7px !important;
        }

        h4.card-title.title-text.bottom {
            margin-bottom: 20px;
        }

        .card.top-plan {
            position: relative;
            top: 245px;
        }

        .text-center.mt-4 {
            padding-right: 12px;
            padding-left: 12px;
        }

        .card.active {
            background-color: red;

        }

        .basic-list-group.plan-sec2 button {

            background: #3ea9f5;
        }

        .list-group {
            border-top: 1px solid #ddd;
            border-radius: 0px;
        }

        i.mdi.mdi-account.account {
            color: white !important;
        }

        i.mdi.mdi-chevron-left {
            color: white !important;
        }

        .card.card-1 {
            margin-top: 28px;

            border-radius: 0px !important;

            border-top: none;
        }

        /*.card:hover {*/
        /*    border: 2px solid #00438b;*/
        /*      border-radius: 7px !important;*/
        /*      transition: 0.3s;*/
        /*}*/
        .col-md-15.col-sm-3 {
            float: left;
            width: 20%;
            padding: 0px;
        }

        .row.flex-parss {
            /* display: inherit !important; */
            display: initial !important;
            width: 100%;
        }

        @media only screen and (max-width: 480px) {
            .col-md-15.col-sm-3 {
                width: 100%;
                float: inherit !important;
            }

            .card.top-plan {

                position: inherit !important;
                top: inherit !important;
            }

            h4.card-title.title-s {
                font-size: 17px;
                line-height: 33px;
            }

            .card {

                margin-bottom: 15px;
            }

        }

    </style>
</head>
<body>


    <div class="container">
        <div class="row ">

            <div class="col-xl-12">
                <div class="card-header card-title">
                    <h4 class="card-title title-s ">Affordable pricing for<br>
                        growing businesses
                    </h4>
                </div>
            </div>
            <div class="col-md-15 col-sm-3">

                <div class="card top-plan">
                    <div class="card-header">
                        <h4 class="card-title title-text bottom">Our Services</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-list-group">
                            <ul class="list-group">

                                @if($ourservices->count()>0)
                                @foreach($ourservices as $items)
                                <li class="list-group-item">{{ $items->name ?? '' }}</li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @if($package->count()>0)
            @foreach($package as $item)
            @if($i==0)

            <div class="col-md-15 col-sm-3">
                <div class="card">
                    <div class="card-header padd-0">
                        <h4 class="card-title title-text most-p">MOST POPULAR!</h4>
                    </div>

                    <div class="card-body">
                        <div class="basic-list-group list-group">
                            <h1 style="color:{{$item->textcolor ?? ''}} ">{{ $item->name ?? '' }}</h1>
                            <span style="color:{{$item->textcolor ?? ''}}"><span class="rupe" style="color:{{$item->textcolor ?? ''}}">₹</span>{{ $item->price ?? '' }}</span>
                            <p>{{ $item->validity ?? '' }}</p>
                            <form action="{{ url("purchase") }}" method="Post">
                                @csrf
                                <div class="text-center mt-4">
                                   <input type="hidden" name="packagid" value="{{ $item->id ?? "" }}">
                                    <input type="hidden" name="packageprice" value="{{ $item->price ?? "" }}">
                                        <input type="hidden" name="packagename" value="{{ $item->name ?? "" }}">
                                        <input type="hidden" name="userid" value="{{ Session::get('agetid') ?? '' }}">
                                    <button type="submit" class=" btn-block" style="background:{{$item->textcolor ?? ''}}">Buy now</button>
                                </div>
                            </form>
                            <ul class="list-group list-user">
                                @php
                                $attributes = DB::table('attributes')->where('packageid',$item->id)->get();
                                @endphp

                                @if($attributes->count()> 0)
                                @foreach($attributes as $items1)
                                @php $j = 1; @endphp

                                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>{{ $items1->charge ?? '' }} : ₹{{ $items1->price ?? '' }} </li>
                                @php $j++; @endphp
                                @endforeach
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @else

            <div class="col-md-15 col-sm-3">

                <div class="card card-1">
                    <!--<div class="card-header padd-0" style="background:0;">-->
                    <!--    <h4 class="card-title title-text most-p" style=" visibility: hidden;">MOST POPULAR!</h4>-->

                    <!--</div>-->

                    <div class="card-body">
                        <div class="basic-list-group  list-group plan-sec">
                            <h1 style="color:{{ $item->textcolor ?? '' }}">{{ $item->name }}</h1>
                             <span style="color:{{ $item->textcolor ?? '' }}"><span class="rupe" style="color:{{ $item->textcolor ?? '' }}">₹</span><span style="color:{{ $item->textcolor ?? '' }}">{{ $item->price ?? '' }}</span></span>
                            <p>{{ $item->validity ?? '' }}</p>
                            <form action="{{ url("purchasepackage") }}" method="Post">
                                @csrf
                                <div class="text-center mt-4">
                                    <input type="hidden" name="packagid" value="{{ $item->id ?? "" }}">
                                    <input type="hidden" name="packageprice" value="{{ $item->price ?? "" }}">
                                        <input type="hidden" name="packagename" value="{{ $item->name ?? "" }}">
                                        <input type="hidden" name="userid" value="{{ Session::get('agetid') ?? '' }}">
                                    <button type="submit" class=" btn-block" style="background:{{ $item->textcolor ?? '' }}">Buy now</button>
                                </div>
                            </form>
                            <ul class="list-group list-user user-lists">
                                @php
                                $attributes = DB::table('attributes')->where('packageid',$item->id)->get();
                                @endphp

                                @if($attributes->count()> 0)
                                @foreach($attributes as $items1)
                                @php $j = 1; @endphp
                                <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>{{ $items1->charge ?? '' }} : ₹{{ $items1->price ?? '' }} </li>
                                @php $j++; @endphp
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @php $i++ @endphp
            @endforeach
            @endif


        </div>
