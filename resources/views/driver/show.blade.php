

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>
    <div class="container">
        <h2 class="text-center sec-t">المعلومات</h2>
        <div class="row info">
            
          
            <div class="col-md">
                <p><span> {{optional($drive->cars[0])->type}}</span> : نوع السيارة </p>
                <p><span> {{optional($drive->cars[0])->modal}}</span> : الموديل  </p>
                <p>عدد الركاب : <span> {{optional($drive->cars[0])->passenger}}</span></p>
                <p>سعر الاشتراك : <span> {{optional($drive->cars[0])->price}}</span></p>
            </div>
            <div class="col-md">
            <p>الاسم : <span> {{$drive->name}}</span></p>
                <p>الرقم القومي : <span> {{$drive->nid}}</span></p>
                <p>رقم الموبايل : <span> {{$drive->phone}}</span></p>
                <p><span> {{$drive->email}}</span> : البريد الالكتروني  </p>
                <p>العمر : <span> {{optional($drive->drivers[0])->age}}</span></p>
            </div>
            <div class="col-md">
                <img src="{{url(optional($drive->drivers[0])->image)}}" class="driver-img">
            </div>
        </div>
        <h2 class="text-center sec-t">الوثائق</h2>
        <div class="row licen">
            
            <div class="col-md">
            <img src="{{url(optional($drive->cars[0])->img1)}}" alt="" >
            </div>
            <div class="col-md">
                <img src="{{url(optional($drive->cars[0])->img2)}}" alt="" >
            </div>
            <div class="col-md">
                <img src="{{url(optional($drive->cars[0])->img3)}}" alt="" >
            </div>
            <div class="col-md">
                <img src="{{url(optional($drive->cars[0])->lc)}}" alt="" >
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>