<!--DEV: Toon Nattawoot Khaosawang -->
<!DOCTYPE html>

<html>

    <head>
        <title>YWC18TH WEB PROGRAMMING</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container ">



            <nav class="navbar navbar-form navbar-left navbar-expand-sm navbar-light bg-light">

                <a class="navbar-brand" href="#"><img src="img/halfhalf-logo.png" style="width: 0.5em height: 0.5em"
                        class="img-fluid" alt="Responsive image"></a>


                <!-- <input class="form-control mr-sm-1 col-xl-10" type="search" placeholder="ค้นหา ชื่อ ร้านอาหาร และเครื่องดื่ม ร้านธงฟ้า ร้านค้า OTOP และสินค้าทั่วไป" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-2 col-sm-" class="anticon anticon-search" type="submit"  ><img src="images/search.png"style="width: 0.5em height: 0.5em" class="img-fluid" alt="Responsive image"></button> -->



                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-outline-secondary" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><svg width="16" height="20" viewBox="0 0 14 20"
                                fill="none" class="mr-2">
                                <path
                                    d="M7 0C3.13 0 0 3.13 0 7c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"
                                    fill="#000"></path>
                            </svg>พื้นที่ใกล้ฉัน</button>
                        <div class="dropdown-menu">
                            @foreach ($provinces as $city)
                            <a class="dropdown-item" href="#">{{ $city }}</a>
                            @endforeach
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                            <svg viewBox="64 64 896 896" focusable="false" class="" data-icon="search" width="1em"
                                height="1em" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0011.6 0l43.6-43.5a8.2 8.2 0 000-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
                                </path>
                            </svg>
                        </button>

                        <button class="btn btn-outline-secondary" name="filter" type="button">
                            <img src="img/filter.png">

                        </button>
                    </div>
                </div>









            </nav>
        </div>
        <!-- End class container navbar-->


        <div class="container-fluid" style="background-color:rgb(39, 57, 124); color: white; padding-left: 13.5%; ">
            <u><span>หน้าแรก</span></u>
            <span> &nbsp; / ค้นหา &nbsp;</span>
        </div>
        <!-- End class container menu -->

        <div class="container-fluid" style="margin-top: 50px; ">
            <h6><strong> ผลการค้นหา ร้านอาหารและเครื่องดื่ม ทั้งหมด</strong></h6>
        </div>
        <!-- End class container toppic -->

        <div class="box">
            <div class="container col-3  " style="margin-top: 50px; float: left;">

                <div class="card" style="width: 18rem; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title"><strong>ประเภทร้านค้า</strong></h5>
                        <form>
                            <input type="radio" value="ทั้งหมด" name="Shop">
                            <label for="ทั้งหมด">&nbsp; ทั้งหมด</label>
                            <br>

                            @foreach ($categories as $item)
                            <input type="radio" value="ร้านอาหารและเครื่องดื่ม" name="Shop">
                            <label for="ร้านอาหารและเครื่องดื่ม">&nbsp; {{ $item->name }}</label>
                            <br>
                            @endforeach

                        </form>


                        <br>

                        <span><strong>จังหวัด/ใกล้ฉัน</strong></span>

                        <br><br>

                        <div class="dropdown ">
                            <button class="btn btn-light dropdown-toggle " type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="width: 250px !important;">
                                <svg width="16" height="20" viewBox="0 0 14 20" fill="none" class="mr-2">
                                    <path
                                        d="M7 0C3.13 0 0 3.13 0 7c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"
                                        fill="#000"></path>
                                </svg>
                                พื้นที่ใกล้ฉัน
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($provinces as $city)
                                <a class="dropdown-item" href="#">{{ $city }}</a>
                                @endforeach
                            </div>
                        </div>



                        <br>

                        <span><strong>ราคา</strong></span>

                        <br>

                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="width: 250px !important;">
                                กรุณาเลือกราคา
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($priceRange as $price)
                                <a class="dropdown-item" href="#">{{ $price }}</a>
                                @endforeach
                            </div>
                        </div>

                        <br>

                        <span><strong>ประเภทร้านอาหารและเครื่องดื่ม</strong></span>
                        <br>
                        <form>
                            <input type="radio" value="ทั้งหมด" name="Shop">
                            <label for="ทั้งหมด">&nbsp; ทั้งหมด</label>
                            <br>
                            @foreach ($categories as $sub)
                            @if ($sub->name == 'ร้านอาหารและเครื่องดื่ม')
                            @foreach ($sub->subcategories as $cate)
                            <input type="radio" value="ทั้งหมด" name="Shop">
                            <label for="ทั้งหมด">&nbsp; {{ $cate }}</label>
                            <br>
                            @endforeach
                            @endif
                            @endforeach
                        </form>

                    </div>





                    <br>
                </div>
            </div>
        </div>
        </div>

        <!-- End class container filter -->

        <div class="container">
            <div class="card mb-5" style="max-width: auto; margin-top: 60px;">
                @foreach ($merchants as $shop)

                <div class="row no-gutters">
                    <div class="col-md-4 mb-4">
                        <img src="{{ $shop->coverImageId }}" class="card-img thumb-nail" alt="..."
                            style="height: 300px; width: 300px" class="img-fluid" alt="Responsive image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $shop->shopNameTH }}</h5>
                            <small>{{ $shop->subcategoryName }} | {{ $shop->addressProvinceName }} |
                                {{ $shop->addressDistrictName }}</small>
                            <div class=" row">
                                <hr class="w-100">
                            </div>
                            <p class="card-text"> </p>
                            @foreach ($shop->recommendedItems as $recommend)
                            <span>{{ $recommend }}</span>
                            @endforeach



                            {{-- <span>{{ $shop->highlightText }}</span> --}}



                            <div class="col-12 mt-5">
                                @foreach ($shop->facilities as $facilities)
                                @if($facilities == "ที่จอดรถ")
                                <img src="img/park.svg" alt="" style="height: 25px; width: 25px">
                                @elseif($facilities == 'สามารถนำสัตว์เลี้ยงเข้าได้')
                                <img src="img/location.svg" alt="" style="height: 25px; width: 25px">
                                @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container col-xl-2">
            <a class="btn btn-primary col-xl-8" href="#" role="button">ดูข้อมูลเพิ่มเติม</a>

        </div>

        <br>
        <br>
        <br>
        <style>
            @media only screen and (max-width: 600px) {
                .box {
                    display: none;
                }


            }

            body {
                background-image: url('img/result-bg.png');
                background-repeat: no-repeat;
            }

        </style>

    </body>

</html>
