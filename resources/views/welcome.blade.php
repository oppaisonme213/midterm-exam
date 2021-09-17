<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MIDTERM EXAM</title>
  <link rel="stylesheet" href="css/style.css">

  <script src="{{ asset('js/app.js') }}" defer></script>
   
   
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">
  
    <div class="header border border-dark bg-opacity-tan p-5 mb-5 mx-4">
      <h1 class="text-center">AccuWeather</h1>


    </div>
    <div class="content border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="user-input text-center bg-opacity-secondary p-3">
        <form action="/" method="get">
          @csrf
          <div class="row m-2">
            <div class="col-sm-6"><label for="value1">City</label></div>
            <div class="col-sm-6"><label for="value1">Language</label></div>
          </div>
          <div class="row m-2">
            <div class="col-sm-6"><input type="text" name="q" id="" placeholder="Input City" value="Manila"></div>
            <div class="col-sm-6"><input type="text" name="language" id="" placeholder="en-us" value="en-us"></div>
          </div>
    
          <button type="submit" class="mt-3 btn btn-secondary">Search</button>
        </form>
      </div>
    </div>

    <div class="border border-dark bg-opacity-tan p-5 my-5 mx-4">
      <div class="results text-center bg-opacity-secondary p-3">
        <div class="row">
          <div class="col-sm-12"><h3>Results</h3></div>
        </div>
        <div class="row border-dark m-4">
          @isset($data)
          
          <div class="col-3"><h4>Country</h4></div>
          <div class="col-9">
            {{print_r($data[0]["Country"]["LocalizedName"])}}
          </div>
          <div class="col-3"><h4>Continent</h4></div>
          <div class="col-9">
            {{print_r($data[0]["TimeZone"]["Name"])}}
          </div>
          <div class="col-3"><h4>Region</h4></div>
          <div class="col-9">
            {{print_r($data[0]["AdministrativeArea"]["LocalizedName"])}}
          </div>
          <div class="col-3"><h4>Gmt Offset</h4></div>
          <div class="col-9">
            {{print_r($data[0]["TimeZone"]["GmtOffset"])}}
          </div>
         
         

          @endisset
        </div>
      </div>
    </div>
  </div>
</body>
</html>