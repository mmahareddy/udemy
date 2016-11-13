
<!doctype html>
<html>
<head>
    <title>Weather Scraper</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link  rel="stylesheet" type="text/css" href="./style.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="jquery-3.1.1.min.js" ></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1 id="weatherTitle">The Weather Scraper</h1>
      </div>
    </div>

    <div class="row">
      <form>
        <div class="col-md-6 col-md-offset-3">
    		  <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" name="city" id="city" placeholder="Enter City to get Forecast" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button" id="enter">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
      </form>
	</div>
<div class="row">
  <div class="alert alert-info col-md-6 col-md-offset-3"  id="displayWeather">
  Weather message will be displayed here ....
</div>
</div>

</div>

<script type="text/javascript" src="./script.js" ></script>

</body>
</html>
