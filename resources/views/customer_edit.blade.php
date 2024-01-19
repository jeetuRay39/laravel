<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h1 style="text-align:center">Signup</h1>
        <form  action="{{url('/')}}/customer/update/{{$customers->customer_id}}" method="post" >
            @csrf 



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" placeholder="enter your username" class="form-control" name="name" value="{{$customers->name}}"
                    aria-describedby="emailHelp"/>
                    <span class="text-danger"> 
                        @error('username')
                        {{$message}}
                            
                        @enderror
                    </span>

            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="enter your email" name="email" value="{{$customers->email}}"/> 
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">address</label>
                <input type="text" class="form-control" placeholder="enter your email" name="address" value="{{$customers->address}}"/>
                <span class="text-danger">
                    @error('address')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">state</label>
                <input type="text" class="form-control" placeholder="enter your email" name="state" value="{{$customers->state}}"/>
                <span class="text-danger">
                    @error('state')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">city</label>
                <input type="text" class="form-control" placeholder="enter your email" name="city" value="{{$customers->city}}"/>  
                <span class="text-danger">
                    @error('city')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="enter your password" name="password">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                        
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                <input type="password_confirmation" class="form-control" placeholder="enter your password" name="password_confirmation">
                <span class="text-danger">
                    @error('confirm_password') 
                    {{$message}}
                        
                    @enderror
                </span>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>