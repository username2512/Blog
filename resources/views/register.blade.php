@extends('head')
@section('content')
@extends('head')
@section('content')
<body id="page-top">
  @extends('nav')
  @section('content')
  <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Login</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <Form action="{{url('register')}}" method="POST">
                          @csrf
                          
                          <div class="mb-3">
                            <label for="InputUsername1" class="text-white form-label">Email address</label>
                            <input type="username" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We’ll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="InputPassword1"  class="text-white form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                          </div>
                          <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                          </div> -->
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
  

</body>
