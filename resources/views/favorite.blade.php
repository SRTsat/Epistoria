<html>

<head>
    <title>
        Favorite
    </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #2C2C38;
            color: #FFFFFF;
        }

        .container {
            padding: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .header i {
            font-size: 24px;
            cursor: pointer;
        }

        .header h1 {
            margin: 0 auto;
            font-size: 32px;
            font-weight: bold;
        }

        .card {
            background-color: #FFFFFF;
            color: #000000;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 45%;
            margin: 10px;
        }

        .card img {
            border-radius: 10px;
            width: 100px;
            height: 150px;
            margin-right: 20px;
        }

        .card-content {
            display: flex;
            flex-direction: column;
        }

        .card-content h2 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        .card-content p {
            margin: 5px 0;
        }

        .card-content .rating {
            display: flex;
            align-items: center;
        }

        .card-content .rating i {
            color: #FFD700;
            margin-right: 5px;
        }

        .card-content .description {
            color: #888888;
        }

        .card-content button {
            background-color: #FFFFFF;
            border: 1px solid #000000;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            align-self: flex-start;
        }

        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card.selected {
            border: 2px solid #00AEEF;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-arrow-left">
            </i>
            <h1>
                Favorite
            </h1>
        </div>
        <div class="cards-container">
            <div class="card">
                <img alt="Book cover of Harry Potter and the Deathly Hallows" height="150" src="Harry_potter_deathly_hallows_US.jpg" width="100" />
                <div class="card-content">
                    <h2>
                        Deathly Hallows
                    </h2>
                    <p>
                        123 Reads
                    </p>
                    <div class="rating">
                        <i class="fas fa-star">
                        </i>
                        <p>
                            4.0
                        </p>
                    </div>
                    <p class="description">
                        Description
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendu......
                    </p>
                    <a href="index.blade.php" class="button">Read</a>>
                </div>
            </div>
            <div class="card selected">
                <img alt="Book cover of Harry Potter and the Deathly Hallows" height="150" src="Harry_potter_deathly_hallows_US.jpg" width="100" />
                <div class="card-content">
                    <h2>
                        Deathly Hallows
                    </h2>
                    <p>
                        123 Reads
                    </p>
                    <div class="rating">
                        <i class="fas fa-star">
                        </i>
                        <p>
                            4.0
                        </p>
                    </div>
                    <p class="description">
                        Description
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendu......
                    </p>
                    <a href="index.blade.php" class="button">Read</a>>
                </div>
            </div>
            <div class="card">
                <img alt="Book cover of Harry Potter and the Deathly Hallows" height="150" src="Harry_potter_deathly_hallows_US.jpg" width="100" />
                <div class="card-content">
                    <h2>
                        Deathly Hallows
                    </h2>
                    <p>
                        123 Reads
                    </p>
                    <div class="rating">
                        <i class="fas fa-star">
                        </i>
                        <p>
                            4.0
                        </p>
                    </div>
                    <p class="description">
                        Description
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendu......
                    </p>
                    <a href="index.blade.php" class="button">Read</a>>
                </div>
            </div>
            <div class="card">
                <img alt="Book cover of Harry Potter and the Deathly Hallows" height="150" src="Harry_potter_deathly_hallows_US.jpg" width="100" />
                <div class="card-content">
                    <h2>
                        Deathly Hallows
                    </h2>
                    <p>
                        123 Reads
                    </p>
                    <div class="rating">
                        <i class="fas fa-star">
                        </i>
                        <p>
                            4.0
                        </p>
                    </div>
                    <p class="description">
                        Description
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendu......
                    </p>
                    <a href="index.blade.php" class="button">Read</a>>
                </div>
            </div>
        </div>
    </div>
</body>

</html>