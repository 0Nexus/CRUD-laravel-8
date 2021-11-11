<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>liste des commandes</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Commandes
                    </div>
                    @if (Session::has('delete'))
                        <div class="alert alert-danger">
                            {{ Session::get('delete') }}
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('edit'))
                        <div class="alert alert-info">
                            {{ Session::get('edit') }}
                        </div>
                    @endif
                    <div class="card-body">

                        <a href="{{ url('/layout/add') }}" class="btn btn-sucess btn-sm" title="Add new conact"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add</button>
                            <i class="fa fa-plus" aria-hidden="true"></i> 
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Numero</th><th>Nom</th><th>Adress</th><th>Produit</th><th>Quantité</th><th>Date</th><th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                    <tr>
                                        <td>{{ $item->id_product }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->product }}</td>
                                        <td>{{ $item->qte }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>
                                            <a href="{{ url('/layout/edit/'.$item->id_product)  }}" title="Edit facture"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                        </td>
                                        <td>
                                            <form action="{{route('delete_product', $item->id_product)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure !');" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Delete</button>
                                            </form>
                                        </td>
                                    </tr>


                                        
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</body>
</html>