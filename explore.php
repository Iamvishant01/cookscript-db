<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@500;700&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Recipes</title>
</head>
<body>
    <style>
        /* Inner CSS for Explore Page */
        body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }

    .header {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 10px 0;
    }

    .header h1 {
      margin: 0;
      font-family: 'Lexend', sans-serif;
    }

    .post-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 20px;
    }

    .post {
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 300px;
      margin: 10px;
      overflow: hidden;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .post:hover {
      transform: scale(1.05);
    }

    .post-content {
      padding: 20px;
    }

    .post-content h2 {
      margin: 0;
      font-size: 1.5em;
      font-family: 'Lexend', sans-serif;
    }

    .post-content p {
      color: #555;
      font-family: 'Poppins', sans-serif;
      font-size: 1em;
    }

    .post-content a {
      display: inline-block;
      margin-top: 10px;
      text-decoration: none;
      color: #2d87f0;
      font-weight: bold;
    }

    .post-content a:hover {
      text-decoration: underline;
    }
    .button-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }
  </style>
    </style>
    <div class="header">
        <h1>Explore Recipes</h1>
    </div>

    <div class="post-container">
        <?php include('retrieve_posts.php'); ?>
    </div>
    <div class="button-container">
        <a href="./index.html">
            <button type="button" class="btn btn-primary">🏠 Back to Home</button>
        </a>
    </div>
</body>
</html>