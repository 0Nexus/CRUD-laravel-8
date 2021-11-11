<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>make command</title>
</head>
<body>
    <div class="card">
        <div class="card-header">what do you need ?</div>
        <div class="card-body">
            <form action="{{ url('/layout/add') }}" method="POST" class="table-responsive">
    
                @csrf

            <label>Name</label>
            <input type="text" name="name" id="name" class="form-control1"></br>
            <label>city</label>
            <input type="text" name="city" id="city" class="form-control1"></br>
            <label>product</label>
            <select name="product" id="product">
                <option value="boulon">Boulon</option>
                <option value="marteau">Marteau</option>
                <option value="gloue">gloue</option>
                <option value="brique">brique</option>
                </select>
            <label>quantite</label>
            <input type="number" name="qte" id="qte" class="form-control1"></br>
            <label>delevery date</label>
            <input type="date" name="date" id="date" class="form-control1"></br>
            <input type="submit" value="add" class="btn btn-success"></br>
                
            </form>
        </div>
    </div>
</body>
</html>