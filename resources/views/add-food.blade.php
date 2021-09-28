<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
    .form-control{
        width:30% !important;
        margin-left: 20px;

    }
</style>
</head>
<body>
    <h1>Add food to your menu</h1>
    <form method="POST" action="{{route('add-new-food')}}">
      @csrf
        <div class="mb-3">
          <label for="Food name" class="form-label">Food Name</label>
          <input type="text" class="form-control" name="food_name" id="food_name">
        </div>
        <div class="mb-3">
            <label for="Food quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" name="quantity" id="food_quantity">
          </div>
          <div class="mb-3">
            <label for="Food details" class="form-label">Food Details</label>
            <input type="text" class="form-control" name="food_details" id="food_details">
          </div>
          <div class="mb-3">
            <label for="Food status" class="form-label">Food Status</label>
            <input type="text" class="form-control" name="food_status" id="food_status">
          </div>
          <div class="mb-3">
            <label for="Food pricw" class="form-label">Food Price</label>
            <input type="text" class="form-control" name="food_price" id="food_price">
          </div>
          <div class="mb-3">
            
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{$data->id}}" hidden>
          </div>
          
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>