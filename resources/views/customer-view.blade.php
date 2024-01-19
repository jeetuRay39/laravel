<!doctype html>
<html lang="en">

<head>
  <title>Customers</title>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="table-responsive">
        <a href="/customer">

          <button type="button"  class="btn btn-primary">Add</button>
  
    </a>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">address</th>
                    <th scope="col">state</th>
                    <th scope="col">city</th>
                    <th scope="col">operations</th>


                    

                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    
                

                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->address}}</td>

                    <td>{{$customer->state}}</td>
                    <td>{{$customer->city}}</td>
                    <td><a href="/customer/edit/{{$customer->customer_id}}">

                        <button type="button"  class="btn btn-outline-success">Edit</button>
                
                  </a>
                
                  <a href="/customer/delete/{{$customer->customer_id}}">

                    <button type="button"  class="btn btn-danger">Delete</button>
            
              </a>
            </td>

                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    

</body>

</html>