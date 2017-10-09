<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
      .section{
      padding-top:20px;
      }
      .list-group-item {
      padding-left: 32px;
      }
      .no-pad{
      padding: 0px;
      }
      .list-group-item:first-child, .list-group-item:last-child{
      border-radius: 0px;
      }
      .no-radius{
      border-radius: 0px;
      }
      .full-width{
      width: 100%;
      }
      .contact td,th{
      font-size: 12px;
      }
      @media (max-width: 575px) {
        html,body,p,label,span{
        font-size: 12px;
        }
        .row{
        margin: 2px;
        padding: 2px;
        }
        .container,.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto{
        padding-right: 2px;
        padding-left: 2px;
        }
        .col-xs-6{
        width: 50%;
        }
        .col-xs-12{
        width: 100%;
        }
      }
    </style>
  </head>
  <body>
    @if (Auth::guest())
    <div>
      
    </div>
    @else
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">LetSend</a>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{ url('/') }}"><span> Total SMS </span><span class="badge badge-success"> 2500</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
          </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    @endif
    {{-- End navbar --}}
    <div class="container-fluid">
      <div class="row">
        <!-- Start side menu -->
        @if (Auth::guest())
        <div>
          
        </div>
        @else
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 bg-light no-pad">
          <div class="navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarText">

              <div class="list-group full-width">
                <a href="{{ url('/sendsms') }}" class="list-group-item list-group-item-action">
                Send SMS</a>
                <a href="{{ url('/contact') }}" class="list-group-item list-group-item-action">
                Contacts</a>
                <a href="{{ url('/group') }}" class="list-group-item list-group-item-action">
                Groups</a>
                <a href="{{ url('/report') }}" class="list-group-item list-group-item-action">
                Delivery report</a>
                <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                My Account</a>
                
              </div>
            </div>
          </div>
        </div>
        @endif
        <!-- End side bar -->
        {{-- Contents --}}
        <!-- main -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 section">
          <div class="container-fluid">
            <section>
              @yield('content')
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>