<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publications</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 91%;
    margin-left: 111px;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .publication-section {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .publication-section h2 {
            margin-top: 0;
        }
        .publication-section p {
            line-height: 1.6;
        }
        .publication-list {
            margin-top: 20px;
        }
        .publication-item {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .publication-item h3 {
            margin-top: 0;
        }
        .publication-item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <?php include 'navbars.html';
    $bannerTitle = "Publication"; ?>

    <?php include 'banner.php'; ?>

    <div class="container">

        <div class="publication-section">
            <h2  >hello gurl</h2>
            <p>Here you can find our recent publications. We are committed to sharing our research and findings with the community.</p>

            <div class="publication-list">
                <div class="publication-item">
                    <h3>Publication Title 1</h3>
                    <p><strong>Authors:</strong> Author 1, Author 2, Author 3</p>
                    <p><strong>Abstract:</strong> This publication focuses on the development of new AI algorithms.</p>
                    <p><strong>Published in:</strong> Journal of AI Research, 2023</p>
                </div>
                <div class="publication-item">
                    <h3>Publication Title 2</h3>
                    <p><strong>Authors:</strong> Author 1, Author 2, Author 3</p>
                    <p><strong>Abstract:</strong> This publication explores the potential of blockchain technology.</p>
                    <p><strong>Published in:</strong> Blockchain Journal, 2023</p>
                </div>
                <div class="publication-item">
                    <h3>Publication Title 3</h3>
                    <p><strong>Authors:</strong> Author 1, Author 2, Author 3</p>
                    <p><strong>Abstract:</strong> This publication investigates new methods of data analysis.</p>
                    <p><strong>Published in:</strong> Data Science Journal, 2023</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>