<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaboration</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 90%;
    padding: 10px;
    margin-left: 109px;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .collaboration-section {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .collaboration-section h2 {
            margin-top: 0;
        }
        .collaboration-section p {
            line-height: 1.6;
        }
        .collaboration-list {
            margin-top: 20px;
        }
        .collaboration-list h3 {
            margin-top: 0;
        }
        .collaboration-item {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .supporting-organizations {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .organization {
            text-align: center;
            width: 150px;
        }
        .organization img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include 'navbars.html';
    $bannerTitle = "Collaboration"; ?>

    <?php include 'banner.php'; ?>
    <div class="container">
      

        <div class="collaboration-section collaboration-list">
            <h2>Current Collaborations</h2>
            <div class="collaboration-item design-card">
            
                <h3 class="design-title">Project helooooo</h3>
                <p>Collaborating with XYZ Company on developing a new AI tool.</p>
            </div>
            
            <div class="collaboration-item">
                <h3>Project Beta</h3>
                <p>Working with ABC University on a research project about machine learning.</p>
            </div>
        </div>

        <div class="collaboration-section collaboration-list">
            <h2>Past Collaborations</h2>
            <div class="collaboration-item design-card">
                <h3 class="design-title">Project Gamma</h3>
                <p>Completed a project with DEF Corporation on blockchain technology.</p>
            </div>
            <div class="collaboration-item">
                <h3>Project Delta</h3>
                <p>Worked with GHI Institute on a study about data privacy.</p>
            </div>
        </div>

        <div class="collaboration-section">
            <h2>Supporting Organizations</h2>
            <div class="supporting-organizations">
                <div class="organization">
                    <img src="img/org1.png" alt="Organization 1">
                    <p>Organization 1</p>
                </div>
                <div class="organization">
                    <img src="img/org2.png" alt="Organization 2">
                    <p>Organization 2</p>
                </div>
                <div class="organization">
                    <img src="img/org3.png" alt="Organization 3">
                    <p>Organization 3</p>
                </div>
                <div class="organization">
                    <img src="img/org4.png" alt="Organization 4">
                    <p>Organization 4</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>