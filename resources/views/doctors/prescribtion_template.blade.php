<!DOCTYPE html>
<!-- saved from url=(0030)http://ims.iitds.win/dashboard -->
<html lang="en" style="overflow-y: hidden;"><head>
<style type="text/css">

        .topleft {
            position: absolute;
            top: 18px;
            left: 16px;
            font-size: 18px;
            margin-top: 20px
        }

        .topright {
            position: absolute;
            top: 8px;
            left: 490px
            right: 100px;
            font-size: 18px;

        }

        .center {
            position: absolute;
            left: 16px;
            right: 16px;
            top: 150px;
            width: 100%;
            text-align: left;
            font-size: 18px;

        }
        </style>


</head>

<body>
  <div>
    
        <div class="topleft"><IMG style="width: 100px;height:100px;vertical-align: middle" SRC="./logo.png"><b style="width: 100px;margin-left: 30px;font-size: 30px">SUST Medical Center</b>
        </div>
        <div class="topright"><p style="font-size: 18px">Prescribed By,<br /><br /><b style="font-size: 25px">{{ $doctor->name }}</b><br />{{ $doctor->designation }}</p>
        </div>
        <div class="center">
        <hr>
        <font>Patient Name : <u>{{ $student->name }}</u></font> <font style="margin-left: 10px">Age : <u>{{ $request->age }}</u></font>

        @if($request->weight !='') 
        <font style="margin-left: 10px">Weight : <u>{{ $request->weight }}kg</u></font>
        @endif

        @if($request->height != '')
          <font style="margin-left: 10px">height : <u>{{$request->height}}``</u></font>
        @endif  
        <br>
        @if($request->description != '')
        <h3>Description</h3>
        <font>{!! nl2br($request->description) !!}</font>
        @endif


        @if($request->test !='')
        <h3>Tests</h3>
        <font>{!! nl2br($request->test) !!}</font>
        @endif

        @if($request->medications !='')
        <h3>Medications</h3>
        <br />
        <b>{!! $request->medications !!}</b>
        @endif
        </div>


        </div>
</body>
</html>