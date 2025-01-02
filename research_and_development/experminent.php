<?php include 'navbars.html';
$bannerTitle = "Experiment"; ?>

<style>
.container {
            display: flex;
        }

        .sidebar {
            position: fixed;
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 225px;
            background-color: #dcdcdc;
            height: 100vh; 
            text-align: center;
            overflow-y: auto; 
        }

        .sidebar li {
            display: block;
        }

        .sidebar li a {
            display: block;
            color: #120707;
            padding: 16px 32px;
            text-decoration: none;
            text-align: left;
        }

        .sidebar li a:hover, .active {
            background-color: #04AA6D;
        }
        .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
        }
        .main-content {
            margin-left: 230px; 
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 20px;
            background-color: #dcdcdc;
        }

        .searchbar {
            text-align: center;
            margin: 20px 0;
        }

        .searchTerm {
            padding: 10px;
            width: 300px;
        }

        .searchButton {
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        .body-container {
            display: grid
;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-left: 104px;
    padding: 10px;

        }

        .project-card {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .project-card h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .project-card p {
            margin: 5px 0;
            color: #555;
        }

        .view-details {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .view-details:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php include 'banner.php'; ?>


        <div class="body-container">
            <div class="project-card">
                <h2>Project Phoenix</h2>
                <p>An innovative approach to renewable energy solutions, focusing on sustainable solar technology.</p>
                <p><strong>Project Leads:</strong> Emily Hart, John Smith</p>
                <p><strong>Status:</strong> In Progress</p>
                <a href="#" class="view-details">View More Details</a>
            </div>
            <div class="project-card">
                <h2>AquaTech</h2>
                <p>Developing advanced filtration systems to provide clean water in remote areas.</p>
                <p><strong>Project Leads:</strong> Alice Wong, Leo Turner</p>
                <p><strong>Status:</strong> Completed</p>
                <a href="#" class="view-details">View More Details</a>
            </div>
            <div class="project-card">
                <h2>CyberShield</h2>
                <p>Enhancing cybersecurity measures through AI-driven solutions to prevent data breaches.</p>
                <p><strong>Project Leads:</strong> Sophie Green, Mark Brown</p>
                <p><strong>Status:</strong> In Development</p>
                <a href="#" class="view-details">View More Details</a>
            </div>
            <div class="project-card">
                <h2>EcoFarm</h2>
                <p>Promoting sustainable farming practices to enhance food security and environmental health.</p>
                <p><strong>Project Leads:</strong> John Doe, Jane Smith</p>
                <p><strong>Status:</strong> In Progress</p>
                <a href="#" class="view-details">View More Details</a>
            </div>
            <div class="project-card">
                <h2>HealthTrack</h2>
                <p>Developing a health monitoring system to track patient data and improve healthcare delivery.</p>
                <p><strong>Project Leads:</strong> Michael Brown, Sarah Johnson</p>
                <p><strong>Status:</strong> Completed</p>
                <a href="#" class="view-details">View More Details</a>
            </div>
            <div class="project-card">
                <h2>SmartCity</h2>
                <p>Implementing smart technologies to improve urban living and reduce environmental impact.</p>
                <p><strong>Project Leads:</strong> David Lee, Anna White</p>
                <p><strong>Status:</strong> In Development</p>
                <a href="#" class="view-details">View More Details</a>
            </div>
        </div>
    

