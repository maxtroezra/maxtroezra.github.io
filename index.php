<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jual Beli Film</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
    }
    .film-list {
      list-style-type: none;
      padding: 0;
    }
    .film-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .film-item img {
      width: 150px;
      margin-right: 20px;
    }
    .film-item h2 {
      margin: 0;
    }
    .film-item p {
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Jual Beli Film</h1>
    <ul class="film-list">
      <li class="film-item">
        <img src="film1.jpg" alt="Film 1">
        <div>
          <h2>Film 1</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p>Price: $10</p>
          <button>Add to Cart</button>
        </div>
      </li>
      <li class="film-item">
        <img src="film2.jpg" alt="Film 2">
        <div>
          <h2>Film 2</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p>Price: $15</p>
          <button>Add to Cart</button>
        </div>
      </li>
      <li class="film-item">
        <img src="film3.jpg" alt="Film 3">
        <div>
          <h2>Film 3</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p>Price: $12</p>
          <button>Add to Cart</button>
        </div>
      </li>
    </ul>
  </div>
</body>
</html>
