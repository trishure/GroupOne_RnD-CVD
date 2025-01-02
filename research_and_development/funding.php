<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funding</title>
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
        .funding-section {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .funding-section h2 {
            margin-top: 0;
        }
        .funding-section p {
            line-height: 1.6;
        }
        .funding-list {
            margin-top: 20px;
        }
        .funding-item {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .funding-item h3 {
            margin-top: 0;
        }
        .funding-item p {
            margin: 5px 0;
        }
        .financial-details {
            margin-top: 20px;
        }
        .financial-details table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .financial-details th, .financial-details td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .financial-details th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php include 'navbars.html'; 
    $bannerTitle = "Funding";?>
    <?php include 'banner.php'; ?>

    <div class="container">
    

        <div class="funding-section">
            <h2>Our Funding Sources</h2>
            <p>We are grateful for the support from various organizations and institutions that fund our research and development projects. Below are some of our key funding sources.</p>

            <div class="funding-list">
                <div class="funding-item">
                    <h3>Funding Source 1</h3>
                    <p><strong>Amount:</strong> $500,000</p>
                    <p><strong>Description:</strong> Funding for AI research and development.</p>
                </div>
                <div class="funding-item">
                    <h3>Funding Source 2</h3>
                    <p><strong>Amount:</strong> $300,000</p>
                    <p><strong>Description:</strong> Grant for blockchain technology exploration.</p>
                </div>
                <div class="funding-item">
                    <h3>Funding Source 3</h3>
                    <p><strong>Amount:</strong> $200,000</p>
                    <p><strong>Description:</strong> Support for data analysis and machine learning projects.</p>
                </div>
            </div>
        </div>

        <div class="funding-section financial-details">
            <h2>Financial Details</h2>
            <p>Below are the financial details of our project, including income and expenses.</p>
            <table>
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Income</td>
                        <td>$1,000,000</td>
                        <td>Total funding received from various sources.</td>
                    </tr>
                    <tr>
                        <td>Expenses</td>
                        <td>$600,000</td>
                        <td>Research and development costs.</td>
                    </tr>
                    <tr>
                        <td>Expenses</td>
                        <td>$200,000</td>
                        <td>Operational costs.</td>
                    </tr>
                    <tr>
                        <td>Expenses</td>
                        <td>$100,000</td>
                        <td>Marketing and outreach.</td>
                    </tr>
                    <tr>
                        <td>Net Balance</td>
                        <td>$100,000</td>
                        <td>Remaining funds for future projects.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>