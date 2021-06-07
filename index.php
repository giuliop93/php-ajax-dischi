<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div id="app">
    <div>
      <ul>
        <li v-for="album in albums">
          <h3>{{ album.title }}</h3> {{ album.author }} <br> {{ album.year }} <br> <div class="box"><img :src="album.album"></div>
        </li>
      </ul>
    </div>
  </div>
  



  </div>

  <script src="app.js"></script>


</body>

</html>