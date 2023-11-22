<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Detail Category Page


    <div class="row">
        @foreach ($products as $product)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                <img src={{ $product->img_url }} class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>{{ $product->genderCategory->name }}</h4>
                    <p class="card-text">{{ $product->description }}</p>
                    <span class="card-text">{{ $product->price }}</span>
                </div>
                </div>
            </div>
        @endforeach
        
    </div>
    
</body>
</html>