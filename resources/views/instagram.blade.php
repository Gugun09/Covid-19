<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
    	.ig-thumbnail {
		    width: 80px;
		    height: 80px;
		    float: left;
		    overflow: hidden;
		    padding-left: 3px;
		    padding-bottom: 3px;
		    padding-top: 3px
		}
		.ig-thumbnail img {
		    width: 80px;
		}

		th{
			padding-right: 4px;
			padding-left: 4px;
		}

    </style>

    <title>Instagram</title>
  </head>
  <body>
    <section class="sosial" id="sosial">
          <div class="container">
            <div class="row pt-4 mb-4">
              <div class="col text-center">
                <h2>Sosial Media</h2>
              </div>
            </div>
              <div class="row justiy-content-center">
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-5">
                    <img src="{!! $foto !!}" width="200" class="rounded-circle img-thumbnail">
                  </div>
                  <div class="col-md-7">
                    <h2>Instagram</h2>
                    <h3 class="text-primary">{{$username}}</h3>
                    <div class="col-12">
                    	<table>
                    	<tr >
                    		<th><h6 class="text-danger">{{$count['media']}} Postingan</h6></th>
                    		<th><h6 class="text-danger">{{$count['followed_by']}} Followers</h6></th>
                    		<th><h6 class="text-danger">{{$count['follows']}} followed</h6></th>
                    	</tr>
                    	</table>
                    </div>
                    
                  </div>
                  <span>{{$bio}}</span>
                  <span><a href="{{$website}}" target="_BLANK">{{$website}}</a></span>
                </div>
                <div class="row mt-3 pb-3">
                  <div class="col">
                    @foreach($photos as $photo)
                      <div class="ig-thumbnail">
                        <img src="{{$photo}}">
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>