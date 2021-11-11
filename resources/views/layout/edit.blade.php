<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editer la commande</title>
</head>
<body>
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">
            
            <form action="{{ url('/layout/edit/'.$posts->id_product) }}" method="POST">
              @csrf
              @method("PATCH")
              <input type="hidden" name="id_product" id="id_product" value="{{ $posts->id_product }}"  />
              <label>Name</label></br>
              <input type="text" name="name" id="name" value="{{ $posts->name }}" class="form-control"></br>
              <label>city</label></br>
              <input type="text" name="city" id="city" value="{{ $posts->city }}" class="form-control"></br>
              <label>product</label>
            <select name="product" id="product">
                <option value="boulon">Boulon</option>
                <option value="marteau">Marteau</option>
                <option value="gloue">gloue</option>
                <option value="brique">brique</option>
                </select>
              <label>quantite</label></br>
              <input type="number" name="qte" id="qte" value="{{ $posts->qte }}" class="form-control">
              </br>
              <input type="date" name="date" id="date" value="{{ $posts->date }}"></br>
              <input type="submit" value="Update" class="btn btn-success"></br>
          </form>
        
        </div>
      </div>
</body>
</html>